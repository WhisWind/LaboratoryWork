<?php
class CorrectionText {
    public static function task5($text): string
    {
        $text = preg_replace('/(?<=\s)-(?=\s)/', '&ndash;', $text);
        return preg_replace('/(?<=\s)--(?=\s)/', '&mdash;', $text);

    }

    public static function task7($text){
        $text = preg_replace('/!{4,}/', '!!!', $text);
        return preg_replace('/\.{3,}/', '&hellip;', $text);
    }

    public static function task12($text):array{
        // Регулярное выражение для поиска таблиц и первой ячейки в каждой из них
        $tablePattern = '/<table.*?>.*?<tr.*?>.*?<td.*?>(.*?)<\/td>/si';
        $index = '';  // Указатель таблиц
        $tableNumber = 1; // Счётчик таблиц

        // Функция для добавления ссылки на каждую таблицу
        $text = preg_replace_callback($tablePattern, function($matches) use (&$index, &$tableNumber) {
            // Получаем содержимое первой ячейки
            $firstCellContent = strip_tags($matches[1]);
            // Добавляем таблице уникальный ID
            $tableId = "table" . $tableNumber; // Изменил на table1, table2 и т.д.
            // Создаём запись для указателя таблиц в требуемом формате
            $index .= "<a href=\"#$tableId\">Таблица №$tableNumber</a> - $firstCellContent<br>";
            // Увеличиваем счётчик таблиц
            $tableNumber++;
            // Добавляем ID к тегу <table>
            return preg_replace('/<table/', "<table id=\"$tableId\"", $matches[0]);
        }, $text);

        // Возвращаем указатель таблиц и изменённый текст с ID у таблиц
        return [$index, $text];

    }

    public static function task18($html){

        $html = mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8');
        // Загружаем HTML в DOMDocument

        //@$dom->loadHTML("<div>{$html}</div>", LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD); // загружаем HTML

        $dom = new DOMDocument();
        @$dom->loadHTML($html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD); // Загружаем HTML
        $xpath = new DOMXPath($dom);

        // Получаем все <p> теги
        $paragraphs = $xpath->query('//p');

        foreach ($paragraphs as $paragraph) {
            $text = $paragraph->textContent; // Получаем текст параграфа

            // Создаем временный текст без длинных тире и многоточий
            $cleanText = preg_replace('/(&ndash;|&mdash;|&#8230;|—|\.\.\.)/u', ' ', $text);
            $cleanText = strtolower(trim($cleanText)); // Убираем лишние пробелы и переводим в нижний регистр

            // Разделяем текст на слова, исключая пустые
            $words = preg_split('/\s+/', $cleanText);
            $wordCount = array_count_values($words); // Подсчитываем количество вхождений каждого слова

            // Ищем слова, которые повторяются 3 раза или более
            $repeatedWords = array_filter($wordCount, function($count) {
                return $count >= 3; // Фильтруем слова по количеству
            });

            // Если есть повторы, создаем новый текст с подсветкой
            if (!empty($repeatedWords)) {
                // Очищаем содержимое <p> тега
                $paragraph->nodeValue = '';

                // Разделяем текст на отдельные слова, сохраняя пробелы
                $textWords = preg_split('/(\s+)/u', $text); // Сохраняем пробелы для правильного отображения

                foreach ($textWords as $word) {
                    $cleanWord = trim($word);

                    // Проверяем, нужно ли подсвечивать слово
                    if (isset($repeatedWords[strtolower($cleanWord)]) && !preg_match('/(&ndash;|&mdash;|&#8230;|—|\.\.\.)/u', $cleanWord)) {
                        $span = $dom->createElement('span', htmlspecialchars($cleanWord)); // Экранируем HTML
                        $span->setAttribute('style', 'background-color: yellow;');
                        $paragraph->appendChild($span);
                    } else {
                        // Добавляем текстовый узел
                        $paragraph->appendChild($dom->createTextNode($cleanWord));
                    }

                    // Добавляем пробел после каждого слова, если слово не пустое
                    if ($cleanWord !== '') {
                        $paragraph->appendChild($dom->createTextNode(' '));
                    }
                }
            }
        }

        return $dom->saveHTML(); // Возвращаем обновленный HTML
    }
}
?>
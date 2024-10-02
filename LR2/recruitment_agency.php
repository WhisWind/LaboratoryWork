<?php
require_once(__DIR__  . "/logic.php");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light main__nav ">
            <div class="container-fluid">
                <div class="row d-flex align-items-center">
                    <div class="col-2">
                        <ln class="nav-items">
                            <a class="navbar-brand" href="#">
                                <img src="./font/svgimage/logo.svg" class="img-fluid ms-3" alt="Responsive image">
                            </a>
                        </ln>
                    </div>
                    <div class="col-7">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Подбор персонала</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">IT-подбор</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Кейсы</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Цены</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Вакансии</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Клиенты</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Блог</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Контакты</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3 d-flex align-items-center">
                        <ln class="nav-items hidden-on-small">
                            <a class="nav-link text-danger text-nowrap" href="#">+7 (495) 532 51 03</a>
                            <a class="nav-link text-danger d-flex align-items-center text-nowrap" href="#">
                                <img src="./font/svgimage/icons8-whatsapp.svg" width="30" class="me-2" alt="">
                                Написать
                            </a>
                        </ln>
                        <ln class="nav-items ">
                            <button type="button" class="btn bla-w-color rounded-pill hidden-on-small text-nowrap">Заказать подбор</button>
                        </ln>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section>
        <div class="container mar-bot">
            <div class="row side-margins">
                <div class="col ms-5">
                    <p class="mr-n2">Подбор персонала в Москве</p>
                    <p class="h1">
                        <span class="text-primary">mmb</span>
                        usiness
                    </p>
                    <p class="h3">- профессиональный подбор персонала</p>
                    <p class="h4">В основе нашего успеха - команда экспертов, высокая бизнес-этика и индивидуальный подход к решению задач клиента</p>
                    <p class="mt-5">
                        <button type="button"  data-toggle="modal" data-target="#sendMessage" class="btn bla-blu-color btn-arrow-primary">Заказать подбор</button>
                    </p>
                </div>
                <div class="col ">
                    <img src="./font/svgimage/header-puzzle.svg" class="my-img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mar-bot ">
            <div class="row side-margins">
                <div class="col ms-5">
                    <video height="320" controls="controls" poster="font/pngimage/1675163520287.png">
                        <source src="./font/video/Y2mate.mx.mp4" type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
                    </video>
                </div>
                <div class="col text-end me-5">
                    <p class="h4 mt-5 mb-3 ">Показываем первых кандидатов через 2-3 дня</p>
                    <p class="h4 mb-3">Закрываем сложные и горящие вакансии</p>
                    <p class="h4 mb-5">Даем гарантию на каждого сотрудника</p>
                    <p class="mt-5">
                        <button type="button"  data-toggle="modal" data-target="#sendMessage" class="btn bla-blu-color btn-arrow-primary ">Заказать подбор</button>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mar-bot text-center">
            <div class="row side-margins">
                <div class="col-limit center-position justify-content-center align-items-center">
                    <img src="./font/svgimage/ring-circle.svg" class="my-img-fluid" alt="Responsive image">
                    <div class="h1 mb-5">Услуги для бизнеса</div>
                    <p class="h4 mb-3">Миссия и ценности компании – помогать бизнесу развиваться и расти с помощью профессионального подбора персонала</p>
                    <hr class="new-hr branch-line ">
                </div>
            </div>
            <div class="circle-service ms-5 me-5">
                <div class="row side-margins">
                    <div class="col-2 d-flex justify-content-center align-items-center mt-6">
                        <img src="./font/svgimage/cirle-main-left.svg" class="my-img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-8">
                        <div class="row foreground">
                            <div class="col-6 mt-5  foreground">
                                <div class="infirmation-window">
                                    <figure>
                                        <img src="./font/svgimage/sb-left.svg" class="img-fluid" alt="Responsive image">
                                        <figcaption>416</figcaption>
                                    </figure>
                                    <p>
                                        За последние 3 года
                                        <br>
                                        мы закрыли
                                    </p>
                                    <p>416 вакансий</p>
                                    <hr class="new-hr branch-line ">
                                </div>
                            </div>
                            <div class="col-6 mt-6 foreground ">
                                <div class="infirmation-window ">
                                    <figure>
                                        <img src="./font/svgimage/sb-right.svg" class="img-fluid" alt="Responsive image">
                                        <figcaption>173</figcaption>
                                    </figure>
                                    <p>
                                        В 2023 году мы подобрали
                                        <br>
                                        для наших клиентов
                                    </p>
                                    <p>173 сотрудника</p>
                                    <hr class="new-hr branch-line">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center mt-6 ">
                        <img src="./font/svgimage/cirle-main-right.svg" class="my-img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row side-margins">
                <div class="col-limit center-position justify-content-center align-items-center">
                    <img src="./font/svgimage/ring-circle.svg" class="my-img-fluid" alt="Responsive image">
                    <div class="h1 mb-5">Направления работы</div>
                    <hr class="new-hr branch-line ">
                </div>
            </div>
            <div class="row side-margins">
                <div class="col d-flex justify-content-center align-items-center">
                    <div class="slide-panel">
                        <ul class="nav nav-tabs no-line more-padding" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="Staff-recruitment-tab" data-bs-toggle="tab" data-bs-target="#Staff-recruitment"
                                        type="button" role="tab" aria-controls="personal" aria-selected="true">
                                    Staff recruitment</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Management-selection-tab" data-bs-toggle="tab" data-bs-target="#Management-selection"
                                        type="button" role="tab" aria-controls="employment" aria-selected="false">
                                    Management selection</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Executive-search-tab" data-bs-toggle="tab" data-bs-target="#Executive-search"
                                        type="button" role="tab" aria-controls="employment" aria-selected="false">
                                    Executive search</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="IT-recruitment-tab" data-bs-toggle="tab" data-bs-target="#IT-recruitment"
                                        type="button" role="tab" aria-controls="employment" aria-selected="false">
                                    IT recruitment</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active p-md-5 mb-5" id="Staff-recruitment" role="tabpanel" aria-labelledby="Staff-recruitment-tab">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-5">
                                            <figure>
                                                <img src="./font/svgimage/slider-tab-1.svg" class="img-fluid" alt="Responsive image">
                                            </figure>
                                        </div>
                                        <div class="col-7">
                                            <div class="h2 mb-4">Staff recruitment</div>
                                            <p>
                                                Мы предоставляем услуги по регулярному рекрутингу для закрытия вакансий специалистов и менеджеров среднего звена. Работа любой компании напрямую зависит от персонала.
                                            </p>
                                            <p>
                                                Мы используем при поиске кандидатов современные методы – это и социальные сети, и мессенджеры, и профильные платформы для поиска необходимых кандидатов.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade p-md-5 mb-5" id="Management-selection" role="tabpanel" aria-labelledby="Management-selection-tab">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-5">
                                            <figure>
                                                <img src="./font/svgimage/slider-tab-2.svg" class="img-fluid" alt="Responsive image">
                                            </figure>
                                        </div>
                                        <div class="col-7">
                                            <div class="h2 mb-4">Management selection</div>
                                            <p>
                                                Management selection - поиск и подбор руководителей среднего звена, начальники отделов, департаментов, управлений, исходя из организационной структуры компании.
                                            </p>
                                            <p>
                                                Мы закрываем вакансии данного уровня, используя рекомендательный рекрутинг, ""тесные"" связи в социальных сетях, собственную базу кандидатов.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade p-md-5 mb-5" id="Executive-search" role="tabpanel" aria-labelledby="Executive-search-tab">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-5">
                                            <figure>
                                                <img src="./font/svgimage/slider-tab-3.svg" class="img-fluid" alt="Responsive image">
                                            </figure>
                                        </div>
                                        <div class="col-7">
                                            <div class="h2 mb-4">Executive search</div>
                                            <p>
                                                Executive search - поиск руководителей высшего звена, топов.
                                            </p>
                                            <p>
                                                Мы сделаем анализ рынка, подготовим long list профильных кандидатов, отработаем short list финалистов и поможем определиться с выходом лучшего сотрудника для Вас.
                                            </p>
                                            <p>
                                                Являясь экспертами по подбору персонала, мы оперативно найдем несколько достойных кандидатов, согласно Вашему запросу и профилю.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade p-md-5 mb-5" id="IT-recruitment" role="tabpanel" aria-labelledby="IT-recruitment-tab">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-5">
                                            <figure>
                                                <img src="./font/svgimage/slider-tab-4.svg" class="img-fluid" alt="Responsive image">
                                            </figure>
                                        </div>
                                        <div class="col-7">
                                            <div class="h2 mb-4">IT recruitment</div>
                                            <p>
                                                IT recruitment - поиск и подбор ит специалистов - разработчиков, консультантов, продуктологов, тестировщиков, аналитиков
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center mb-lg-5 pb-lg-5">
                <button type="button"  data-toggle="modal" data-target="#sendMessage" class="btn bla-blu-color btn-arrow-primary">Подробнее о наших услугах</button>
            </p>
        </div>
    </section>

    <div class="main py-5">
        <div class="container text-center">
            <form  method="GET" action="<?= strtok($_SERVER['REQUEST_URI'], '?') ?>">

                <div class="mb-3">
                    <label>Фильтрация по вакансии:</label>
                    <input type="text" name="vacancy" placeholder="Введите интересующую вас вакансию" value="<?= isset($_GET['vacancy']) ? htmlspecialchars($_GET['vacancy']) : '' ?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Фильтрация по арендодателю:</label>
                    <select name="landlord" class="form-control">
                        <option value="" selected>Выберите арендодателя</option>
                        <?php if (!empty($countries)): ?>
                            <?php foreach ($countries as $row): ?>
                                <option value="<?= $row['id'] ?>" <?= isset($_GET['landlord']) && $_GET['landlord'] == $row['id'] ? 'selected' : '' ?>>
                                    <?= $row['landlord'] ?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Фильтрация по описанию:</label>
                    <textarea class="form-control" placeholder="Введите описание" name="description"><?= isset($_GET['description']) ? htmlspecialchars($_GET['description']) : '' ?></textarea>
                </div>

                <div class="mb-3">
                    <label>Фильтрация по зарплате:</label>
                    <input type="text" name="salary" placeholder="Введите размер зарплаты (форма записи: 100,000 или 100)" value="<?= isset($_GET['salary']) ? htmlspecialchars($_GET['salary']) : '' ?>" class="form-control">
                </div>



                <input type="submit" value="Применить фильтр" class="btn btn-primary">
                <a href="index.php" class="btn btn-danger">Очистить фильтр</a>
            </form>
        </div>

        <div class="container text-center mt-3">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Картинка вакансии</th>
                    <th scope="col">Название</th>
                    <th scope="col">Работодатель</th>
                    <th scope="col">Текст</th>
                    <th scope="col">Предлагаемая зарплата</th>
                </tr>
                </thead>
                <tbody>
                <?php if (!empty($results)): ?>
                    <?php foreach ($results as $row): ?>
                        <tr>
                            <th scope="row"><img src="./inc/catalog_images/<?= htmlspecialchars($row['paint_vacancie']) ?>" alt="Фото <?= htmlspecialchars($row['name']) ?>" style="max-width: 200px;"></th>
                            <td><?= htmlspecialchars($row['name']) ?></td>
                            <td><?= htmlspecialchars($row['landlord']) ?></td>
                            <td><?= htmlspecialchars($row['text']) ?></td>
                            <td><?= htmlspecialchars($row['salary']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">Нет результатов</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row mb-lg-5">
                <div class="col-lg-3 ">
                    <figure>
                        <img src="./font/svgimage/logo.svg" class="img-fluid" alt="Responsive image">
                    </figure>
                    <p class="text-color mb-5">Рекрутинговая компания</p>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-5">
                            <ul class=" no-circle">
                                <li>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Подбор персонала
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#">Подбор ТОП-менеджеров</a></li>
                                            <li><a class="dropdown-item" href="#">Подбор коммерческого директора</a></li>
                                            <li><a class="dropdown-item" href="#">Подбор бухгалтеров</a></li>
                                            <li><a class="dropdown-item" href="#">Подбор руководителей</a></li>
                                            <li><a class="dropdown-item" href="#">Подбор директоров</a></li>
                                            <li><a class="dropdown-item" href="#">Подбор маркетолога</a></li>
                                            <li><a class="dropdown-item" href="#">Подбор менеджеров по продажам</a></li>
                                            <li><a class="dropdown-item" href="#">Подбор персонала в банк</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li >
                                    <a title="IT-подбор" href="#" class="setting-li">IT-подбор</a>
                                </li>
                                <li>
                                    <a title="Цены" href="#" class="setting-li">Цены</a>
                                </li>
                                <li>
                                    <a title="Кейсы" href="#" class="setting-li">Кейсы</a>
                                </li>
                                <li>
                                    <a title="Социальная ответственность" href="#" class="setting-li">Социальная ответственность</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <ul class=" no-circle">
                                <li >
                                    <a title="Вакансии" href="#" class="setting-li magic-line">Вакансии</a>
                                </li>
                                <li >
                                    <a title="Клиенты" href="#" class="setting-li magic-line">Клиенты</a>
                                </li>
                                <li >
                                    <a title="Блог" href="#" class="setting-li magic-line">Блог</a>
                                </li>
                                <li >
                                    <a title="Кадровое агентство" href="#" class="setting-li magic-line">Кадровое агентство</a>
                                </li>
                                <li >
                                    <a title="Еxecutive search" href="#" class="setting-li magic-line">Еxecutive search</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <p class="text-color mb-4">Для связи:</p>
                            <p class="h3 mb-3 phone-link">
                                <a title="Еxecutive search" href="#" class="bla-color magic-line">+7 (495) 532 51 03</a>
                            </p>
                            <p>
                                <img src="./font/svgimage/email.svg" class="mt-n1 mr-2" alt="email">
                                <a title="info@mmbusiness.ru" href="#" class="bla-color magic-line">info@mmbusiness.ru</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <p class="text-color mb-5">Подпишитесь на наши новости:</p>
                    <div class="row">
                        <div class="col-lg-9">
                            <form action="#" class="form__subscribe">
                                <input type="text" class="form-control" aria-label="E-mail" required placeholder="E-mail">
                                <button class="btn"></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4 offset-lg-8">
                            <ul class="nav list-social mb-5 mb-lg-0">
                                <li>
                                    <a href="#">
                                        <img src="./font/svgimage/telegram.svg" alt="telegram" class="telegram">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-container">
            <div class="row">

            </div>
        </div>
    </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>
<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '../LR3/.core/user_action.php');
require_once(__DIR__ . "/logic.php");

if (empty($_SESSION['USER_ID'])){
    header('location: login.php');
}
require_once($_SERVER['DOCUMENT_ROOT'] . '../LR3/header.php');
?>

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
                    <label>Фильтрация по работодателю:</label>
                    <select name="landlord" class="form-control">
                        <option value="" selected>Выберите работодателя</option>
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
                <a href="/LR3/recruitment_agency.php" class="btn btn-danger">Очистить фильтр</a>
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

<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '../LR3/footer.php');
?>
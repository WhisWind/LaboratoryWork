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
                        <a class="navbar-brand" href="index.php">
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
                                <a class="nav-link" href="../LR6/vacancies.php">Вакансии</a>
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
                    <div class="d-flex flex-grow-1">
                        <?php
                        if (empty($_SESSION['login'])) {?>
                            <li class="nav-item flex-grow-1">
                                <a class="nav-link text-color" href="recruitment_agency.php">Секретная страница</a>
                            </li>
                            <li class="nav-item">
                            <p class="nav-link text-break mb-0 bla-color">Вы не авторизованы. <a href="login.php" class="text-color"><u>Ввести логин и пароль</u></a> или <a href="signup.php" class="text-color"><u>зарегистрироваться</u></a></p>
                            </li>
                        <?php } else{?>
                            <li class="nav-item flex-grow-1">
                                <a class="nav-link text-color" href=".core/logout.php">Выход</a>
                            </li>
                            <li class="nav-item">
                            <p class="nav-link text-break mb-0 bla-color">Вы авторизованы как: <?= htmlspecialchars($_SESSION['login'])?></p>
                            </li>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </nav>

</header>
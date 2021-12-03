<header>
    <div class="background">
        <div class="logo">
            <img src="../Photo/Logo.png" alt="Logo">
        </div>
        <div class="logo-text">
            <h1 class="text-center">Юридические услуги</h1>
        </div>
        <div class="lawyer">
            <b class="title">Адвокатское бюро &laquo;Адвокатто&raquo;</b>
        </div>
        <div class="address">
            <p><i class="fas fa-mobile-alt"></i>тел.: (095) 578 79 63</p>
            <p><i class="fas fa-mobile-alt"></i>тел.: (098) 332 21 41</p>
            <span class="contact-name">Завгородний Александр</span>
        </div>
    </div>

    <!---->
    <div class="menu-nav">
        <nav class="navbar navbar-expand-lg ">
            <button class="navbar-toggler collapsed" id="btn-toggle" type="button" data-toggle="collapse"
                    data-target="#navbar1" aria-controls="navbar1" aria-expanded="false">Меню
            </button>

            <div class="navbar-collapse collapse icon-bar" id="navbar1">
                <ul class="nav navbar navbar-nav">
                    <li class="<?php echo $page == ("/index.php") ? "active" : "" ?>"><a href="/index.php"><b>Главная</b></a>
                    </li>
                    <li class="dropdown <?php echo $page == "/services.php" || $page == "/lawyer.php" || $page == "/jurist.php" || $page == "/court.php" ? "active" : "" ?>">
                        <a class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false"><b>Услуги</b></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item first" href="/services.php">Юридические услуги</a>
                            <a class="dropdown-item" href="/lawyer.php">Услуги адвоката</a>
                            <a class="dropdown-item" href="/jurist.php">Услуги юриста</a>
                            <a class="dropdown-item" href="/court.php">Судебная практика</a>
                        </div>
                    </li>
                    <li class="dropdown <?php echo $page == "/household.php" || $page == "/treaty.php" || $page == "/debt.php" || $page == "/company.php" || $page == "/corporate.php" ? "active" : "" ?>">
                        <a class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false"><b>Юр.лица</b></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a class="dropdown-item first" href="/household.php">Хозяйственные споры</a>
                            <a class="dropdown-item" href="/treaty.php">Договорное право</a>
                            <a class="dropdown-item" href="/debt.php">Взыскание задолженности</a>
                            <a class="dropdown-item" href="/company.php">Ликвидация предприятий</a>
                            <a class="dropdown-item" href="/corporate.php">Корпоративное право</a>
                        </div>
                    </li>

                    <li class="dropdown <?php echo $page == "/banks.php" || $page == "/criminal.php" || $page == "/civil.php" ? "active" : "" ?>">
                        <a class="dropdown-toggle" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false"><b>Физ.лица</b></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                            <a class="dropdown-item first" href="/banks.php">Банковские споры</a>
                            <a class="dropdown-item" href="/criminal.php">Защита по уголовным делам</a>
                            <a class="dropdown-item" href="/civil.php">Гражданское право</a>
                        </div>
                    </li>
                    <li class=" <?php echo $page == "/contact.php" ? "active" : "" ?>"><a href="../contact.php"><b>Контакты</b></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</header>

<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselIndicators" data-slide-to="1"></li>
        <li data-target="#carouselIndicators" data-slide-to="2"></li>
        <li data-target="#carouselIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="../Photo/slide1.jpg" alt="Первый слайд">
            <div class="carousel-caption-center">
                <h3>&laquo;Своевременное обращение к адвокату - залог успешного решения Вашей проблемы&raquo;</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../Photo/slide2.jpg" alt="Второй слайд">
            <div class="carousel-caption-center">
                <h3>&laquo;Хороший адвокат любой судебный процесс обратит из воспалительного в
                    воспитательный&raquo;</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../Photo/slide3.jpg" alt="Третий слайд">
            <div class="carousel-caption-center">
                <h3>&laquo;Без хорошего адвоката любое правовое поле - минное&raquo;</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../Photo/slide4.jpg" alt="Четвёртый слайд">
            <div class="carousel-caption-center">
                <h3>&laquo;Адвокат - это юрист, способный законно защищать нас от закона&raquo;</h3>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
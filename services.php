<!DOCTYPE html>
<html lang="ru">

<?php
$title = "Об услугах";
require 'templates/head.php'; ?>

<body>
<div class="container">
    <?php require 'templates/header.php'; ?>
    <main>
        <div class="container">
            <b class="serv">Юридические услуги</b>
            <div class="row">
                <div class="col-lg-4 col-md-6 item">
                    <div class="content-services">
                        <img src="Photo/Consultation.jpg" alt="Consultation">
                        <figcaption>Консультации</figcaption>
                        <p class="quest">Вопросы:</p>
                        <ul>
                            <li>Семейного</li>
                            <li>Трудового</li>
                            <li>Жилищного</li>
                            <li>Наследственного</li>
                            <li>Уголовного</li>
                            <li>Гражданского права</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 item">
                    <div class="content-services">
                        <img src="Photo/Court.jpg" alt="Court">
                        <figcaption>Участие в суде</figcaption>
                        <p class="quest">Представление интересов:</p>
                        <ul>
                            <li>Суды общей юрисдикции</li>
                            <li>Арбитражные суды</li>
                            <li>Апелляционные суды</li>
                            <li>Кассационные суды</li>
                            <li>Европейские суды по правам человека</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 item">
                    <div class="content-services">
                        <img src="Photo/Documents.jpg" alt="Documents">
                        <figcaption>Документы</figcaption>
                        <p class="quest">Грамотное составление:</p>
                        <ul>
                            <li>Договоров</li>
                            <li>Претензий</li>
                            <li>Жалоб</li>
                            <li>Соглашений</li>
                            <li>Исковых заявлений</li>
                            <li>Процессуальных документов</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 item">
                    <div class="content-services">
                        <img src="Photo/Civil.jpg" alt="Civil">
                        <figcaption>Гражданские споры</figcaption>
                        <ul>
                            <li>Досудебное урегулирование</li>
                            <li>Представительство в суде</li>
                            <li>Представительство в гос.органах</li>
                            <li>Исполнительное производство</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 item">
                    <div class="content-services">
                        <img src="Photo/Criminal.jpg" alt="Criminal">
                        <figcaption>Уголовные дела</figcaption>
                        <ul>
                            <li>Защита подозреваемого, обвиняемого, подсудимого</li>
                            <li>Представление интересов потерпевшего</li>
                            <li>Защита прав свидетелей</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 item">
                    <div class="content-services">
                        <img src="Photo/Arbitration.jpg" alt="Arbitration">
                        <figcaption>Арбитраж</figcaption>
                        <ul>
                            <li>Взыскание дебиторской задолженности</li>
                            <li>Исполнительное производство</li>
                            <li>Представление интересов организаций</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--<div class="row">
      <div class="column">
        <div class="content-services">
          <img src="Photo/Consultation.jpg" alt="Consultation">
          <figcaption>Консультации</figcaption>
          <p class="quest">Вопросы:</p>
          <ul>
            <li>Семейного</li>
            <li>Трудового</li>
            <li>Жилищного</li>
            <li>Наследственного</li>
            <li>Уголовного</li>
            <li>Гражданского права</li>
          </ul>
        </div>
      </div>
      <div class="column">
        <div class="content-services">
          <img src="Photo/Court.jpg" alt="Court">
          <figcaption>Участие в суде</figcaption>
          <p class="quest">Представление интересов:</p>
          <ul>
            <li>Суды общей юрисдикции</li>
            <li>Арбитражные суды</li>
            <li>Апелляционные суды</li>
            <li>Кассационные суды</li>
            <li>Европейские суды <br> по правам  человека</li>
          </ul>
        </div>
      </div>
      <div class="column">
        <div class="content-services">
          <img src="Photo/Documents.jpg" alt="Documents">
          <figcaption>Документы</figcaption>
          <p class="quest">Грамотное составление:</p>
          <ul>
            <li>Договоров</li>
            <li>Претензий</li>
            <li>Жалоб</li>
            <li>Соглашений</li>
            <li>Исковых заявлений</li>
            <li>Процессуальных документов</li>
          </ul>
        </div>
      </div>

      <div class="column">
        <div class="content-services">
          <img src="Photo/Civil.jpg" alt="Civil">
          <figcaption>Гражданские споры</figcaption>
          <ul>
            <li>Досудебное урегулирование</li>
            <li>Представительство в суде</li>
            <li>Представительство в <br> гос.органах</li>
            <li>Исполнительное производство</li>
          </ul>
        </div>
      </div>

      <div class="column">
        <div class="content-services">
          <img src="Photo/Criminal.jpg" alt="Criminal">
          <figcaption>Уголовные дела</figcaption>
          <ul>
            <li>Защита подозреваемого, <br>обвиняемого, <br>подсудимого</li>
            <li>Представление интересов <br>потерпевшего</li>
            <li>Защита прав свидетелей</li>
          </ul>
        </div>
      </div>

      <div class="column">
        <div class="content-services">
          <img src="Photo/Arbitration.jpg" alt="Arbitration">
          <figcaption>Арбитраж</figcaption>
          <ul>
            <li>Взыскание дебиторской <br>задолженности</li>
            <li>Исполнительное <br>производство</li>
            <li>Представление интересов <br>организаций</li>
          </ul>
        </div>
      </div>
    -->
        </div>

    </main>
    <?php require 'templates/footer.php'; ?>
</div>
<?php require 'templates/scripts.php'; ?>
</body>

</html>
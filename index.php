<?php
session_start();
if(!$_SESSION['user']){
    
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="css/default/fonts.css">
    <link rel="stylesheet" href="css/default/null.css">
    <link rel="stylesheet" href="css/index-page/header.css">
    <link rel="stylesheet" href="css/index-page/city.css">
    <link rel="stylesheet" href="css/index-page/news.css">
    <link rel="stylesheet" href="css/index-page/advice.css">
    <link rel="stylesheet" href="css/index-page/questions.css">
    <link rel="stylesheet" href="css/index-page/subscribe.css">
    <link rel="stylesheet" href="css/index-page/research.css">
    <link rel="stylesheet" href="css/index-page/index-form.css">
    <link rel="stylesheet" href="css/index-page/footer.css">
</head>
<body style="background: #282828">
    <header>
        <nav>
            <figure class="header__logo">
                <img src="" alt="">
            </figure>
            <a href="#burger-menu" class="header__list__burger">
                <div></div>
                <div></div>
                <div></div>
            </a>
            <ul id="burger-menu" class="header__list _anim-items _anim-no-hide">
                <a href="#" class="exit">
                    <div></div>
                    <div></div>
                </a>
                <li><a href="#">Главная</a></li>
                <li><a href="pages/news.html">Новости</a></li>
                <li><a href="">Статьи</a></li>
                <?
                    if($_SESSION['user']){
                        echo "<li><a href='pages/profile.php'>{$_SESSION['user']['login']}</a></li>";
                    }else{
                        echo '<li><a href="pages/auth.html">Войти</a></li>';
                    }
                ?>
            </ul>
        </nav>
        <div class="header__body">
            <div class="header__title _anim-items _anim-no-hide">
                <h1>World Travel Guide</h1>
            </div>
        </div>
    </header>
    <section class="subscribe">
        <div class="subscribe__birds _anim-items _anim-no-hide">
            <img src="images/birds.png" alt="">
        </div>
        <div class="subscribe__block ">
            <div class="sub__back"></div>
            <div class="subscribe__text">
                <h4>
                    Получайте эксклюзивные предложения,
                    вдохновляющие истории и обновления
                    правил путешествий.
                </h4>
                <p>
                    Станьте подписчиком* и получайте
                    отличные советы по планированию
                    путешествий на свой почтовый ящик!
                </p>
            </div>
            <form action="./functions/subscribe.php" method="POST" class="subscribe__form">
                <label for="email">
                    <input type="email" name="email" id="email" placeholder="Введите почту" value="<?
                        if($_SESSION['user']){
                            echo $_SESSION['user']['email'];
                        }
                    ?>" required>
                </label>
                <div>
                    <p>
                        Регистрируясь, вы соглашаетесь с нашими
                        <a href="">Условиями обслуживания</a> и <a href="">Политикой конфиденциальности</a>.
                    </p>
                    <button class="button-29" type="submit">Подписаться</button>
                </div>
            </form>
        </div>
    </section>
    <section class="research">
        <div class="research__back">
            <figure class="research-img-one">
                <img src="images/for-index-page/01.png" alt="">
            </figure>
            <figure class="research-img-two">
                <img src="images/for-index-page/compass.png" alt="">
            </figure>
            <div class="research-title-one _anim-items">
                <h1>ИССЛЕДУЙ</h1>
            </div>
            <div class="research-title-two _anim-items">
                <h1>БОЛЬШЕ</h1>
            </div>
        </div>
        <div class="research__front">
            <div class="research__body">
                <div class="city__1 cities _anim-items _anim-no-hide">
                    <div class="city__img"><img src="images/for-index-page/cities/dubai.png" alt=""></div>
                    <div class="city__content">
                        <div class="city__title"><h2>Дубай</h2></div>
                        <div class="city__body"><p>Дубай - это город в пустыни</p></div>
                    </div>
                </div>
                <div class="city__2 cities _anim-items _anim-no-hide">
                    <div class="city__img"><img src="images/for-index-page/cities/moscow.png" alt=""></div>
                    <div class="city__content">
                        <div class="city__title"><h2>Москва</h2></div>
                        <div class="city__body"><p>Москва - жестокая и циничная</p></div>
                    </div>
                </div>
                <div class="city__3 cities _anim-items _anim-no-hide">
                    <div class="city__img"><img src="images/for-index-page/cities/london.png" alt=""></div>
                    <div class="city__content">
                        <div class="city__title"><h2>Лондон</h2></div>
                        <div class="city__body"><p>Лондон - это место, которое постоянно удивляет</p></div>
                    </div>
                </div>
                <div class="city__4 cities _anim-items _anim-no-hide">
                    <div class="city__img"><img src="images/for-index-page/cities/rome.png" alt=""></div>
                    <div class="city__content">
                        <div class="city__title"><h2>Рим</h2></div>
                        <div class="city__body"><p>Я принял Рим кирпичным, а оставлю его мраморным</p></div>
                    </div>
                </div>
            </div>
            <div class="research__footer">
                <a class="research-btn" href="#">
                    <span>Узнать больше</span>
                    <div class="left_hover"></div>
                    <div class="right_hover"></div>
                </a>
            </div>
        </div>
    </section>
    <section class="sec__two">
        <div class="news__back">
            <figure class="news__back__one">
                <img src="images/for-index-page/02.png" alt="">
            </figure>
            <h1 class="news__back__title__one _anim-items">УЗНАЙ</h1>
            <h1 class="news__back__title__two _anim-items">БОЛЬШЕ</h1>
        </div>
        <div class="news__front">
            <div class="news__title">
                <h2>Новости</h2>
            </div>
            <div class="news__body">
                <div class="left__side">
                    <div class="card__image">
                        <img src="images/for-index-page/news/pexels-emily-geibel-3772272%201.png" alt="">
                    </div>
                    <div class="card__body">
                        <div class="card__title"><h2>Какие авиакомпании летают из России за границу</h2></div>
                        <div class="card__text">
                            <p>
                                Российское небо закрыто для европейских бортов,
                                европейское — для самолётов РФ. Тем не менее целый
                                ряд зарубежных авиакомпаний продолжает выполнять
                                регулярные рейсы из России и обратно, причём многие
                                из них летают в крупные международные хабы, откуда
                                легко отправиться в любом направлении.<br>
                                Некоторые из них это: «Азимут», «Аэрофлот»,«Ираэро», Red Wings и другие.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="right__side">
                    <ul class="cards__list">
                        <li class="card__1 cards" onclick="setCard(this)">
                            <div class="cards__image">
                                <img src="images/for-index-page/news/pexels-markus-winkler-2975021%201.png" alt="">
                            </div>
                            <div class="cards__title"><h2>
                                Какие авиакомпании летают из России за границу
                            </h2></div>
                            <div class="cards__text">
                                <p>
                                    Российское небо закрыто для европейских бортов,
                                    европейское — для самолётов РФ. Тем не менее целый
                                    ряд зарубежных авиакомпаний продолжает выполнять
                                    регулярные рейсы из России и обратно, причём многие
                                    из них летают в крупные международные хабы, откуда
                                    легко отправиться в любом направлении.<br>
                                    Некоторые из них это: «Азимут», «Аэрофлот»,«Ираэро», Red Wings и другие.
                                </p>
                            </div>
                        </li>
                        <li class="card__2 cards" onclick="setCard(this)">
                            <div class="cards__image">
                                <img src="images/for-index-page/news/pexels-pixabay-208360%201.png" alt="">
                            </div>
                            <div class="cards__title"><h2>Сколько теперь лететь до Сочи, Калининграда и Турции</h2></div>
                            <div class="cards__text">
                                <p>
                                    Воздушное пространство для российских самолётов закрыли 38 стран.
                                    Также закрыто российское небо на западной границе с Украиной и
                                    Республикой Беларусь. Из-за этого увеличилось время полёта на
                                    рейсах, по которым российские авиакомпании вынуждены были перестроить маршруты.
                                    1)Сочи<br>
                                    Самолётам, направляющимся из Москвы в Сочи, теперь приходится летать через Казахстан.
                                    Это добавляет лишних полтора часа.
                                    <br>
                                    2)Минеральные Воды<br>
                                    На те же полтора часа из-за того, что маршрут сдвинулся восточнее юга России,
                                    увеличился и перелёт из Москвы до Минеральных Вод.
                                    <br>
                                    3)Калининград<br>
                                    До Калининграда теперь самолёты летят через Балтийское море, огибая Эстонию,
                                    Литву и Латвию. Это добавило 40 лишних минут.
                                </p>
                            </div>
                        </li>
                        <li class="card__3 cards" onclick="setCard(this)">
                            <div class="cards__image">
                                <img src="images/for-index-page/news/pexels-markus-winkler-2975021%201.png" alt="">
                            </div>
                            <div class="cards__title"><h2>В каких странах признают российские вакцины?</h2></div>
                            <div class="cards__text">
                                <p>
                                    Ниже список стран, которые признают российские
                                    вакцины и делают послабления для привитых россиян.
                                    Какие-то разрешают вакцинированным не проходить карантин
                                    или въезжать без ПЦР-теста.<br>
                                    Австралия, Азербайджан, Алжир, Албания, Антигуа и Барбуда, Аргентина, Армения, Барбадос,
                                    Бахрейн, Беларусь, Болгария, Боливия, Босния и Герцеговина, Бразилия, Бруней, Венгрия,
                                    Венесуэла, Вьетнам, Греция, Грузия, Джибути, Доминиканы, Египет, Зимбабве, Израиль,
                                    Индия.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="news__footer">
                <a href="#">
                    <span>Подробнее</span>
                    <div class="left_hover"></div>
                    <div class="right_hover"></div>
                </a>
            </div>
        </div>
    </section>
    <section class="sec__three">
        <div class="three__title">
            <h2>Советы для туристов</h2>
        </div>
        <div class="three__body">
            <div class="left__btn">
                <img src="images/icons/Arrow.svg" alt="">
            </div>
            <ul class="advice__window">
                <li class="advice__item">
                    <div class="advice__img">
                        <img src="images/for-index-page/advices/kids.png" alt="">
                    </div>
                    <div class="advice__title">
                        <p>Куда сходить с детьми в Сочи?</p>
                    </div>
                    <div class="advice__btn">
                        <a href="">Подробнее</a>
                    </div>
                </li>
                <li class="advice__item">
                    <div class="advice__img">
                        <img src="images/for-index-page/advices/backpack.png" alt="">
                    </div>
                    <div class="advice__title">
                        <p>Что делать туристам в случае утери багажа?</p>
                    </div>
                    <div class="advice__btn">
                        <a href="">Подробнее</a>
                    </div>
                </li>
                <li class="advice__item">
                    <div class="advice__img">
                        <img src="images/for-index-page/advices/kids.png" alt="">
                    </div>
                    <div class="advice__title">
                        <p>Куда сходить с детьми в Сочи?</p>
                    </div>
                    <div class="advice__btn">
                        <a href="">Подробнее</a>
                    </div>
                </li>
                <li class="advice__item">
                    <div class="advice__img">
                        <img src="images/for-index-page/advices/kids.png" alt="">
                    </div>
                    <div class="advice__title">
                        <p>Куда сходить с детьми в Сочи?</p>
                    </div>
                    <div class="advice__btn">
                        <a href="">Подробнее</a>
                    </div>
                </li>
                <li class="advice__item">
                    <div class="advice__img">
                        <img src="images/for-index-page/advices/backpack.png" alt="">
                    </div>
                    <div class="advice__title">
                        <p>Что делать туристам в случае утери багажа?</p>
                    </div>
                    <div class="advice__btn">
                        <a href="">Подробнее</a>
                    </div>
                </li>
                <li class="advice__item">
                    <div class="advice__img">
                        <img src="images/for-index-page/advices/kids.png" alt="">
                    </div>
                    <div class="advice__title">
                        <p>Куда сходить с детьми в Сочи?</p>
                    </div>
                    <div class="advice__btn">
                        <a href="">Подробнее</a>
                    </div>
                </li>
                <li class="advice__item">
                    <div class="advice__img">
                        <img src="images/for-index-page/advices/kids.png" alt="">
                    </div>
                    <div class="advice__title">
                        <p>Куда сходить с детьми в Сочи?</p>
                    </div>
                    <div class="advice__btn">
                        <a href="">Подробнее</a>
                    </div>
                </li>
                <li class="advice__item">
                    <div class="advice__img">
                        <img src="images/for-index-page/advices/backpack.png" alt="">
                    </div>
                    <div class="advice__title">
                        <p>Что делать туристам в случае утери багажа?</p>
                    </div>
                    <div class="advice__btn">
                        <a href="">Подробнее</a>
                    </div>
                </li>
                <li class="advice__item">
                    <div class="advice__img">
                        <img src="images/for-index-page/advices/kids.png" alt="">
                    </div>
                    <div class="advice__title">
                        <p>Куда сходить с детьми в Сочи?</p>
                    </div>
                    <div class="advice__btn">
                        <a href="">Подробнее</a>
                    </div>
                </li>
            </ul>
            <div class="right__btn">
                <img src="images/icons/Arrow.svg" alt="">
            </div>
        </div>
        <div class="three__footer">
            <a href="">Ещё больше советов</a>
        </div>
    </section>
    <section class="sec__four">
        <div class="ques__back"></div>
        <div class="ques__title">
            <h2>Часто задаваемые вопросы</h2>
        </div>
        <div class="ques__body">
            <div class="ques__card-1 ques__cards">
                <div class="ques__card__title">
                    <p>Если я хочу отменить свой тур, какие будут затраты?</p>
                </div>
                <div class="ques__card__link">
                    <a href="pages/FAQ.html">Подробнее</a>
                </div>
            </div>
            <div class="ques__card-2 ques__cards">
                <div class="ques__card__title">
                    <p>
                        Что такое ваучер ?
                    </p>
                </div>
                <div class="ques__card__link">
                    <a href="pages/FAQ.html">Подробнее</a>
                </div>
            </div>
            <div class="ques__card-3 ques__cards">
                <div class="ques__card__title">
                    <p>
                        Как я узнаю, что мой заказ был отменен?
                    </p>
                </div>
                <div class="ques__card__link">
                    <a href="pages/FAQ.html">Подробнее</a>
                </div>
            </div>
            <div class="ques__card-4 ques__cards">
                <div class="ques__card__title">
                    <p>Какие документы нужны для оформления тура?</p>
                </div>
                <div class="ques__card__link">
                    <a href="pages/FAQ.html">Подробнее</a>
                </div>
            </div>
        </div>
        <div class="ques__footer">
            <a href="pages/FAQ.html">Ещё больше вопросов</a>
        </div>
    </section>
    <section class="sec__five">
        <div class="five__top">
            <h1>Форма обратной связи</h1>
            <img src="images/for-index-page/mountains.png" alt="">
        </div>
        <div class="five__bottom">
            <div class="five__bottom-back"></div>
            <form action="./functions/feedback.php" method="POST" class="five__form">
                <div class="form__body">
                    <div class="form__body-input">
                        <div>
                            <label for="name">Имя</label>
                            <input type="text" name="name" id="name" placeholder="Введите имя ...">
                        </div>
                        <div>
                            <label for="emails">E-mail</label>
                            <input type="email" name="email" id="emails" placeholder="Введите почту ...">
                        </div>
                    </div>
                    <div class="form__body-textarea">
                        <textarea name="text" id="text" placeholder="Введите свое сообщение ..."></textarea>
                    </div>
                </div>
                <div class="form__footer">
                    <button type="submit">Отправить</button>
                    <p>
                        Мы не передаем Ваши данные третьим лицамине используем для нежелательных рассылок.
                        Нажимая на кнопку, Вы даете согласие на обработку персональных данных
                    </p>
                </div>
            </form>
        </div>
    </section>
    <footer>
        <div class="footer-one">
            <h2>WTG</h2>
            <p>Контакты: +7 902 942 78 11</p>
            <p>Email: Dmitrii1976@mail.ru</p>
        </div>
        <div class="footer-two">
            <p>Ссылки</p>
            <ul>
                <li>Главная</li>
                <li>Новости</li>
                <li>О нас</li>
                <li>Туры</li>
                <li>FAQ</li>
                <li>Советы</li>
            </ul>
        </div>
        <div class="footer-three">
            <p>Ресурсы</p>
            <ul>
                <li>Контакты</li>
                <li>Поддержка</li>
            </ul>
        </div>
        <div class="footer-four">
            <p>Партнеры</p>
            <ul>
                <li>GWPU</li>
                <li>Second life</li>
                <li>s7 airlines</li>
                <li>Психика Александра</li>
                <li>Нервы Антона</li>
                <li>Эчпочмак corporation</li>
            </ul>
        </div>
        <div class="footer-doc">
            <a href="Политика-конфиденциальности.docx">Политика конфиденциальности</a>
        </div>
        <div class="footer-footer">
            <p>© DaunSquad           2022 / все права защищены</p>
        </div>
    </footer>
    <script src="js/anim_on_scroll.js"></script>
    <script src="js/news.js"></script>
    <script src="js/card-slider.js"></script>
<!--    <script src="js/advice.js"></script>-->
</body>
</html>
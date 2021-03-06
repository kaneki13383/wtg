<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Профиль <?=$_SESSION['user']['login']?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/default/null.css">
    <link rel="stylesheet" href="../css/default/fonts.css">
    <link rel="stylesheet" href="../css/profile/profile-header.css">
    <link rel="stylesheet" href="../css/profile/profile-info.css">
    <link rel="stylesheet" href="../css/profile/profile-form.css">
    <link rel="stylesheet" href="../css/index-page/footer.css">
</head>
<body>
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
                <li><a href="../index.php">Главная</a></li>
                <li><a href="pages/news.html">Новости</a></li>
                <li><a href="">Статьи</a></li>
                <li><a href="pages/profile.php"><?=$_SESSION['user']['login']?></a></li>
            </ul>
        </nav>
    </header>
    <section class="info">
        <div class="info-header">
            <div class="info-name">
                <figure class="info-img">
                    <img src="../images/icons/person.svg" alt="">
                </figure>
                <div class="info-text">
                   <p>
                        <?=$_SESSION['user']['full_name']?>
                   </p>
                </div>
                <div class="info-logout">
                    <a href="../functions/logout.php">Выйти</a>
                </div>
            </div>
            <div class="info-data">
                <div class="info-login">
                    <p>Ваш логин:</p><p><?=$_SESSION['user']['login']?></p>
                </div>
                <div class="info-password">
                    <p>Ваш пароль:</p>
                    <input type="password" name="password" id="password" value="<?=$_SESSION['user']['password']?>" readonly>
                    <div class="info-password-view" onclick="viewPass(this)">
                        <span class="material-symbols-outlined">
                            visibility_off
                        </span>
                    </div>
                </div>
                <div class="info-mail">
                    <p>Ваша почта:</p><p><?=$_SESSION['user']['email']?></p>
                </div>
            </div>
        </div>
        <div class="info-requests">
            <div class="request">
                <figure class="request-img">
                    <img src="https://3dnews.ru/assets/external/illustrations/2017/11/27/962092/sw%20battlefront%202%20art.jpg" alt="">
                </figure>
                <div class="request-title">
                    <p><strong>Название тура</strong></p>
                </div>
                <div class="request-btn">
                    <a href="">Отменить тур</a>
                </div>
            </div>
            <div class="request">
                <figure class="request-img">
                    <img src="" alt="">
                </figure>
                <div class="request-title">
                    <p><strong>Название тура</strong></p>
                </div>
                <div class="request-btn">
                    <a href="">Отменить тур</a>
                </div>
            </div>
            <div class="request">
                <figure class="request-img">
                    <img src="" alt="">
                </figure>
                <div class="request-title">
                    <p><strong>Название тура</strong></p>
                </div>
                <div class="request-btn">
                    <a href="">Отменить тур</a>
                </div>
            </div>
        </div>
    </section>
    <section class="sec__five">
        <div class="five__top">
            <h1>Форма обратной связи</h1>
            <img src="images/for-index-page/mountains.png" alt="">
        </div>
        <div class="five__bottom">
            <div class="five__bottom-back"></div>
            <form action="" class="five__form">
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
    <script src="../js/anim_on_scroll.js"></script>
    <script src="../js/view-password.js"></script>
</body>
</html>
<?php
session_start();
if(!$_SESSION['user']){
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Title</title>
  <link rel="stylesheet" href="../../css/default/null.css">
  <link rel="stylesheet" href="../../css/default/fonts.css">
  <link rel="stylesheet" href="../../css/open-tours/open-tour-header.css">
  <link rel="stylesheet" href="../../css/open-tours/open-tour-categories.css">
  <link rel="stylesheet" href="../../css/open-tours/open-tour-about.css">
  <link rel="stylesheet" href="../../css/open-tours/open-tour-program.css">
  <link rel="stylesheet" href="../../css/open-tours/open-tour-gallery.css">
  <link rel="stylesheet" href="../../css/open-tours/open-tour-questions.css">
  <link rel="stylesheet" href="../../css/open-tours/open-tour-form.css">
  <link rel="stylesheet" href="../../css/index-page/footer.css">
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
        <li><a href="../../index.html">Главная</a></li>
        <li><a href="../news.html">Новости</a></li>
        <li><a href="">Статьи</a></li>
        <?
                    if($_SESSION['user']){
                        echo "<li><a href='../profile.php'>{$_SESSION['user']['login']}</a></li>";
                    }else{
                        echo '<li><a href="pages/auth.html">Войти</a></li>';
                    }
                ?>
      </ul>
    </nav>
  </header>
  <div class="categories">
    <div class="category">
      <div class="category-img">
        <img src="" alt="">
      </div>
      <p>Категория тура</p>
      <sub>Комфорт</sub>
    </div>
    <div class="category">
      <div class="category-img">
        <img src="../../images/open-tour/team.png" alt="">
      </div>
      <p>Размер группы</p>
      <sub>До 20 чел.</sub>
    </div>
    <div class="category">
      <div class="category-img">
        <img src="../../images/open-tour/speedometer.png" alt="">
      </div>
      <p>Скорость тура</p>
      <sub>Умеренный</sub>
    </div>
    <div class="category">
      <div class="category-img">
        <img src="../../images/open-tour/bus.png" alt="">
      </div>
      <p>Вид транспорта</p>
      <sub>Микро-автобус</sub>
    </div>
  </div>
  <div class="about">
    <div class="about-title">
      <h2>Описание тура</h2>
    </div>
    <div class="about-body">
      <p>
        Добро пожаловать в столицу весеннего солнца и самых интересных событий!
        В пятидневную программу входит автобусная обзорная экскурсия по Москве,
        посещение ВДНХ, экскурсия в Музей-заповедник «Царицыно», экскурсия на
        легендарный стадион «Лужники», прогулка на канатной дороге, двухчасовая
        прогулка на кораблике по Москва-реке, посещение Московского зоопарка.
      </p>
    </div>
  </div>
  <section class="program">
    <div class="program-header">
      <h3>День</h3>
    </div>
    <div class="program-day">
      <div class="day-title" onclick="openOrClose(document.getElementById('day-one'))">
        <a href="#day-one" class="day-title-link">1</a>
        <h4>
          Автобусная экскурсия «Говорит Москва!» -
          Зарядье - Красная площадь
        </h4>
      </div>
      <div id="day-one" class="day-body">
        <div class="day-body-title">
          <h2>12:00</h2>
          <p>
            Встреча группы с гидом в холле
            отеля/на вокзале. Отправление на автобусе
          </p>
        </div>
        <div class="day-body-text">
          <p>
            <strong>Автобусная обзорная экскурсия «Говорит Москва!»</strong>
          </p>
          <p>
            Москва воплотила в себе лучшее черты мировых столиц,
            ее облик вполне гармонично сочетает историю и современность.
            Мы проедем по главным московским площадям, прогуляемся по
            Красной площади, попробуем мороженое в ГУМе, увидим Манежную
            площади и Большой театр. Полюбуемся знаменитыми сталинскими
            высотками, в которых мечтал жить каждый советский москвич
            и в которых снимали знаменитый шедевр советской классики
            «Москва слезам не верит», полюбуемся видом Москвы и Храма
            Христа спасителя с Патриаршего моста, увидим новый
            урбанистски-застроенный район Москва Сити и старинный
            белый камень стен Новодевичьего монастыря. Одним из важных
            моментов экскурсии будет посещение Парка Победы на
            Поклонной Горе.
          </p>
          <p>
            <strong>
              Обед<br>
              Посещение парка «Зарядье» и смотровой
              площадки с лучшим видом на Кремль
            </strong>
          </p>
          <p>
            Со смотровой площадки Парящего моста открывается один
            из самых живописных видов на стены Кремля. Сам парк
            является уникальным примером современного урбанизма и
            архитектуры, основная идея парка заключается в его
            необычном ландшафте – на территории парка высажены
            растения из всех природных зон России, от степей и
            хвойных лесов до тундры и арктических равнин.
          </p>
          <p>
            Экскурсия в Кремль с посещением Соборной площади за доп.плату*
          </p>
          <p>
            Отправление в отель на общественном транспорте. Размещение<br>
            Ночь в отеле
          </p>
        </div>
        <div class="day-body-gallery">
          <!-- Full-width images with number text -->
          <div class="mySlides">
            <div class="numbertext">1 / 6</div>
            <img src="https://screenmusings.org/movie/blu-ray/Blade-Runner-2049/images/Blade-Runner-2049-1489.jpg" style="width:100%">
          </div>
          <div class="mySlides">
            <div class="numbertext">2 / 6</div>
            <img src="https://static1.cbrimages.com/wordpress/wp-content/uploads/2017/12/anakin-skywalker-revenge-of-the-sith.jpg" style="width:100%">
          </div>
          <div class="mySlides">
            <div class="numbertext">3 / 6</div>
            <img src="https://mota.ru/upload/resize/2560/1440/upload/wallpapers/2021/04/09/07/26/71372/night-fantasy-the-witcher-3-wild-hunt-8fe.jpg" style="width:100%">
          </div>
          <div class="mySlides">
            <div class="numbertext">4 / 6</div>
            <img src="https://get.wallhere.com/photo/Star-Wars-Heroes-artwork-Jedi-Obi-Wan-Kenobi-1555337.jpg" style="width:100%">
          </div>
          <div class="mySlides">
            <div class="numbertext">5 / 6</div>
            <img src="https://img2.goodfon.ru/original/2560x1600/c/99/tom-clancys-the-division.jpg" style="width:100%">
          </div>
          <div class="mySlides">
            <div class="numbertext">6 / 6</div>
            <img src="https://s1.1zoom.ru/b5050/572/342369-sepik_2560x1440.jpg" style="width:100%">
          </div>
          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
          <!-- Image text -->
          <div class="caption-container">
            <p id="caption"></p>
          </div>
          <!-- Thumbnail images -->
          <div class="row">
            <div class="column">
              <img class="demo cursor" src="https://screenmusings.org/movie/blu-ray/Blade-Runner-2049/images/Blade-Runner-2049-1489.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
            </div>
            <div class="column">
              <img class="demo cursor" src="https://static1.cbrimages.com/wordpress/wp-content/uploads/2017/12/anakin-skywalker-revenge-of-the-sith.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
            </div>
            <div class="column">
              <img class="demo cursor" src="https://mota.ru/upload/resize/2560/1440/upload/wallpapers/2021/04/09/07/26/71372/night-fantasy-the-witcher-3-wild-hunt-8fe.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
            </div>
            <div class="column">
              <img class="demo cursor" src="https://get.wallhere.com/photo/Star-Wars-Heroes-artwork-Jedi-Obi-Wan-Kenobi-1555337.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
            </div>
            <div class="column">
              <img class="demo cursor" src="https://img2.goodfon.ru/original/2560x1600/c/99/tom-clancys-the-division.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
            </div>
            <div class="column">
              <img class="demo cursor" src="https://s1.1zoom.ru/b5050/572/342369-sepik_2560x1440.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="program-day">
      <div class="day-title" onclick="openOrClose(document.getElementById('day-two'))">
        <a href="#day-two" class="day-title-link">2</a>
        <h4>
          ВДНХ
        </h4>
      </div>
      <div id="day-two" class="day-body">
        <div class="day-body-title">
          <h2>
            Завтрак<br>
            09:00
          </h2>
          <p>
            Встреча с гидом в холле отеля. Отправление на общественном транспорте
          </p>
        </div>
        <div class="day-body-text">
          <p>
            <strong>Прогулка по Выставке достижений народного хозяйства</strong>
          </p>
          <p>
            Один из крупнейших выставочных центров мира, территория
            которого богата архитектурными памятниками советской эпохи.
            К числу наиболее ярких относятся символ Мосфильма «Рабочий и колхозница»,
            фонтаны «Дружба народов» и «Каменный цветок», уникальные павильоны.
          </p>
          <p>
            <strong>
              Экскурсия в один из музеев ВДНХ на выбор за доп. плату*:<br>
              1) Музей ВДНХ
            </strong>
          </p>
          <p>
            Посетив экспозицию, гости узнают, как на протяжении разных эпох
            создавалась и работала Главная выставка страны, как формировался
            ее ансамбль и менялось содержание. В этом помогут интерактивные экспонаты,
            специально разработанные познавательные настольные игры и внушительная
            онлайн-медиатека — первая публичная база знаний о 80-летней истории ВДНХ.<br>
            <strong>+ Посещение Павильона «Макет Москвы»</strong>
          </p>
          <p>
            Экскурсия в Кремль с посещением Соборной площади за доп.плату*
          </p>
          <p>
            Архитектурный макет Москвы — уникальный экспонат для москвичей и гостей столицы.
            Его главная отличительная особенность — поразительная детализация зданий
            и максимально точное воссоздание ландшафтного рельефа.
          </p>
          <p>
            <strong>
              2) Музей Кино
            </strong><br>
            С обновленной экспозицией, которая ведет свое начало с 1989 года и до
            сих пор пополняется новыми кино-артефактами
          </p>
          <p>
            <strong>
              3) Интерактивный музейный комплекс «Буран»
            </strong><br>
            Интерактивный музей внутри макета орбитального
            корабля «Буран БТС-001» рядом с павильоном №20.
            В музее можно не только посмотреть фильм о легендарном ракетоплане,
            но и управлять его посадкой на космодроме Байконур в режиме реального времени
          </p>
          <p>
            <strong>Обед</strong><br>
            Возвращение в отель на общественном транспорте
          </p>
          <p>
            <strong>
              Ночь в отеле
            </strong>
          </p>
        </div>
        <div class="day-body-gallery">
          <!-- Full-width images with number text -->
          <div class="mySlides-two">
            <div class="numbertext">1 / 6</div>
            <img src="https://greepx.com/wp-content/uploads/2018/01/1515449620_246_phoebe-tonkin.jpg" style="width:100%">
          </div>
          <div class="mySlides-two">
            <div class="numbertext">2 / 6</div>
            <img src="https://phoebe-tonkin.org/gallery/albums/Appearances/2019/02%2023%20Chanel%20PreOscar/014.jpg" style="width:100%">
          </div>
          <div class="mySlides-two">
            <div class="numbertext">3 / 6</div>
            <img src="https://celebmafia.com/wp-content/uploads/2019/09/phoebe-tonkin-harper-s-bazaar-photoshoot-2019-part-ii-3.jpg" style="width:100%">
          </div>
          <div class="mySlides-two">
            <div class="numbertext">4 / 6</div>
            <img src="https://yobte.ru/uploads/posts/2020-01/fibi-tonkin-37-foto-22.jpg" style="width:100%">
          </div>
          <div class="mySlides-two">
            <div class="numbertext">5 / 6</div>
            <img src="https://i.pinimg.com/originals/9a/c6/d7/9ac6d7b4613fe353782440f76c4f50be.jpg" style="width:100%">
          </div>
          <div class="mySlides-two">
            <div class="numbertext">6 / 6</div>
            <img src="https://phoebe-tonkin.org/gallery/albums/Television/The%20Originals/Season%201/Screencaps/1x15/theoriginals_s01e15_0025.jpg" style="width:100%">
          </div>
          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSliders(-1)">&#10094;</a>
          <a class="next" onclick="plusSliders(1)">&#10095;</a>
          <!-- Image text -->
          <div class="caption-container">
            <p id="caption-two"></p>
          </div>
          <!-- Thumbnail images -->
          <div class="row">
            <div class="column">
              <img class="demo-two cursor" src="https://greepx.com/wp-content/uploads/2018/01/1515449620_246_phoebe-tonkin.jpg" style="width:100%" onclick="currentSlider(1)" alt="The Woods">
            </div>
            <div class="column">
              <img class="demo-two cursor" src="https://phoebe-tonkin.org/gallery/albums/Appearances/2019/02%2023%20Chanel%20PreOscar/014.jpg" style="width:100%" onclick="currentSlider(2)" alt="Cinque Terre">
            </div>
            <div class="column">
              <img class="demo-two cursor" src="https://celebmafia.com/wp-content/uploads/2019/09/phoebe-tonkin-harper-s-bazaar-photoshoot-2019-part-ii-3.jpg" style="width:100%" onclick="currentSlider(3)" alt="Mountains and fjords">
            </div>
            <div class="column">
              <img class="demo-two cursor" src="https://yobte.ru/uploads/posts/2020-01/fibi-tonkin-37-foto-22.jpg" style="width:100%" onclick="currentSlider(4)" alt="Northern Lights">
            </div>
            <div class="column">
              <img class="demo-two cursor" src="https://i.pinimg.com/originals/9a/c6/d7/9ac6d7b4613fe353782440f76c4f50be.jpg" style="width:100%" onclick="currentSlider(5)" alt="Nature and sunrise">
            </div>
            <div class="column">
              <img class="demo-two cursor" src="https://phoebe-tonkin.org/gallery/albums/Television/The%20Originals/Season%201/Screencaps/1x15/theoriginals_s01e15_0025.jpg" style="width:100%" onclick="currentSlider(6)" alt="Snowy Mountains">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="program-day">
      <div class="day-title"
           onclick="openOrClose(document.getElementById('day-three'))">
        <a href="#day-two" class="day-title-link">3</a>
        <h4>
          Музей-заповедник «Царицыно» - Арбат
        </h4>
      </div>
      <div id="day-three" class="day-body">
        <div class="day-body-title">
          <h2>
            Завтрак<br>
            09:00
          </h2>
          <p>
            Встреча с гидом в холле отеля. Отправление на автобусе
          </p>
        </div>
        <div class="day-body-text">
          <p>
            <strong>Экскурсия в Музей-заповедник «Царицыно» с посещением дворцово-парковой территории</strong>
          </p>
          <p>
            Большой Дворец. Музей-заповедник занимает больше 400 гектаров и включает в себя оранжереи,
            дворцовый ансамбль, пейзажный парк с прудами и павильонами, а также новые парковые зоны
            с цветниками и светомузыкальным фонтаном. Был заложен по приказу императрицы Екатерины II.
            Усадьба является памятником «русской псевдо-готики». Архитекторы ансамбля –
            Василий Баженов и Матвей Казаков.
          </p>
          <p>
            <strong>
              Обед<br>
              Прогулка по Старому Арбату «Сердце культурной жизни»
            </strong>
          </p>
          <p>
            В XVIII веке этот район Арбата стали заселять московские аристократы,
            затем сюда стали переезжать заслуженные деятели из мира науки и культуры.
            До наших времен здесь сохранились немногие деревянные постройки, бывшие доходные дома,
            старинные особняки, в один из таких А.С. Пушкин привел Наталью Гончарову после свадьбы.
            Здесь и памятник Булату Окуджаве, и знаменитая Стена Цоя, и необычный дом архитектора
            Мельникова, который включен во все мировые путеводители по истории архитектуры.
            Сколько знаменитостей помнят арбатские переулки, сколько новых музыкантов, актеров
            и художников и по сей день принимает Арбат!
          </p>
          <p>
            <strong>
              Возвращение в отель на общественном транспорте<br>
              Ночь в отеле
            </strong>
          </p>
        </div>
        <div class="day-body-gallery">
          <!-- Full-width images with number text -->
          <div class="mySlides-three">
            <div class="numbertext">1 / 6</div>
            <img src="https://greepx.com/wp-content/uploads/2018/01/1515449620_246_phoebe-tonkin.jpg" style="width:100%">
          </div>
          <div class="mySlides-three">
            <div class="numbertext">2 / 6</div>
            <img src="https://phoebe-tonkin.org/gallery/albums/Appearances/2019/02%2023%20Chanel%20PreOscar/014.jpg" style="width:100%">
          </div>
          <div class="mySlides-three">
            <div class="numbertext">3 / 6</div>
            <img src="https://celebmafia.com/wp-content/uploads/2019/09/phoebe-tonkin-harper-s-bazaar-photoshoot-2019-part-ii-3.jpg" style="width:100%">
          </div>
          <div class="mySlides-three">
            <div class="numbertext">4 / 6</div>
            <img src="https://yobte.ru/uploads/posts/2020-01/fibi-tonkin-37-foto-22.jpg" style="width:100%">
          </div>
          <div class="mySlides-three">
            <div class="numbertext">5 / 6</div>
            <img src="https://i.pinimg.com/originals/9a/c6/d7/9ac6d7b4613fe353782440f76c4f50be.jpg" style="width:100%">
          </div>
          <div class="mySlides-three">
            <div class="numbertext">6 / 6</div>
            <img src="https://phoebe-tonkin.org/gallery/albums/Television/The%20Originals/Season%201/Screencaps/1x15/theoriginals_s01e15_0025.jpg" style="width:100%">
          </div>
          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlidersThree(-1)">&#10094;</a>
          <a class="next" onclick="plusSlidersThree(1)">&#10095;</a>
          <!-- Image text -->
          <div class="caption-container">
            <p id="caption-three"></p>
          </div>
          <!-- Thumbnail images -->
          <div class="row">
            <div class="column">
              <img class="demo-three cursor" src="https://greepx.com/wp-content/uploads/2018/01/1515449620_246_phoebe-tonkin.jpg" style="width:100%" onclick="currentSliderThree(1)" alt="The Woods">
            </div>
            <div class="column">
              <img class="demo-three cursor" src="https://phoebe-tonkin.org/gallery/albums/Appearances/2019/02%2023%20Chanel%20PreOscar/014.jpg" style="width:100%" onclick="currentSliderThree(2)" alt="Cinque Terre">
            </div>
            <div class="column">
              <img class="demo-three cursor" src="https://celebmafia.com/wp-content/uploads/2019/09/phoebe-tonkin-harper-s-bazaar-photoshoot-2019-part-ii-3.jpg" style="width:100%" onclick="currentSliderThree(3)" alt="Mountains and fjords">
            </div>
            <div class="column">
              <img class="demo-three cursor" src="https://yobte.ru/uploads/posts/2020-01/fibi-tonkin-37-foto-22.jpg" style="width:100%" onclick="currentSliderThree(4)" alt="Northern Lights">
            </div>
            <div class="column">
              <img class="demo-three cursor" src="https://i.pinimg.com/originals/9a/c6/d7/9ac6d7b4613fe353782440f76c4f50be.jpg" style="width:100%" onclick="currentSliderThree(5)" alt="Nature and sunrise">
            </div>
            <div class="column">
              <img class="demo-three cursor" src="https://phoebe-tonkin.org/gallery/albums/Television/The%20Originals/Season%201/Screencaps/1x15/theoriginals_s01e15_0025.jpg" style="width:100%" onclick="currentSliderThree(6)" alt="Snowy Mountains">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="program-day">
      <div class="day-title"
           onclick="openOrClose(document.getElementById('day-four'))">
        <a href="#day-two" class="day-title-link">4</a>
        <h4>
          Лужники - Канатная дорога «Лужники-Воробьевы» -
          Автобусная экскурсия «Тайны зеленых бульваров»
        </h4>
      </div>
      <div id="day-four" class="day-body">
        <div class="day-body-title">
          <h2>
            Завтрак<br>
            09:00
          </h2>
          <p>
            Встреча с гидом в холле отеля. Отправление на общественном транспорте.(Начало экскурсии на ст. м. «Лужники»)
          </p>
        </div>
        <div class="day-body-text">
          <p>
            <strong>
              Экскурсия на стадион «Лужники»,
              открывшемуся после Чемпионата мира по футболу ФИФА 2018
            </strong>
          </p>
          <p>
            В «Лужниках» каждый сможет почувствовать себя преданным
            футбольным болельщиком, VIP-гостем, футболистом, тренером
            и журналистом – посетители побывают в самых интересных местах
            стадиона, которые обычно недоступны болельщикам во время матчей.
            Можно заглянуть в раздевалки команд, пройтись по бровке
            футбольного поля, присесть на скамейку запасных, посетить
            пресс-центр и скай-боксы, прогуляться по территории обновленного
            спорт-парка, посетить Аллею славы, где установлены скульптурные
            композиции в честь легендарных спортсменов - Льва Яшина,
            Эдуарда Стрельцова, Валерия Харламова, увидеть настоящую
            Чашу Олимпийского огня и потереть на удачу мордочку или
            лапу бронзового Олимпийского мишки!
          </p>
          <p>
            <strong>
              Проезд на Канатной дороге «Лужники-Воробьевы Горы»
            </strong>
          </p>
          <p>
            В туристических капсулах установлены аудиогиды, рассказывающие
            о главных московских достопримечательностях на 4 языках.
            Ну а самое завораживающее в новой канатной дороге –
            роскошный вид, открывающийся на Москву с высоты птичьего полета!
          </p>
          <p>
            <strong>
              Обед<br>
              Автобусная обзорная экскурсия «Тайны зеленых бульваров»
            </strong>
          </p>
          <p>
            Зеленое бульварное кольцо или Литературные бульвары -
            знаменитые тенистые аллеи, где жители города любят гулять в
            теплые летние дни, где сотни горожан сидят с книгами великих
            русских писателей, которые однажды тоже сидели на скамье одного
            из бульваров или влюблялись, прогуливаясь за руку. Московские
            бульвары расскажут нам о Гоголе, Есенине, о русских драматургах,
            актерах и архитекторах, о традициях градостроительства XVIII века
            и исторических памятниках города.
          </p>
          <p>
            <strong>
              Трансфер в отель<br>
              Ночь в отеле
            </strong>
          </p>
        </div>
        <div class="day-body-gallery">
          <!-- Full-width images with number text -->
          <div class="mySlides-four">
            <div class="numbertext">1 / 6</div>
            <img src="https://greepx.com/wp-content/uploads/2018/01/1515449620_246_phoebe-tonkin.jpg" style="width:100%">
          </div>
          <div class="mySlides-four">
            <div class="numbertext">2 / 6</div>
            <img src="https://phoebe-tonkin.org/gallery/albums/Appearances/2019/02%2023%20Chanel%20PreOscar/014.jpg" style="width:100%">
          </div>
          <div class="mySlides-four">
            <div class="numbertext">3 / 6</div>
            <img src="https://celebmafia.com/wp-content/uploads/2019/09/phoebe-tonkin-harper-s-bazaar-photoshoot-2019-part-ii-3.jpg" style="width:100%">
          </div>
          <div class="mySlides-four">
            <div class="numbertext">4 / 6</div>
            <img src="https://yobte.ru/uploads/posts/2020-01/fibi-tonkin-37-foto-22.jpg" style="width:100%">
          </div>
          <div class="mySlides-four">
            <div class="numbertext">5 / 6</div>
            <img src="https://i.pinimg.com/originals/9a/c6/d7/9ac6d7b4613fe353782440f76c4f50be.jpg" style="width:100%">
          </div>
          <div class="mySlides-four">
            <div class="numbertext">6 / 6</div>
            <img src="https://phoebe-tonkin.org/gallery/albums/Television/The%20Originals/Season%201/Screencaps/1x15/theoriginals_s01e15_0025.jpg" style="width:100%">
          </div>
          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlidersFour(-1)">&#10094;</a>
          <a class="next" onclick="plusSlidersFour(1)">&#10095;</a>
          <!-- Image text -->
          <div class="caption-container">
            <p id="caption-four"></p>
          </div>
          <!-- Thumbnail images -->
          <div class="row">
            <div class="column">
              <img class="demo-four cursor" src="https://greepx.com/wp-content/uploads/2018/01/1515449620_246_phoebe-tonkin.jpg" style="width:100%" onclick="currentSliderFour(1)" alt="The Woods">
            </div>
            <div class="column">
              <img class="demo-four cursor" src="https://phoebe-tonkin.org/gallery/albums/Appearances/2019/02%2023%20Chanel%20PreOscar/014.jpg" style="width:100%" onclick="currentSliderFour(2)" alt="Cinque Terre">
            </div>
            <div class="column">
              <img class="demo-four cursor" src="https://celebmafia.com/wp-content/uploads/2019/09/phoebe-tonkin-harper-s-bazaar-photoshoot-2019-part-ii-3.jpg" style="width:100%" onclick="currentSliderFour(3)" alt="Mountains and fjords">
            </div>
            <div class="column">
              <img class="demo-four cursor" src="https://yobte.ru/uploads/posts/2020-01/fibi-tonkin-37-foto-22.jpg" style="width:100%" onclick="currentSliderFour(4)" alt="Northern Lights">
            </div>
            <div class="column">
              <img class="demo-four cursor" src="https://i.pinimg.com/originals/9a/c6/d7/9ac6d7b4613fe353782440f76c4f50be.jpg" style="width:100%" onclick="currentSliderFour(5)" alt="Nature and sunrise">
            </div>
            <div class="column">
              <img class="demo-four cursor" src="https://phoebe-tonkin.org/gallery/albums/Television/The%20Originals/Season%201/Screencaps/1x15/theoriginals_s01e15_0025.jpg" style="width:100%" onclick="currentSliderFour(6)" alt="Snowy Mountains">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="program-day">
      <div class="day-title"
           onclick="openOrClose(document.getElementById('day-five'))">
        <a href="#day-two" class="day-title-link">5</a>
        <h4>
          Прогулка на кораблике - Московский Зоопарк
        </h4>
      </div>
      <div id="day-five" class="day-body">
        <div class="day-body-title">
          <h2>
            Завтрак<br>
            09:00
          </h2>
          <p>
            Встреча с гидом в холле отеля. Освобождение номеров. Отправление на автобусе
          </p>
        </div>
        <div class="day-body-text">
          <p>
            <strong>
              Двухчасовая прогулка на кораблике по
              Центральному прогулочному маршруту
            </strong>
          </p>
          <p>
            Центральная прогулочная линия Москвы — главный столичный
            речной маршрут, проходящий от Новоспасского моста до
            Воробьёвых гор и обратно, и охватывающий все основные
            достопримечательности города. Линию обслуживают
            комфортабельные двухпалубные теплоходы, во время прогулки
            для гостей на борту работает кафе с широким ассортиментом
            закусок, горячих и холодных блюд, безалкогольных и
            алкогольных напитков.
          </p>
          <p>
            <strong>
              Обед<br>
              Посещение Московского Зоопарка
            </strong>
          </p>
          <p>
            Московский зоопарк считается одним из старейших зоопарков Европы.
            По официальным данным в зоопарке находится около 6000 единиц
            различной живности, представляющие примерно 1100 видов мировой
            фауны. Сейчас в нём содержится около восьми тысяч особей,
            относящихся примерно к тысяче ста видам мировой фауны.
            Животные Московского зоопарка содержатся в нескольких десятках
            экспозиций, представляющих тот или иной регион, семейство, вид.
            К примеру, в секции Австралия можно полюбоваться на эму и черных
            лебедей, а после заглянуть в Дом Жирафа.
          </p>
          <p>
            <strong>
              16:00 Трансфер на вокзал
            </strong>
          </p>
        </div>
        <div class="day-body-gallery">
          <!-- Full-width images with number text -->
          <div class="mySlides-five">
            <div class="numbertext">1 / 6</div>
            <img src="https://greepx.com/wp-content/uploads/2018/01/1515449620_246_phoebe-tonkin.jpg" style="width:100%">
          </div>
          <div class="mySlides-five">
            <div class="numbertext">2 / 6</div>
            <img src="https://phoebe-tonkin.org/gallery/albums/Appearances/2019/02%2023%20Chanel%20PreOscar/014.jpg" style="width:100%">
          </div>
          <div class="mySlides-five">
            <div class="numbertext">3 / 6</div>
            <img src="https://celebmafia.com/wp-content/uploads/2019/09/phoebe-tonkin-harper-s-bazaar-photoshoot-2019-part-ii-3.jpg" style="width:100%">
          </div>
          <div class="mySlides-five">
            <div class="numbertext">4 / 6</div>
            <img src="https://yobte.ru/uploads/posts/2020-01/fibi-tonkin-37-foto-22.jpg" style="width:100%">
          </div>
          <div class="mySlides-five">
            <div class="numbertext">5 / 6</div>
            <img src="https://i.pinimg.com/originals/9a/c6/d7/9ac6d7b4613fe353782440f76c4f50be.jpg" style="width:100%">
          </div>
          <div class="mySlides-five">
            <div class="numbertext">6 / 6</div>
            <img src="https://phoebe-tonkin.org/gallery/albums/Television/The%20Originals/Season%201/Screencaps/1x15/theoriginals_s01e15_0025.jpg" style="width:100%">
          </div>
          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlidersFive(-1)">&#10094;</a>
          <a class="next" onclick="plusSlidersFive(1)">&#10095;</a>
          <!-- Image text -->
          <div class="caption-container">
            <p id="caption-five"></p>
          </div>
          <!-- Thumbnail images -->
          <div class="row">
            <div class="column">
              <img class="demo-five cursor" src="https://greepx.com/wp-content/uploads/2018/01/1515449620_246_phoebe-tonkin.jpg" style="width:100%" onclick="currentSliderFive(1)" alt="The Woods">
            </div>
            <div class="column">
              <img class="demo-five cursor" src="https://phoebe-tonkin.org/gallery/albums/Appearances/2019/02%2023%20Chanel%20PreOscar/014.jpg" style="width:100%" onclick="currentSliderFive(2)" alt="Cinque Terre">
            </div>
            <div class="column">
              <img class="demo-five cursor" src="https://celebmafia.com/wp-content/uploads/2019/09/phoebe-tonkin-harper-s-bazaar-photoshoot-2019-part-ii-3.jpg" style="width:100%" onclick="currentSliderFive(3)" alt="Mountains and fjords">
            </div>
            <div class="column">
              <img class="demo-five cursor" src="https://yobte.ru/uploads/posts/2020-01/fibi-tonkin-37-foto-22.jpg" style="width:100%" onclick="currentSliderFive(4)" alt="Northern Lights">
            </div>
            <div class="column">
              <img class="demo-five cursor" src="https://i.pinimg.com/originals/9a/c6/d7/9ac6d7b4613fe353782440f76c4f50be.jpg" style="width:100%" onclick="currentSliderFive(5)" alt="Nature and sunrise">
            </div>
            <div class="column">
              <img class="demo-five cursor" src="https://phoebe-tonkin.org/gallery/albums/Television/The%20Originals/Season%201/Screencaps/1x15/theoriginals_s01e15_0025.jpg" style="width:100%" onclick="currentSliderFive(6)" alt="Snowy Mountains">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="questions">
    <div class="question-header">
      <h3>Популярные вопросы</h3>
    </div>
    <div class="question-body">
      <div id="for-q-one" class="q-cards">
        <div class="q-head" onclick="openOrCloseFlex(document.getElementById('question-one'),document.getElementById('for-q-one'))">
          <p>
            <strong>Какие документы нужны для бронирования тура?</strong>
          </p>
        </div>
        <div id="question-one" class="q-body">
          <p>
            -- Для бронирования тура по Европе необходимы данные заграничного и российского паспорта.
          </p>
          <p>
            -- Для бронирования тура по России необходимы данные российского паспорта.
          </p>
        </div>
      </div>
      <div id="for-q-two" class="q-cards">
        <div class="q-head" onclick="openOrCloseFlex(document.getElementById('question-two'),document.getElementById('for-q-two'))">
          <p>
            <strong>Какие варианты (формы) оплаты у Вас существуют?</strong>
          </p>
        </div>
        <div id="question-two" class="q-body">
          <p>
            -- Оплата тура по Европе возможна в офисе, по безналичному расчету и в банкоматах «Альфа-Банк»,«Тинков-Банк»  и «Сбер-Банк ».
          </p>
          <p>
            -- Оплата тура по России возможна в офисе и по безналичному расчету..
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="form-block">
    <div class="form-block-title">
      <h3>Забронировать экскурсию</h3>
    </div>
    <form action="../../functions/excursion.php" method="POST" class="form-main">
      <p><strong>Тип экскурсии:</strong> Групповая сборная</p>
      <div class="form-day">
        <div class="day">
          <input type="radio" name="radio_day" value="1 июня" id="radio-day-one">
          <label for="radio-day-one">
            <p>Завтра</p>
            <strong>1 июня</strong>
          </label>
        </div>
        <div class="day">
          <input type="radio" name="radio_day" value="3 июня" id="radio-day-two">
          <label for="radio-day-two">
            <p>Пятница</p>
            <strong>3 июня</strong>
          </label>
        </div>
        <div class="day">
          <input type="radio" name="radio_day" value="6 июня" id="radio-day-three">
          <label for="radio-day-three">
            <p>Понедельник</p>
            <strong>6 июня</strong>
          </label>
        </div>
      </div>
      <div class="form-time">
        <div class="time">
          <input type="radio" name="radio_time" value="9:00" id="time-one">
          <label for="time-one">
            <p>9:00</p>
          </label>
        </div>
        <div class="time">
          <input type="radio" name="radio_time" value="13:00" id="time-two">
          <label for="time-two">
            <p>13:00</p>
          </label>
        </div>
      </div>
      <div class="form-price">
        <div class="line-adult lines">
          <div class="lines-title">
            <p>Стандартный</p>
          </div>
          <div class="lines-price">1600 ₽</div>
          <div class="lines-select">
            <button type="button" class="minus" onclick="minusPrice('line-adult')">-</button>
            <input class="count" type="text" name="default_bilet"  value="0">           
            <button type="button" class="plus" onclick="plusPrice('line-adult')">+</button>
          </div>
          <div class="lines-final-price">0 ₽</div>
        </div>
        <div class="line-not-adult lines">
          <div class="lines-title">
            <p>Льготный(дети до 16 лет, ветераны, пенсионеры)</p>
          </div>
          <div class="lines-price">600 ₽</div>
          <div class="lines-select">
            <button type="button" class="minus" onclick="minusPrice('line-not-adult')">-</button>
            <input class="count" type="text" name="preferential_bilet"  value="0">
            <button type="button" class="plus" onclick="plusPrice('line-not-adult')">+</button>
          </div>
          <div class="lines-final-price">0 ₽</div>
        </div>
      </div>
      <div class="form-itog">
        <p>Итого:</p><h3><input type="text" name="summ" value="0"> ₽</h3>
      </div>
      <div class="form-name">
        <label for="fullName">
          Имя и Фамилия
          <input type="text"  name="full_name" id="fullName" placeholder="Ваша имя и фамилия ...">
        </label>
        <label for="email">
          E-mail
          <input type="email"  name="email" id="email" placeholder="Ваша почта ...">
        </label>
        <label for="tel">
          Номер телефона
          <input type="tel"  name="tel" id="tel" placeholder="*-***-***-**-**">
        </label>
        <div class="form-btn-block">
          <button type="submit">
            Начать бронирование
          </button>
        </div>
        <div class="form-check-block">
          <label for="notification">
            <input type="checkbox"  name="notification" id="notification">
            <p>После оплаты вы получите квитанцию и уведомление о бронировании.  </p>
          </label><br>
          <p>
            Я соглашаюсь с Условиями использования сайта и даю согласие на
            обработку своих персональных данных в соответствии с Политикой
            обработки персональных данных.
          </p>
        </div>
      </div>
    </form>
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
      <a href="../../Политика-конфиденциальности.docx">Политика конфиденциальности</a>
    </div>
    <div class="footer-footer">
      <p>© DaunSquad           2022 / все права защищены</p>
    </div>
  </footer>




  <script src="../../js/anim_on_scroll.js"></script>
  <script src="../../js/slider.js"></script>
  <script src="../../js/slider-2.js"></script>
  <script src="../../js/slider-3.js"></script>
  <script src="../../js/slider-4.js"></script>
  <script src="../../js/slider-5.js"></script>
  <script src="../../js/page-tour.js"></script>
  <script src="../../js/form-validation.js"></script>
</body>
</html>
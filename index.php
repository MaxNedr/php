<!DOCTYPE html>
<html lang="ru">


<head>;
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашнее задание</title>
    <!--    <link rel="stylesheet" href="style/bootstrap.min.css">-->
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

<div class="all">

    <div class="index" id="index">
        <!-- Start Header  -->
        <div class="img_header">
            <div class="logo">
                <a href="catalog/index.html"> <img src="image/logo.png" alt="logo" width="80%"></a>
            </div>
            <div class="header">
                <header>

                    <?php
                    include 'Lesson_3/Lesson_3_6.php'
                    /*
                                        $menu_item = "<li class='menu'><a class='main_menu' href='#index'> Главная </a></li>";
                                        echo "<ul class='menu'>
                                            <li class='menu'><a class='main_menu' href='#index'> Главная </a></li>
                                            <li class='menu'><a class='main_menu' href='#katalog'> Каталог </a></li>
                                            <li class='menu'><a class='main_menu' href='#kontakty'> Контакты </a></li>
                                        </ul>"
                                        */ ?>
                </header>
            </div>
        </div>
        <!-- Stop Header  -->

        <!-- Start Container-->
        <?php
        $h1 = "<h1>Анатоми&shyческие подушки</h1 >";
        $h2 = "<h2>Магазин подушек XXI века</h2>";
        echo "<div class='container'>
                <hr class='menu_line'>
                <div class='container main_text'>
                   $h1
                    $h2
                    <p> В нашем магазине Вы найдёте <b>решение Ваших проблем</b> со сном</p>
                </div>
                <hr class='up_line'>
            </div>" ?>
        <!-- Stop Container-->
    </div>
    <div class="body_fon_item" id="katalog">
        <!-- Start head Text -->
        <hr class="menu_line">
        <div class="menu_up">
            <div class="hleb">
                <ul>
                    <!-- class="menu_side"-->
                    <li class="menu_side"><a class="main_menu_side" href="#index"> Главная </a></li>
                    <li class="menu_side"><a class="main_menu_side" href="#katalog"> Каталог </a></li>
                    <li class="menu_side"><a class="main_menu_side" href="#kontakty"> Контакты </a></li>
                </ul>
                <!-- <a href="#index">Главная </a> / <a href="#katalog"> Каталог</a> / <a href="#kontakty"> Контакты</a> -->
            </div>
            <div class="main_text">
                <h1>Каталог</h1>
            </div>

        </div>
        <hr class="menu_line">
        <!-- Stop head Text -->

        <!--Start katalog-->

        <div class="block_catalog">
            <div class="item_catalog">
                <p class="name"> Для&nbspмужчин</p>
                <p><a href="catalog/man.html"><img src="image/man.png" alt="" class="item_img"></a></p>
                <p><a href="catalog/man.html" title="" class="podrobnee">Подробнее</a></p>
            </div>
            <div class="item_catalog">
                <p class="name"> Для&nbspженщин</p>
                <p><a href="catalog/woman.html"><img src="image/woman.png" alt="" class="item_img"></a></p>
                <p><a href="catalog/woman.html" title="" class="podrobnee">Подробнее</a></p>
            </div>
            <div class="item_catalog">
                <p class="name"> Классическая</p>
                <p><a href="catalog/classik.html"><img src="image/classik.png" alt="" class="item_img"></a></p>
                <p><a href="catalog/classik.html" title="" class="podrobnee">Подробнее</a></p>
            </div>
            <div class="item_catalog">
                <p class="name"> Мини</p>
                <p><a href="catalog/mini.html"><img src="image/mini.png" alt="" class="item_img"></a></p>
                <p><a href="catalog/mini.html" title="" class="podrobnee">Подробнее</a></p>
            </div>
        </div>

    </div>

    <!--Stop katalog-->
    <div class="fon" id="kontakty">
        <!-- Start head Text -->
        <hr class="menu_line">
        <div class="menu_up">
            <div class="hleb">

                <ul>
                    <!-- class="menu_side"-->
                    <li class="menu_side"><a class="main_menu_side" href="#index"> Главная </a></li>
                    <li class="menu_side"><a class="main_menu_side" href="#katalog"> Каталог </a></li>
                    <li class="menu_side"><a class="main_menu_side" href="#kontakty"> Контакты </a></li>
                </ul>


                <!-- <a href="#index">Главная </a> / <a href="#katalog"> Каталог</a> / <a href="#kontakty"> Контакты</a> -->
            </div>
            <div class="main_text">
                <h1>Контакты</h1>
            </div>

        </div>
        <hr class="menu_line">
        <!-- Stop head Text -->

        <!--Start Adress-->
        <div class="adress">
            <p><b>Адрес: Московская область, город Фрязино, улица Горького, дом 5, Магазин <b>"МЕДТЕХНИКА"</b></b></p>
            <p>Телефон:<a href="tel:+79772829040"> +7(977) 282-90-40 </a></p>
            <p> Email: <a href="mailto:info@lemadi.ru"> info@lemadi.ru </a></p>
        </div>
        <!--Stop Adress-->

        <!--Start Map-->
        <div class="adress">
            <br>
            <p class="adress"><b>Как нас найти</b></p>
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A293a35ed885df08ca4325373b1a0b59a74bee9d623a3c7718d130ffceecc83a1&amp;source=constructor"
                    width="100%" height="300" frameborder="1"></iframe>
            <br>
        </div>
        <!--Stop Map-->

        <!--Start form-->
        <div class="adress">
            <form action="" class="input_all">
                <fieldset>
                    <legend> Напишите нам</legend>
                    <input type="text" placeholder="Имя"> <br>
                    <input type="text" placeholder="Email"> <br>
                    <input type="text" placeholder="Телефон"> <br>
                    <input type="text" placeholder="Тема"> <br>
                    <textarea class="message" name="" id="" cols="30" rows="10" placeholder="Ваше сообщение"></textarea>
                    <br>
                    <input type="submit" value="Отправить">
                    <input type="reset" value="Очистить">
                </fieldset>
            </form>
        </div>
        <!--Stop form-->
    </div>
    <div class="after_container"></div>
    <!-- Start Footer-->
    <footer class="footer_catalog">
        <hr class="menu_line">
        <div class="text_footer">
            <?php
            $date = date('l, F jS, Y');
            echo "<p>$date  &copy Все права защищены </p>"
            ?>

        </div>
    </footer>

    <!-- Stop Footer-->
</div>
</body>

</html>

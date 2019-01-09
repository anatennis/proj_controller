<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><? echo $title;?></title>

    <link rel="stylesheet" type="text/css" href="/css/flex.css">
    <link rel="stylesheet" type="text/css" href="/css/flexbox.css">
    <link rel="stylesheet" type="text/css" href="/css/newsstyle.css">
    <link rel="stylesheet" type="text/css" href="/css/menu.css">
    <link rel="stylesheet" type="text/css" href="/css/slider.css">
</head>
<body>

<div class="container column-container">
    <div class="row-container hbackground">
        <div class="flex-1 btransparent">
            <img src="/pics/shlspb.png" class="logo padding">
        </div>
        <div class="column-container flex-5">
            <div class="flex-container2 flex-1">
                <h1 class="shl padding" style="margin-left: 3%">Saint-petersburg student hockey league</h1>
            </div>
            <div class="flex-container2 flex-1">
                <nav class="flex-container2">
                    <ul id="main">
                        <li><a href="/">Главная</a></li>
                        <li>Турниры
                            <ul class="drop">
                                <div>
                                    <li><a href="/tournament">Чемпионат</a></li>  <!-- !!! исправить-->
                                    <li>Первенство</li>
                                </div>
                            </ul>
                        </li>
                        <li>Команды
                            <ul class="drop">
                                <div>
                                    <li><a href="/teamgasu">Лисы</a></li>
                                    <li>Волки ЛТУ</li>
                                    <li>Политехник</li>
                                    <li>Морские волки</li>
                                    <li>Университет Лесгафта</li>
                                </div>
                            </ul>
                        </li>
                        <li>Статистика
                            <ul class="drop">
                                <div>
                                    <li>Лидеры</li>
                                    <li>Полевые</li>
                                    <li>Вратари</li>
                                </div>
                            </ul>
                        </li>
                        <div id="marker"></div>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="flex-1 lnbackground marginlarge">

    <div class="slider">
        <input class="slider__nav" type="radio" name="slider" title="slide1" checked="checked"/>
        <input class="slider__nav" type="radio" name="slider" title="slide2"/>
        <input class="slider__nav" type="radio" name="slider" title="slide3"/>
        <input class="slider__nav" type="radio" name="slider" title="slide4"/>
        <div class="slider__inner">
            <div class="slider__contents">
                <!-- <h2 class="slider__caption">ГлНовость_1</h2>-->
                <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
                <div class="sl1_img"><img src="/pics/BrOoz4Ag3U8.jpg"></div>
            </div>
            <div class="slider__contents"><!--<i class="slider__image fa fa-newspaper-o"></i>
                <h2 class="slider__caption">newspaper-o</h2>-->
                <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
                <div class="sl2_img"><img src="/pics/ЗК.PNG"></div>
            </div>
            <div class="slider__contents"><!--<i class="slider__image fa fa-television"></i>
                <h2 class="slider__caption">television</h2>-->
                <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
                <div ><img src="/pics/муз.jpg"></div>
            </div>
            <div class="slider__contents"><!--<i class="slider__image fa fa-diamond"></i>
                <h2 class="slider__caption">diamond</h2>-->
                <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
                <div ><img src="/pics/нгвидео.jpg"></div>
            </div>
        </div>
    </div>

</div>

<?php include_once $view ;?>


<div class="flex-1 lnbackground">
    <div class="bottom flex-1 row-container">
        <p>
            <a href="">Privacy Policy</a> |
            <a href="">Terms of Use</a> |
            <a href="">Contact</a><br>
            <span>© 2018 SHL SPb, all rights reserved.</span>
        </p>
        <div class="socialNet">
            <ul>
                <li><a class="twitterNet" href=""></a></li>
                <li><a class="facebookNet" href=""></a></li>
                <li><a class="rssNet" href=""></a></li>
            </ul>
        </div>
    </div>
</div>

<script src="/js/achievments.js"></script>
</body>
</html>

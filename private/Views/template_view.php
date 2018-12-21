<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><? echo $title;?></title>
    <link rel="stylesheet" type="text/css" href="/css/newsstyle.css">
</head>
<body>

<div class="container column-container">

    <div class="row-container hbackground">
        <div class="flex-1 btransparent">
            <img src="public_html/pics/shlspb.png" class="logo padding">
        </div>
        <div class="column-container flex-5">
            <div class="flex-container2 flex-1">
                <h1 class="shl padding" style="margin-left: 3%">Saint-petersburg student hockey league</h1>
            </div>
            <div class="flex-container2 flex-1 hiddenmenu">
                <ul class="flex-container2 menu">
                    <li><a href="#"> Турниры </a></li>
                    <li><a href="#"> Команды </a>
                        <ul class="submenu">
                            <li><a href="/teamgasu"> Лисы СПбГАСУ</a></li>
                            <li>Волки ЛТУ</li>
                            <li>Барсы ИТМО</li>
                        </ul>
                    </li>
                    <li><a href="#"> Стадионы </a></li>
                    <li><a href="#"> Хоккеисты </a></li>
                </ul>
            </div>

        </div>

    </div>

    <div class="xsinvisible emptyl">

        <ul class="flex-container2 menu  xsinvisible">
            <li><a href="#"> Меню </a>
                <ul class="submenu">
                    <li><a href="#"> Турниры</a></li>
                    <li><a href="team-page-l.html">Команды</a></li>
                    <li>Стадионы</li>
                    <li>Хоккеисты</li>
                </ul>
            </li>
        </ul>

    </div>

     <?php include_once $view ;?>

</div>

<script src="/js/achievments.js"></script>
</body>
</html>

<head><link rel="stylesheet" href="css/mainmenu.css"></head>
<ul class="upmenu">
    <li><a class="menuvar" href="/index">Главная</a></li>
    <li><a class="menuvar" href="/games">Доступные матчи</a></li>
    <?php if ($_SESSION['login']=='admin') { ?>
        <li><a class="menuvar" href="/add_game">Добавить матч</a></li>
        <li><a class="menuvar" href="/users">Судьи</a></li>
    <?php } ;?>
    <li><a class="menuvar" href="/contacts">Контакты</a></li>
    <li><a class="menuvar" href="/logout">Выход</a></li>
</ul>


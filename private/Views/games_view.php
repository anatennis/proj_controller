<link rel="stylesheet" href="css/mainmenu.css">
<link rel="stylesheet" href="css/modal.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/games.css">
<link rel="stylesheet" type="text/css" href="css/tourns.css">
<ul class="upmenu">
    <li><a class="menuvar" href="/index">Главная</a></li>
    <li><a class="menuvar" href="/games">Доступные матчи</a></li>
    <?php if ($_SESSION['login']=='admin') { ?>
        <li><a class="menuvar" href="/add_game">Добавить матч</a></li>
    <?php } ;?>
    <li><a class="menuvar" href="/contacts">Контакты</a></li>
    <li><a class="menuvar" href="/logout">Выход</a></li>
</ul>

<h2 class="header_games">Доступные матчи</h2>
<? foreach ($games as $game) :?>
    <div class="game">
        <a href="/game/<?php echo $game['id'];?>">
            <?php echo $game['team1']; ?>
            <?php echo $game['result']; ?>
            <?php echo $game['team2']; ?>
        </a>
    </div>
<?php endforeach;?>

<!--<div class="game"><a href="/game/1">Гасу - Лту</a> </div>
<div class="game"><a href="/game/2">Гасу - Политех</a> </div>
<div class="game"><a href="/game/3">Политех - ЛТУ</a> </div>
<div class="game"><a href="/game/1">Гасу - Лту</a> </div>
<div class="game"><a href="/game/2">Гасу - Политех</a> </div>-->
<?php if ($_SESSION['login'] == 'admin') { ;?>
<div class="game add_game"><a href="/add_game">+</a> </div>
<?php } ;?>
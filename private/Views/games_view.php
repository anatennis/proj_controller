<link rel="stylesheet" href="/css/mainmenu.css">
<link rel="stylesheet" href="/css/modal.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/games.css">
<link rel="stylesheet" type="text/css" href="/css/tourns.css">
<ul class="upmenu">
    <li><a class="menuvar" href="/index">Главная</a></li>
    <li><a class="menuvar" href="/games">Доступные матчи</a></li>
    <?php if ($_SESSION['login']=='admin') { ?>
        <li><a class="menuvar" href="/add_game">Добавить матч</a></li>
    <?php } ;?>
    <li><a class="menuvar" href="/contacts">Контакты</a></li>
    <li><a class="menuvar" href="/logout">Выход</a></li>
</ul>

<h2 class="header_games"><p>Доступные матчи</p></h2>

<? foreach ($games as $game) :?>
    <div class="game">
        <a href="/game/<?php echo $game['id'];?>" class="">
            <img src="/pics/<?php foreach ($teams as $team) {
                if ($game['team1']==$team['name']) {
                    echo $team['logo'];
                    break;
                }
            };?>" class="img1">
            <p class="tname"> <?php echo $game['team1'];?> </p>
                -:-
            <p class="tname"> <?php echo $game['team2'];?> </p>
            <img src="/pics/<?php foreach ($teams as $team) {
                if ($game['team2']==$team['name']) {
                    echo $team['logo'];
                    break;
                }
            };?>" class="img2">
        </a>
    </div>
<?php endforeach;?>

<?php if ($_SESSION['login'] == 'admin') { ;?>
<!--<div class="add_game"><a href="">+</a> </div>-->
<div class="ccd"><a href="/add_game" class="ddott">Добавить игру</a></div>
<?php } ;?>
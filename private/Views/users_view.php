<head>
    <link rel="stylesheet" href="/css/mainmenu.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/flex.css">
    <link rel="stylesheet" href="/css/match.css">
    <link rel="stylesheet" href="/css/users.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Marmelad" >

</head>
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

<table id="team2" border="1">
    <thead>
    <tr>
        <th data-type="number">#</th>
        <th data-type="string">Имя</th>
        <th data-type="string">Логин</th>
        <th data-type="string">Почта</th>
        <th data-type="string">Назначенные матчи</th>
    </tr>
    <?php $i=0; foreach ($users as $user) { $i++; ?>
        <tr>
            <th data-type="number"><?php echo $i;?></th>
            <th data-type="string"><?php echo $user['name'];?></th>
            <th data-type="string"><?php echo $user['login'];?></th>
            <th data-type="string"><?php echo $user['email'];?></th>
            <th data-type="string"><?php foreach ($games as $game) {
                if ($game['id_user']== $user['id']) { echo $game['id'].'. ';
                echo $game['team1'].' - ';echo $game['team2'].'<br>';}} ;?></th>
        </tr>
    <?php } ;?>
    </thead>
</table>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/css/mainmenu.css">
    <link rel="stylesheet" href="/css/modal.css">
    <link rel="stylesheet" href="/css/add_game.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>


</head>
<body>

<ul class="upmenu">
    <li><a class="menuvar" href="/index">Главная</a></li>
    <li><a class="menuvar" href="/games">Доступные матчи</a></li>
    <li><a class="menuvar" href="/add_game">Добавить матч</a></li>
    <li><a class="menuvar" href="/contacts">Контакты</a></li>
</ul>

<div class="flex-1 marginlarge" style="overflow: hidden"></div>

<div class="flex-1 marginlarge">
<form id="add_game" method="post" action="/add_gameact">
    <select class="select_team" name="team1">
        <?php foreach ($teams as $team):?>
        <option> <?php echo $team['name']; ?> </option>
        <?php endforeach;?>
    </select>
    <select class="select_team" name="team2">
        <?php foreach ($teams as $team):?>
            <option> <?php echo $team['name']; ?> </option>
        <?php endforeach;?>
    </select>
    <select class="select_team" name="user">
        <?php foreach ($users as $user):?>
            <option> <?php echo ($user['id'].'.'.$user['name']); ?> </option>
        <?php endforeach;?>
    </select>
    <input type="submit" value="Добавить игру">
</form>
</div>
<div class="flex-1 marginlarge"></div>

<script src="/js/modalreg.js"></script>
<script src="/js/enter_account_form.js"></script>
<script src="/js/sendForm.js"></script>

</body>
</html>
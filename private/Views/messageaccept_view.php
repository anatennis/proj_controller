<head>
    <link rel="stylesheet" href="/css/mainmenu.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/flex.css">
    <link rel="stylesheet" href="/css/messacc.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Marmelad" >

</head>
<?php if (isset($_SESSION['login'])) { ?>
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
<?php } ;?>

<div style="color: white; padding: 10px; background: #0c4ddb; text-align: center" class="blok">
    Ваше сообщение принято! Мы скоро с вами свяжемся. :)<br>
    Перенаправление на главную страницу произойдет через 5 секунд.
    <script> window.setTimeout(function() { window.location = 'index'; }, 5000) </script>

</div>
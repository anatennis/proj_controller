<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/css/mainmenu.css">
    <link rel="stylesheet" href="/css/modal.css">
    <link rel="stylesheet" href="/css/messages.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>


</head>
<body>

<ul class="upmenu">
    <li><a class="menuvar" href="/index">Главная</a></li>
    <li><a class="menuvar" href="/games">Доступные матчи</a></li>
    <li><a class="menuvar" href="/add_game">Добавить матч</a></li>
    <li><a class="menuvar" href="/contacts">Контакты</a></li>
    <li><a class="menuvar" href="/messages">Сообщения</a></li>
</ul>
<div class="row-container container" >
<?php foreach ($messages as $message) { ?>
    <div class="flex-1 ">
        <div id="add_game">
            <div class="select_team name"><?php echo $message['name'];?></div>
            <div class="select_team name"><?php echo $message['date'];?></div>
            <div class="select_team name"><?php echo $message['email'];?></div>
            <div class="select_team message"><?php echo $message['message'];?></div>
        </div>
    </div>
<?php } ;?>
</div>
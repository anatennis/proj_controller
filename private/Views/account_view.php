<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/mainmenu.css">
    <link rel="stylesheet" href="css/modal.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>


</head>
<body>

<ul class="upmenu">
    <li><a class="menuvar" href="/index">Главная</a></li>
    <li><a class="menuvar" href="/games">Доступные матчи</a></li>
    <?php if ($_SESSION['login']=='admin') { ?>
    <li><a class="menuvar" href="/add_game">Добавить матч</a></li>
    <li><a class="menuvar reg" href="#"><button class="regbutton">Зарегистрировать пользователя</button></a></li>
    <?php } ;?>
    <li><a class="menuvar" href="/contacts">Контакты</a></li>
    <li><a class="menuvar" href="/logout">Выход</a></li>


</ul>


<div class="modal-overlay">
    <div class="modal">

        <a class="close-modal">
            <svg fill="#ffffff" viewBox="0 0 20 20">
                <path d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,
                0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,
                0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,
                0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,
                0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,
                0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z">
                </path>
            </svg>
        </a><!-- close modal -->

        <div class="modal-content">
            <form action="register" method="post">
                <input type="text" name="name" id="name" placeholder="Имя"  required/>
                <input type="text" name="email" id="email" placeholder="Почта"  required/>
                <input type="text" name="login" id="login" placeholder="Логин"  required/>
                <input type="password" name="password" id="password" placeholder="Пароль" required/>
                <input type="password" name="password" id="password" placeholder="Повторите пароль" required/>
                <div>
                    <input type="submit" value="Зарегистрировать нового пользователя" id="reg-button"/>
                </div>
            </form>
        </div><!-- content -->

    </div><!-- modal -->
</div><!-- overlay -->



<div class="main_img" >
    <?php if ($reg_success) { ?>
        <p class="reg_success">Пользователь успешно зарегистрирован! Через 5 секунд будет произведено перенаправление на главную страницу</p>
        <script> window.setTimeout(function() { window.location = 'index'; }, 5000) </script>
    <?php } ?>
    <?php if ($user_exists) { ?>
        <p class="reg_success">Пользователь с таким логином уже существует. Попробуйте еще раз.</p>
        <script> window.setTimeout(function() { window.location = 'index'; }, 5000) </script>
    <?php } ?>
</div>


<script src="/js/enter_account_form.js"></script>
<script src="/js/sendForm.js"></script>
<script src="/js/modalreg.js"></script>

</body>
</html>
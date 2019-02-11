<head><link rel="stylesheet" href="/css/mainmenu.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/pics/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/st/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/st/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/st/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/st/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/st/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/st/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/util.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>
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

<div class="container-contact100" style="background: #464a4e">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" method="post" action="/messageaccept">
				<span class="contact100-form-title">
					Жалобы или просто пожелания можно оставить здесь :)
				</span>

            <label class="label-input100" for="first-name">Имя и дата</label>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
                <input id="first-name" class="input100" type="text" name="name" placeholder="Имя" required>
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
                <input class="input100" type="date" name="date" placeholder="Дата" required>
                <span class="focus-input100"></span>
            </div>

            <label class="label-input100" for="email">Email</label>
            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <input id="email" class="input100" type="text" name="email" placeholder="example@email.com" required>
                <span class="focus-input100"></span>
            </div>

            <label class="label-input100" for="message">Сообщение</label>
            <div class="wrap-input100 validate-input" data-validate = "Message is required">
                <textarea id="message" class="input100" name="message" placeholder="Текст сообщения" required></textarea>
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn">
                <!--<button >-->
                    <input type="submit" value="Отправить" class="contact100-form-btn">
                   <!-- Отправить
                </button>-->
            </div>
        </form>

        <div class="contact100-more flex-col-c-m" style="background-image: url('/pics/jb.jpg');">
            <div class="flex-w size1 p-b-47">
                <div class="txt1 p-r-25">
                    <span class="lnr lnr-map-marker"></span>
                </div>

                <div class="flex-col size2">
						<span class="txt1 p-b-20">
							Адрес
						</span>

                    <span class="txt2">
							Санкт-Петербурга, пр-т Добролюбова 18, оф.218
						</span>
                </div>
            </div>

            <div class="dis-flex size1 p-b-47">
                <div class="txt1 p-r-25">
                    <span class="lnr lnr-phone-handset"></span>
                </div>

                <div class="flex-col size2">
						<span class="txt1 p-b-20">
							Телефон
						</span>

                    <span class="txt3">
							+7 911 920 92 77
						</span>
                </div>
            </div>

            <div class="dis-flex size1 p-b-47">
                <div class="txt1 p-r-25">
                    <span class="lnr lnr-envelope"></span>
                </div>

                <div class="flex-col size2">
						<span class="txt1 p-b-20">
							Почта администратора
						</span>

                    <span class="txt3">
							admin@example.com
						</span>
                </div>
            </div>
        </div>
    </div>
</div>



<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="/st/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/st/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/st/bootstrap/js/popper.js"></script>
<script src="/st/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/st/select2/select2.min.js"></script>

<!--===============================================================================================-->
<script src="/st/daterangepicker/moment.min.js"></script>
<script src="/st/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/st/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="/js/main.js"></script>

</body>
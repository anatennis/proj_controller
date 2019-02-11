<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/flex.css">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/match.css">
    <link rel="stylesheet" href="/css/matchred.css">
    <!--<link rel="stylesheet" href="css/tourns.css">-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Marmelad" >
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script></head>
<body>

<!--menu-->

<div class="container column-container">
    <div class="row-container hbackground">
        <div class="flex-1 btransparent">
            <img src="/pics/shlspb.png" class="logo padding">
        </div>
        <div class="column-container flex-5">
            <div class="flex-container2 flex-1">
                <h1 class="shl padding" style="margin-left: 3%">Saint-petersburg student hockey league</h1>
            </div>
            <div class="flex-container2 flex-1">
                <nav class="flex-container2">
                    <ul id="main">
                        <li>Главная</li>
                        <li>Турниры
                            <ul class="drop">
                                <div>
                                    <li>Чемпионат</li>
                                    <li>Первенство</li>
                                    <li>Горняк</li>
                                </div>
                            </ul>
                        </li>
                        <li>Команды
                            <ul class="drop">
                                <div>
                                    <li>Лисы</li>
                                    <li>Волки ЛТУ</li>
                                    <li>Политехник</li>
                                    <li>Морские волки</li>
                                    <li>Университет Лесгафта</li>
                                </div>
                            </ul>
                        </li>
                        <li>Статистика
                            <ul class="drop">
                                <div>
                                    <li>Лидеры</li>
                                    <li>Полевые</li>
                                    <li>Вратари</li>
                                </div>
                            </ul>
                        </li>
                        <div id="marker"></div>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<form name="game">
    <div class="flex-1 lnbackground column-container marginlarge">
        <div class="hbackground h3back backlastgames">
            <h3 class="shl padding gamename">Матч Лисы - Волки ЛТУ LIVE</h3>
        </div>

        <div class="flex-1 row-container marginlarge">
            <div class="flex-1 btransparent">
                <img src="/pics/gasu.png" class="teamlogo1 padding">
                <p class="teamname">Лисы</p>
            </div>
            <div class="flex-1 btransparent res_common">
                    <div class="result"><div id="result1">0</div> : <div id="result2">0</div> </div>
                <p class="gamedate">12.02.18</p>
            </div>
            <div class="flex-1 btransparent">
                <img src="/pics/ftu.png" class="teamlogo1 padding">
                <p class="teamname">Волки ЛТУ</p>
            </div>
        </div>

        <div class="hbackground h3back backlastgames">
            <h3 class="shl padding gamename">Голы</h3>
        </div>
        <div class="flex-1 row-container bottomborder">
            <div class="flex-1 column-container marginlarge goalsteam1" id="goalsteam1">

            </div>
            <div class="flex-1 column-container goalsteam2" id="goalsteam2">

            </div>
        </div>

        <div class="bottomborder">
            <h3 class="shl gamename colorfalls" >Удаления</h3>
        </div>
        <div class="flex-1 row-container">
            <div class="flex-1 column-container marginlarge goalsteam1" id="team1falls">

            </div>
            <div class="flex-1 column-container goalsteam2" id="team2falls">

            </div>
        </div>


        <div class="hbackground h3back backlastgames">
            <h3 class="shl padding gamename">Составы команд</h3>
        </div>
        <div class="flex-1 row-container marginlarge">
            <div class="flex-1 padding">Лисы
                <table id="team1" border="1">
                    <thead>
                    <tr>
                        <th data-type="number">#</th>
                        <th data-type="string">Имя</th>
                        <th data-type="string">Амплуа</th>
                        <th data-type="string">Игровой номер</th>
                    </tr>
                    <?php foreach ($players1 as $player) { $i++; ?>
                        <tr>
                            <th data-type="number"><?php echo $i;?></th>
                            <th data-type="string"><?php echo $player['name'];?></th>
                            <th data-type="string"><?php echo $player['role'];?></th>
                            <th data-type="string"><?php echo $player['number'];?></th>
                        </tr>
                    <?php } ;?>
                    </thead>
                </table>
            </div>
            <div class="flex-1 padding">Волки ЛТУ
                <table id="team2" border="1">
                    <thead>
                    <tr>
                        <th data-type="number">#</th>
                        <th data-type="string">Имя</th>
                        <th data-type="string">Амплуа</th>
                        <th data-type="string">Игровой номер</th>
                    </tr>
                    <?php foreach ($players1 as $player) { $i++; ?>
                        <tr>
                            <th data-type="number"><?php echo $i;?></th>
                            <th data-type="string"><?php echo $player['name'];?></th>
                            <th data-type="string"><?php echo $player['role'];?></th>
                            <th data-type="string"><?php echo $player['number'];?></th>
                        </tr>
                    <?php } ;?>
                    </thead>
                </table>
            </div>
        </div>
        <div class="flex-1 row-container darkgrayback">
            <div id="fminutes" class="flex-1 row-container stat">
                <div class="flex-2">
                    <div class="ct-series-a ct-slice-donut" id="chart3" style="display: block"></div></div>
                <div class="flex-1 statnames">
                    <p>Штрафные минуты</p>
                    <p>Лисы 10</p>
                    <p>Волки ЛТУ 2 12</p>
                </div>
            </div>
            <div id='shots' class="flex-1 stat row-container padding">
                <div class="flex-2">
                    <div class="ct-series-a ct-slice-donut" id="chart1" style="display: block"></div></div>
                <div class="flex-1 statnames">
                    <p>Броски</p>
                    <p>Лисы 34</p>
                    <p>Волки 45</p>
                </div>
            </div>
            <div id='refshots' class="flex-1 row-container stat">
                <div class="flex-2">
                    <div class="ct-series-a ct-slice-donut" id="chart2" style="display: block"></div></div>
                <div class="flex-1 statnames">
                    <p>Отраженные броски</p>
                    <p>Лисы 92.4 %</p>
                    <p>Волки 2 96.1 %</p>
                </div>
            </div>


        </div>
    </div>

    </div>

</form>

<script src="/js/match.js"></script>
<script src="/js/match_socket.js"></script>
</body>
</html>
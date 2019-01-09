<!--для редактирования матча, нет контроллера, доделать-->

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/flex.css">
    <link rel="stylesheet" href="css/flex.css">
    <link rel="stylesheet" href="css/newsstyle.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/match.css">
    <link rel="stylesheet" href="css/matchred.css">
    <!--<link rel="stylesheet" href="css/tourns.css">-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Marmelad" >
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script></head>
<body>



<div class="flex-1 lnbackground column-container marginlarge">
    <div class="hbackground h3back backlastgames">
        <h3 class="shl padding gamename">Матч Команда 1 - Команда 2</h3>
        <div class="clock">
            <div id="minute">60</div>
            <div id="second">00</div>
        </div>
        <div class="startbut"><input type="button" value="Старт"></div>  <!--/*!!!!!!!!!!!!!!!!!!!!!!!*/-->
    </div>

    <div class="flex-1 row-container marginlarge">
        <div class="flex-1 btransparent">
            <img src="shlspb.png" class="teamlogo1 padding">
            <p class="teamname">Team1</p>
        </div>
        <div class="flex-1 btransparent res_common">
            <div class="result"><div id="res1">0</div> : <div id="res2">0</div> </div> <!--/*!!!!!!!!!!!!!!!!!!!!!!!*/-->
            <p class="gamedate">12.02.18</p>
        </div>
        <div class="flex-1 btransparent">
            <img src="shlspb.png" class="teamlogo1 padding">
            <p class="teamname">Team2</p>
        </div>
    </div>

    <div class="hbackground h3back backlastgames">
        <h3 class="shl padding gamename">Голы и удаления</h3>
    </div>
    <div class="flex-1 row-container bottomborder">
        <div class="flex-1 column-container marginlarge goalsteam1" id="goalsteam1">
            <div class="flex-1 goal">
                <nobr>
                    <div class="numofgoal">#1</div>
                    <select size="1" name="type[1]" style="width:20%">
                        <option value="text">--гол--</option>
                    </select>
                    <select size="1" name="type[1]" style="width:20%">
                        <option value="text">--ассистент1--</option>
                    </select>
                    <select size="1" name="type[1]" style="width:20%">
                        <option value="text">--ассистент2--</option>
                        <option value="text">--ассистентап2--</option>
                    </select>
                    <div class="timeofgoal"></div>
                    <div class="powplay"></div>
                    <a style="color:red;" onclick="return deleteFieldteam1(this)" href="#">[—]</a>
                    <a style="color:green;" onclick="return addFieldteam1(1)" href="#">[+]</a>
                </nobr>
            </div>
        </div>
        <div class="flex-1 column-container goalsteam2" id="goalsteam2">
            <div class="flex-1 goal">
                <nobr>
                    <div class="numofgoal">#1</div>
                    <select size="1" name="type[1]" style="width:20%">
                        <option value="text">--гол--</option>
                    </select>
                    <select size="1" name="type[1]" style="width:20%">
                        <option value="text">--ассистент1--</option>
                    </select>
                    <select size="1" name="type[1]" style="width:20%">
                        <option value="text">--ассистент2--</option>
                        <option value="text">--ассистентап2--</option>
                    </select>
                    <div class="timeofgoal"></div>
                    <div class="powplay"></div>
                    <a style="color:red;" onclick="return deleteFieldteam2(this)" href="#">[—]</a>
                    <a style="color:green;" onclick="return addFieldteam2()" href="#">[+]</a>
                </nobr>
            </div>
        </div>
    </div>

    <div class="bottomborder">
        <h3 class="shl gamename colorfalls">Удаления</h3>
    </div>
    <div class="flex-1 row-container">
        <div class="flex-1 column-container marginlarge goalsteam1">
            <div class="flex-1 goal">
                <div class="timeofgoal">12:44</div>
                Петров А
                <div class="numofgoal">2 мин</div>
                <div class="nameoffall">ЗД-КЛ</div>
            </div>
        </div>
        <div class="flex-1 column-container goalsteam2">
            <div class="flex-1 goal">
                <div class="timeofgoal">03:44</div>
                Петров А
                <div class="numofgoal">2 мин</div>
                <div class="nameoffall">БЛОК</div>
            </div>
            <div class="flex-1 goal">
                <div class="timeofgoal">17:44</div>
                Ламин П
                <div class="numofgoal">2 мин</div>
                <div class="nameoffall">ПОДН</div>
            </div>
            <div class="flex-1 goal">
                <div class="timeofgoal">21:44</div>
                Картин Д
                <div class="numofgoal">2 + 2 мин</div>
                <div class="nameoffall">ВС-КЛ</div>
            </div>
        </div>
    </div>


    <div class="hbackground h3back backlastgames">
        <h3 class="shl padding gamename">Составы команд</h3>
    </div>
    <div class="flex-1 row-container marginlarge">
        <div class="flex-1 padding">Команда 1
            <table id="team1" border="1">
                <thead>
                <tr>
                    <th data-type="number">#</th>
                    <th data-type="string">Имя</th>
                    <th data-type="string">Амплуа</th>
                    <th data-type="string">Игровой номер</th>
                    <th data-type="string">Метка</th>
                </tr>
                </thead>
            </table>
        </div>
        <div class="flex-1 padding">Team 2
            <table id="team2" border="1">
                <thead>
                <tr>
                    <th data-type="number">#</th>
                    <th data-type="string">Имя</th>
                    <th data-type="string">Амплуа</th>
                    <th data-type="string">Игровой номер</th>
                    <th data-type="string">Метка</th>
                </tr>
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
                <p>Team 1 10</p>
                <p>Team 2 12</p>
            </div>
        </div>
        <div id='shots' class="flex-1 stat row-container padding">
            <div class="flex-2">
                <div class="ct-series-a ct-slice-donut" id="chart1" style="display: block"></div></div>
            <div class="flex-1 statnames">
                <p>Броски</p>
                <p>Team 1 34</p>
                <p>Team 2 45</p>
            </div>
        </div>
        <div id='refshots' class="flex-1 row-container stat">
            <div class="flex-2">
                <div class="ct-series-a ct-slice-donut" id="chart2" style="display: block"></div></div>
            <div class="flex-1 statnames">
                <p>Отраженные броски</p>
                <p>Team 1 92.4 %</p>
                <p>Team 2 96.1 %</p>
            </div>
        </div>


    </div>
</div>

</div>


<script src="js/match.js"></script>
<script src="js/matchred.js"></script>
</body>

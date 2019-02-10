<!--для редактирования матча, нет контроллера, доделать-->

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/css/flex.css">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/match.css">
    <link rel="stylesheet" href="/css/matchred.css">
    <!--<link rel="stylesheet" href="css/tourns.css">-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Marmelad" >
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script></head>


<form name="game" id="gameform"> <!--method="post" action=""-->
    <div class="flex-1 lnbackground column-container marginlarge">
        <div class="hbackground h3back backlastgames">
            <h3 class="shl padding gamename">Матч <?php echo $team1['name'];?> -  <?php echo $team2['name'];?> </h3>
            <div class="clock">
                <div id="minute">00</div>
                <div id="second">03</div>
            </div>
            <div class="startbut"><input type="button" value="Старт" id="startstop"></div>  <!--/*!!!!!!!!!!!!!!!!!!!!!!!*/-->
        </div>

        <div class="flex-1 row-container marginlarge">
            <div class="flex-1 btransparent">
                <img src="/pics/<?php echo $team1['logo'];?>" class="teamlogo1 padding">
                <p class="teamname"> <?php echo $team1['name'];?> </p>
            </div>
            <div class="flex-1 btransparent res_common">
                <div class="result"><div id="res1">0</div> : <div id="res2">0</div> </div> <!--/*!!!!!!!!!!!!!!!!!!!!!!!*/-->
                <!--<p class="gamedate">12.02.18</p>-->
            </div>
            <div class="flex-1 btransparent">
                <img src="/pics/<?php echo $team2['logo'];?>" class="teamlogo1 padding">
                <p class="teamname"> <?php echo $team2['name'];?> </p>
            </div>
        </div>

        <div class="hbackground h3back backlastgames">
            <h3 class="shl padding gamename">Голы и удаления</h3>
        </div>
        <div class="flex-1 row-container bottomborder">
            <div class="flex-1 column-container marginlarge goalsteam1" id="goalsteam1">
                <div class="flex-1 goal">
                    <nobr>
                        <a style="color:red;" onclick="return deleteFieldteam1(this)" href="#">[—]</a>
                        <a style="color:green;" onclick="return addFieldteam1(1)" href="#">[+]</a>
                    </nobr>
                </div>
            </div>
            <div class="flex-1 column-container goalsteam2" id="goalsteam2">
                <div class="flex-1 goal">
                    <nobr>
                        <a style="color:red;" onclick="return deleteFieldteam2(this)" href="#">[—]</a>
                        <a style="color:green;" onclick="return addFieldteam2()" href="#">[+]</a>
                    </nobr>
                </div>
            </div>
        </div>

        <div class="bottomborder">
            <h3 class="shl gamename colorfalls">Удаления</h3>
        </div>
        <div class="flex-1 row-container bottomborder">
            <div class="flex-1 column-container marginlarge goalsteam1" id="fallsteam1">
                <div class="flex-1 goal">
                    <nobr>
                        <a style="color:red;" onclick="return deleteFallteam1(this)" href="#">[—]</a>
                        <a style="color:green;" onclick="return addFallteam1()" href="#">[+]</a>
                    </nobr>
                </div>
            </div>
            <div class="flex-1 column-container goalsteam2" id="fallsteam2">
                <div class="flex-1 goal">
                    <nobr>
                        <a style="color:red;" onclick="return deleteFallteam2(this)" href="#">[—]</a>
                        <a style="color:green;" onclick="return addFallteam2()" href="#">[+]</a>
                    </nobr>
                </div>
            </div>
        </div>
        <div class="bottomborder">
            <input type="submit" class="shl gamename colorfalls" style="margin-left: 40%" value="Фиксировать">
        </div>
        <div class="hbackground h3back backlastgames">
            <h3 class="shl padding gamename">Составы команд</h3>
        </div>
        <div class="flex-1 row-container marginlarge">
            <div class="flex-1 padding"><?php echo $team1['name'];?>
                <table id="team1q" border="1">
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
            <div class="flex-1 padding"><?php echo $team2['name'];?>
                <table id="team2" border="1">
                    <thead>
                    <tr>
                        <th data-type="number">#</th>
                        <th data-type="string">Имя</th>
                        <th data-type="string">Амплуа</th>
                        <th data-type="string">Игровой номер</th>
                    </tr>
                    <?php $i=0; foreach ($players2 as $player) { $i++; ?>
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
            <div id='shots' class="flex-1 stat row-container padding">
                <div class="flex-2">
                    <div class="ct-series-a ct-slice-donut" id="chart1" style="display: block"></div></div>
                <div class="flex-1 statnames">
                    <p>Броски</p>
                    <p><?php echo $team1['name'];?><input style="width: 30px" type="number" min="0" step="1" id="s1" value="0"></p>
                    <p><?php echo $team2['name'];?><input style="width: 30px" type="number" min="0" step="1" id="s2" value="0"></p>
                </div>
            </div>
            <div id='refshots' class="flex-1 row-container stat">
                <div class="flex-2">
                    <div class="ct-series-a ct-slice-donut" id="chart2" style="display: block"></div></div>
                <div class="flex-1 statnames">
                    <p>Отраженные броски</p>
                    <p><?php echo $team1['name'];?> <div id="sp1"></div> %</p>
                    <p><?php echo $team2['name'];?> <div id="sp2"></div> %</p>
                </div>
            </div>

        </div>
    </div>

    </div>

    <div><a href="/games"><input type="button" value="Назад"></a></div>
    <div style="display: none" id="t1"><?php echo $team1['id'];?></div>
    <div style="display: none" id="t2"><?php echo $team2['id'];?></div>
</form>


<script src="/js/matchred.js"></script>
<script src="/js/match.js"></script>
<script src="js/match_socket.js"></script>

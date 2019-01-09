<head>
    <link rel="stylesheet" href="css/match.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Marmelad" >
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script></head>
<body>

<div class="flex-1 lnbackground column-container marginlarge">
    <div class="hbackground h3back backlastgames">
        <h3 class="shl padding gamename">Матч <?php echo $team1['name'];?> - <?php echo $team2['name'];?></h3>
        <div class="clock">
            <div id="minute">60</div>
            <div id="second">00</div>
        </div>
    </div>

    <div class="flex-1 row-container marginlarge">
        <div class="flex-1 btransparent">
            <img src="/pics/<?php echo $team1['logo'];?>" class="teamlogo1 padding">
            <p class="teamname"><?php echo $team1['name'];?></p>
        </div>
        <div class="flex-1 btransparent res_common">
            <div class="result"><?php echo $game['result'];?></div>
            <p class="gamedate"><?php echo $game['date'];?></p>
        </div>
        <div class="flex-1 btransparent">
            <img src="/pics/<?php echo $team2['logo'];?>" class="teamlogo1 padding">
            <p class="teamname"><?php echo $team2['name'];?></p>
        </div>
    </div>

    <div class="hbackground h3back backlastgames">
        <h3 class="shl padding gamename">Голы и удаления</h3>
    </div>
    <div class="flex-1 row-container bottomborder">
        <div class="flex-1 column-container marginlarge goalsteam1">
            <? foreach ($team1goals as $team1goal) :?>
                <div class="flex-1 goal"><div class="numofgoal">#<?php echo $team1goal['number'];?></div>
                    <?php
                    echo $team1goal['goal'];
                    if ($team1goal['assist1']!=null) {
                        echo $team1goal['assist1'];
                        if ($team1goal['assist2']!=null) {
                            echo $team1goal['assist2'];
                        }} ?>
                    <div class="timeofgoal"><?php echo $team1goal['date'];?></div>
                    <div class="powplay"><?php if ($team1goal['powplay']!=null) echo $team1goal['powplay'];?></div>
                </div>
            <?php endforeach;?>
        </div>
        <div class="flex-1 column-container goalsteam2">
            <? foreach ($team2goals as $team2goal) :?>
                <div class="flex-1 goal"><div class="numofgoal">#<?php echo $team2goal['number'];?></div>
                    <?php
                    echo $team2goal['goal'];
                    if ($team2goal['assist1']!=null) {
                        echo $team2goal['assist1'];
                        if ($team2goal['assist2']!=null) {
                            echo $team2goal['assist2'];
                        }} ?>
                    <div class="timeofgoal"><?php echo $team2goal['date'];?></div>
                    <div class="powplay"><?php if ($team2goal['powplay']!=null) echo $team2goal['powplay'];?></div>
                </div>
            <?php endforeach;?>
        </div>
    </div>

    <div class="bottomborder">
        <h3 class="shl gamename colorfalls">Удаления</h3>
    </div>
    <div class="flex-1 row-container">
        <div class="flex-1 column-container marginlarge goalsteam1">
            <? foreach ($team1falls as $team1fall) :?>
                <div class="flex-1 goal">
                    <div class="timeofgoal"><?php echo $team1fall['date'];?></div>
                    <?php echo $team1fall['name'];?>
                    <div class="numofgoal"><?php echo $team1fall['dur'];?></div>
                    <div class="nameoffall"><?php echo $team1fall['typeoff'];?></div>
                </div>
            <?php endforeach;?>
        </div>
        <div class="flex-1 column-container goalsteam2">
            <? foreach ($team2falls as $team2fall) :?>
                <div class="flex-1 goal">
                    <div class="timeofgoal"><?php echo $team2fall['date'];?></div>
                    <?php echo $team2fall['name'];?>
                    <div class="numofgoal"><?php echo $team2fall['dur'];?></div>
                    <div class="nameoffall"><?php echo $team2fall['typeoff'];?></div>
                </div>
            <?php endforeach;?>
        </div>
    </div>


    <div class="hbackground h3back backlastgames">
        <h3 class="shl padding gamename">Составы команд</h3>
    </div>
    <div class="flex-1 row-container marginlarge">
        <div class="flex-1 padding"><?php echo $team1['name'];?>
            <table id="team1" border="1">
                <thead>
                <tr>
                    <th data-type="number">#</th>
                    <th data-type="string">Имя</th>
                    <th data-type="string">Амплуа</th>
                    <th data-type="string">№</th>
                    <th data-type="string">Метка</th>
                </tr>
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
                <p><?php echo $team1['name'];?> <?php echo $team1['fminutes'];?></p>
                <p><?php echo $team2['name'];?> <?php echo $team2['fminutes'];?></p>
            </div>
        </div>
        <div id='shots' class="flex-1 stat row-container padding">
            <div class="flex-2">
                <div class="ct-series-a ct-slice-donut" id="chart1" style="display: block"></div></div>
            <div class="flex-1 statnames">
                <p>Броски</p>
                <p><?php echo $team1['name'];?> <?php echo $team1['shots'];?></p>
                <p><?php echo $team2['name'];?> <?php echo $team2['shots'];?></p>
            </div>
        </div>
        <div id='refshots' class="flex-1 row-container stat">
            <div class="flex-2">
                <div class="ct-series-a ct-slice-donut" id="chart2" style="display: block"></div></div>
            <div class="flex-1 statnames">
                <p>Отраженные броски</p>
                <p><?php echo $team1['name'];?> <?php echo $team1['rshots'];?> %</p>
                <p><?php echo $team1['name'];?> <?php echo $team1['rshots'];?> %</p>
            </div>
        </div>
    </div>
</div>

</div>


<script src="js/match.js"></script>
</body>
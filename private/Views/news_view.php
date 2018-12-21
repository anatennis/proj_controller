<div class="flex-2 lnbackground row-container marginlarge">


    <div class="row-container flex-container4 flex-3">
        <div class="hbackground h3back">
            <h3 class="shl padding">Новости СХЛ СПб</h3>

        </div>
        <? foreach ($locnews as $onenews) :?>
            <div class="column-container flex-2 width padding">
                <div class="flex-2">
                    <img src="/public_html/pics/zwRyd80RWfU.jpg" alt="img" class="n-img hiddenimg">
                </div>
                <div class="flex-1 padding">
                    <h3 class="shl1"><?php echo $onenews['title'];?></h3>
                    <p class="fonts">
                        <?php echo $onenews['info'];?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="column-container flex-1 padding sidecolor hidden">
        <h3 class="shl1">Новости мирового хоккея</h3>

        <?foreach ($intnews as $onenews):?>
            <div class=" flex-1">
                <h3 class="shl1"><?php echo $onenews['title'];?></h3>
                <p class="fonts">
                    <?php echo $onenews['info'];?>
                </p>
            </div>
        <?endforeach;?>

</div>


</div>
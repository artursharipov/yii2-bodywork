<svg viewBox="<?=$class->viewbox?>">
    
    <?php if(!empty($details)):?>

        <?php foreach($details as $detail):?>

            <?php if($detail->count_side == 1):?>

                <path 
                    data-id="<?= $detail->id ?>"
                    class="two"
                    data-info="<?= $detail->name.' - '.$detail->price .' р.' ?>"
                    d="<?= $detail->d ?>"
                ></path>

            <?php else:?>

                <path 
                    data-id="<?= $detail->id ?>"
                    data-side="none"
                    class="one"
                    data-info="<?= $detail->name.' - '.$detail->price .' р.' ?>"
                    d="<?= $detail->d ?>"
                ></path>

            <?php endif;?>           

        <?php endforeach;?>

    <?php endif;?>

</svg>

<img src="<?=$class->imgMain->src?>">

<div id="infoBar"></div>

<div id="sideMenu">
    <div class="one" data-side="left">Слева</div>
    <div class="one" data-side="right">Справа</div>
</div>
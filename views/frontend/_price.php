<table class="table">
    
    <tr>
        <th>Элемент</th>
        <th>Стоимость</th>
        <th></th>
    </tr>

    <?php if(!empty($session['price-list'])):?>
        
        <?php $sum_price = 0; foreach($session['price-list'] as $id=>$item):?>

            <?php $sum_price += $item['price']?>

            <tr>
                <td><?= $item['name']?> <?php if($item['side'] != 'none') echo '('.$item['side'].')';?></td>
                <td><?= $item['price']?> р.</td>
                <td><i 
                    class="glyphicon glyphicon-remove" 
                    data-id="<?= $item['id']?>"
                    data-side="<?= $item['side']?>"
                    data-uid="<?= $item['id'].$item['side']?>"></i>
                </td>
            </tr>
        
        <?php endforeach;?>

        <tr>
            <td>Выбрано: <?=count($session['price-list'])?> </td>
            <td><b><?=$sum_price?> р.</b></td>
            <td></td>
        </tr>

    <?php else:?>

        <tr>
            <td>Выбрано: 0 </td>
            <td><b>0 р.</b></td>
            <td></td>
        </tr>

    <?php endif;?>

</table>

<div>
    <button 
        id="submit_work" 
        data-id="<?= $item['class_auto_id']?>"
        <?php if(empty($session['price-list'])) echo "disabled"; ?>
    >
        Записаться на ремонт
    </button>
</div>

    

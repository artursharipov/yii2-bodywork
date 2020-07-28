<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\bodywork\models\ClassDetail */

$this->title = 'Добавление';
$this->params['breadcrumbs'][] = ['label' => 'Детали класса авто', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-detail-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

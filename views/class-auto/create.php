<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\bodywork\models\classAuto */

$this->title = 'Добавление';
$this->params['breadcrumbs'][] = ['label' => 'Классы авто', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-auto-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

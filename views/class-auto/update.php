<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\bodywork\models\classAuto */

$this->title = 'Правка: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Классы авто', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Правка';
?>
<div class="class-auto-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

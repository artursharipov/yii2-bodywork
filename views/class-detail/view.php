<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\bodywork\models\ClassDetail */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Детали класса авто', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-detail-view">

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Подтвердите удаление!',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'price',
            'status',
            'count_side',
            'class_auto_id',
            'd',
        ],
    ]) ?>

</div>

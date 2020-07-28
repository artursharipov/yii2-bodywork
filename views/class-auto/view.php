<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\bodywork\models\classAuto */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Классы авто', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-auto-view">

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
            'viewbox',
            'status',
            'sort',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\bodywork\models\classAuto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="class-auto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= \artursharipov\img\widgets\sortable\Sortable::widget(['items'=>$model->imgMain]) ?>

    <?= $form->field($model, 'new_img')->fileInput(['accept' => 'image/*']) ?>

    <?= $form->field($model, 'viewbox')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(['1'=>'Показывать', '0'=>'Не показывать']) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

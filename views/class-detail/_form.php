<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\modules\bodywork\models\ClassAuto;

/* @var $this yii\web\View */
/* @var $model common\modules\bodywork\models\ClassDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="class-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList(['1'=>'Показывать', '0'=>'Не показывать']) ?>

    <?= $form->field($model, 'count_side')->dropDownList(['0'=>'Одна', '1'=>'Две']) ?>

    <?= $form->field($model, 'class_auto_id')->dropDownList(ArrayHelper::map(ClassAuto::find()->all(),'id','name')) ?>

    <?= $form->field($model, 'd')->textArea(['rows' => 5]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

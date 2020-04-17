<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\Dallar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dallar-form">
    <?php $form = ActiveForm::begin(); ?>

    <?php


    echo $form->field($model, 'alan_sira_no')->dropDownList(
            $alanlar,
            ['prompt'=>'Select...']
            );
    ?>

    <?= $form->field($model, 'dal_adi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

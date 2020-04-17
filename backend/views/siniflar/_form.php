<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Siniflar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siniflar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sinif_ad')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

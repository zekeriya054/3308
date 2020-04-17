<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dallar */

$this->title = 'Create Dallar';
$this->params['breadcrumbs'][] = ['label' => 'Dallars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dallar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,'alanlar'=>$alanlar
    ]) ?>

</div>

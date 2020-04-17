<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Alanlar */

$this->title = 'Create Alanlar';
$this->params['breadcrumbs'][] = ['label' => 'Alanlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alanlar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

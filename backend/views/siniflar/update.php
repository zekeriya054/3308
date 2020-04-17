<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Siniflar */

$this->title = 'Update Siniflar: ' . $model->sira_no;
$this->params['breadcrumbs'][] = ['label' => 'Siniflars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sira_no, 'url' => ['view', 'id' => $model->sira_no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="siniflar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

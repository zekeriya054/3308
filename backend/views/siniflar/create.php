<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Siniflar */

$this->title = 'Create Siniflar';
$this->params['breadcrumbs'][] = ['label' => 'Siniflars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siniflar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

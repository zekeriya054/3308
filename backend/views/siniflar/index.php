<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\Models\SiniflarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Siniflars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siniflar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Siniflar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sira_no',
            'sinif_ad',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

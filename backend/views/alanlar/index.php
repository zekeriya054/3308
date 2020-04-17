<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AlanlarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alanlars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alanlar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Alanlar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sira_no',
            'alan_adi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

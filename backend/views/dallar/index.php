<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Alanlar;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DallarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dallars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dallar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dallar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
      //  'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'sira_no',
            [
              'label'=>'Alan Adı',
              'value'=> function($data) {
                $alanlar=Alanlar::findOne($data['alan_sira_no']);
                return $alanlar->alan_adi;
              }
            ],
            'dal_adi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

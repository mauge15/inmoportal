<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use common\models\House;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\HouseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Houses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="house-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nuevo anuncio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           
            //'id',
            [
                'attribute'=>'image',
                'label' => 'Foto',
                'content' => function($model)
                {
                    /** @var \common\models\House $model */
                    return Html::img($model->getImageUrl(),['style'=>'width:50px']);
                }            
            ],
            'name',
            
            'price:currency',
            'status',
            [
                'attribute'=>'created_at',
                'format' => ['datetime'],
                'contentOptions' => ['style'=> 'white-space: nowrap']            
            ],
            //'updated_at',
            //'created_by',
            //'updated_by',
            //'type',
            //'surface',
            //'bedrooms',
            //'bathrooms',
            //'floor',
            //'has_garage',
            //'address',
            //'location',
            //'latitude',
            //'longitude',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, House $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>

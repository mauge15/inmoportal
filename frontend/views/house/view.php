<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\House */

$this->title = $model->name;
//$this->params['breadcrumbs'][] = ['label' => 'Anuncios', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="site-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'description:html',
            'price:currency',
            [
                'attribute' => 'image',
                'format' => ['html'],
                'value'  => function ($model){ 
                    return Html::img($model->getImageUrl(), ['style'=>'width:50px']);
                },
            ],
            'status',
            [
                'attribute'=>'created_at',
                'format' => ['datetime'],
                'contentOptions' => ['style'=> 'white-space: nowrap']            
            ],
            [
                'attribute'=>'updated_at',
                'format' => ['datetime'],
                'contentOptions' => ['style'=> 'white-space: nowrap']            
            ],
            'created_by',
            'updated_by',
            'type',
            'surface',
            'bedrooms',
            'bathrooms',
            'floor',
            'has_garage',
            'address',
            'location',
            'latitude',
            'longitude',
        ],
    ]) ?>

</div>

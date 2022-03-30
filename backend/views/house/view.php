<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\House */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Houses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="house-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

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
            'created_at',
            'updated_at',
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

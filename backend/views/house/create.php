<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\House */

$this->title = 'Create House';
$this->params['breadcrumbs'][] = ['label' => 'Houses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="house-create">

    <h1>Nuevo anuncio</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

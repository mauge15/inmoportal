<?php

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'My Yii Application';
?>
<div class="site-index">

   

    <div class="body-content">
<div class="container">
        <div class="row">
            <?php echo \yii\widgets\ListView ::widget([
                'dataProvider' => $dataProvider,
                'options' => [
                    'class' => 'row',
                ],
                'pager' => [
                    'class' => \yii\bootstrap4\LinkPager::class,
                ],
                'layout' => '{summary}<div class="row">{items}</div>{pager}',
                'itemView' => '_house_item',
                'itemOptions' => [
                    'class' => 'col-lg-4 col-md-6 mb-4',
                ]
            ])?>
                   
        </div>
                </div>
    </div>
</div>

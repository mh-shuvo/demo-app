<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Videos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Video', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                    'attribute' => 'video_id',
//                    'label' => 'Video',
                    'content' => function($model){
                        return $this->render('video_item',['model' => $model]);
                    }
            ],
            [
                'attribute' => 'status',
                'content'   => function($model){
                    return $model->getStatusLabels()[$model->status];
                }
            ],
            'created_at:datetime',
            'updated_at:datetime',

            [
                    'class' => 'yii\grid\ActionColumn',
                    'header' => 'Action'
                ],
        ],
    ]); ?>


</div>

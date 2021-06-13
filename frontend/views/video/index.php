<?php
/*
Name: Mehedi Hasan
Designation: Software Developer (WEB)
Date: 10/6/21 15:01:58
*/
/**
@var $dataProvider \yiii\data\ActiveDataProvider
 */

echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'pager' => [
        'class' => \yii\bootstrap4\LinkPager::className()
    ],
    'itemView' =>'video_item',
    'layout' => '<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions' => [
        'tag' => false,
    ]
]);
?>


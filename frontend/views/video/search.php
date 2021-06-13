<?php
/*
Name: Mehedi Hasan
Designation: Software Developer (WEB)
Date: 13/6/21 11:24:43
*/
$this->title = 'Search videos | '. Yii::$app->name;
?>
    <h1>Found videos</h1>
<?php echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => 'video_item',
    'layout' => '<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions' => [
        'tag' => false
    ]
]) ?>
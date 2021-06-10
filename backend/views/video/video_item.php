<?php
/*
Name: Mehedi Hasan
Designation: Software Developer (WEB)
Date: 10/6/21 11:39:48
*/
?>
<div class="media">
    <a href="<?php echo \yii\helpers\Url::to(['/video/update/','id'=>$model->video_id])?>" target="_blank">
        <div class="embed-responsive embed-responsive-16by9 mr-3" style="width: 150px;">
            <video class="embed-responsive-item"
                   poster="<?php echo $model->getThumbnailLink(); ?>"
                   src="<?php echo $model->getVideoLink();?>"></video>
        </div>
    </a>
    <div class="media-body">
        <h5 class="mt-0"><?php echo $model->title;?></h5>
        <?php echo \yii\helpers\StringHelper::truncateWords($model->description,10)?>
    </div>
</div>

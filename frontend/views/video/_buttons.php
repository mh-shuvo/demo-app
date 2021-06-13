<?php
/*
Name: Mehedi Hasan
Designation: Software Developer (WEB)
Date: 13/6/21 09:42:28
*/
use yii\helpers\Url;

?>
<a href="<?php echo Url::to(['/video/like', 'id' => $model->video_id]) ?>"
   class="btn btn-sm <?php echo $model->isLikedBy(Yii::$app->user->id) ? 'btn-outline-primary': 'btn-outline-secondary' ?>"
   data-method="post" data-pjax="1">
    <i class="fas fa-thumbs-up"></i> <?php echo $model->getLikes()->count() ?>
</a>
<a href="<?php echo Url::to(['/video/dislike', 'id' => $model->video_id]) ?>"
   class="btn btn-sm <?php echo $model->isDislikedBy(Yii::$app->user->id) ? 'btn-outline-primary': 'btn-outline-secondary' ?>"
   data-method="post" data-pjax="1">
    <i class="fas fa-thumbs-down"></i> <?php echo $model->getDislikes()->count() ?>
</a>
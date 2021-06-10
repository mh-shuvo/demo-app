<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Video */

$this->title = 'Create Video';
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="d-flex flex-column justify-content-center align-items-center">

        <div class="upload-icon">
            <i class="fas fa-upload"></i>
        </div>
        <br>

        <p class="m-0">Drag and drop a file you want to upload
        <p>

        <p class="text-muted">Your video will be private until you publish it</p>

        <?php

        $form = \yii\bootstrap4\ActiveForm::begin([
            'options' => ['enctype' => 'multipart/form-data','method' => 'post','id'=>'UploadForm']
        ]);

         ?>

        <?php echo $form->errorSummary($model) ?>

        <button class="btn btn-primary btn-file" id="upload_btn" type="button">
            Select File
        </button>
        <input type="file" id="videoFile" name="video" class="d-none">
        <?php \yii\bootstrap4\ActiveForm::end() ?>
    </div>

</div>

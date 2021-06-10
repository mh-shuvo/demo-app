<?php
/*
Name: Mehedi Hasan
Designation: Software Developer (WEB)
Date: 8/6/21 12:00:01
*/

/* @var $this \yii\web\View */
/* @var $content string */
use common\widgets\Alert;

$this->beginContent('@frontend/views/layouts/base.php')
?>
<main class="d-flex">
    <?php
    /**
     * render sidebar section from external sidebar file
     * */
    echo $this->render('_sidebar');
    ?>
    <div class="content-wrapper p-3">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>
<?php
$this->endContent();
?>

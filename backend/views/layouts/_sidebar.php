<?php
/*
Name: Mehedi Hasan
Designation: Software Developer (WEB)
Date: 9/6/21 10:06:13
*/
?>
<aside class="shadow">
    <?php echo \yii\bootstrap4\Nav::widget([
        'options' => [
            'class' => 'd-flex flex-column nav-pills unq'
        ],
        'items' => [
            [
                'label' => 'Dashboard',
                'url' => ['/site/index']
            ],
            [
                'label' => 'Videos',
                'url' => ['/video/index']
            ],
            [
                'label' => 'Comments',
                'url' => ['/comment/index']
            ]
        ]
    ]) ?>
</aside>

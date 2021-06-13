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
                'label' => 'Home',
                'url' => ['/video/index']
            ],
            [
                'label' => 'History',
                'url' => ['/video/history']
            ],
        ]
    ]) ?>
</aside>

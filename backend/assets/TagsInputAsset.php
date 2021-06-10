<?php
/*
Name: Mehedi Hasan
Designation: Software Developer (WEB)
Date: 10/6/21 10:55:40
*/

namespace backend\assets;


use yii\web\JqueryAsset;

class TagsInputAsset extends \yii\web\AssetBundle
{
    public $basePath = '@webroot/tagsinput';
    public $baseUrl = '@web/tagsinput';
    public $css = [
        'tagsinput.css'
    ];
    public $js = [
        'tagsinput.js'
    ];
    public $depends = [
        JqueryAsset::class
    ];
}
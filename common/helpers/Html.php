<?php
/*
Name: Mehedi Hasan
Designation: Software Developer (WEB)
Date: 13/6/21 10:04:56
*/
namespace common\helpers;


use yii\helpers\Url;

/**
 * Class Html
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package common\helpers
 */
class Html
{
    public static function channelLink($user, $schema = false)
    {
        return \yii\helpers\Html::a($user->username,
            Url::to(['/channel/view', 'username' => $user->username], $schema),
            ['class' => 'text-dark channel-link']);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 28/02/19
 * Time: 15:57
 */

namespace app\assets;


class OverrideAsset extends AppAsset
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = [
        'js/yii_override.js',
    ];
    public $depends = [
        'yii2mod\alert\AlertAsset',
    ];
}
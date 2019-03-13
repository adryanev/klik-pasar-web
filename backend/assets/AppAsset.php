<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
        'plugins/pace/pace.css',
    ];
    public $js = [
        'plugins/jQueryUI/jquery-ui.js',
        'js/yii_override.js',
        'plugins/pace/pace.js'
    ];
    public $depends = [
        'backend\assets\OverrideAsset',
        'dmstr\web\AdminLteAsset',
       
    ];
}

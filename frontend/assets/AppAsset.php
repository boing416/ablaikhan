<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        'css/site.css',
        'css/style.css',
        'css/fonts.css',
        'css/animate.min.css',
        'js/popup/magnific-popup.css',

    ];
    public $js = [
        'js/jquery/jquery-1.11.2.min.js',
        'js/jquery/jquery-ui.js',
        'js/script.js',
        'js/animate-css.js',
        'js/popup/jquery.magnific-popup.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

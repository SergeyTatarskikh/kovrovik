<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

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
        'https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&display=swap',
        'css/owl.carousel.css',
        'css/jquery.fancybox.css',
        'css/style.css',
    ];
    public $js = [
        'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js',
        'https://oss.maxcdn.com/respond/1.4.2/respond.min.js',
        'https://code.jquery.com/jquery.min.js',
        'js/mCustomScrollbar.min.js',
        'js/jquery-ui.min.js',
        'js/jquery.ui.touch-punch.min.js',
        'js/owl.carousel.min.js',
        'js/jquery.fancybox.min.js',
        'js/jquery.maskedinput.min.js',
        'js/scripts.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap5\BootstrapAsset'
    ];
}

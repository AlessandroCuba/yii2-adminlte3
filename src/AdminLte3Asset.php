<?php
/**
 * Created by PhpStorm.
 * User: manuel.gonzalez
 * Date: 16.11.2018
 * Time: 08:38
 */
namespace magp\src;

use yii\web\AssetBundle;
use yii\bootstrap4\BootstrapAsset;
use yii\web\YiiAsset;
use yii\bootstrap4\BootstrapPluginAsset;

class AdminLte3Asset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';
    public $css = [
        'css/adminlte.js',
    ];
    public $js = [
        'js/adminlte.js'
    ];
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
        BootstrapPluginAsset::class,
    ];
}

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
    public $sourcePath = '@vendor/almasaeed2010/adminlte';
    public $baseUrl = '@web';
    public $css = [
        'dist/css/adminlte.css',
        'plugins/font-awesome/css/font-awesome.css',
    ];
    public $js = [
        'js/adminlte.js'
    ];
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
        BootstrapPluginAsset::class,
    ];

//    public $skin = '_all-skins';
//    /**
//     * @inherit
//     */
//    public function init()
//    {
//        // Append skin color file if specified
//        if ($this->skin) {
//            if (('_all-skins' !== $this->skin) && (strpos($this->skin, 'skin-') !== 0)) {
//                $this->css[] = sprintf('css/skins/%s.min.css', $this->skin);
//            }
//            $this->css[] = sprintf('css/skins/%s.min.css', $this->skin);
//        }
//        parent::init();
//    }
}

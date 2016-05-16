<?php 
namespace frontend\assets;

use yii\web\AssetBundle;

class widgetAsset extends AssetBundle
{
	public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'plugins/jstree/themes/default/style.min.css'
    ];
    public $js = [
        'plugins/jstree/jstree.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
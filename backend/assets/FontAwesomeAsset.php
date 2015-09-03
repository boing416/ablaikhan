<?php
namespace backend\assets;
use yii\web\AssetBundle;
class FontAwesomeAsset extends AssetBundle
{
    // Эти файлы не доступны нам из web, так что мы определяем свойство sourcePath.
    // Обратите внимание, что используется алиас @vendor
    public $sourcePath = '@vendor/fortawesome/font-awesome';
    public $css = [
        'css/font-awesome.css',
    ];
}
?>
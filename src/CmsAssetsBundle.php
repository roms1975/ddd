<?php

namespace roms;
use yii\web\AssetBundle;

class CmsAssetsBundle extends AssetBundle
{
    public $sourcePath = '@vendor/roms1975/ddd/assets';
    public $css = [
        'css/style.css'
    ];

    public $img = [
        'img/'
    ];
}
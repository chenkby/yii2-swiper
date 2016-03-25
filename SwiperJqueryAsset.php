<?php
namespace chenkby\swiper;
use yii\web\AssetBundle;

class SwiperJqueryAsset extends AssetBundle
{
    public $sourcePath='@bower/swiper/dist';

    public $js=[
        'js/swiper.jquery.min.js'
    ];

    public $css=[
        'css/swiper.min.css'
    ];

    public $depends=[
        'yii\web\JqueryAsset'
    ];

}
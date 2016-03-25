<?php
namespace chenkby\swiper;
use yii\web\AssetBundle;

class SwiperAsset extends AssetBundle
{
    public $sourcePath='@bower/swiper/dist';

    public $js=[
        'js/swiper.min.js'
    ];

    public $css=[
        'css/swiper.min.css'
    ];

}
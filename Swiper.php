<?php
namespace chenkby\swiper;
use yii\base\Widget;

class Swiper extends Widget
{
    public function registerAsset()
    {
        SwiperAsset::register($this->view);
    }

}

<?php
use yii\helpers\Html;
$context=$this->context;
?>
<?=Html::beginTag('div',$context->options)?>
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="http://p2.wmpic.me/article/2016/03/07/1457340934_IhOzsopM.jpg"></div>
        <div class="swiper-slide"><img src="http://p3.wmpic.me/article/2016/03/07/1457340935_xESOHFOa.jpg"></div>
        <div class="swiper-slide"><img src="http://p3.wmpic.me/article/2016/03/07/1457340935_VoZtYoSk.jpg"></div>
        ...
    </div>

    <?php if($context->pagination){?>
    <div class="swiper-pagination"></div>
    <?php }?>

    <?php if($context->navigation){?>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <?php }?>

    <?php if($context->scrollbar){?>
    <div class="swiper-scrollbar"></div>
    <?php }?>
<?=Html::endTag('div')?>
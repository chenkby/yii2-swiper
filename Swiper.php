<?php
namespace chenkby\swiper;
use yii\base\Widget;
use yii\web\View;

/**
 * swiper widget
 * @see also http://idangero.us/swiper
 * <?=\chenkby\swiper\Swiper::widget([
 *      'jquery'=>false,
 *      'clientOptions'=>[
 *          'loop'=>true,
 *      ]
 * ]);?>
 */
class Swiper extends Widget
{
    public $items=[];

    /**
     * @var bool jquery
     */
    public $jquery=true;

    /**
     * @var bool pagination
     */
    public $pagination=true;

    /**
     * @var bool navigation buttons
     */
    public $navigation=true;

    /**
     * @var bool scrollbar
     */
    public $scrollbar=false;

    /**
     * @var array The HTML attributes for the container tag
     */
    public $options=[];

    /**
     * @var array client options
     * @see also http://idangero.us/swiper/api/#.VvSsy1WF6Uk
     */
    public $clientOptions=[];

    public function init()
    {
        parent::init();
        if(empty($this->items))return null;
        if(!isset($this->options['class'])){
            $this->options['class']='swiper-container';
        }
        if(!isset($this->options['id'])){
            $this->options['id']=$this->id;
        }

        if($this->pagination){
            $this->clientOptions['pagination']='.swiper-pagination';
        }

        if($this->navigation){
            $this->clientOptions['nextButton']='.swiper-button-next';
            $this->clientOptions['prevButton']='.swiper-button-prev';
        }

        if($this->scrollbar){
            $this->clientOptions['scrollbar']='.swiper-scrollbar';
        }

        $this->registerAsset();

        $clientOptions=!empty($this->clientOptions) ? json_encode($this->clientOptions) : '{}';
        $clientObj='swiper'.ucwords($this->options['id']);
        $js="var {$clientObj}=new Swiper('#{$this->options['id']}',{$clientOptions})";

        $position=$this->jquery ? View::POS_READY : View::POS_END;
        $this->view->registerJs($js,$position);
    }

    public function run()
    {
        if(empty($this->items))return null;
        return $this->render('swiper');
    }

    /**
     * Registers this asset bundle with a view
     */
    public function registerAsset()
    {
        $this->jquery ? SwiperJqueryAsset::register($this->view) : SwiperAsset::register($this->view);
    }

}

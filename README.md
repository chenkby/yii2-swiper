# yii2-swiper
The swiper slider widget for the Yii framework.

See more here: http://idangero.us/swiper
## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ php composer.phar require chenkby/yii2-swiper:dev-master
```

or add

```
"chenkby/yii2-swiper": "dev-master"
```

to the `require` section of your `composer.json` file.
## Usage
```php
echo \chenkby\swiper\Swiper::widget([
    'items'=>[
        Html::img('http://p2.wmpic.me/article/2016/03/07/1457340934_IhOzsopM.jpg'),
        Html::img('http://p3.wmpic.me/article/2016/03/07/1457340935_xESOHFOa.jpg'),
        Html::img('http://p3.wmpic.me/article/2016/03/07/1457340935_VoZtYoSk.jpg')
    ],
    'clientOptions'=>[
        'loop'=>true,
    ]
]);
```

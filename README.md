# yii2-swiper
The swiper widget for the Yii framework
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
echo \chenkby\swiper\Swiper::widget([
    'clientOptions'=>[
        'loop'=>true,
    ]
]);

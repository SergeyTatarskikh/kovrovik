<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
    <!doctype html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <title><?= Html::encode($this->title) ?></title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="body_mask"></div>
    <header>
        <div class="header">
            <a class="burger"><span></span></a>
            <a href="index.html" class="logo"><img src="images/logo.png" alt=""></a>
            <div class="h_text">Магазин ковров <br>с доставкой по всей <br>России</div>
            <div class="h_popup">
                <div class="hp_close"></div>
                <a href="index.html" class="logo_mob"><img src="images/logo.png" alt=""></a>
                <ul class="h_menu">
                    <li><a href="cat.html">Каталог</a></li>
                    <li><a href="services.html">Услуги</a></li>
                    <li><a href="how_buy.html">Как купить</a></li>
                    <li><a href="about.html">О компании</a></li>
                    <li><a href="contacts.html">Контакты</a></li>
                </ul>
                <div class="h_contacts">
                    <a class="h_tel" href="tel:+74942466238">8(4942)46-62-38</a>
                    <a href="mailto:pivnjuk.andrej@gmail.com" class="h_email">pivnjuk.andrej@gmail.com</a>
                </div>
            </div>
            <div class="h_btns">
                <a href="cart.html" class="h_cart"></a>
                <a href="" class="h_fav"></a>
                <a href="" class="h_search"></a>
            </div>
        </div>
    </header>

    <?= $content ?>

    <footer>
        <div class="footer">
            <div class="f_top">
                <a href="index.html" class="f_logo"><img src="images/f_logo.png" alt=""></a>
                <ul class="f_menu">
                    <li>Компания</li>
                    <li><a href="">О компании</a></li>
                    <li><a href="policy.html">Политика</a></li>
                </ul>
                <ul class="f_menu">
                    <li>Как купить</li>
                    <li><a href="">Условия оплаты</a></li>
                    <li><a href="">Условия доставки</a></li>
                    <li><a href="">Гарантия на товар</a></li>
                </ul>
                <div class="f_contacts">
                    <div class="fc_head">Наши контакты</div>
                    <a class="f_tel" href="tel:+74942466238">8(4942)46-62-38</a> <br>
                    <a href="mailto:pivnjuk.andrej@gmail.com" class="f_email">pivnjuk.andrej@gmail.com</a> <br>
                    <div class="f_address">г. Кострома, мкрн. Давыдовский-1, д. 2а магазин Ковровый Ряд</div>
                </div>
            </div>
            <div class="f_bot">
                <div class="copy">2023 © Все права защищены. «Ковровый ряд»​ - интернет-магазин ковров с доставкой по России</div>
                <a href="" class="conf">Политика конфиденциальности</a>
            </div>
        </div>

    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>
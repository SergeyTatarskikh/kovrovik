<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

if (!empty($product)) {
    $this->title = $product->name;
}
?>
<div class="body_mask"></div>

<div class="content">
    <ul class="nav">
        <li><a href="<?= Yii::$app->urlManager->createUrl(['shop/index']) ?>">Главная</a></li>
        <li><a href="<?= Yii::$app->urlManager->createUrl(['shop/catalog']) ?>">Каталог</a></li>
        <li><a href="<?= Yii::$app->urlManager->createUrl(['shop/good', 'id' => $product->id_product]) ?>"><?= $product->name?></a></li>
    </ul>
    <div class="good">
        <div class="gr_name_mob"></div>
        <div class="good_slider">
            <div id="sync1" class="owl-carousel">
                <div class="item"><span><?= Html::img("@web/{$product->image}")?></span></div>
            </div>
        </div>
        <div class="good_right">
            <div class="gr_name"><?= $product->name?></div>
            <div class="gr_descr"><?= $product->description?></div>
            <div class="gr_price"><?= $product->price?> руб/шт<del><?= $product->lastprice?> руб/шт</del></div>
            <?php if ($product->existence == 1): ?>
                <span class="mci_available">Есть в наличии</span>
            <?php else: ?>
                Нет в наличии
            <?php endif; ?>


            <div class="gr_sizes_head">Размер:</div>
            <div class="gr_sizes">
                <div class="mci_sizes">

                    <div class="mci_size"><?=$product->size ?></div>

                </div>
            </div>
            <div class="gr_bot">
                <div class="counter">
                    <a class="minus">&ndash;</a>
                    <input type="text" value="1">
                    <a class="plus">+</a>
                </div>
                <div class="mci_in_cart"
                     data-url="<?= Yii::$app->urlManager->createUrl(['shop/addbasket']) ?>"
                     data-id="<?=$product->id_product?>"
                     data-amount="">В корзину</div>
            </div>
            <div class="gr_delivery">Доставка в город <br> <span>Кострома </span></div>
        </div>
    </div>

    <div class="tabs_block">
        <div class="tabs">
            <span class="tab">Описание</span>
            <span class="tab">Отзывы</span>
        </div>
        <div class="tab_content">
            <div class="tab_item">
                <div class="good_description">
                    <div class="gd_head">Описание</div>
                    <div class="gd_text"><?= $product->description?></div>
                </div>
                <div class="good_chars">
                    <div class="gc_head">Характеристики</div>
                    <div class="gc_items">
                        <div class="gc_item">
                            <div><span>Форма</span></div>
                            <div><span><?= $product->form?></span></div>
                        </div>
                        <div class="gc_item">
                            <div><span>Материал</span></div>
                            <div><span><?= $product->material?></span></div>
                        </div>
                        <div class="gc_item">
                            <div><span>Цвет</span></div>
                            <div><span><?= $product->color?></span></div>
                        </div>
                        <div class="gc_item">
                            <div><span>Производитель</span></div>
                            <div><span><?= $product->producer?></span></div>
                        </div>
                        <div class="gc_item">
                            <div><span>Страна происхождения</span></div>
                            <div><span><?= $product->country?></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab_item">
                <div class="g_reviews">
                    <div class="g_review">
                        <div class="r_name">Елена Иванова</div>
                        <div class="r_text">Турецкий или иранский, светлый или темный, однотонный или с рисунком, квадратный или овальный? Хотите приобрести все ковры из Стёжки-дорожки, но сомневаетесь какой из них будет идеально смотреться в вашей квартире? Есть эффективное решение! С виртуальной примеркой вы увидите как, интересующие вас ковры, украсят ваш интерьер!</div>
                    </div>
                    <div class="g_review">
                        <div class="r_name">Анна Смирнова</div>
                        <div class="r_text">Турецкий или иранский, светлый или темный, однотонный или с рисунком, квадратный или овальный? Хотите приобрести все ковры из Стёжки-дорожки, но сомневаетесь какой из них будет идеально смотреться в вашей квартире? Есть эффективное решение! С виртуальной примеркой вы увидите как, интересующие вас ковры, украсят ваш интерьер!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- end of content -->

<div class="prev_watched_wrap mt">
    <div class="content">
        <div class="c_head">Рекомендуем: </div>
        <div class="prev_slider">
            <?php if (!empty($products)) {
                foreach($products as $product): ?>
                    <div>
                        <a href="<?= Yii::$app->urlManager->createUrl(['shop/good', 'id' => $product->id_product]) ?>" class="ps_content">
                            <?= Html::img("@web/{$product->image}", ['style' => 'width: 30%;']) ?>
                            <span class="ps_name"><?= $product->name ?></span>
                            <span class="ps_price"><?= $product->price ?> руб/шт</span>
                        </a>

                    </div>
                <?php endforeach;
            } ?>

        </div>
    </div>
</div>

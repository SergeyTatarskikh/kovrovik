<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
$this->title = 'Каталог';
?>

<div class="content">
    <div class="main_cat">
        <div class="c_head">Каталог</div>
        <div class="mc_filters">
            <span class="mcf_item current">Распродажа</span>
            <span class="mcf_item">Новинка</span>
            <span class="mcf_item">Хит</span>
        </div>
        <div class="m_cat_items">
            <?php if (!empty($products)) {
                foreach($products as $product): ?>
                    <div class="m_cat_item">
                        <div class="mci_fav"></div>
                        <div class="mci_content">
                            <div class="mci_top">
                                <div class="mci_new">Новинка</div>
                                <div class="mci_sale">Распродажа</div>
                            </div>

                            <a href="<?= Yii::$app->urlManager->createUrl(['shop/good', 'id' => $product->id_product]) ?>" class="mci_link">
                                <?= Html::img("@web/{$product -> image}")?>
                                <?= $product->name?>
                                <span class="mci_price"><?= $product->price?> руб./шт<del><?= $product->lastprice?></del></span>

                                <span class="mci_available">
                                    <?php if ($product->existence == 1): ?>
                                        Есть в наличии
                                    <?php else: ?>
                                        Нет в наличии
                                    <?php endif; ?>
                                </span>


                            </a><a href="" class="mci_more">Подробнее</a>
                        </div>

                        <div class="mci_popup">
                            <div class="mci_content">
                                <div class="mci_sizes_head">Размер:</div>
                                <div class="mci_sizes">

                                    <div class="mci_size"><?=$product->size ?></div>

                                </div>

                                <div class="mci_bot">
                                    <div class="counter">
                                        <a class="minus">&ndash;</a>
                                        <label>
                                            <input type="text" value="1">
                                        </label>
                                        <a class="plus">+</a>
                                    </div>
                                    <div class="mci_in_cart"
                                         data-url="<?= Yii::$app->urlManager->createUrl(['shop/addbasket']) ?>"
                                         data-id="<?=$product->id_product?>"
                                         data-amount="">В корзину</div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
            } ?>

        </div>
    </div>
</div>
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
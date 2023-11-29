<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
$this->title = 'Корзина';
?>
<div class="content">
    <ul class="nav">
        <li><a href="<?= Yii::$app->urlManager->createUrl(['shop/index']) ?>">Главная</a></li>
        <li><a href="<?= Yii::$app->urlManager->createUrl(['shop/basket']) ?>">Корзина</a></li>
    </ul>
    <div class="cart">
        <div class="c_head_2">Корзина</div>
        <div class="clean_cart" data-url="<?= Yii::$app->urlManager->createUrl(['shop/clearbasket']) ?>"><div>Очистить корзину</div></div>
        <div class="cart_table">
            <?php if (!empty($products) && !empty($baskets)) {
                foreach($products as $product) {
                    foreach($baskets as $basket) {
                        if ($product->id_product === $basket->id_product) {
                            ?>
                            <div class="ct_line">
                                <div><?= Html::img("@web/{$product->image}")?></div>
                                <div>
                                    <a href="<?= Yii::$app->urlManager->createUrl(['shop/good', 'id' => $product->id_product]) ?>" class="ctl_name"><?= $product->name?> </a>
                                    <div class="ctl_sizes"><span><?= $product->size?></span></div>
                                </div>
                                <div><div class="ctl_price"><?= $product->price?> руб. <br><span>цена за 1 шт.</span></div></div>
                                <div>
                                    <div class="counter">
                                        <a class="minus">&ndash;</a>
                                        <input type="text" id="amount" value="<?= $basket->amount ?>">
                                        <a class="plus">+</a>
                                    </div>
                                </div>
                                <div><div><div class="ctl_price all_price"><?= $product->price * $basket->amount?> руб.</div></div></div>
                                <div><div class="ctl_close" data-id="<?= $basket->id_product ?>" data-url="<?= Yii::$app->urlManager->createUrl(['shop/clearbasketone', 'id' => $basket->id_product]) ?>"></div></div>
                            </div>
                            <?php
                        }
                    }
                }
            } ?>

        </div>
        <div class="cart_summary_block">
            Итого:
            <?php
            $totalPrice = 0;
            foreach($products as $product) {
                foreach($baskets as $basket) {
                    if ($product->id_product === $basket->id_product) {
                        $totalPrice += $product->price * $basket->amount;
                    }
                }
            }
            ?>
            <div class="csb_right">
                <div class="csb_price"><?= number_format($totalPrice, 0, '', ' ') ?> руб.</div>
            </div>
        </div>

    </div>
    <form action="<?= Yii::$app->urlManager->createUrl(['shop/sendmail']) ?>" autocomplete="off" class="contact_form" method="post" enctype="multipart/form-data">
        <div class="c_head">Контактные данные</div>
        <input type="text" name='name' class="cf_input" placeholder="Ваше имя*" required="required">
        <input type="tel" name="phone" class="cf_input phone" placeholder="Номер телефона*" required="required" pattern="+7 ([0-9]{3}) [0-9]{3}-[0-9]{2}-[0-9]{2}">
        <input name="email" type="text" class="cf_input" placeholder="Email*" required="required">
        <input name="address" type="text" class="cf_input" placeholder="Адрес доставки*">
        <textarea name="comment" class="cf_area" cols="30" rows="10" placeholder="Ваш комментарий"></textarea>
        <input class="cf_submit" type="submit" value="Оформить покупку">
    </form>

</div> <!-- end of content -->

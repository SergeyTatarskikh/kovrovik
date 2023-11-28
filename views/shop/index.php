<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Ковровый ряд';
?>
<div class="search_popup">
    <div class="sp_content">
        <input type="text" class="sp_input" placeholder="Поиск">
        <div class="sp_close"></div>
        <div class="sp_find">Найти</div>
    </div>
</div>
<div class="main_slider">

    <div>
        <div class="ms_content ms_1">
            <div class="ms_block">
                <div class="ms_head">Большой выбор ковров на любой вкус</div>
                <div class="ms_text">У нас вы сможете найти ковры разнообразных текстур, расцветок и размеров, чтобы создать идеальную обстановку в вашем доме или офисе</div>
                <a href="" class="ms_btn">В каталог</a>
            </div>
        </div>
    </div>

    <div>
        <div class="ms_content ms_1">
            <div class="ms_block">
                <div class="ms_head">Большой выбор ковров на любой вкус</div>
                <div class="ms_text">У нас вы сможете найти ковры разнообразных текстур, расцветок и размеров, чтобы создать идеальную обстановку в вашем доме или офисе</div>
                <a href="" class="ms_btn">В каталог</a>
            </div>
        </div>
    </div>

    <div>
        <div class="ms_content ms_1">
            <div class="ms_block">
                <div class="ms_head">Большой выбор ковров на любой вкус</div>
                <div class="ms_text">У нас вы сможете найти ковры разнообразных текстур, расцветок и размеров, чтобы создать идеальную обстановку в вашем доме или офисе</div>
                <a href="" class="ms_btn">В каталог</a>
            </div>
        </div>
    </div>

</div>

<div class="content">

    <div class="main_2">
        <a href="cat.html" class="m2_block">
            <img src="images/m2b_bg.jpg" alt="" class="m2b_bg">
            <img src="images/m2b_1.svg" alt="" class="m2b_icon">
            <span class="m2b_content">
			<span class="m2b_head">Ковры</span>
			<span class="m2b_text">В этом разделе вы сможете выбрать ковер на любой вкус<span> и кошелек - от классических ориентальных до современных моделей</span></span>
		</span>
        </a>
        <a href="cat.html" class="m2_block">
            <img src="images/m2b_bg.jpg" alt="" class="m2b_bg">
            <img src="images/m2b_2.svg" alt="" class="m2b_icon">
            <span class="m2b_content">
			<span class="m2b_head">Ковровые дорожки</span>
			<span class="m2b_text">Ковровые дорожки - это прекрасный выбор <span> для создания уюта в любом помещении. Широкий выбор моделей и размеров</span></span>
		</span>
        </a>
    </div>

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

                        <a href="good.html" class="mci_link">
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
                                    <input type="text" value="1">
                                    <a class="plus">+</a>
                                </div>
                                <div class="mci_in_cart">В корзину</div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;
            } ?>

        </div>
    </div>


    <div class="reviews">
        <div class="c_head">Отзывы <a href="">Все отзывы</a></div>
    </div>

    <div class="rev_slider">

        <div>
            <div class="rs_content">
                <div class="rs_name">Дмитрий Смирнов</div>
                <div class="rs_date">14.12.2022</div>
                <p>Когда я получил мой ковер, я был приятно удивлен его качеством и ценой, которую я заплатил. Все прошло гладко, доставка была быстрой и качество продукции оправдало все мои ожидания.</p>
                <p>Я был очень доволен моей покупкой в "Ковровом ряду", и я рекомендую этот интернет-магазин ковров всем, кто ищет надежность, качество и хорошую цену. Спасибо за прекрасный опыт покупок в интернете!</p>
                <div class="rev_gal">
                    <div><a class="rg_img fancybox" data-fancybox="rev_gall_1" href="images/rg_big_1.jpg"><img src="images/rg_1.jpg" alt=""></a></div>
                    <div><a class="rg_img fancybox" data-fancybox="rev_gall_1" href="images/rg_big_2.jpg"><img src="images/rg_2.jpg" alt=""></a></div>
                    <div><a class="rg_img fancybox" data-fancybox="rev_gall_1" href="images/rg_big_3.jpg"><img src="images/rg_3.jpg" alt=""></a></div>
                </div>
            </div>
        </div>

        <div>
            <div class="rs_content">
                <div class="rs_name">Алена Иванова</div>
                <div class="rs_date">14.12.2022</div>
                <p>Я, как многодетная мама, всегда ищу качественные товары по приятным ценам. И интернет-магазин "Ковровый ряд" полностью соответствует моим требованиям. Здесь я нашла широкий выбор ковров разных размеров, стилей и материалов.</p>
                <p>Прекрасное качество тканей и профессиональный подход к обслуживанию клиентов не оставили меня равнодушной. Оперативная доставка и приятные скидки только укрепили мою лояльность к этому магазину. Спасибо, "Ковровый ряд" за отличный сервис!</p>
                <div class="rev_gal">
                    <div><a class="rg_img fancybox" data-fancybox="rev_gall_2" href="images/rg_big_4.jpg"><img src="images/rg_4.jpg" alt=""></a></div>
                </div>
            </div>
        </div>

        <div>
            <div class="rs_content">
                <div class="rs_name">Дмитрий Смирнов</div>
                <div class="rs_date">14.12.2022</div>
                <p>Когда я получил мой ковер, я был приятно удивлен его качеством и ценой, которую я заплатил. Все прошло гладко, доставка была быстрой и качество продукции оправдало все мои ожидания.</p>
                <p>Я был очень доволен моей покупкой в "Ковровом ряду", и я рекомендую этот интернет-магазин ковров всем, кто ищет надежность, качество и хорошую цену. Спасибо за прекрасный опыт покупок в интернете!</p>
                <div class="rev_gal">
                    <div><a class="rg_img fancybox" data-fancybox="rev_gall_3" href="images/rg_big_1.jpg"><img src="images/rg_1.jpg" alt=""></a></div>
                    <div><a class="rg_img fancybox" data-fancybox="rev_gall_3" href="images/rg_big_2.jpg"><img src="images/rg_2.jpg" alt=""></a></div>
                    <div><a class="rg_img fancybox" data-fancybox="rev_gall_3" href="images/rg_big_3.jpg"><img src="images/rg_3.jpg" alt=""></a></div>
                </div>
            </div>
        </div>

        <div>
            <div class="rs_content">
                <div class="rs_name">Алена Иванова</div>
                <div class="rs_date">14.12.2022</div>
                <p>Я, как многодетная мама, всегда ищу качественные товары по приятным ценам. И интернет-магазин "Ковровый ряд" полностью соответствует моим требованиям. Здесь я нашла широкий выбор ковров разных размеров, стилей и материалов.</p>
                <p>Прекрасное качество тканей и профессиональный подход к обслуживанию клиентов не оставили меня равнодушной. Оперативная доставка и приятные скидки только укрепили мою лояльность к этому магазину. Спасибо, "Ковровый ряд" за отличный сервис!</p>
                <div class="rev_gal">
                    <div><a class="rg_img fancybox" data-fancybox="rev_gall_4" href="images/rg_big_4.jpg"><img src="images/rg_4.jpg" alt=""></a></div>
                </div>
            </div>
        </div>

    </div>

    <div class="map_block">
        <div class="mb_left">
            <div class="c_head">Адрес магазина</div>
            <div class="mb_info">
                <div class="mbi_item address">г. Кострома, мкрн. Давыдовский-1, д. 2а магазин Ковровый Ряд</div>
                <div class="mbi_item">8(4942)46-62-38</div>
                <div class="mbi_item">8(930)386-62-38</div>
                <div class="mbi_item email">pivnjuk.andrej@gmail.com</div>
                <a href="" class="mbi_btn">Обратная связь</a>
            </div>
        </div>
        <div class="map"><script async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Add8b3a1338551201223184c7308591aefb1ba349f470185ced74f153732890a7&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"></script></div>
    </div>

</div> <!-- end of content -->

<div class="prev_watched_wrap">
    <div class="content">
        <div class="c_head">Рекомендуем: </div>
        <div class="prev_slider">

            <div>
                <a href="good.html" class="ps_content">
                    <img src="images/ps_1.jpg" alt="">
                    <span class="ps_name">Ковер Catrin VC3027-V102 Прямоугольник</span>
                    <span class="ps_price">12 375 руб./шт</span>
                </a>
            </div>

            <div>
                <a href="good.html" class="ps_content">
                    <img src="images/ps_1.jpg" alt="">
                    <span class="ps_name">Ковер Catrin VC3027-V102 Прямоугольник</span>
                    <span class="ps_price">12 375 руб./шт</span>
                </a>
            </div>

            <div><a href="good.html" class="ps_content empty"></a></div>
            <div><a href="good.html" class="ps_content empty"></a></div>
            <div><a href="good.html" class="ps_content empty"></a></div>
            <div><a href="good.html" class="ps_content empty"></a></div>
            <div><a href="good.html" class="ps_content empty"></a></div>
            <div><a href="good.html" class="ps_content empty"></a></div>
            <div><a href="good.html" class="ps_content empty"></a></div>

        </div>
    </div>
</div>
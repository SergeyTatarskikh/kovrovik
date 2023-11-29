

<div class="content">
    <ul class="nav">
        <li><a href="<?= Yii::$app->urlManager->createUrl(['shop/index']) ?>">Главная</a></li>
        <li><a href="<?= Yii::$app->urlManager->createUrl(['shop/contact']) ?>">Контакты</a></li>
    </ul>
    <div class="c_head_2">Контакты</div>
    <div class="contacts">
        <div class="map_2"><script async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Add8b3a1338551201223184c7308591aefb1ba349f470185ced74f153732890a7&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"></script></div>
        <div class="cont_items">
            <div class="cont_item">г. Кострома, мкрн. Давыдовский-1, д. 2а магазин Ковровый Ряд</div>
            <div class="cont_item ci_tel">8(4942)46-62-38<span>с 9:00 - до 18:00</span></div>
            <div class="cont_item ci_tel">8(930)386-62-38 <span>с 9:00 - до 18:00</span></div>
            <div class="cont_item ci_email">pivnjuk.andrej@gmail.com <span>По любым вопросам</span></div>
        </div>
    </div>

</div> <!-- end of content -->

<div class="contacts_bot_wrap">
    <div class="contacts_bot">
        <div class="c_head">Обратная связь</div>
        <form action="#" class="cb_form">
            <div class="cbf_left">
                <input type="text" class="cbf_input" placeholder="Ваше имя*" required="required">
                <input type="tel" class="cbf_input phone" placeholder="Телефон*" required="required" pattern="+7 ([0-9]{3}) [0-9]{3}-[0-9]{2}-[0-9]{2}">
                <input type="text" class="cbf_input" placeholder="Email*">
            </div>
            <div class="cbf_right">
                <textarea class="cbf_area" cols="30" rows="10" placeholder="Сообщение*"></textarea>
            </div>
            <label class="niceCheck_2"><input type="checkbox"><span>Я согласен на <span>Обработку персональных данных</span></span></label>
            <input type="submit" class="cfb_submit" value="Отправить">
        </form>
    </div>
</div>


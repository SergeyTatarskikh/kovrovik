$('.clean_cart').on('click', function() {
    var url = $(this).data('url');

    $.ajax({
        url: url,
        type: 'POST',
        success: function(response) {
            console.log(response);

            // Удаление элемента корзины из DOM
            $('.ct_line').remove();
            $('.cart_summary_block').remove();

        },
        error: function(xhr, status, error) {
            console.log(error);
        }
    });
});

$('.ctl_close').on('click', function() {
    var url = $(this).data('url');
    var id = $(this).data('id');
    console.log(url);
    console.log(id);
    var $ctLineElement = $(this).closest('.ct_line');
    var $cartSummaryBlockElement = $('.cart_summary_block');

    $.ajax({
        url: url,
        type: 'POST',
        // Передача id в запросе
        success: function(response) {
            console.log(response);

            // Удаление элемента корзины из DOM
            $ctLineElement.remove();

            // Вычитание стоимости удаленного элемента из общей стоимости
            var totalPrice = parseFloat($cartSummaryBlockElement.text().replace(/[^\d.]/g, ''));
            var price = parseFloat($ctLineElement.find('.all_price').text().replace(/[^\d.]/g, ''));
            totalPrice -= price;
            $cartSummaryBlockElement.text('Итого: ' + totalPrice.toFixed(2) + ' руб.');
        },
        error: function(xhr, status, error) {
            console.log(error);
        }
    });
});




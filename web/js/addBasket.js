$('.mci_in_cart').on('click', function() {
    var url = $(this).data('url');
    var id = $(this).data('id');
    var amount = $(this).siblings('.counter').find('input').val();

    console.log(amount);
    $.ajax({
        url: url,
        method: 'GET',
        data: {
            id: id,
            amount: amount
        },
        success: function(response) {
            // Обработка успешного ответа
            toastr.options = {
                positionClass: 'toast-top-right', // Позиция всплывающего сообщения
                closeButton: true, // Отображение кнопки закрытия
                timeOut: 3000 // Время отображения сообщения в миллисекундах
            };
            toastr.success('Товар успешно добавлен в корзину!');
        },
        error: function() {
            // Обработка ошибки
            alert('Произошла ошибка при добавлении товара в корзину.');
        }
    });
});



$('.cf_submit').on('click', function() {
    toastr.options = {
        positionClass: 'toast-top-right', // Позиция всплывающего сообщения
        closeButton: true, // Отображение кнопки закрытия
        timeOut: 3000 // Время отображения сообщения в миллисекундах
    };
    toastr.success('Заказ оформлен');
});
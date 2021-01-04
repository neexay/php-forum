$(document).ready(function () {
    $('#form_remind').on('submit', function (e) {
        e.preventDefault();
        $('body').prepend('<div id="Alert_Success" class="alert alert-success alert-dismissible fade show">' +
            '<button type="button" class="close" data-dismiss="alert">×</button>' +
            '<strong>Внимание!</strong> Ссылка для сброса пароля отправлена на ваш email!' +
            '</div>');
    });
});

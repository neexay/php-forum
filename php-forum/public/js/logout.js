$(document).ready(function () {
    $('#logout').on('click', function () {
        $.ajax({
            url: '/security/logout',
            type: 'POST',
            success: function (result) {
                if (result !== 'ok') alert(result);
                else {
                    alert('Вы успешно вышли и будите перенаправлены на главную !');
                    document.location.href = "/main";
                }
            },
            error: function (result) {
                alert(result);
            }
        });
    });
});



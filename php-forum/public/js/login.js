$(document).ready(function () {
    $('#login_form').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: '/securiry/AuthUser',
            type: 'POST',
            data: $(this).serialize(),
            success: function (result) {
                if (result !== 'ok') alert(result);
                else {
                    alert('Вы успешно  вошли!');
                    document.location.href = "/security/profile";
                }
            },
            error: function (result) {
                alert(result);
            }
        });
    });
});



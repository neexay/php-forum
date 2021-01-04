$(document).ready(function () {

    $('#Form_question').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: '/questions/AddNewQuestion',
            type: 'POST',
            data: $(this).serialize(),
            success: function (result) {
                if (result !== 'ok') alert(result);
                else {
                    ShowNotification();
                    function explode() {
                        document.location.href = "/main";
                    }
                    setTimeout(explode, 2000);
                }
            },
            error: function (result) {
                alert(result);
            }
        });
    });
});

function ShowNotification() {
    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Вопрос успешно добавлен!",
        showConfirmButton: !1, timer: 1500
    });
}

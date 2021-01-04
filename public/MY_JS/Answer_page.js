$(document).ready(function () {
    $('#Form_answer').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: '/questions/AddNewAnswer',
            type: 'POST',
            data: $(this).serialize(),
            success: function (result) {
                if ($('#question_id').val() !== result) alert(result);
                else {
                    ShowNotificationComment();
                    function explode() {
                        document.location.href = "/singleQuestion/id?id=" + result + "";
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

function ShowNotificationComment() {
    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Ответ успеешно добавлен!",
        showConfirmButton: !1, timer: 1500
    });
}

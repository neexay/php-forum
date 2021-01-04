$(document).ready(function () {
    $('#login_form').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: '/securiry/AuthUser',
            type: 'POST',
            data: $(this).serialize(),
            success: function (result) {
                if (result !== 'ok') ShowNotificationWarning(result);
                else {
                    ShowNotificationSuccess();
                }
            },
            error: function (result) {
                alert(result);
            }
        });
    });
});

function ShowNotificationWarning(text) {

    var string = "";
    string = string + text;

    Swal.fire({
        title: "Внимание!",
        text: string,
        icon: "warning",
        confirmButtonColor: "#5438dc"
    });
}

function ShowNotificationSuccess() {

    Swal.fire({
        title: "Вы успешно вошли!",
        html: "Перемещении в профиль через <strong></strong> милисекунд.",
        timer: 2000, onBeforeOpen: function () {
            Swal.showLoading(),
                t = setInterval(function () {
                    Swal.getContent().querySelector("strong").textContent = Swal.getTimerLeft()
                }, 10)
        },
        onClose: function () {
            clearInterval(t)
            document.location.href = "/security/profile";
        }
    });
}

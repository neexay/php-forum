$(document).ready(function () {
    $('#logout').on('click', function () {

        Swal.fire({
            title: "Вы уверены?",
            text: "Вы точно хотите выйти из личного кабинета?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#34c38f",
            cancelButtonColor: "#ff3d60",
            cancelButtonText: "нет",
            confirmButtonText: "Да"
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    url: '/security/logout',
                    type: 'POST',
                    success: function (result) {
                    },
                    error: function (result) {
                        alert(result);
                    }
                });

                Swal.fire({
                    title: "Вы успешно вышли!",
                    html: "Перемещение на главную через <strong></strong> милисекунд.",
                    timer: 2000, onBeforeOpen: function () {
                        Swal.showLoading(),
                            t = setInterval(function () {
                                Swal.getContent().querySelector("strong").textContent = Swal.getTimerLeft()
                            }, 10)
                    },
                    onClose: function () {
                        clearInterval(t)
                        document.location.href = "/main";
                    }
                })
            } else {
                Swal.fire('Продолжайте работу!', '', 'success')
            }
        });
    });
});

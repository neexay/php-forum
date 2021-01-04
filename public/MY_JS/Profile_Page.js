$(document).ready(function () {

    $('[data-toggle="tooltip"]').tooltip();

    $('#edit_first_name').on('click', function () {
        $("#Modal_User_data").modal();
        $("#modal_content").empty();
        $("#modal_content").append(' ' +
            '<div class="modal-header">' +
            '<h4 class="modal-title">Редактирование имени</h4>' +
            '<button type="button" class="close" data-dismiss="modal">×</button>' +
            '</div>' +

            '<div class="modal-body">' +
            '<form class="form text-center" id="FormEditFirstName">' +
            '<input class="form-control text-center" name="first_name" type="text" placeholder="Введите ваше новое имя" required >' +
            '<input class="btn btn-success mt-3" type="submit" value="Изменить">' +
            '</form>' +
            '</div>' +

            '<div class="modal-footer">' +
            '<button type="button" class="btn btn-danger" data-dismiss="modal">отмена</button>' +
            '</div>');

        $('#FormEditFirstName').on('submit', function (e) {
            e.preventDefault();

            Swal.fire({
                title: "Вы уверены?",
                text: "Вы точно хотите изменить имя профиля?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#34c38f",
                cancelButtonColor: "#ff3d60",
                cancelButtonText: "нет",
                confirmButtonText: "Да"
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: '/security/EditProfileFirstName',
                        type: 'POST',
                        data: $(this).serialize(),
                        success: function (result) {
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: "Имя профиля успешно изменено!!",
                                showConfirmButton: !1, timer: 1500
                            }).then(function () {
                                document.location.href = "/security/profile";
                            });
                        },
                        error: function (result) {
                            alert(result);
                        }
                    });
                } else {
                    Swal.fire('Данные не изменены!', '', 'error')
                }
            });
        });
    });

    $('#edit_last_name').on('click', function () {
        $("#Modal_User_data").modal();
        $("#modal_content").empty();
        $("#modal_content").append(' ' +
            '<div class="modal-header">' +
            '<h4 class="modal-title">Редактирование фамилии</h4>' +
            '<button type="button" class="close" data-dismiss="modal">×</button>' +
            '</div>' +

            '<div class="modal-body">' +
            '<form class="form text-center" id="FormEditLastName">' +
            '<input class="form-control text-center" name="last_name" type="text" placeholder="Введите вашу новую фамилию" required >' +
            '<input class="btn btn-success mt-3" type="submit" value="Изменить">' +
            '</form>' +
            '</div>' +

            '<div class="modal-footer">' +
            '<button type="button" class="btn btn-danger" data-dismiss="modal">отмена</button>' +
            '</div>');

        $('#FormEditLastName').on('submit', function (e) {
            e.preventDefault();

            Swal.fire({
                title: "Вы уверены?",
                text: "Вы точно хотите изменить фамилию профиля?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#34c38f",
                cancelButtonColor: "#ff3d60",
                cancelButtonText: "нет",
                confirmButtonText: "Да"
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: '/security/EditProfileLastName',
                        type: 'POST',
                        data: $(this).serialize(),
                        success: function (result) {
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: "Фамилия  профиля успешно изменена!!",
                                showConfirmButton: !1, timer: 1500
                            }).then(function () {
                                document.location.href = "/security/profile";
                            });
                        },
                        error: function (result) {
                            alert(result);
                        }
                    });
                } else {
                    Swal.fire('Данные не изменены!', '', 'error')
                }
            });
        });
    });

    $('#edit_about').on('click', function () {
        $("#Modal_User_data").modal();
        $("#modal_content").empty();
        $("#modal_content").append(' ' +
            '<div class="modal-header">' +
            '<h4 class="modal-title">Редактирование информации "О себе"</h4>' +
            '<button type="button" class="close" data-dismiss="modal">×</button>' +
            '</div>' +

            '<div class="modal-body">' +
            '<form class="form text-center" id="FormEditAbout">' +
            '<input class="form-control text-center" name="about" type="text" placeholder="Введите измененую информацию О себе" required >' +
            '<input class="btn btn-success mt-3" type="submit" value="Изменить">' +
            '</form>' +
            '</div>' +

            '<div class="modal-footer">' +
            '<button type="button" class="btn btn-danger" data-dismiss="modal">отмена</button>' +
            '</div>');

        $('#FormEditAbout').on('submit', function (e) {
            e.preventDefault();

            Swal.fire({
                title: "Вы уверены?",
                text: "Вы точно хотите изменить информацию 'О себе' ?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#34c38f",
                cancelButtonColor: "#ff3d60",
                cancelButtonText: "нет",
                confirmButtonText: "Да"
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: '/security/EditProfileAbout',
                        type: 'POST',
                        data: $(this).serialize(),
                        success: function (result) {
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: "Информация 'О себе' успешно изменена!!",
                                showConfirmButton: !1, timer: 1500
                            }).then(function () {
                                document.location.href = "/security/profile";
                            });
                        },
                        error: function (result) {
                            alert(result);
                        }
                    });
                } else {
                    Swal.fire('Данные не изменены!', '', 'error')
                }
            });
        });
    });

    $('#edit_email').on('click', function () {
        $("#Modal_User_data").modal();
        $("#modal_content").empty();
        $("#modal_content").append(' ' +
            '<div class="modal-header">' +
            '<h4 class="modal-title">Редактирование email</h4>' +
            '<button type="button" class="close" data-dismiss="modal">×</button>' +
            '</div>' +

            '<div class="modal-body">' +
            '<form class="form text-center" id="FormEditEmail">' +
            '<input class="form-control text-center" name="email" type="text" placeholder="Введите вашу новую почту" required >' +
            '<input class="btn btn-success mt-3" type="submit" value="Изменить">' +
            '</form>' +
            '</div>' +

            '<div class="modal-footer">' +
            '<button type="button" class="btn btn-danger" data-dismiss="modal">отмена</button>' +
            '</div>');

        $('#FormEditEmail').on('submit', function (e) {
            e.preventDefault();

            Swal.fire({
                title: "Вы уверены?",
                text: "Вы точно хотите изменить контактную информацию (email) профиля?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#34c38f",
                cancelButtonColor: "#ff3d60",
                cancelButtonText: "нет",
                confirmButtonText: "Да"
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: '/security/EditProfileEmail',
                        type: 'POST',
                        data: $(this).serialize(),
                        success: function (result) {
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: "Контактная информация успешно  изменена!!",
                                showConfirmButton: !1, timer: 1500
                            }).then(function () {
                                document.location.href = "/security/profile";
                            });
                        },
                        error: function (result) {
                            alert(result);
                        }
                    });
                } else {
                    Swal.fire('Данные не изменены!', '', 'error')
                }
            });
        });
    });
});

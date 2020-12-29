$(document).ready(function () {

    var modal = document.getElementById("my_modal");
    var span = document.getElementsByClassName("close_modal_window")[0];

    $('#edit_first_name').on('click', function () {
        $("#modal_content").empty();
        $("#modal_content").append(' ' +
            '<p>Редактировиние имени:</p> ' +
            '<br>' +
            '<form id="FormEditFirstName">' +
            '<input name="first_name" type="text" placeholder="Введите ваше имя" required >' +
            '<input type="submit" value="Изменить">' +
            '</form>');
        modal.style.display = "block";

        $('#FormEditFirstName').on('submit', function (e) {
            e.preventDefault();

            $.ajax({
                url: '/security/EditProfileFirstName',
                type: 'POST',
                data: $(this).serialize(),
                success: function (result) {
                    if (result !== 'ok') alert(result);
                    else {
                        alert('Имя успешно изменено!');
                        document.location.href = "/security/profile";
                    }
                },
                error: function (result) {
                    alert(result);
                }
            });
        });
    });

    $('#edit_last_name').on('click', function () {
        $("#modal_content").empty();
        $("#modal_content").append(' ' +
            '<p>Редактировиние Фамилии:</p> ' +
            '<br>' +
            '<form id="FormEditLastName">' +
            '<input name="last_name" type="text" placeholder="Введите вашу фамилию" required >' +
            '<input type="submit" value="Изменить">' +
            '</form>');
        modal.style.display = "block";

        $('#FormEditLastName').on('submit', function (e) {
            e.preventDefault();

            $.ajax({
                url: '/security/EditProfileLastName',
                type: 'POST',
                data: $(this).serialize(),
                success: function (result) {
                    if (result !== 'ok') alert(result);
                    else {
                        alert('Фамилия Успешно изменена!');
                        document.location.href = "/security/profile";
                    }
                },
                error: function (result) {
                    alert(result);
                }
            });
        });
    });

    $('#edit_about').on('click', function () {
        $("#modal_content").empty();
        $("#modal_content").append(' ' +
            '<p>Редактировиние "О себе":</p> ' +
            '<br>' +
            '<form id="FormEditAbout">' +
            '<textarea name="about"  placeholder="Расскажите о себе" required ></textarea>' +
            '<input type="submit" value="Изменить">' +
            '</form>');
        modal.style.display = "block";

        $('#FormEditAbout').on('submit', function (e) {
            e.preventDefault();

            $.ajax({
                url: '/security/EditProfileAbout',
                type: 'POST',
                data: $(this).serialize(),
                success: function (result) {
                    if (result !== 'ok') alert(result);
                    else {
                        alert('Информация "О себе" успешно изменена!');
                        document.location.href = "/security/profile";
                    }
                },
                error: function (result) {
                    alert(result);
                }
            });

        });
    });

    $('#edit_email').on('click', function () {
        $("#modal_content").empty();
        $("#modal_content").append(' ' +
            '<p>Редактировиние контактной информации:</p> ' +
            '<br>' +
            '<form id="FormEditEmail">' +
            '<input name="email" type="text" placeholder="Введите ваш email" required >' +
            '<input type="submit" value="Изменить">' +
            '</form>');
        modal.style.display = "block";

        $('#FormEditEmail').on('submit', function (e) {
            e.preventDefault();

            $.ajax({
                url: '/security/EditProfileEmail',
                type: 'POST',
                data: $(this).serialize(),
                success: function (result) {
                    if (result !== 'ok') alert(result);
                    else {
                        alert('Контактная инфаормация успешно изменена!!');
                        document.location.href = "/security/profile";
                    }
                },
                error: function (result) {
                    alert(result);
                }
            });
        });
    });

    span.onclick = function () {
        modal.style.display = "none";
    }

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});

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
                    alert('Вопрос успешно добавлен!');
                    document.location.href = "/main";
                }
            },
            error: function (result) {
                alert(result);
            }
        });
    });
});
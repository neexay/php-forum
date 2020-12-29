$(document).ready(function () {
    $('#reg_form').on('submit', function (e) {
        e.preventDefault();
        removeValidation(this);
        if (checkPasswordFormat(this)) {
            if (checkPasswordMatch(this)) {

                $.ajax({
                    url: '/securiry/RegUser',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function (result) {
                        if (result !== 'ok') alert(result);
                        else {
                            alert('Вы успешно зарегистрировались и можете войти!');
                            document.location.href = "/security/login";
                        }
                    },
                    error: function (result) {
                        alert(result);
                    }
                });
            }
        }
    });
});

//генерация надписей ошибок
function generateError(text) {
    var error = document.createElement('div');
    error.className = 'error';
    error.style.color = 'red';
    error.innerHTML = text;
    return error;
}

//если при повторной ошибке формы ошибка исправлена - затереть надписи ошибок
function removeValidation(form) {
    var errors = form.querySelectorAll('.error');

    for (var i = 0; i < errors.length; i++) {
        errors[i].remove();
    }
}

//сверка паролей для формы регистрации
function checkPasswordMatch(form) {
    var password = form.querySelector('.password');
    var passwordConfirmation = form.querySelector('.passwordConfirmation');
    if (password.value !== passwordConfirmation.value) {
        console.log('not equals');
        var error = generateError('Пароли не совпадают');
        password.parentElement.insertBefore(error, password);
    } else return true;
}

//проверка пароля на разные условия
function checkPasswordFormat(form) {
    var password = form.querySelector('.password');
    var regular = /[^A-Z-a-z-0-9]/g;  //латинские буквы и цифры
    if (regular.test(password.value)) {
        var errorAlphabet = generateError('Пароль должен содержать только латинские буквы и цифры');
        password.parentElement.insertBefore(errorAlphabet, password);
    } else if (password.value.length < 8) {
        var errorMinLength = generateError('Пароль должен содержать не менее 8 символов');
        password.parentElement.insertBefore(errorMinLength, password);
    } else if (password.value.length > 20) {
        var errorMaxLength = generateError('Пароль должен содержать не более 20 символов');
        password.parentElement.insertBefore(errorMaxLength, password);
    } else return true;
}






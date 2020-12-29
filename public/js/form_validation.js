var reg_form = document.getElementById("reg_form");

//генерация надписей ошибок
var generateError = function (text) {
    var error = document.createElement('div');
    error.className = 'error';
    error.style.color = 'red';
    error.innerHTML = text;
    return error;
};
//если при повторной ошибке формы ошибка исправлена - затереть надписи ошибок
var removeValidation = function (form) {
    var errors = form.querySelectorAll('.error');

    for (var i = 0; i < errors.length; i++) {
        errors[i].remove();
    }
};

//сверка паролей для формы регистрации
var checkPasswordMatch = function (form) {
    var password = form.querySelector('.password');
    var passwordConfirmation = form.querySelector('.passwordConfirmation');
    if (password.value !== passwordConfirmation.value) {
        console.log('not equals');
        var error = generateError('Пароли не совпадают');
        password.parentElement.insertBefore(error, password);
    }
};
//проверка пароля на разные условия
var checkPasswordFormat = function (form) {
    var password = form.querySelector('.password');
    var regular = /[^A-Z-a-z-0-9]/g;  //латинские буквы и цифры
    if (regular.test(password.value)) {
        var errorAlphabet = generateError('Пароль должен содержать только латинские буквы и цифры');
        password.parentElement.insertBefore(errorAlphabet, password);
    }
    if (password.value.length < 8) {
        var errorMinLength = generateError('Пароль должен содержать не менее 8 символов');
        password.parentElement.insertBefore(errorMinLength, password);
    }
    if (password.value.length > 20) {
        var errorMaxLength = generateError('Пароль должен содержать не более 20 символов');
        password.parentElement.insertBefore(errorMaxLength, password);
    }
};

reg_form.addEventListener('submit', function (event) {
    event.preventDefault();

    removeValidation(reg_form);
    checkPasswordFormat(reg_form);
    checkPasswordMatch(reg_form);
});



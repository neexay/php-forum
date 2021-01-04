$(document).ready(function () {
    $('#form_support').on('submit', function (e) {
        e.preventDefault();
        $('.container').prepend('<div id="Alert_Success" class="alert alert-info alert-dismissible fade show">' +
            '<button type="button" class="close" data-dismiss="alert">×</button>' +
            '<strong>Cпасибо за ваше обращение!</strong> Мы свяжимся с вами в ближайшее время' +
            '</div>');
        setTimeout(function (){
            document.location.href = "/main";
        },3000);
    });
});

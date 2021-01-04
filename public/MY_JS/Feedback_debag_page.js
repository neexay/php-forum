$(document).ready(function () {
    $('#form_submit_bug').on('submit', function (e) {
        e.preventDefault();
        $('.container').prepend('<div id="Alert_Success" class="alert alert-success alert-dismissible fade show">' +
            '<button type="button" class="close" data-dismiss="alert">×</button>' +
            '<strong>Cпасибо!</strong> Ваше замечание будет учтено нашими разработчиками.' +
            '</div>');
        setTimeout(function (){
            document.location.href = "/main";
        },3000);
    });
});

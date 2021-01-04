$(document).ready(function () {
    $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myDIV .article-loop").filter(function () {
            return $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});

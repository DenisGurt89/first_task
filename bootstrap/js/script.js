
$('.server-check').hide();

$('.birthday').datepicker({
    format:'yyyy-mm-dd'
});

$(function () {
    $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
});

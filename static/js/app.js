function showAlertOnPage(text) {
    $("#warning").text(text);
    $("#warning").addClass("alert alert-danger")
}

$(document).ready(() => {
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
    });
});
function nullFilter(object) {
    for (let key in object) {
        if (object[key] === null) {
            object[key] = ""
        }
    }
}

function showAlertOnPage(text) {
    $("#warning").text(text);
    $("#warning").addClass("alert alert-danger")
}

$(document).ready(() => {
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
    });
});

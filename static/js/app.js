function sortdate(a, b) {
    return new Date(a.time).getTime() - new Date(b.time).getTime();
}

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

function getCookies() {
    let cookies = {};
    let cookiesString = document.cookie.split("; ")
    for (let cookieString of cookiesString){
        let tmp = cookieString.split("=");
        cookies[tmp[0]] = tmp[1]
    }
    return cookies;
}

$(document).ready(() => {
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
    });
});

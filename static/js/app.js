var SUGAR = {
    "0" : "無糖",
    "1" : "1分糖",
    "3" : "微糖",
    "5" : "半糖",
    "7" : "少糖",
    "10" : "全糖", 
}

var ICE = {
    "0" : "完全去冰",
    "1" : "小碎冰",
    "3" : "微冰",
    "5" : "半冰",
    "7" : "少冰",
    "10" : "全冰", 
}

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

function convertTime(timeString) {
    return timeString.split(":").slice(0, 2).join(":");
}

$(document).ready(() => {
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
    });
});

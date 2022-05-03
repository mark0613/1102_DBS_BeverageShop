function register() {
    let data = {
        email : $("#email").val(),
        username : $("#username").val(),
        password : $("#password").val(),
        phone : $("#phone").val(),
        type : $("#type").val(),
    };
    let url = "../php/register.php";

    $.post(
        url,
        data,
        (response, status) => {
            if (status == "success") {
                response = JSON.parse(response);
                if (response["status"] == "success") {
                    window.location.href = "../login/";
                }
                else {
                    showAlertOnPage(response["error"]);
                }
            }
            else {
                showAlertOnPage("無法註冊");
            }
        }
    )
}


$(document).ready(() => {
    $("#submit").click(() => {
        register();
    })
    $('#email, #username, #password, #phone, #type').keypress(function (e) {
        if (e.which == 13) {
            register();
            return false;
        }
      });
});
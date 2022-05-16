function sortdate(a, b){
    return new Date(a.comtime).getTime() - new Date(b.comtime).getTime();
}

function showUserInfo() {
    $.post(
        "../php/getUserInfo.php",
        "",
        (response, status) => {
            if (status == "success") {
                if (response["status"] == "success") {
                    userinfo = response["data"];
                    nullFilter(userinfo);
                    ($("#username")).val(`${userinfo["username"]}`);
                    ($("#email")).val(`${userinfo["email"]}`);
                    ($("#name")).val(`${userinfo["name"]}`);
                    ($("#phone")).val(`${userinfo["phone"]}`);
                }
            }
        }
    )
}

function showLoveShop() {
    $.post(
        "../php/getLoveShop.php",
        "",
        (response, status) => {
            if (status == "success") {
                if (response["status"] == "success") {
                    let loveshop = response["data"];
                    var shoplen = loveshop.length
                    if (shoplen == 0){
                        $('.list-group').html(`<a href="../home/" class="list-group-item list-group-item-action">前往首頁添加最愛商家</a>`);
                    }
                    else{
                        $('.list-group').html("");
                        for (let i = 0 ; i < shoplen; i++){
                            $('.list-group').append(`<a href="#" class="list-group-item list-group-item-action">${loveshop[i]["shopname"]}</a>`); 
                        }
                    }
                }
            }
        }
    )
}

function showComment() {
    $.post(
        "../php/getComment.php",
        "",
        (response, status) => {
            if (status == "success") {
                if (response["status"] == "success") {
                    comment = response["data"];
                    comment.sort(sortdate)    //comment sort by datetime
                    if (comment.length == 0){
                        $(`.container-fluid:nth(1)`).prepend(`
                            <div class="row top">
                                <div class="col-sm-2"></div>
                                    <div class="col-sm-8">
                                        <div class="card h-100 shadow border-0">
                                            <div class="card-body p-4">                       
                                                <h3>尚無任何評價紀錄</h3>
                                                <label></label>
                                            </div>  
                                        </div>  
                                    </div>
                                    <div class="col-sm-2"></div>
                                </div>
                            <div>
                        `)
                    }
                    else{
                        for (let i=0; i<10 && i<comment.length; i++){
                            $(`.container-fluid:nth(1)`).prepend(`
                                <div class="row top">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8">
                                        <div class="card h-100 shadow border-0">
                                            <div class="card-body p-4">
                                                <h3><a href="#">${comment[i]["m_name"]}</a></h3>
                                                <p class="comment-content">${comment[i]["content"]}</p class="comment-content">
                                                <br>
                                                <div class="stars">
                                                    <form action="">
                                                        <input class="star star-5" id="star-5-${i}" type="radio" name="star" value="5">
                                                        <label class="star star-5" for="star-5-${i}"></label>
                                                        <input class="star star-4" id="star-4-${i}" type="radio" name="star" value="4">
                                                        <label class="star star-4" for="star-4-${i}"></label>
                                                        <input class="star star-3" id="star-3-${i}" type="radio" name="star" value="3">
                                                        <label class="star star-3" for="star-3-${i}"></label>
                                                        <input class="star star-2" id="star-2-${i}" type="radio" name="star" value="2">
                                                        <label class="star star-2" for="star-2-${i}"></label>
                                                        <input class="star star-1" id="star-1-${i}" type="radio" name="star" value="1">
                                                        <label class="star star-1" for="star-1-${i}"></label>
                                                    </form>
                                                </div>
                                                <small class="form-text text-muted">${comment[i]["time"]}</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2"></div>
                                </div>
                            `)
                            $(`input[name="star"][id=star-${comment[i]["stars"]}-${i}]`).prop("checked", true)
                        }
                    }
                }
            }
        }
    )
}

function saveProfile() {
    let data = {
        "email" : $("#email").val(),
        "username" : $("#username").val(),
        "name" : $("#name").val(),
        "phone" : $("#phone").val(),
    }
    $.post(
        "../php/updateMemberProfile.php",
        data,
        (response, status) => {
            if (status == "success") {
                if (response["status"] == "success") {
                    alert("儲存成功");
                    window.location.reload();
                }
                else {
                    console.log(response["error"]);
                }
            }

        }
    )
}

$(document).ready(function(){
    //show user information
    showUserInfo();

    //show love shop
    showLoveShop()

    //show my comment record
    showComment();

    // save user profile change
    $("#save").on('click', function() {
        saveProfile();
    })
})


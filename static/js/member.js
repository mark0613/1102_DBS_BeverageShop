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
                                                <label>${comment[i]["content"]}</label>
                                                <br>
                                                <label>stars : ${comment[i]["stars"]}(待改)</label>
                                                <small class="form-text text-muted">${comment[i]["time"]}</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2"></div>
                                </div>
                            `)
                        }
                    }
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
})


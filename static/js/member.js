function sortdate(a, b){
    return new Date(a.time).getTime() - new Date(b.time).getTime();
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

comment = [
    {
        "m_name": "shop1",
        "comherf": "../home/",
        "content": "good1",
        "time": "2001/12/21 00:00:00"
    },
    {
        "m_name": "shop2",
        "comherf": "../home/",
        "content": "good2",
        "time": "2001/12/22 00:00:00"
    },
    {
        "m_name": "shop3",
        "comherf": "../home/",
        "content": "good3",
        "time": "2001/12/24 00:00:00"
    },
    {
        "m_name": "shop4",
        "comherf": "../home/",
        "content": "good4",
        "time": "2001/12/23 00:00:00"
    },
    {
        "m_name": "shop5",
        "comherf": "../home/",
        "content": "good5",
        "time": "2001/12/26 00:00:00"
    },
    {
        "m_name": "shop6",
        "comherf": "../home/",
        "content": "good6",
        "time": "2001/12/25 00:00:00"
    },
    {
        "m_name": "shop7",
        "comherf": "../home/",
        "content": "good7",
        "time": "2001/12/27 01:20:00"
    },
    {
        "m_name": "shop8",
        "comherf": "../home/",
        "content": "good8",
        "time": "2001/12/27 01:00:00"
    },
    {
        "m_name": "shop9",
        "comherf": "../home/",
        "content": "good9",
        "time": "2001/12/1 00:00:00"
    },
    {
        "m_name": "shop10",
        "comherf": "../home/",
        "content": "good10",
        "time": "2001/12/2 00:00:00"
    },
    {
        "m_name": "shop11",
        "comherf": "../home/",
        "content": "good11",
        "time": "2001/12/5 00:00:00"
    },
    {
        "m_name": "shop12",
        "comherf": "../home/",
        "content": "good12",
        "time": "2001/12/4 00:00:00"
    },
    {
        "m_name": "shop2",
        "comherf": "../home/",
        "content": "good2",
        "time": "2001/12/22 00:00:00"
    },
    {
        "m_name": "shop3",
        "comherf": "../home/",
        "content": "good3",
        "time": "2001/12/24 00:00:00"
    },
    {
        "m_name": "shop4",
        "comherf": "../home/",
        "content": "good4",
        "time": "2001/12/23 00:00:00"
    },
    {
        "m_name": "shop5",
        "comherf": "../home/",
        "content": "good5",
        "time": "2001/12/26 00:00:00"
    },
    {
        "m_name": "shop6",
        "comherf": "../home/",
        "content": "good6",
        "time": "2001/12/25 00:00:00"
    },
    {
        "m_name": "shop7",
        "comherf": "../home/",
        "content": "good7",
        "time": "2001/12/27 01:20:00"
    },
    {
        "m_name": "shop8",
        "comherf": "../home/",
        "content": "good8",
        "time": "2001/12/27 01:00:00"
    },
    {
        "m_name": "shop9",
        "comherf": "../home/",
        "content": "good9",
        "time": "2001/12/1 00:00:00"
    },
    {
        "m_name": "shop10",
        "comherf": "../home/",
        "content": "good10",
        "time": "2001/12/2 00:00:00"
    },
    {
        "m_name": "shop11",
        "comherf": "../home/",
        "content": "good11",
        "time": "2001/12/5 00:00:00"
    },
    {
        "m_name": "shop12",
        "comherf": "../home/",
        "content": "good12",
        "time": "2001/12/4 00:00:00"
    }
]

$(document).ready(function(){
    //show user information
    showUserInfo();

    //show love shop
    showLoveShop()

    //show my comment record
    // showComment();comment.sort(sortdate)    //comment sort by datetime


    //start
    if (comment.length == 0){
        $('#show-mem-com').append(`
            <div class="row top">
                <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="card h-100 shadow border-0">
                            <div class="card-body p-4">                      
                                <h3>尚無任何評價紀錄</h3>
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
            comment.sort(sortdate).reverse()    //sort by datetime
        
            var largepage;                      //count the length of comment length
            var large = comment.length;         //the length of comment

            if (comment.length%10 != 0) largepage = (comment.length - comment.length%10)/10+1;
            else                        largepage = comment.length/10;
            changeComment(1,comment.length);
        }
    }
    
    
    var prebtn  = document.querySelector('#prebtn');
    var nextbtn = document.querySelector('#nextbtn');

    prebtn.addEventListener("click", function () {
        var nowpage =  parseInt($('#btn1 > a').text(), 10);
        if (nowpage > 1){
            console.log("prebtn in");
            nowpage = nowpage - 1;
            changeComment(nowpage,large);
        }
    })
    nextbtn.addEventListener("click", function () {
        var nowpage =  parseInt($('#btn1 > a').text(), 10);
        if (nowpage < largepage){
            console.log("nextbtn in",nowpage,largepage);
            nowpage = nowpage + 1;
            changeComment(nowpage,large);
        }
    })

    function changeComment(now , large){

        console.log(now,large);
        $('#btn1 > a').text(now);
        $('#show-mem-com').html(``);

        html = "";       //to show html on merchant comment

        for (let i = (now-1)*10 ; i < now*10 && i < large ; i++) {

            $('#show-mem-com').append(`
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
    //end
    // save user profile change
    $("#save").on('click', function() {
        saveProfile();
    })
})


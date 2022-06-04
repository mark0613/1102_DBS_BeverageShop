// merchant 優惠、商家資料、菜單、評價(前10筆)

mdiscount = [
    {
        "disid"   : "001",
        "disimg"  : "001.img",
        "disname" : "買一送一"
    },
    {
        "disid"   : "002",
        "disimg"  : "001.img",
        "disname" : "買十送十，打折到你骨折"
    },
    {
        "disid"   : "003",
        "disimg"  : "001.img",
        "discount": "買一送一"
    },
    {
        "disid"   : "004",
        "disimg"  : "001.img",
        "discount": "滿100打八折"
    }
]

function showInfo() {
    let data = {}
    $.post(
        "../php/getUserInfo.php",
        data,
        (response, status) => {
            if (status == "success") {
                if (response["status"] == "success") {
                    let minfor = response["data"];
                    $("input[id][name$='shop']").val(`${minfor["m_name"]}`);
                    $("input[id][name$='address']").val(`${minfor["address_city"]} ${minfor["address_district"]} ${minfor["address_detail"]}`);
                    $("input[id][name$='tel']").val(`${minfor["m_phone"]}`);
                    $("input[id][name$='manager']").val(`${minfor["manager_name"]}`);
                    $("input[id][name$='phone']").val(`${minfor["manager_phone"]}`);
                    $("input[id][name$='time']").val(`${minfor["opening_hours_start"]} ~ ${minfor["opening_hours_end"]}`);
                    $("input[id][name$='waimai']").val(`${minfor["delivery"]}`);
                }
            }
        }
    )
}

function showMenu() {
    let data = "";
    $.post(
        "../php/getMenu.php",
        data,
        (response, status) => {
            console.log(response);
            if (status == "success") {
                if (response["status"] == "success") {
                    let mmenu = response["data"];
                    var menuarr = $(".center > label");
                    $('#showmenu').html("");
                    if (mmenu.length == 0) {
                        $('.card-deck').html("<div><p>尚無菜單</p></div>");
                    }
                    else {
                        var html = "";
                        if (mmenu.length%4 == 0)    var menulen = mmenu.length/4;
                        else                        var menulen = ( mmenu.length - mmenu.length%4 ) / 4 + 1;
                        for (let i = 0; i<menulen; i++){
                            html += `<div class="card-deck">`;
                            for (let j = i*4 ; j < i*4+4 ; j++) {
                                if (j < mmenu.length){
                                    html += (`
                                        <div class="card h-100 shadow border-0">
                                            <div class="card-header">
                                                <h4>${mmenu[j]["menuname"]}</h4>
                                            </div>
                                            <div class="card-body p-4">
                                                <div class="center">
                                                    <label>${mmenu[j]["menuprice"]}</label>
                                                    <br>
                                                    <button type="submit" class="btn btn-primary">編輯</button>
                                                    <button type="submit" class="btn btn-danger">刪除</button>
                                                </div>
                                            </div>
                                        </div>
                                    `);
                                }
                                else{
                                    html += (`
                                        <div class="card h-100 shadow border-0"></div>
                                    `);
                                }
                            }
                            html += `</div><br>`;
                            ($('#showmenu')).append(`${html}`);
                            html = "";
                        }
                    }
                }
            }
        }
    )
}

function bindChangePage() {
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
}
function showComment() {
    $.post(
        "../php/getComment.php",
        "",
        (response, status) => {
            if (status == "success") {
                if (response["status"] == "success") {
                    let comment = response["data"];
                    if (comment.length == 0) {
                        $('#show-mer-com').append(`
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <div class="card h-100 shadow border-0">
                                        <div class="card-title p-4">
                                            還沒有評價喔!
                                        </div>
                                        <div class="card-body p-4">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                        `)
                    }
                    else {
                        comment.sort(sortdate).reverse()    //sort by datetime
                        
                        var largepage;              //count the length of comment length
                        var large = comment.length; //the length of comment
                
                        if (comment.length%10 != 0) largepage = (comment.length - comment.length%10)/10+1;
                        else                        largepage = comment.length/10;
                        changeComment(1,comment.length);
                        
                    }
                    bindChangePage();
                    function changeComment(now , large){
                        console.log(now,large);
                        $('#btn1 > a').text(now);
                        $('#show-mer-com').html(``);
                    
                        html = "";       //to show html on merchant comment
                    
                        for (let i = (now-1)*10 ; i < now*10 && i < large ; i++) {
                            $('#show-mer-com').append(`
                                <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8">
                                        <div class="card h-100 shadow border-0">
                                            <div class="card-title p-4">
                                                ${comment[i]["u_name"]}
                                            </div>
                                            <div class="card-body p-4">
                                                <p class="comment-content">${comment[i]["content"]}</p>
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
                                </div><br>
                            `)
                    
                            $(`input[name="star"][id=star-${comment[i]["stars"]}-${i}]`).prop("checked", true)
                        }
                    }
                }
            }
        }
    )
}


function linkPage() {
    let cookies = getCookies();
    let m_id = cookies["id"];
    $("#link-shop-page").prop("href", `../shop?m_id=${m_id}`)
}

function bar(ctx, labels, data, color) {
    let barChart = new Chart(ctx, {
        type : "bar",
        data : {
            labels : labels,
            datasets : [{
                label : "vote",
                data: data,
                backgroundColor : color,
                borderWidth: 1
            }]
        }
    });
}

function pie(ctx, labels, data, color) {
    let pieChart = new Chart(ctx, {
        type : 'pie',
        data : {
        labels : labels,
        datasets : [{
            data : data,
            backgroundColor : color,
        }],
        }
    });
}




$(document).ready(function () {
    // change merchant discount
    for (let i=0;i<mdiscount.length;i++){
        ($('#v-pills-discount > div.container-fluid > div.row > div.col-sm-8 > form > div.h-100 > div.card-body')).append(`
            <div class="card border-dark">
                <div class="card-body p-4">
                    <input type="checkbox">
                    <a class="text-decoration-none link-dark" href="#!" target="_blank"><label>${mdiscount[i]["disname"]}</label></a>
                </div>
            </div>
            <br>
        `)
    }



    //change merchant information
    showInfo();

    //change merchant menu
    showMenu();

    // show comment record
    showComment();

    // link of shop page
    linkPage();
});
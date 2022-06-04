sdiscount = [
    {
        "disid": "001",
        "disimg": "001.img",
        "disname": "買一送一"
    },
    {
        "disid": "002",
        "disimg": "001.img",
        "disname": "買十送十，打折到你骨折"
    },
    {
        "disid": "003",
        "disimg": "001.img",
        "disname": "買一送一"
    },
    {
        "disid": "004",
        "disimg": "001.img",
        "disname": "滿100打八折"
    }
]

var cart = {};

function checkMerchantExists() {
    let data = {
        "m_id" : window.location.href.split("m_id=")[1],
    }
    $.post(
        "../php/checkMerchantExists.php",
        data,
        (response, status) => {
            if (status == "success") {
                if (response["status"] == "success") {
                    if (response["data"]["isEmpty"]) {
                        alert("該商家不存在!");
                        window.location.href = "../";
                    }
                }
            }
        }
    )
}

function showInfo() {
    let data = {
        "m_id" : window.location.href.split("m_id=")[1],
    }
    $.post(
        "../php/getShopInfo.php",
        data,
        (response, status) => {
            if (status == "success") {
                if (response["status"] == "success") {
                    let info = response["data"];
                    $("#m_name").text(info["m_name"]);
                    $("#shop-photo").attr("src", `../static/img/${info["photo"]}`);
                    $("#address").text(`${info["address_city"]} ${info["address_district"]} ${info["address_detail"]}`);
                    $("#m_phone").text(info["m_phone"]);
                    $("#time").text(`${info["opening_hours_start"]} ~ ${info["opening_hours_end"]}`);
                    $("#deilvery").text(info["delivery"]);
                }
            }
        }
    )
}

function changeQuantity(b_id, dq) {
    let quantity = parseInt($(`#quantity-${b_id}`).val());
    let ans = quantity + dq;
    if (ans < 0) {
        alert("數量不能小於0!");
    }
    ans = Math.max(ans, 0);
    $(`#quantity-${b_id}`).val(ans);
    cart[b_id] = ans;
    if (ans === 0) {
        delete cart[b_id];
    }
}
function showMenu() {
    let data = {
        "m_id" : window.location.href.split("m_id=")[1],
    };
    $.post(
        "../php/getMenu.php",
        data,
        (response, status) => {
            console.log(response["data"]);
            if (status == "success") {
                if (response["status"] == "success") {
                    let smenu = response["data"];
                    if (smenu.length == 0){
                        ($('.container-fluid:first > div.row.top > .col-sm-8:first > .card-deck ')).append(`
                            <div class="card h-100 shadow border-0">
                                <div class="card-body p-4">
                                    <div class="center">
                                        <h3>商家尚未上架商品喔~</h3>    
                                    </div>
                                </div>
                            </div>
                        `);
                    }
                    else{
                        var html = "";
                        if (smenu.length%4 == 0)    var slen = smenu.length/4;
                        else                        var slen = ( smenu.length - smenu.length%4 ) / 4 + 1 ;
                
                        for (let i = 0; i<slen; i++){
                            html += `<div class="card-deck">`;
                            for (let j = i*4 ; j < i*4+4 ; j++){
                                if (j < smenu.length){
                                    html +=  `
                                        <div class="card h-100 shadow border-0">
                                            <div class="card-header center">
                                                <h4 id="b_name-${smenu[j]['b_id']}">${smenu[j]["menuname"]}</h4>
                                            </div>
                                            <div class="card-body p-4">
                                                <div class="center">
                                                    <label>$</label>
                                                    <label>${smenu[j]["menuprice"]}</label>
                                                    <br>
                                                    <div class="input-group mb-3 justify-content-center">
                                                        <input type='button' value='-' class="btn btn-outline-danger btn-sm" onclick="changeQuantity(${smenu[j]['b_id']}, -1)">
                                                        <input type='text' name='quantity' id="quantity-${smenu[j]['b_id']}" value='0' class="in">
                                                        <input type='button' value='+' field='quantity' class="btn btn-outline-primary btn-sm" onclick="changeQuantity(${smenu[j]['b_id']}, 1)">
                                                    </div>
                                                    <div class="input-group">
                                                        <select class="custom-select my-1 mr-sm-2" id="sugar-${smenu[j]['b_id']}" name="sugar-${smenu[j]['b_id']}">
                                                            <option value="10">全糖</option>
                                                            <option value="7">少糖</option>
                                                            <option value="5">半糖</option>
                                                            <option value="3">微糖</option>
                                                            <option value="0">無糖</option>
                                                        </select>
                                                        <select class="custom-select my-1 mr-sm-2" id="ice-${smenu[j]['b_id']}" name="ice-${smenu[j]['b_id']}">
                                                            <option value="10">全冰</option>
                                                            <option value="7">少冰</option>
                                                            <option value="5">半冰</option>
                                                            <option value="3">微冰</option>
                                                            <option value="1">去冰（碎冰）</option>
                                                            <option value="0">完全去冰</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    `;
                                }
                                else{
                                    html +=  `
                                        <div class="card h-100 shadow border-0"></div>
                                    `;
                                }
                                
                            }
                            html += `</div><br>`;
                            ($('.container-fluid:first > div.row.top > .col-sm-8:first')).append(`${html}`);
                            html = "";
                        }
                    }
                }
            }
        }
    )
}



function showComment() {
    let data = {
        "m_id" : window.location.href.split("m_id=")[1],
    };
    $.post(
        "../php/getComment.php",
        data,
        (response, status) => {
            if (status == "success") {
                if (response["status"] == "success") {
                    let scomment = response["data"];
                    scomment.sort(sortdate).reverse()
                    for (let i=0; i<scomment.length && i<10 ; i++){
                        (($('#com-show')).before(`
                            <div class="card shadow border-0">  
                                <div class="card-title p-4">
                                    ${scomment[i]["u_name"]}
                                </div>
                                <div class="card-body">                         
                                    ${scomment[i]["content"]}
                                    <br>
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
                                    <small class="form-text text-muted">${scomment[i]["time"]}</small>
                                </div>   
                            </div>
                            <br>
                        `));
                        $(`input[name="star"][id=star-${scomment[i]["stars"]}-${i}]`).prop("checked", true);
                    }
                }
            }
        }
    )
}


$(document).ready(function () {
    // check merchant exists
    checkMerchantExists()

    // show shop infomation
    showInfo();

    // show shop discount
    for (let i = 0; i < sdiscount.length; i++) {
        ($('.container-fluid:first')).prepend(`
            <div class="row top">
                <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="card h-100 shadow border-0">
                            <div class="card-body p-4">                       
                                <a class="text-decoration-none link-dark stretched-link" href="#!"><label>${sdiscount[i]["disname"]}</label></a>
                            </div>
                        </div>  
                    </div>
                <div class="col-sm-3"></div>
            </div>
        `);
    }


    // show shop menu
    showMenu()
    
    // show scomment record
    showComment();

});
loveshop = 
[
    {
        "shopname":"shop1",
        "shopherf":"../home/"
    },
    {
        "shopname":"shop2",
        "shopherf":"../home/"
    },
    {
        "shopname":"shop3",
        "shopherf":"../home/"
    }
]

comment = 
[
    {
        "comname":"shop1",
        "comherf":"../home/",
        "comcom" :"good1",
        "comtime":"2001/12/21 00:00:00"
    },
    {
        "comname":"shop2",
        "comherf":"../home/",
        "comcom" :"good2",
        "comtime":"2001/12/22 00:00:00"
    },
    {
        "comname":"shop3",
        "comherf":"../home/",
        "comcom" :"good3",
        "comtime":"2001/12/24 00:00:00"
    },
    {
        "comname":"shop4",
        "comherf":"../home/",
        "comcom" :"good4",
        "comtime":"2001/12/23 00:00:00"
    },
    {
        "comname":"shop5",
        "comherf":"../home/",
        "comcom" :"good5",
        "comtime":"2001/12/26 00:00:00"
    },
    {
        "comname":"shop6",
        "comherf":"../home/",
        "comcom" :"good6",
        "comtime":"2001/12/25 00:00:00"
    },
    {
        "comname":"shop7",
        "comherf":"../home/",
        "comcom" :"good7",
        "comtime":"2001/12/27 01:20:00"
    },
    {
        "comname":"shop8",
        "comherf":"../home/",
        "comcom" :"good8",
        "comtime":"2001/12/27 01:00:00"
    },
    {
        "comname":"shop9",
        "comherf":"../home/",
        "comcom" :"good9",
        "comtime":"2001/12/1 00:00:00"
    },
    {
        "comname":"shop10",
        "comherf":"../home/",
        "comcom" :"good10",
        "comtime":"2001/12/2 00:00:00"
    },
    {
        "comname":"shop11",
        "comherf":"../home/",
        "comcom" :"good11",
        "comtime":"2001/12/5 00:00:00"
    },
    {
        "comname":"shop12",
        "comherf":"../home/",
        "comcom" :"good12",
        "comtime":"2001/12/4 00:00:00"
    }
]

userinfo = {
    "name": "Mark",
    "email": "mark@gmail.com",
    "id":"mark",
    "phone": "0912345678",
    "password":""
}


function sortdate(a, b){
    return new Date(a.comtime).getTime() - new Date(b.comtime).getTime();
}

$(document).ready(function(){

    //here to show user information
    ($("input[id][name$='username']")).val(`${userinfo["name"]}`);
    ($("input[id][name$='id']")).val(`${userinfo["id"]}`);
    ($("input[id][name$='email']")).val(`${userinfo["email"]}`);
    ($("input[id][name$='phone']")).val(`${userinfo["phone"]}`);

    //here to start show love shop
    var shoplen = loveshop.length
    if (shoplen == 0){
        $('.list-group').html(`<a href="../home/" class="list-group-item list-group-item-action">前往首頁添加最愛商家</a>`);
    }
    else{
        $('.list-group').html("");
        for (let i = 0 ; i < shoplen; i++){
            $('.list-group').append(`<a href="${loveshop[i]["shopherf"]}" class="list-group-item list-group-item-action">${loveshop[i]["shopname"]}</a>`); 
        }
    }
    //here to show comment record
    comment.sort(sortdate).reverse()    //comment sort by datetime

    if (comment.length == 0){
        $('.container-fluid:nth(1)').html("");
        $('.container-fluid:nth(1)').html(
            `
            <div class="container-fluid ">
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
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                        </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">»</span>
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
            </div>
            `
        );
    }
    else{
        for (let i=0; i<10; i++){
            ($(`.container-fluid:nth(1)`).find('h3')[i]).textContent    = `${comment[i]["comname"]}`;
            ($(`.container-fluid:nth(1)`).find('label')[i]).textContent = `${comment[i]["comcom"]}`;
        }
    }
})


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

minfor = {
    "msname": "好喝飲料店",
    "msadd": "西屯區100號",
    "msphone": "0412345678",
    "mmname": "pingleo",
    "mmphone": "0912345678",
    "mstime": "8am-8pm",
    "mdeliver": "是"
}

mmenu = [
    {
        "menuname": "奶茶",
        "menuprice": "20元"
    },
    {
        "menuname": "紅茶",
        "menuprice": "25元"
    },
    {
        "menuname": "綠茶",
        "menuprice": "30元"
    },
    {
        "menuname": "烏龍茶",
        "menuprice": "35元"
    },
    {
        "menuname": "紅茶拿鐵",
        "menuprice": "35元"
    },
    {
        "menuname": "綠茶拿鐵",
        "menuprice": "40元"
    },
    {
        "menuname": "好喝的茶",
        "menuprice": "45元"
    },
    {
        "menuname": "看似好喝的茶",
        "menuprice": "50元"
    },
    {
        "menuname": "真的好喝的茶",
        "menuprice": "60元"
    }
]

comment = [
    {
        "comname": "shop1",
        "comherf": "../home/",
        "comcom": "good1",
        "comtime": "2001/12/21 00:00:00"
    },
    {
        "comname": "shop2",
        "comherf": "../home/",
        "comcom": "good2",
        "comtime": "2001/12/22 00:00:00"
    },
    {
        "comname": "shop3",
        "comherf": "../home/",
        "comcom": "good3",
        "comtime": "2001/12/24 00:00:00"
    },
    {
        "comname": "shop4",
        "comherf": "../home/",
        "comcom": "good4",
        "comtime": "2001/12/23 00:00:00"
    },
    {
        "comname": "shop5",
        "comherf": "../home/",
        "comcom": "good5",
        "comtime": "2001/12/26 00:00:00"
    },
    {
        "comname": "shop6",
        "comherf": "../home/",
        "comcom": "good6",
        "comtime": "2001/12/25 00:00:00"
    },
    {
        "comname": "shop7",
        "comherf": "../home/",
        "comcom": "good7",
        "comtime": "2001/12/27 01:20:00"
    },
    {
        "comname": "shop8",
        "comherf": "../home/",
        "comcom": "good8",
        "comtime": "2001/12/27 01:00:00"
    },
    {
        "comname": "shop9",
        "comherf": "../home/",
        "comcom": "good9",
        "comtime": "2001/12/1 00:00:00"
    },
    {
        "comname": "shop10",
        "comherf": "../home/",
        "comcom": "good10",
        "comtime": "2001/12/2 00:00:00"
    },
    {
        "comname": "shop11",
        "comherf": "../home/",
        "comcom": "good11",
        "comtime": "2001/12/5 00:00:00"
    },
    {
        "comname": "shop12",
        "comherf": "../home/",
        "comcom": "good12",
        "comtime": "2001/12/4 00:00:00"
    }
]


function sortdate(a, b) {
    return new Date(a.comtime).getTime() - new Date(b.comtime).getTime();
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
                        $('#show-mer-com').after(`
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
                        
                        // var page = 0;       //count the current page
                        var comlen;         //count the length of comment length
                        if (comment.length%10 != 0) comlen = comment.length/10+1;
                        else                        comlen = comment.length/10;
                
                        // html = "";       //to show html on merchant comment
                
                        for (let i = 0; i < 10 && i < comment.length; i++) {
                            $('#show-mer-com').after(`
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
                                </div>
                            `)
                            if (i == 9){
                                $('#v-pills-rate > div.container-fluid').append(`
                                    <div>
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                `)
                            }
                            $(`input[name="star"][id=star-${comment[i]["stars"]}-${i}]`).prop("checked", true)
                        }
                    }
                }
            }
        }
    )
}


$(document).ready(function () {
    //change merchant discount
    for (let i=0;i<mdiscount.length;i++){
        // ($('#v-pills-rate').find('label')[0]).textContent = "尚無評價喔~";
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
    ($("input[id][name$='shop']")).val(`${minfor["msname"]}`);
    ($("input[id][name$='address']")).val(`${minfor["msadd"]}`);
    ($("input[id][name$='tel']")).val(`${minfor["msphone"]}`);
    ($("input[id][name$='manager']")).val(`${minfor["mmname"]}`);
    ($("input[id][name$='phone']")).val(`${minfor["mmphone"]}`);
    ($("input[id][name$='time']")).val(`${minfor["mstime"]}`);
    ($("input[id][name$='waimai']")).val(`${minfor["mdeliver"]}`);

    //change merchant menu
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
                        <div class="card h-100 shadow border-0">
                            <div class="card-header">
                                <h4></h4>
                            </div>
                            <div class="card-body p-4">
                                <div class="center">
                                    <label></label>
                                    <br>
                                    <button type="submit" class="btn btn-primary">編輯</button>
                                    <button type="submit" class="btn btn-danger">刪除</button>
                                </div>
                            </div>
                        </div>
                    `);
                }
            }
            html += `</div><br>`;
            ($('#showmenu')).append(`${html}`);
            
            html = "";
        }
    }

    //here to show comment record
    // showComment();

    //start
    if (comment.length == 0) {
        $('#show-mer-com').after(`
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
        
        // var page = 0;       //count the current page
        var comlen;         //count the length of comment length
        if (comment.length%10 != 0) comlen = comment.length/10+1;
        else                        comlen = comment.length/10;

        html = "";       //to show html on merchant comment

        for (let i = 0; i < 3 && i < comment.length; i++) {
            $('#show-mer-com').after(`
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
    //end
    

});

                    
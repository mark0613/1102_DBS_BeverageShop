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

smenu = [
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
    }
]

scomment = [
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


$(document).ready(function () {

    //change shop discount
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


    //change shop menu

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
        for (let i = 0; i < smenu.length; i++) {
            // if (i%3==0){
            //     ($('.container-fluid:first > div.row.top > .col-sm-8:first')).append(`
            //         <div class="card-deck">
            //     `);
            // }
            ($('.container-fluid:first > div.row.top > .col-sm-8:first > .card-deck')).append(`
                <div class="card h-100 shadow border-0">
                    <div class="card-body p-4">
                        <div class="center">
                            <label>${smenu[i]["menuname"]}</label>
                            <label>${smenu[i]["menuprice"]}</label>
                            <input type='button' value='-' class="btn btn-outline-danger btn-sm">
                            <input type='text' name='quantity' value='0' class="in">
                            <input type='button' value='+' field='quantity' class="btn btn-outline-primary btn-sm">
                        </div>
                    </div>
                </div>
            `);
            // if (i%3==2 || i==smenu.length-1){
            //     ($('.container-fluid:first > div.row.top > .col-sm-8:first')).append(`
            //             </div>
            //     `);
            // }
        }
    }


    //here to show scomment record
    
    scomment.sort(sortdate).reverse()    //comment sort by datetime

    for (let i=0; i<scomment.length && i<10 ; i++){
        ($('.container-fluid:first > div.center.top:nth(1)')).after(`
            <div>
                <label>${scomment[i]["comcom"]}</label>
            </div>
            <br>
        `)
    }
    



});
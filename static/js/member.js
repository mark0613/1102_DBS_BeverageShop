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
        "comcom" :"good",
        "comtime":"2001/12/21"
    },
    {
        "comname":"shop2",
        "comherf":"../home/",
        "comcom" :"good",
        "comtime":"2001/12/22"
    },
    {
        "comname":"shop3",
        "comherf":"../home/",
        "comcom" :"good",
        "comtime":"2001/12/24"
    },
    {
        "comname":"shop4",
        "comherf":"../home/",
        "comcom" :"good",
        "comtime":"2001/12/23"
    },
    {
        "comname":"shop5",
        "comherf":"../home/",
        "comcom" :"good",
        "comtime":"2001/12/26"
    },
    {
        "comname":"shop6",
        "comherf":"../home/",
        "comcom" :"good",
        "comtime":"2001/12/25"
    },
    {
        "comname":"shop7",
        "comherf":"../home/",
        "comcom" :"good",
        "comtime":"2001/12/27"
    },
    {
        "comname":"shop8",
        "comherf":"../home/",
        "comcom" :"good",
        "comtime":"2001/12/28"
    },
    {
        "comname":"shop9",
        "comherf":"../home/",
        "comcom" :"good",
        "comtime":"2001/12/1"
    },
    {
        "comname":"shop10",
        "comherf":"../home/",
        "comcom" :"good",
        "comtime":"2001/12/2"
    },
    {
        "comname":"shop11",
        "comherf":"../home/",
        "comcom" :"good",
        "comtime":"2001/12/5"
    },
    {
        "comname":"shop12",
        "comherf":"../home/",
        "comcom" :"good",
        "comtime":"2001/12/4"
    }
]



$(document).ready(function(){
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
    var recomarr = document.getElementsByClassName("card-body p-4")
    console.log(recomarr)
    
})
// namearr[i].textContent = hot[i]["name"]
// imgarr[i].src = hot[i]["img"]
// bodyarr[4*i].textContent = hot[i]["address"]
// bodyarr[4*i+1].textContent = hot[i]["bestseller"]
// bodyarr[4*i+2].textContent = hot[i]["comment0"]
// bodyarr[4*i+3].textContent = hot[i]["comment1"]
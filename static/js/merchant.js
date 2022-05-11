// merchant 優惠、商家資料、菜單、評價(前10筆)

mdiscount = [
    
]

minfor = {
    "msname"     :"好喝飲料店",
    "msadd"      :"西屯區100號",
    "msphone"    :"0412345678",
    "mmname"     :"pingleo",
    "mmphone"    :"0912345678",
    "mstime"     :"8am-8pm",
    "mdeliver"   :"是"
}

mmenu = [
    {

    },
    {

    }
]

mcomment = [
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


$(document).ready(function(){

    //change member information
    ($("input[id][name$='shop']")).val(`${minfor["msname"]}`);
    ($("input[id][name$='address']")).val(`${minfor["msadd"]}`);
    ($("input[id][name$='tel']")).val(`${minfor["msphone"]}`);
    ($("input[id][name$='manager']")).val(`${minfor["mmname"]}`);
    ($("input[id][name$='phone']")).val(`${minfor["mmphone"]}`);
    ($("input[id][name$='time']")).val(`${minfor["mstime"]}`);
    ($("input[id][name$='waimai']")).val(`${minfor["mdeliver"]}`);
   
})

var namearr = document.getElementsByClassName("h3 card-title mb-3")
var imgarr = document.getElementsByClassName("card-img-top cover")
var bodyarr = document.getElementsByClassName("card-text mb-0")

// hot = [
//     {
//       "name" : "IGEN00",
//       "img" : "../static/img/default.jpg",
//       "address" : "road0",
//       "bestseller" : "Good0",
//       "comment0" : "good0",
//       "comment1" : "good1"
//     },
//     {
//         "name" : "IGEN01",
//         "img" : "../static/img/default.jpg",
//         "address" : "road1",
//         "bestseller" : "Good1",
//         "comment0" : "good0",
//         "comment1" : "good1"
//     },
//     {
//         "name" : "IGEN02",
//         "img" : "../static/img/default.jpg",
//         "address" : "road2",
//         "bestseller" : "Good2",
//         "comment0" : "good0",
//         "comment1" : "good1"
//     },
//     {
//         "name" : "IGEN03",
//         "img" : "../static/img/default.jpg",
//         "address" : "road3",
//         "bestseller" : "Good3",
//         "comment0" : "good0",
//         "comment1" : "good1"
//     },
//     {
//         "name" : "IGEN04",
//         "img" : "../static/img/default.jpg",
//         "address" : "road4",
//         "bestseller" : "Good4",
//         "comment0" : "good0",
//         "comment1" : "good1"
//     },
//     {
//         "name" : "IGEN05",
//         "img" : "../static/img/default.jpg",
//         "address" : "road5",
//         "bestseller" : "Good5",
//         "comment0" : "good0",
//         "comment1" : "good1"
//     }
// ]

discount = [
    {
      "name" : "IGEN10",
      "img" : "../static/img/default.jpg",
      "address" : "road0",
      "bestseller" : "Good0",
      "comment0" : "good0",
      "comment1" : "good1"
    },
    {
        "name" : "IGEN11",
        "img" : "../static/img/default.jpg",
        "address" : "road1",
        "bestseller" : "Good1",
        "comment0" : "good0",
        "comment1" : "good1"
    },
    {
        "name" : "IGEN12",
        "img" : "../static/img/default.jpg",
        "address" : "road2",
        "bestseller" : "Good2",
        "comment0" : "good0",
        "comment1" : "good1"
    },
    {
        "name" : "IGEN13",
        "img" : "../static/img/default.jpg",
        "address" : "road3",
        "bestseller" : "Good3",
        "comment0" : "good0",
        "comment1" : "good1"
    },
    {
        "name" : "IGEN14",
        "img" : "../static/img/default.jpg",
        "address" : "road4",
        "bestseller" : "Good4",
        "comment0" : "good0",
        "comment1" : "good1"
    },
    {
        "name" : "IGEN15",
        "img" : "../static/img/default.jpg",
        "address" : "road5",
        "bestseller" : "Good5",
        "comment0" : "good0",
        "comment1" : "good1"
    }
]

function show6Shops() {
    let data = {}
    $.post(
        "../php/getHot.php",
        data,
        (response, status) => {
            if (status == "success") {
                if (response["status"] == "success") {
                    let hot = response["data"];
                    for (let i = 0 ; i < 6; i++){
                        namearr[i].textContent = hot[i]["info"]["m_name"];
                        imgarr[i].src = `../static/img/${hot[i]["info"]["photo"]}`;
                        bodyarr[4*i].textContent = `${hot[i]["info"]["address_city"]} ${hot[i]["info"]["address_district"]} ${hot[i]["info"]["address_detail"]}`;
                        bodyarr[4*i+1].textContent = "...";
                        bodyarr[4*i+2].textContent = hot[i]["comments"][0]["content"];
                        bodyarr[4*i+3].textContent = hot[i]["comments"][1]["content"];
                    }
                }
            }
        }
    )
    
}

$(document).ready(function(){
    // show 6 shops
    show6Shops();

    for (let i = 6 ; i < 12; i++){
        namearr[i].textContent = discount[i-6]["name"]
        imgarr[i].src = discount[i-6]["img"]
        bodyarr[4*i].textContent = discount[i-6]["address"]
        bodyarr[4*i+1].textContent = discount[i-6]["bestseller"]
        bodyarr[4*i+2].textContent = discount[i-6]["comment0"]
        bodyarr[4*i+3].textContent = discount[i-6]["comment1"]
    }
})
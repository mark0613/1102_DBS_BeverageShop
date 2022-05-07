hot = [
    {
      "name" : "IGEN0",
      "img" : "../static/img/pingleo.jpg",
      "address" : "road0",
      "bestseller" : "Good0",
      "comment0" : "good0",
      "comment1" : "good1"
    },
    {
        "name" : "IGEN1",
        "img" : "../static/img/pingleo.jpg",
        "address" : "road1",
        "bestseller" : "Good1",
        "comment0" : "good0",
        "comment1" : "good1"
    },
    {
        "name" : "IGEN2",
        "img" : "../static/img/pingleo.jpg",
        "address" : "road2",
        "bestseller" : "Good2",
        "comment0" : "good0",
        "comment1" : "good1"
    },
    {
        "name" : "IGEN3",
        "img" : "../static/img/pingleo.jpg",
        "address" : "road3",
        "bestseller" : "Good3",
        "comment0" : "good0",
        "comment1" : "good1"
    },
    {
        "name" : "IGEN4",
        "img" : "../static/img/pingleo.jpg",
        "address" : "road4",
        "bestseller" : "Good4",
        "comment0" : "good0",
        "comment1" : "good1"
    },
    {
        "name" : "IGEN5",
        "img" : "../static/img/pingleo.jpg",
        "address" : "road5",
        "bestseller" : "Good5",
        "comment0" : "good0",
        "comment1" : "good1"
    }
]

discount = [
    {
      "name" : "IGEN0",
      "img" : "../static/img/pingleo.jpg",
      "address" : "road0",
      "bestseller" : "Good0",
      "comment0" : "good0",
      "comment1" : "good1"
    },
    {
        "name" : "IGEN1",
        "img" : "../static/img/pingleo.jpg",
        "address" : "road1",
        "bestseller" : "Good1",
        "comment0" : "good0",
        "comment1" : "good1"
    },
    {
        "name" : "IGEN2",
        "img" : "../static/img/pingleo.jpg",
        "address" : "road2",
        "bestseller" : "Good2",
        "comment0" : "good0",
        "comment1" : "good1"
    },
    {
        "name" : "IGEN3",
        "img" : "../static/img/pingleo.jpg",
        "address" : "road3",
        "bestseller" : "Good3",
        "comment0" : "good0",
        "comment1" : "good1"
    },
    {
        "name" : "IGEN4",
        "img" : "../static/img/pingleo.jpg",
        "address" : "road4",
        "bestseller" : "Good4",
        "comment0" : "good0",
        "comment1" : "good1"
    },
    {
        "name" : "IGEN5",
        "img" : "../static/img/pingleo.jpg",
        "address" : "road5",
        "bestseller" : "Good5",
        "comment0" : "good0",
        "comment1" : "good1"
    }
]

$(document).ready(function(){
    var namearr = document.getElementsByClassName("h3 card-title mb-3")
    var imgarr = document.getElementsByClassName("card-img-top cover")
    var bodyarr = document.getElementsByClassName("card-text mb-0")
    console.log(namearr)
    for (let i = 0 ; i < 6; i++){
        namearr[i].textContent = hot[i]["name"]
        imgarr[i].src = hot[i]["img"]
        bodyarr[4*i].textContent = hot[i]["address"]
        bodyarr[4*i+1].textContent = hot[i]["bestseller"]
        bodyarr[4*i+2].textContent = hot[i]["comment0"]
        bodyarr[4*i+3].textContent = hot[i]["comment1"]
    }
    for (let i = 6 ; i < 12; i++){
        namearr[i].textContent = discount[i-6]["name"]
        imgarr[i].src = discount[i-6]["img"]
        bodyarr[4*i].textContent = discount[i-6]["address"]
        bodyarr[4*i+1].textContent = discount[i-6]["bestseller"]
        bodyarr[4*i+2].textContent = discount[i-6]["comment0"]
        bodyarr[4*i+3].textContent = discount[i-6]["comment1"]
    }
})
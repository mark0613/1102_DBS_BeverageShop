// put in console

function getRandom(min,max){
    return Math.floor(Math.random()*(max-min+1))+min;
};

let ran = getRandom(1000, 9999);
$("#email").val(`mark0613${ran}@gmail.com`);
$("#username").val(`mark${ran}`);
$("#password").val("aabbcc123");
$("#phone").val(`09${ran}${ran}`);
$("#type").val("merchant")
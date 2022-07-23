var GPRD_COOKIE_LENGTH = 180;

function checkGPRD(){
    if(getCookie("GPRD") == ""){
    openGPRD();
    }
}
function setCookie(name, value, days) {
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}
function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = document.cookie.length;
            }
            return decodeURI(document.cookie.substring(c_start, c_end));
        }
    }
    return "";
}
function previewUrl(url,target){
    var div = document.getElementById(target);
    div.innerHTML = '<iframe style="width:100%;height:100%;" frameborder="0" src="' + url + '" />';      
}
function openTerms(){
    document.getElementById("gprd").style.height = "100%";
    document.getElementById("terms").style.height = "80%";
    previewUrl("/terms","terms");
}
function openGPRD(){
    document.getElementById("gprd").style.width = "100%";
}
function agreeGPRD() {
    setCookie("GPRD","true",GPRD_COOKIE_LENGTH);
    closeGPRD();
}
function closeGPRD() {
    document.getElementById("gprd").innerHTML = "";
    document.getElementById("gprd").style.width = "0%";
}

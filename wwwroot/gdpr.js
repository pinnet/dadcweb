var GDPR_COOKIE_LENGTH = 180;

function checkGDPR(){
    if(getCookie("GDPR") == ""){
    openGDPR();
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
    document.getElementById("gdpr").style.height = "100%";
    document.getElementById("terms").style.height = "80%";
    previewUrl("/terms","terms");
    document.getElementById("gdpr-content").innerHTML += '<a href="javascript:agreeGDPR();">I agree</a>';
}
function openGDPR(){
    document.getElementById("gdpr").style.width = "100%";   
}
function agreeGDPR() {
    setCookie("GDPR","true",GDPR_COOKIE_LENGTH);
    closeGDPR();
}
function closeGDPR() {
    document.getElementById("gdpr").innerHTML = "";
    document.getElementById("gdpr").style.width = "0%";
}

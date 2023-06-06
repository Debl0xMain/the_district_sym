
const loginchange = () => {

    if (document.getElementById("changemodal").checked == true) {
        $("#inscription").fadeIn(2000);
        $("#loginchange").fadeOut(0);
        $("#btnlogintext").html('inscription');
    }
    else {
        $("#loginchange").fadeIn(2000);
        $("#inscription").fadeOut(0);
        $("#btnlogintext").html('login');
    }
    
}

document.getElementById("logincharge").addEventListener("click", loginchange);
document.getElementById("changemodal").addEventListener("click", loginchange);
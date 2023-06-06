const loginchange = () => {

    if ($("#changemodal").checked == true) {
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

$("#logincharge").on("click", loginchange);
$("#changemodal").on("click", loginchange);
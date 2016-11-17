"use strict";
/*global $, console
*/

function register() {
    switchPage(".divLogin", ".divRegister");
    console.log("Works..");
}

function forgot() {
    switchPage(".divLogin", '#divForgot');
    console.log("Vergeten zeg...");
}

function backHome() {
    switchPage(".divRegister", ".divLogin");
    console.log("terug");
}

function backHome2() {
    switchPage('#divForgot', ".divLogin");
    console.log("terug");
}


function switchPage(frompage, topage) {
    $(frompage).hide();
    $(topage).show(500);
}

$(document).ready(function () {
    /*
     *  BINDING ALL BUTTONS, LINKS, etc.
     */
    $('#register').on("touchstart", register);
    $('#backReg').on("touchstart", backHome);
    $('#aForgot').on("touchstart", forgot);
    $('#backForgot').on("touchstart", backHome2);
});
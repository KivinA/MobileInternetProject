"use strict";
/*global $, console
*/

function register()
{
    switchPage(".divLogin", ".divRegister");
    console.log("Works..");
}

function switchPage(frompage, topage)
{
    $(frompage).hide();
    $(topage).show(500);
}

$(document).ready(function ()
    {
    /*
     *  BINDING ALL BUTTONS, LINKS, etc.
     */
        $('#aForgot').on("touchstart", register);
    });
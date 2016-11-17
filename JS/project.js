"use strict";
/*global $, console
*/

function vergeten()
{

    
   if($(".divLogin").is(":visible"))
        {
            $(".divLogin").hide();
            $(".divRegister").show(1000);
        }
    else{
        
        $(".divRegister").show(1000);
   
    }   
}



$(document).ready(function ()
    {
        $(".divRegister").hide();
    });
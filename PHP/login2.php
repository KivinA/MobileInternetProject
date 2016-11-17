<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
	<script src="jquery-1.11.2.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>


	
	<script>
		$(document).ready(function()
		{
			$(".front-page").hide();
			$(".place-page").hide();
		    $(".register-pagina").hide();
		    $("#painpage").hide();
		    $("#male").hide();
		    $("#female").hide();
		    $(".register").show();
		    $(".help-page").hide();
            $(".Quick-ScanData").hide();
            
		    
			$('#login').click(function() 
	    	{
	    		
	    		var username=$("#username").val();
var password=$("#password").val();
var dataString = 'username='+username+'&password='+password;
//if($.trim(username).length>0 && $.trim(paswoord).length>0)
//{
	//$("#load").html("<img src='img/loading.gif' height='60' width='80' />").fadeIn('fast');
$.ajax({
type: "POST",
url: "http://roozeleer.be/ioh/login.php",
data: dataString,
cache: false,
beforeSend: function(){ $("#login").val('Connecting...');},
success: function(data){
if(data)
{

$(".front-page").show();
	    		$(".login-pagina").hide();
				$(".register-pagina").hide();
				$("#painpage").hide();
				$("#male").hide();
				$("#female").hide();
				$(".register").hide();
				$(".help-page").hide();
    $(".Quick-ScanData").hide();
}
else
{
$("#ack").html("<span style='color:#cc0000'>Error:</span> Invalid username or password. ");
$("#load").fadeOut();
}
}
});

//}
return false;
	    		
	    		
	    	});
			
	    	$('#where').click(function() 
	    	{
	    		$(".front-page").hide();
	    		$(".login-pagina").hide();
	    		$(".place-page").show();
				$(".register-pagina").hide();
				$("#painpage").hide();
				$("#male").hide();
		    	$("#female").hide();
		    	$(".register").hide();
		    	$(".help-page").hide();
                $(".Quick-ScanData").hide();
	    	
	    	});
            $('#getQuikScan').click(function() 
	    	{
	    		$(".front-page").hide();
	    		$(".login-pagina").hide();
	    		$(".Quick-ScanData").show();
                $(".place-page").hide();
				$(".register-pagina").hide();
				$("#painpage").hide();
				$("#male").hide();
		    	$("#female").hide();
		    	$(".register").hide();
		    	$(".help-page").hide();

                
                $.get("http://roozeleer.be/ioh/quickScan.php", function(data){

                    $('#MyData').html(data);
               
                });
               /* $.ajax({
                    type: "POST",
                    url: "http://roozeleer.be/ioh/quickScan.php",
                    
                });*/
	    	
	    	});
	    	
	    	$('#pain').click(function() 
	    	{
	    		$(".front-page").hide();
	    		$(".login-pagina").hide();
	    		$(".place-page").hide();
	    		$(".registerNgo").hide();
	    		$("#painpage").show();
	    		$("#male").hide();
		    	$("#female").hide();
		    	$("register").hide();
		    	$(".help-page").hide();
                $(".Quick-ScanData").hide();
	    	});
	    	$('#help').click(function() 
	    	{
	    	    	$(".help-page").show();
	    	    	$(".front-page").hide();
		    		$(".login-pagina").hide();
		    		$(".place-page").hide();
		    		$("#registerNgo").hide();
                $(".Quick-ScanData").hide();
	    	});
	    	
	    	$('#home1 , #home2 , #home3 , #home4 , #home5 , #home6').click(function() 
	    	{
	    		$(".front-page").show();
	    		$(".login-pagina").hide();
	    		$(".place-page").hide();
	    		$(".register-pagina").hide();
	    		$("#painpage").hide();
	    		$("#male").hide();
		    	$("#female").hide();
		    	$("#register").hide();
		    	$(".help-page").hide();
                $(".Quick-ScanData").hide();
	    	});
	    	
	    	$('#register').click(function() 
	    	{
            
	    		$(".front-page").hide();
	    		$(".login-pagina").hide();
	    		$(".place-page").hide();
	    		$(".register-pagina").show();
	    		$("#painpage").hide();
	    		$("#male").hide();
		    	$("#female").hide();
		    	$("#register").hide();	
		    	$(".help-page").hide();
                $(".Quick-ScanData").hide();
                
                
	    	});
            $('#registerSubmit').click(function() 
	    	{
	    		//$(".register-pagina").show();
	    		
	    		var name = $('#name').val();
var firstname = $('#firstname').val();
var birthday = $('#dateofbirth').val();
var username = $('#usernameR').val();
var password=$('#passwordR').val();
if(name ==''||firstname==''||birthday==''||username==''||password=='')
    {
       
        alert("Error : please fill in every fields"); 
	    		
    }
           else
               {
                   
               
    
$.ajax({
type: "POST",
url: "http://roozeleer.be/ioh/register.php",
data: {
    name:name,
    firstname:firstname,
    dateofbirth:birthday,
    username:username,
    password:password

},
success: function (msg) {
if((msg) == "Registered")  
$('#ackR').html(msg);
else
$('#ackR').html("<span style='color:#cc0000'>Error:</span> Cannot register.");
}
}); 
                   }
                
	    	});
	    	
	    	$('#btnmale').click(function() 
	    	{
	    		$(".front-page").hide();
	    		$(".login-pagina").hide();
	    		$(".place-page").hide();
	    		$(".register-pagina").hide();
	    		$("#painpage").hide();
	    		$("#male").show();
		    	$("#female").hide();
		    	$("#register").hide();	
		    	$(".help-page").hide();
                $(".Quick-ScanData").hide();
	    	});
	    	
	    	$('#btnfemale').click(function() 
	    	{
	    		$(".front-page").hide();
	    		$(".login-pagina").hide();
	    		$(".place-page").hide();
	    		$(".register-pagina").hide();
	    		$("#painpage").hide();
	    		$("#male").hide();
		    	$("#female").show();
		    	$("#register").hide();	
		    	$(".help-page").hide();
                $(".Quick-ScanData").hide();
	    	});
            
            
		})
		
	</script>
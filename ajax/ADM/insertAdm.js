
//criar um função para chamar pelo html
$(document).ready(function() {
$('#butsave').on('click', function() {
$("#butsave").attr("disabled", "disabled");

var NAME       = $('#NAME').val();
var EMAIL      = $('#ADMEMAIL').val();
var PASS  	   = $('#PASS_ADM').val();
var USER_NAME  = $('#USER_NAME').val();

if(NAME!="" && EMAIL!="" && PASS!="" && USER_NAME!="" ){
	$.ajax({
		url: "PHP/insert.php",
		type: "POST",
		data: {
			NAME:     NAME,
			ADMEMAIL: EMAIL,
			PASS_ADM: PASS,
			USER_NAME:USER_NAME 				
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				$("#butsave").removeAttr("disabled");
				$('#fupForm').find('input:text').val('');
				$('#fupForm').find('input:password').val('');
				location.reload();
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}else if(dataResult.statusCode==202){
				$("#butsave").removeAttr("disabled");
				$('#fupForm').find('input:text').val('');
				$('#fupForm').find('input:password').val('');
				$("#success").show(1500);
				$('#success').html('Existing username or email!');
				$("#success").hide(1500); 
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
});
});

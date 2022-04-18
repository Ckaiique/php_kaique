// $.ajax({
//     url: "PHP/selectuser.php",
//     type: "POST",
//     cache: false,
//     success: function(data){
//         $('#table').html(data); 
//     }
// });



$(document).ready(function() {
	function ajax(){
		var req = new XMLHttpRequest();
		req.onreadystatechange = function(){
			if(req.readyState == 4 && req.status == 200){
				document.getElementById('table').innerHTML = req.responseText;
			}
		}
		req.open('GET','PHP/selectuser.php',true);
		req.send();
	}
	setInterval(function(){ajax();},1000);
	
	
	// $.ajax({
    //     url: "PHP/selectuser.php",
    //     type: "POST",
    //     cache: false,
    //     success: function(data){
    //         $('#table').html(data); 
    //     }
	// });
	$(function () {
		$('#update_country').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget); /*Button that triggered the modal*/
			var id       = button.data('id');
			var name     = button.data('name');
			var mensagem = button.data('mensagem');
			var versao   = button.data('versao');
			var pass     = button.data('pass');
			var modal    = $(this);
			modal.find('#name').val(name);
			modal.find('#mensagem').val(mensagem);
			modal.find('#versao').val(versao);
			modal.find('#pass').val(pass);
			modal.find('#id').val(id);
		});
    });
	$(document).on("click", "#update_data", function() { 
		$.ajax({
			url: "PHP/updateuser.php",
			type: "POST",
			cache: false,
			data:{
				func:'user',
				id:       $('#id').val(),
				name:     $('#name').val(),
				mensagem: $('#mensagem').val(),
				versao:   $('#versao').val(),
				pass:     $('#pass').val(),
			},
			success: function(dataResult){
				var dataResult = JSON.parse(dataResult);
				if(dataResult.statusCode==200){
					$('#update_country').modal().hide();
					location.reload();					
				}
			}
		});
	}); 
});
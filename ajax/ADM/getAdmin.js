$.ajax({
    url: "PHP/selectAdm.php",
    type: "POST",
    cache: false,
    success: function(data){
        $('#table').html(data); 
    }
});
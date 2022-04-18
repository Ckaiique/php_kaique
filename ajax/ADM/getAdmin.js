function ajax(){
    var req = new XMLHttpRequest();
    req.onreadystatechange = function(){
        if(req.readyState == 4 && req.status == 200){
            document.getElementById('table').innerHTML = req.responseText;
        }
    }
    req.open('GET','PHP/selectAdm.php',true);
    req.send();
}
setInterval(function(){ajax();},1000);



// $.ajax({
//     url: "PHP/selectAdm.php",
//     type: "POST",
//     cache: false,
//     success: function(data){
//         $('#table').html(data); 
//     }
// });
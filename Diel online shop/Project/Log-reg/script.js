$(document).ready(function() {
 
    
    $("#search").keyup(function() {
 
       
        var name = $('#search').val();
 
        
        if (name === "") {
 
          
            $("#display").html("");
 
        }
        else {
           
 
            $.ajax({
 
                type: "POST", 
                url: "index_handler.php",
                data: {
                     search: name 
                },
                success: function(response) {
                   $("#display").html(response).show();
                }
 
            });
 
        }
 
    });
 
});
 let btnAdd = document.querySelector('#add');
let btnSubtract = document.querySelector('#subtract');
let input = document.querySelector('#INPUT');
btnAdd.addEventListener('click', () =>{
  input.value = parseInt(input.value) + 1;
});
btnSubtract.addEventListener('click', () =>{
    input.value = parseInt(input.value) - 1;
    if (input.value<0) {
        input.value=0
    }
});

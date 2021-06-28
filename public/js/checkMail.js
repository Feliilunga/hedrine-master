


$(document).ready(function () {

    $.ajaxSetup({

        headers: {
    
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    
        }
    
    });

$("#email").on('change', function () {
    
    // je recupère le mail de l'input et vérifie si il existe déjà. Félicien I. 
    let userMail = $("#email").val();
   
    $.ajax
            ({
                type: 'GET',
                url: '../mailCheck-Up/results',
                dataType: 'text',
                
                data: {
                    'userMail': userMail,
                             
                },
                success: function (result) {
                    console.log(result);
                        
                        if(result == 1){
                            $("#doubleMail").html("Cet email éxiste déjà.");
                            
                        }
                        else{
                            $("#doubleMail").html("");
                            console.log("n'existe pas");
                        }
                    
                }, error: function(data){
                    console.log(data);
                }      
            });

});            

}); 
$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    if( $("#abugmodal")){
        $("#abugmodal").on("click", function(){
            $("#btnreportbug").prop('disabled', true) ? $("#btnreportbug").prop('disabled', false) : '';
            $("input[name=subject]").val(""); 
            $("textarea[name=desc]").val("");
            $("#response").html("");
        });
    }
    if( $("#btnreportbug")){

        $("#btnreportbug").on("click", function(){
            //console.log('report bug clickkk'); 
            if( ($("input[name=route]").val().length > 0) && ($("input[name=subject").val().length > 0) && ( $("textarea[name=desc]").val().length > 0 )){

                
                let informations = {
                    // l'email on l'aura ds le controlleur; 
                    route: $("input[name=route]").val(),
                    sujet: $("input[name=subject").val(),
                    desc:  $("textarea[name=desc]").val()
                }
                
                $.ajax({
                    type: 'POST',
                    url: "../reportbug",
                    data: informations,
                    beforeSend: function(){
                        console.log('Sending data...');
                        $("#response").html("<img src='../images/ajax-loader.gif' alt='loading...'/>");
                    },
                    success: function(response){
                        if(response){
                            $("#response").html("Le bug à bien été enregistré. Merci! <br/> Cette fenêtre disparaitra dans 3 sec");
                            setTimeout(function(){
                                $('#bugmodal').modal('hide')
                            }, 3000);
                            $("#btnreportbug").prop('disabled', true);
                        }
                    },
                    error: function(response){
                        $("#response").html("erreur :" + response.responseText);
                    }
                });
                
                
            }else{
                $("#response").html("<span class='text-danger'>Veuillez bien remplir <b>tous</b> les champs.</span>");
            }
        });

    }



});


$(document).ready(function () {
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });
    let cpt = 2; // si cpt = 1 > mail Ok 
    let cpt2 = 2;
   
    $("#email").on('change', function () {
        // je recupère le mail de l'input et vérifie si il existe déjà. Félicien I. 
        let userMail = $("#email").val();
        $.ajax({
            type: 'POST',
            url: '../mailCheck-Up/results',
            dataType: 'text',  
            data: { 'userMail': userMail },
            success: function (result) {
                if(result == 1){
                    $("#doubleMail").html("Cet email éxiste déjà. Veuillez-vous connecter <a href='login' id='redirectLogin'> ici</a> \n Mot de passe oublié ? <a href='password/reset' id=redirectPassword> Changer mon mot de passe</a>");
                    cpt=2;
                    /*
                    if(cpt == 1 && cpt2 == 1){
                        $("#registerBtn").prop("disabled", false);
                        $("#registerBtn").css({ backgroundColor: "initial"});
                    }else{
                        $("#registerBtn").prop("disabled", true);
                    }
                    */
                    registerBtnStatus();
                }else{
                    $("#doubleMail").html("");
                    cpt = cpt -1;
                    /*
                    
                    if(cpt == 1 && cpt2 == 1){
                        $("#registerBtn").prop("disabled", false);
                        $("#registerBtn").css({ backgroundColor: "initial" });
                    }else{
                        $("#registerBtn").prop("disabled", true);
                    }
                    */
                    registerBtnStatus();
                }
            }     
        });     
    });   

    function checkEmail(email) { 
        return email.match(/[^@]+@[^@]+\.[a-zA-Z]{2,6}/);
    }

    function checkpasss(pass1, pass2) {
        return pass2 == pass1;
    }
    

    $("input[name=email]").on("change", function () {
        var val = $("input[name=email]").val();
    
        if (!checkEmail(val)) {
            $("input[name=email]").css({ backgroundColor: "#FF8888" });
            $("span#emailerrorspan").html("Email non valide.");
            return false;
        } else {
            $("input[name=email]").css({ backgroundColor: "initial" });
            $("span#emailerrorspan").html("");
        }
    });


    $("input#password-confirm").on("change", function () {
        var p1 = $("input#password-confirm");
        var p2 = $("input#password");
    
        if (!checkpasss(p1.val(), p2.val())) {
            p1.css({ "background-color": "#F03F3F" });
            p2.css({ "background-color": "#F03F3F" });
            $("span#passwordserrorspan").html("les mots de passe doivent être identiques");
            return false;
        } else {
            p1.css({ "background-color": "#67C100" });
            p2.css({ "background-color": "#67C100" });
            $("span#passwordserrorspan").html("");
        }
    });
    

    // #check-me => id du checkbox dans le modal 1 (RGPD) // fonctione 100 % 
    $("input#check-me").on("change", function () {

        if ($('input#check-me').prop("checked")) {
            
            $("#refrgpd").prop('disabled', true); // on ne refuse plus si on check (accept); 
            $("input#accept").prop("disabled", false);
            $("input#accept").css({ backgroundColor: "#9CE197" });
            $("#rgpdbtn").html("Voir les conditions RGPD <i class='fa fa-check'></i>");
            $("#rgpdbtn").removeClass("bg-danger").addClass("bg-success");
        } else {
            $("#refrgpd").prop('disabled', false);
            $("input#accept").prop("disabled", true);
            $("input#accept").css({ backgroundColor: "initial" });
            $("#rgpdbtn").html("Voir les conditions RGPD <i class='fa fa-times'></i>");
            $("#rgpdbtn").removeClass("bg-success").addClass("bg-danger");
        }
        registerBtnStatus(); 
    });
    
    // refus conditions RGPD: 
    $("#refrgpd").on("click", function(){
        //alert('ref rgpd');
        $("#check-me").prop("checked", false);
        $("input#accept").prop("disabled", true);
        $("input#accept").css({ backgroundColor: "initial" });
        $("#rgpdbtn").html("Voir les conditions RGPD <i class='fa fa-times'></i>");
        $("#rgpdbtn").removeClass("bg-success").addClass("bg-danger");
    });
    
    $("#check-conditions").on("change", function(){ // checkbox (2) conditions check ; 

        if($("#check-conditions").prop("checked")){
            $("#accept-conditions").prop('disabled', false);    // le btn j'accept ds le modal ; 
            $("#accept-conditions").css({"background-color":"#9CE197"});
            $("#conditbtn").removeClass("bg-danger").addClass("bg-success").html("Voir les Conditions d'Utilisation <i class='fa fa-check'></i>");
            $("#refcond").prop('disabled', true);
        }else{
            $("#refcond").prop('disabled', false);
            $("#accept-conditions").prop('disabled', true);
            $("#accept-conditions").css({"background-color":"none"});
            $("#conditbtn").removeClass("bg-success").addClass("bg-danger").html("Voir les Conditions d'Utilisation <i class='fa fa-times'></i>");
        }
        registerBtnStatus();
    });


    // refus conditions{  // dteu 
    $("#refcond").on("click", function(){
        //alert('refus');
        $("#check-conditions").prop("checked", false);
        $("#accept-conditions").prop('disabled', true);
        $("#accept-conditions").css({"background-color":"none"});
        $("#conditbtn").removeClass("bg-success").addClass("bg-danger").html("Voir les Conditions d'Utilisation <i class='fa fa-times'></i>");
    });


    /*
    $("[id^='check-me']").on("change", function () {
            
            if ($('input#check-me').prop("checked") && $('#check-conditions').prop("checked")) {
                cpt2 = 1
                if(cpt == 1 && cpt2==1){ 
                    $("#registerBtn").prop("disabled", false);
                    $("#registerBtn").css({
                    backgroundColor: "#9CE197"
                    });
                }
                else{
                    $("#registerBtn").prop("disabled", true);
                }   
                
            } else {
                cpt2 = 0;
                $("#registerBtn").prop("disabled", true);
                $("#registerBtn").css({backgroundColor: "initial"});
            }
            
    });
    */


    //dteu fonction qui verifiera a chaque fois si les deux checkbox sont check;; ETTTT si le mail est OK: 
    function registerBtnStatus(){
                // checkbox RGPD                           // checkbox conditions;;         //if CPT = 1 ==> le mail est ok (selon Felicien) 
        if( ($('input#check-me').prop("checked")) && ($('input#check-conditions').prop("checked")) && (cpt == 1)){ //  
            $("#registerBtn").prop("disabled", false);
            $("#registerBtn").addClass("bg-success").addClass("text-light");
        }else{
            $("#registerBtn").prop("disabled", true);
            $("#registerBtn").removeClass("bg-success").removeClass("text-light");
        }
    }

}); 




require('./bootstrap');
require('jquery');

import Vue from 'vue'
import CharsFilter from './components/CharsComponent'


//console.log(CharsFilter);

window.onload = new Vue({
    //el: '#chars',
    template: '<CharsFilter/>',
    components: {
        props: [
            {
                name: 'chars',
                default:0,
            }
        ]
    }
});



//console.log()


// let checker = document.getElementById('check-me');
// let accept = document.getElementById('accept');
// // document.getElementById('registerBtn').disabled = true;
// // document.getElementById('registerBtn').style.cursor = 'not-allowed';
// accept.disabled = true;
// document.getElementById('accept').style.cursor = 'not-allowed';

// // when unchecked or checked, run the function
// checker.onchange = function() {
//     if (this.checked)
//     {
//         accept.disabled = false;
//         document.getElementById('accept').style.cursor = 'pointer';
//     }
// };

// // accept.onclick = function ()
// // {
// //     document.getElementById('registerBtn').disabled = false;
// //     document.getElementById('registerBtn').style.cursor = 'pointer';
// // };

function checkEmail(email) {
    return email.match(/[^@]+@[^@]+\.[a-zA-Z]{2,6}/);
  }
  
  function checkpasss(pass1, pass2) {
    return pass2 == pass1;
  }
 
  $(function () {
    $("input[name=email]").on("change", function () {
      var val = $("input[name=email]").val();
     
      if (!checkEmail(val)) {
        $("input[name=email]").css({
          backgroundColor: "#FF8888"
        });
        $("span#emailerrorspan").html("Email non valide.");
        return false;
      } else {
        $("input[name=email]").css({
          backgroundColor: "initial"
        });
        $("span#emailerrorspan").html("");
      }

      

    });

    $("input#password").on("change", function () {// ici, par la suite, nous testerons si il a 8 chars, une majuscule, 2 chiffres différents divisible par 5, un nom de président américain et un . 
    });
    $("input#password-confirm").on("change", function () {
      var p1 = $("input#password-confirm");
      var p2 = $("input#password");
  
      if (!checkpasss(p1.val(), p2.val())) {
        p1.css({
          "background-color": "#F03F3F"
        });
        p2.css({
          "background-color": "#F03F3F"
        });
        $("span#passwordserrorspan").html("les mots de passe doivent être identiques");
        return false;
      } else {
        p1.css({
          "background-color": "#67C100"
        });
        p2.css({
          "background-color": "#67C100"
        });
        $("span#passwordserrorspan").html("");
      }
    });
    $("input#check-me").on("change", function () {
      if ($('input#check-me').prop("checked")) {
        $("input#accept").prop("disabled", false);
        $("input#accept").css({
          backgroundColor: "#9CE197"
        });
        $("#rgpdbtn").html("Voir les conditions RGPD <i class='fa fa-check'></i>");
        $("#rgpdbtn").removeClass("bg-danger").addClass("bg-success");
      } else {
        $("input#accept").prop("disabled", true);
        $("input#accept").css({
          backgroundColor: "initial"
        });
        $("#rgpdbtn").html("Voir les conditions RGPD <i class='fa fa-times'></i>");
        $("#rgpdbtn").removeClass("bg-success").addClass("bg-danger");
      }
    });
    $(".modal-body").on("scroll", function () {
      var modal = $(this); //console.log(modal.prop("scrollHeight") - 1 , parseInt(modal.scrollTop() + $(modal).innerHeight())); 
      //console.log($("input#accept"), $("input#accept").disabled)
  
      if (modal.prop("scrollHeight") - 1 <= parseInt(modal.scrollTop() + $(modal).innerHeight())) {
        $(".condtions").css({
          backgroundColor: "#ccc"
        });
  
        if ($('input#check-me').prop("checked")) {
          $("input#accept").prop("disabled", false);
        } else {
          $("input#accept").prop("disabled", true);
        }
      } else {
        $(".condtions").css({
          backgroundColor: "initial"
        });
        $("input#accept").prop("disabled", true);
      }
    });
  });
  


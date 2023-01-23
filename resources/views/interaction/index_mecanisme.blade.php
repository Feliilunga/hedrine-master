@extends('dashboard.layout')

<!-- @yield('content_title') créé dans la view master_dashboard.blade.php-->

@section('content_dashboard')
    <div class="container">
        <div class="row">

    

		<div class="col-md-1">
		</div>
       <div class="col-md-6 .offset-md-1 ">
           <form  action="" id="myInteractionForm">
            @csrf
				<fieldset class="form-group">
					<legend style="color: #3a64a5; font-size: 160%; font-weight: bold" >Interactions...</legend>
                    {{-- Mohammed A.  Ajout du tableau des reference pour les couleurs --}}
                    <div class="alert alert-light alert-dismissible fade show text-danger">
                        <strong><i class="fas fa-asterisk text-danger" id="required-msg"></i></strong> Champs obligatoires!
                    </div>
                    <hr>
                    <br>
					<div class="form-row field_wrapper" id="countHerb">

                        <div class="form-group col-md-6" id="herb_div1">
							<label class="form-check-label"><strong><h5>Plante <sup><i class="fas fa-asterisk text-danger" style="font-size:12px"></i></sup></h5></strong></label>
							<select name="herb" id="herb" class="form-control custom-select" required>
							</select>
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;
						<div class="form-group col-md-3">
                            <label class="form-check-label" for="inputState">ET</label>
                            <br>
							<div class="" style="margin-top: 8px;">
                                <input type="button" class="btn btn btn-light add_btn"  value="+"><br>
                            </div>
						</div>
                    </div>
                    <br>
                    <hr>
                    <div class="form-row field_wrapper" id="countMechanism">
                        <div class="form-group col-md-6" id="mechanism_div1">
							<label class="form-check-label"><strong><h5 class="mechanism-title">Mécanisme <sup><i class="fas fa-asterisk text-danger" style="font-size:12px"></i></sup></h5></strong></label>
							<select name="mechanism" id="mechanism" class="form-control custom-select" required>
							</select>
                        </div>&nbsp;&nbsp;&nbsp;
						<div class="form-group col-md-3">
                            <label class="form-check-label" for="inputState">ET</label>
                            <br>
							<div class="" style="margin-top: 8px;">
                                <input type="button" class="btn btn btn-light add_btn_mechanism"  value="+"><br>
                            </div>
						</div>
                    </div>
					<button type="button" id="go-search-mechanism" class="btn btn-outline-success" style="border: 0; border-bottom: 1px solid green">Chercher <i class="fas fa-chevron-right"></i></button>
				</fieldset>
		   </form>
	   </div>
	   <div class="col-md-3"></div>
	</div>
	</div>
    <div id="get-ids">
        <input type="hidden" id="herb-id">
        <input type="hidden" id="mechanism-id">
    </div>
    <div class="container">
        <div id="gif" style="display: none;"><img src="{{asset('images/ajax-loader.gif') }}" style="display: block; margin: 0 auto; width: 80px;"></div>
    
        <div class="row" id="mechanism-results">

            <div class="col-12 my-5 py-5" id="colinteracttable">
                <h3 class="text-center text-secondary h6">Intensité d'interaction</h3>
                {{-- composant avec le tableau d'interaction (blade) au lieu de modifier 36 fichiers, ils reprendront tous le même fichier --}}
                @include('components.interactiontable')
            </div>

            <div class="col-md-10">
                    <hr>
                    <div class="row" id="cas-etudes" >
                        <div class="col-md-12">
                            <h3 style="color: #3a64a5"> Etudes et cas cliniques</h3>
                            <!-- <p class="text-danger">
                                Aucune étude ni cas référencé
                            </p> -->
                            <table class="table">
                                <thead>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" id="non">
                            <h3 style="color: #3a64a5"> Interactions Potentielles</h3>
                            <div id="result">
                                <p class="text-danger d-none">
                                    Aucune interaction référencée
                                </p>
                                <table id="result-table" class="table">
                                    <thead>
                                    <tr>
                                        <!-- <th class="herb-name"></th> -->
                                        <th>Plante</th>
                                        <th>Intensité</th>
                                        <th class="target">Mécanisme</th>
                                        <th class="effet">effet(s)</th>
                                        <th>Notes</th>
                                        <!-- <th class="mechanism-name"></th> -->
                                        <th>Intensité DCI</th>
                                    </tr>
                                    <!-- <tr>
                                        <th>Effets</th>
                                        <th></th>
                                        <th></th>
                                        <th>Effets</th>
                                        <th></th>
                                    </tr> -->
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection

@section('getherbs')

<script>
	$(document).ready(function()
	{
        $('#mechanism-results').hide();
        //$('#one-result').hide();
        //$('#result .result').hide();
	    // customiza select
        //$('#herb-select').formSelect();
        /*
            Permet de désactiver les options déjà choisies dans les autres listes déroulantes
        */
        var disable_option = function()
        {
                // enable all options
                $('option[disabled]').prop('disabled', false);
                $('select').each(function()
                {
                    $('select').not(this).find('option[value="' + this.value + '"]').prop('disabled', true);
                });
        }
            $('#countHerb').on('change', 'select',disable_option);
		var maxField = 6; // Input fields increment limitation
        var herbOptions;
        var wrappering = $('.form-row.field_wrapper'); // Input field wrapper
        var addBtn = $('.add_btn'); // Add button selector
        var addBtnDrug = $('.add_btn_drug'); // Add button selector
        var removeBtn = $('.remove_btn'); // Add button selector
        var selct = '';
        var id_taken = [];
        var still_possible = false;
        selct += '<div class="form-group col-md-3 id="btnRemove">';
        selct += '<br>';
        selct += '<div class="" style="margin-top:9px;padding-left: 15px;">';
        selct += ' <input type="button" class="btn  btn-danger remove_btn" id="her" value="-"><br>';
        selct += '</div>';
        selct += '</div>';
        var cpt = 2; // Initial field counter is 1
        $(addBtn).click(function() {
            $(this).val("+"); // On met un getter sur l'input pour gerer le message d'erreure
            if(cpt < maxField) {
                id_taken['herb_div' + cpt] = cpt;
                $("#herb_div1").clone().attr({'id': 'herb_div' + cpt}).appendTo('#countHerb') .after(selct); // Add field html

                cpt += 1; // Increment field counter
                console.log(cpt);
                /*
                    Permet de désactiver les options déjà choisies dans les autres listes déroulantes
                */
                disable_option();
                //permet de savoir si on a atteint le nombre max de champs select (5)                still_possible = false;
                still_possible = false;
                for (let i = 2; i < maxField; i++) {
                    if(id_taken['herb_div'+ i] == null && still_possible != true)
                    {
                        cpt = i;
                        var still_possible = true;
                    }
                }
            }else {
                $(this).val("Maximum 5 plantes").prop("disabled",true); // on desactive l'input +
            }
            if (still_possible == false){
                cpt = maxField;
            }
        });
        $(document).on("click", ".remove_btn", function() {
              // $('body').on("click",'.remove_btn',function()
            // {
                cpt += -1; // decrement field counter
            if (cpt <= 1) {
                cpt = 2;
            }
            let herbDivId = $(this).closest(".col-md-3").prev(".col-md-6").attr('id');
            console.log("herbDivId : " + herbDivId);
            // permet d'obtenir l'id du champ supprimer
            console.log("id taken"+id_taken[herbDivId]);
            cpt = id_taken[herbDivId];
            id_taken[herbDivId] = null;
            $(this).closest(".col-md-3").prev(".col-md-6").remove(); //supprimer le div qui précède le parent du bouton "-"
            $(this).closest(".col-md-3").remove(); //supprimer le div parent du bouton "-"
            /*
                Permet de désactiver les options déjà choisies dans les autres listes déroulantes
            */
            disable_option();
            if (cpt < maxField) {
                $(addBtn).val("+").prop("disabled", false);
            }
            //});
        });
        $.ajax
        ({
            type: 'GET',
            url: '../hinteractions/hdi_get_herbs',
            dataType: 'json',
            success: function(retour)
            {
                //console.log(retour);
                herbOptions = '';
                herbOptions+="<option value='"
                    +0+
                    "'>Veuillez choisir une plante"+
                    "</option>";
                $.each(retour, function(i,herb) {
                    herbOptions+="<option value='"
                        +herb.id+
                        "'>"+herb.name+
                        "</option>";
                });
                $('#herb').html(herbOptions);
            }
        });
	});
</script>
@endsection

@section('getmechanisms')

    <script>
        //Mohamme A . Correction nom de variable car les code avait ete simplement copier coller par l'ancien codeur
        $(document).ready(function()
        {
            var disable_option = function()
            {
                // enable all options
                $('option[disabled]').prop('disabled', false);
                $('select').each(function()
                {
                    $('select').not(this).find('option[value="' + this.value + '"]').prop('disabled', true);
                });
            }
            $('#countMechanism').on('change', 'select',disable_option);
            var maxField = 6; // Input fields increment limitation
            var mechanismOptions;
            var wrappering = $('.form-row.field_wrapper'); // Input field wrapper
            var addBtnMechanism = $('.add_btn_mechanism'); // Add button selector
            var removeBtn = $('.mechanismBtnRemove'); // Add button selector
            var selct = '';
            var id_taken_mechanism = [];
            var still_possible = false;
            selct += '<div class="form-group col-md-3" id="btnRemove">';
            selct += '<br>';
            selct += '<div class="" style="margin-top:9px;padding-left: 15px;">';
            selct += ' <input type="button" class="btn  btn-danger mechanismBtnRemove" id="her" value="-"><br>';
            selct += '</div>';
            selct += '</div>';
            var cpt_mechanism = 2; // Initial field counter is 1
            $(addBtnMechanism).click(function() {
                $(this).val("+"); // On met un getter sur l'input pour gerer le message d'erreure
                if(cpt_mechanism < maxField) {
                    id_taken_mechanism['mechanism_div' + cpt_mechanism] = cpt_mechanism;
                    $("#mechanism_div1").clone().attr({'id': 'mechanism_div' + cpt_mechanism}).appendTo('#countMechanism') .after(selct); // Add field html
                    cpt_mechanism += 1; // Increment field counter
                    disable_option();
                    still_possible = false;
                    for (let i = 2; i < maxField; i++) {
                        if(id_taken_mechanism['mechanism_div'+ i] == null && still_possible != true)
                        {
                            cpt_mechanism = i;
                            var still_possible = true;
                        }
                    }
                }else {
                    $(this).val("Maximum 5 médicaments").prop("disabled",true); // on desactive l'input +
                }
                if (still_possible == false){
                    cpt_mechanism = maxField;
                }
                console.log(cpt_mechanism);
            });
            $(document).on("click", ".mechanismBtnRemove", function() {
                console.log(cpt_mechanism);
                cpt_mechanism += -1; // decrement field counter
                if(cpt_mechanism <= 1)
                {cpt_mechanism = 2;
                }

                let mechanismDivId = $(this).closest(".col-md-3").prev(".col-md-6").attr('id');
                console.log("mechanismeDivId  = "+ mechanismDivId);
                // permet d'obtenir l'id du champ supprimer
                console.log("id taken"+id_taken_mechanism[mechanismDivId]);
                cpt_mechanism = id_taken_mechanism[mechanismDivId];
                id_taken_mechanism[mechanismDivId] = null;
                $(this).closest(".col-md-3").prev(".col-md-6").remove();//supprimer le div qui précède le parent du bouton "-"
                $(this).closest(".col-md-3").remove();//supprimer le div parent du bouton "-"
                /*
                    Permet de désactiver les options déjà choisies dans les autres listes déroulantes
                */
                disable_option();
                console.log(cpt_mechanism + " " + maxField);
                if(cpt_mechanism < maxField){
                    $(addBtnMechanism).val("+").prop("disabled", false);

                }

            });
            $.ajax({
                type: 'GET',
                url: '../hinteractions/hti_get_mechanisms',
                dataType: 'json',
                data: {'name': 'mechanism'},
                success: function(retour)
                {
                    //console.log(retour);
                    mechanismOptions = '';
                    mechanismOptions+="<option value='"
                                +0+
                                "'>Veuillez choisir un mécanisme"+
                                "</option>";
                    $.each(retour, function(i,mechanism) {
							mechanismOptions+="<option value='"
                                +mechanism.id+
                                "'>"+mechanism.name+
                                "</option>";
                            });
                        $('#mechanism').html(mechanismOptions);
                }
            });
        });
    </script>
@endsection

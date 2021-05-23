@extends('dashboard.layout')

@yield('content_title') {{--créé dans la view master_dashboard.blade.php --}}

@section('content_dashboard')
<div class="container">
<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-6 .offset-md-1 ">
        <form action="" id="myInteractionForm">
            @csrf
            <fieldset class="form-group">
                <legend style="color: #3a64a5; font-size: 160%; font-weight: bold">Interactions...</legend>
                {{-- Mohammed A.  Ajout du tableau des reference pour les couleurs --}}
                <div class="col-md-4 ">
                    <h3 style="color: #777;font-family: 'Gill Sans','lucida grande', helvetica, arial, sans-serif;font-size: 100%;font-weight: bold">
                        Intensité d'interaction</h3>
                    <div style="float:left;width:120%;" class="table-responsive-sm">
                        <table class="table table-bordered table-hover table-sm text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Etudes et cas cliniques</th>
                                </tr>
                            </thead>
                            <tbody>
                              <!-- Mohammed Chairi regle couleur plus tableau  -->
                                <tr style="background-color: red">
                                    <th>Forte</th>
                                </tr>
                                <tr style="background-color: orange">
                                    <th>Moyenne</th>
                                </tr>
                                <tr style="background-color: yellow">
                                    <th>Faible</th>
                                </tr>
                                <tr style="background-color: green">
                                    <th>Aucune</th>
                                </tr>
                                <tr style="background-color: purple">
                                    <th>Inconnue</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div style="margin-left:120%;width:120%;" class="table-responsive-sm">
                        <table class="table table-bordered table-hover table-sm text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Interactions Potentielles</th>
                                </tr>
                            </thead>
                            <tbody>
                              <!-- Mohammed Chairi regle couleur plus tableau  -->
                                <tr style="background-color: red;opacity : 0.4">
                                    <th style="color:white">Forte</th>
                                </tr>
                                <tr style="background-color: orange;opacity : 0.4">
                                    <th style="color:white">Moyenne</th>
                                </tr>
                                <tr style="background-color: yellow;opacity : 0.4">
                                    <th style="color:white">Faible</th>
                                </tr>
                                <tr style="background-color: green;opacity : 0.4">
                                    <th style="color:white">Aucune</th>
                                </tr>
                                <tr style="background-color: purple;opacity : 0.4">
                                    <th style="color:white">Inconnue</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="alert alert-light alert-dismissible fade show text-danger">
                    <strong><i class="fas fa-asterisk text-danger" id="required-msg"></i></strong> Champs obligatoires!
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                <hr>
                <br>

                <div class="form-row field_wrapper" id="countHerb">

                    <div class="form-group col-md-6" id="herb_div1">
                        <label class="form-check-label"><strong>
                                <h5>Plante(s) <sup><i class="fas fa-asterisk text-danger" style="font-size:12px"></i></sup></h5>
                            </strong></label>
                        <select name="herb" id="herb" class="form-control custom-select" required>
                        </select>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="form-group col-md-3">
                        <label class="form-check-label" for="inputState">ET</label>
                        <br>
                        <div class="" style="margin-top: 8px;">
                            <input type="button" class="btn btn btn-light add_btn" value="+"><br>
                        </div>
                    </div>
                </div>
                   
                <br>
                <hr>
                <div class="form-group ">
                    <strong class="text-info"><i class="fa fa-info-circle"></i> Veuillez choisir la meilleure méthode pour votre recherche: </strong>
                    <br>
                    <br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="drug-name" name="drug-search" class="custom-control-input" value="name" checked>
                        <label class="custom-control-label" for="drug-name">Nom de(s) DCI</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="atc" name="drug-search" class="custom-control-input" value="atc">
                        <label class="custom-control-label" for="atc">Classe(s) ATC</label>
                    </div>
                    <br>
                </div>
                <div class="form-row field_wrapper" id="countDrug">
                    <div class="form-group col-md-6" id="drug_div1">
                        <label class="form-check-label"><strong>
                                <h5 class="drug-title">DCI <sup><i class="fas fa-asterisk text-danger" style="font-size:12px"></i></sup></h5>
                            </strong></label>
                        <select name="drug" id="drug" class="form-control custom-select" required>
                        </select>
                    </div>&nbsp;&nbsp;&nbsp;
                    <div id="add_btn_div" class="form-group col-md-3">
                        <label class="form-check-label" for="inputState">ET</label>
                        <br>
                        <div class="" style="margin-top: 8px;">
                            <input type="button" class="btn btn btn-light add_btn_drug" value="+"><br>
                        </div>
                    </div>
                </div>
                <button type="button" id="go-search" class="btn btn-outline-success" style="border: 0; border-bottom: 1px solid green">Chercher <i class="fas fa-chevron-right"></i></button>
            </fieldset>
        </form>
    </div>

    <div  class="container">
    <div class="" id="chart"></div>
    </div>
<br/>
        <div>
        <input type="checkbox" id="casClinique" name="casClinique">
        <label for="casClinique">afficher uniquement les études et cas cliniques</label>
        </div>



    <!-- Conteneur Fusion Chart
    <script src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <div class="col-md-5" id="chart-container"></div>-->

    <div   class="col-12 text-right" id="radioButtonCliniquePotentielle">
        <div class="form-check">
            <label class="radio-inline">
                <input type="radio" class="form-check-input" name="optradio">Etudes et cas cliniques
            </label>
        </div>
        <div   class="form-check">
            <label class="radio-inline">
                <input type="radio" class="form-check-input" name="optradio">Interactions Potentielles
            </label>
        </div>
    </div>




</div>
<div id="get-ids">
    <input type="hidden" id="herb-id">
    <input type="hidden" id="drug-id">
</div>
<div class="row" id="both-results">
    <div class="col-md-12">
        <hr>
        <div class="row" id="cas-etudes">
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
                    <!-- <p class="text-danger d-none">
                                Aucune interaction référencée
                            </p> -->
                    <table id="result-table" class="table">
                        <thead>
                            <!-- <tr>
                                    <th class="herb-name"></th>
                                    <th></th>
                                    <th class="target">Target</th>
                                    <th class="drug-name"></th>
                                    <th></th>
                                </tr> -->
                            <tr>
                                <th>Plante</th>
                                <th></th>
                                <th>Mécanisme</th>
                                <th>DCI</th>
                                <th>Effet(s)</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row" id="one-result">
    <div class="col-md-8">
        <hr>
        <div class="row" id="cas-etudes">
            <div class="col-md-6">
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
            <div class="col-md" id="non">
                <h3 style="color: #3a64a5"> Interactions Potentielles</h3>
                <div id="result">
                    <p class="text-danger d-none">
                        Aucune interaction référencée
                    </p>
                    <table id="result-table" class="table">
                        <thead>
                            <tr>
                                <th class="type-name"></th>
                                <th></th>
                                <th>Targets</th>
                            </tr>
                            <tr>
                                <th>Effets</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<button id="btnModalFusionChart" type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalFusionChart">
    Scrolling long content
</button>

<div class="modal fade " style="" id="modalFusionChart" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div id="title-interaction"></div>
                <button type="button" class="close closeModal" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="planteDci" class="table table-striped">

                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary closeModal" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
</div>



@endsection

@section('getherbs')

<script>
    $(document).ready(function() {
        $('#btnModalFusionChart').hide();
        $('#modalFusionChart').hide();
        $("#modalFusionChart").on("hidden.bs.modal", function(){
    $("#planteDci,#title-interaction").html("");
});
        $('#radioButtonCliniquePotentielle').hide();
        $('#both-results').hide();
        $('#one-result').hide();
        $('#result .result').hide();

        // customiza select
        //$('#herb-select').formSelect();
        /*
            Permet de désactiver les options déjà choisies dans les autres listes déroulantes
        */
        var disable_option = function() {
            // enable all options
            $('option[disabled]').prop('disabled', false);
            $('select').each(function() {
                $('select').not(this).find('option[value="' + this.value + '"]').prop('disabled', true);
            });
        }
        $('#countHerb').on('change', 'select', disable_option);
        var maxField = 6; // Input fields increment limitation
        var herbOptions;
        var wrappering = $('.form-row.field_wrapper'); // Input field wrapper
        var addBtn = $('.add_btn'); // Add button selector
        var addBtnDrug = $('.add_btn_drug'); // Add button selector
        var removeBtn = $('.remove_btn'); // Add button selector
        var selct = '';
        var id_taken = [];
        var still_possible = false;
        selct += '<div class="form-group col-md-3" id="btnRemove">';
        selct += '<br>';
        selct += '<div class="" style="margin-top:9px;padding-left: 15px;">';
        selct += ' <input type="button" class="btn  btn-danger remove_btn" id="her" value="-"><br>';
        selct += '</div>';
        selct += '</div>';
        var cpt = 2; // Initial field counter is 1
        $(addBtn).click(function() {
            $(this).prop("disabled", true);
            $(this).val("+"); // On met un getter sur l'input pour gerer le message d'erreure
            if (cpt < maxField) {
                id_taken['herb_div' + cpt] = cpt;
                $("#herb_div1").clone().attr({
                    'id': 'herb_div' + cpt
                }).appendTo('#countHerb').after(selct); // Add field html
                cpt += 1; // Increment field counter
                /*
                    Permet de désactiver les options déjà choisies dans les autres listes déroulantes
                */
                disable_option();
                //permet de savoir si on a atteint le nombre max de champs select (5)
                still_possible = false;
                for (let i = 2; i < maxField; i++) {
                    if (id_taken['herb_div' + i] == null && still_possible != true) {
                        cpt = i;
                        var still_possible = true;
                    }
                }
                $(this).prop("disabled", false);
            } else {
                $(this).val("Maximum 5 plantes").prop("disabled", true); // on desactive l'input +
            }
            if (still_possible == false) {
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
            // permet d'obtenir l'id du champ supprimer
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
        $.ajax({
            type: 'GET',
            url: '../hinteractions/hdi_get_herbs',
            dataType: 'json',
            success: function(retour) {
                //console.log(retour);
                herbOptions = '';
               herbOptions += "<option value='" +
                    0 +
                    "'>Veuillez choisir une plante" +
                    "</option>";
                $.each(retour, function(i, herb) {
                    herbOptions += "<option value='" +
                        herb.id +
                        "'>" + herb.name +
                        "</option>";
                });
                $('#herb').html(herbOptions);
            }
        });
    });
</script>
@endsection
@section('getdrugs')

<script>
    $(document).ready(function() {
        var disable_option = function() {
            // enable all options
            $('option[disabled]').prop('disabled', false);
            $('select').each(function() {
                $('select#drug').not(this).find('option[value="' + this.value + '"]').prop('disabled', true);
            });
        }
        $('#countDrug').on('change', 'select', disable_option);
        var maxField = 6; // Input fields increment limitation
        var drugOptions;
        var wrappering = $('.form-row.field_wrapper'); // Input field wrapper
        var addBtnDrug = $('.add_btn_drug'); // Add button selector
        var removeBtn = $('.drugBtnRemove'); // Add button selector
        var selct = '';
        var id_taken_drug = [];
        var still_possible = false;
        selct += '<div class="form-group col-md-3" id="btnRemove">';
        selct += '<br>';
        selct += '<div class="" style="margin-top:9px;padding-left: 15px;">';
        selct += ' <input type="button" class="btn  btn-danger drugBtnRemove" id="her" value="-"><br>';
        selct += '</div>';
        selct += '</div>';
        var cpt_drug = 2; // Initial field counter is 1
        $(addBtnDrug).click(function() {
            $(this).prop("disabled", true);
            $(this).val("+"); // On met un getter sur l'input pour gerer le message d'erreure
            if (cpt_drug < maxField) {
                id_taken_drug['drug_div' + cpt_drug] = cpt_drug;
                $("#drug_div1").clone().attr({
                    'id': 'drug_div' + cpt_drug
                }).appendTo('#countDrug').after(selct); // Add field html
                cpt_drug += 1; // Increment field counter
                disable_option();
                still_possible = false;
                for (let i = 2; i < maxField; i++) {
                    if (id_taken_drug['drug_div' + i] == null && still_possible != true) {
                        cpt_drug = i;
                        var still_possible = true;
                    }
                }
                $(this).prop("disabled", false);
            } else {
                $(this).val("Maximum 5 médicaments").prop("disabled", true); // on desactive l'input +
            }
            if (still_possible == false) {
                cpt_drug = maxField;
            }
        });
        $(document).on("click", ".drugBtnRemove", function() {
            cpt_drug += -1; // decrement field counter
            if (cpt_drug <= 1) {
                cpt_drug = 2;
            }

            let drugDivId = $(this).closest(".col-md-3").prev(".col-md-6").attr('id');
            // permet d'obtenir l'id du champ supprimer
            cpt_drug = id_taken_drug[drugDivId];
            id_taken_drug[drugDivId] = null;
            $(this).closest(".col-md-3").prev(".col-md-6").remove(); //supprimer le div qui précède le parent du bouton "-"
            $(this).closest(".col-md-3").remove(); //supprimer le div parent du bouton "-"
            /*
                Permet de désactiver les options déjà choisies dans les autres listes déroulantes
            */
            disable_option();
            if (cpt_drug < maxField) {
                $(addBtnDrug).val("+").prop("disabled", false);
            }
        });
        $.ajax({
            
            type: 'GET',
            url: '../hinteractions/hdi_get_drugs',
            dataType: 'json',
            data: {
                'name': 'drug'
                
                
            },
            success: function(retour) {
                //console.log(retour);
                drugOptions = '';
                drugOptions += "<option value='" +
                    0 +
                    "'>Veuillez choisir un médicament" +
                    "</option>";
                $.each(retour, function(i, drug) {
                    //pour chque drug recuperer le nom de chaque route qu'il possède Félicien I.
                    for($j=0; $j<drug.routes_drugs.length; $j++) {
                    // console.log(drug.routes_drugs)
                    $pivot=drug.routes_drugs;
                    drugOptions += "<option value='" +
                        $pivot[$j].id +
                        "'>" + drug.name + " (" + $pivot[$j].routes.name + ")" +
                        "</option>";
                    }    
                });
                $('#drug').html(drugOptions);
            }
        });
        $('input[type=radio][name=drug-search]').on('change', function() {
            //alert(this.value)
            //Display ATC level 1
            if (this.value === 'atc') {
                $('#go-search').prop("disabled", true);
                $('#drug_div2').next(".col-md-3").remove();
                $('#drug_div2').remove();
                $('#drug_div3').next(".col-md-3").remove();
                $('#drug_div3').remove();
                $('#drug_div4').next(".col-md-3").remove();
                $('#drug_div4').remove();
                $('#drug_div5').next(".col-md-3").remove();
                $('#drug_div5').remove();
                cpt_drug = 2;
                id_taken_drug = [];
                $(addBtnDrug).val("+").prop("disabled", false);
                $('.drug-title').html('ATC niveau 1 <sup><i class="fas fa-asterisk text-danger" style="font-size:12px"></i></sup>');
                $.ajax({
                    type: 'GET',
                    url: '../hinteractions/hdi_get_drugs',
                    dataType: 'json',
                    data: {
                        'name': 'atc_level1'
                    },
                    success: function(retour) {
                        //console.log(retour);
                        let drugSelect = '';
                        drugSelect = '<select name="drug" id="drug-family" class="form-control custom-select" ></select>';
                        $('#drug').replaceWith(drugSelect);
                        let drugOptions = '';
                        drugOptions += "<option value='" +
                            0 +
                            "'>Sélectionnez une classe ATC de niveau 1" +
                            "</option>";
                        $.each(retour, function(i, drug) {
                            drugOptions += "<option value='" +
                                drug.id +
                                "'>" +
                                drug.code + " - " + drug.name +
                                "</option>";
                        });
                        $('#drug-family').html(drugOptions);
                    }
                });
                $("#add_btn_div").hide();
            }
            //Display DCI
            else {
                $('#go-search').prop("disabled", false);
                $('#drug-atc').remove();
                $('#drug-atc-level3').remove();
                $('#drug-atc-level4').remove();
                $('#drug-atc-level5').remove();
                $('.drug-title').html('DCI <sup><i class="fas fa-asterisk text-danger" style="font-size:12px"></i></sup>');
                let drug = '';
                drug = '<select name="drug" id="drug" class="form-control custom-select" ></select>';
                $('#drug-family').replaceWith(drug);
                $.ajax({
                    type: 'GET',
                    url: '../hinteractions/hdi_get_drugs',
                    dataType: 'json',
                    data: {
                        'name': 'drug'
                    },
                    success: function(retour) {
                        //console.log(retour);
                        drugOptions = '';
                       drugOptions += "<option value='" +
                            0 +
                            "'>Veuillez choisir un médicament" +
                            "</option>";
                        $.each(retour, function(i, drug) {
                            drugOptions += "<option value='" +
                                drug.id +
                                "'>" + drug.name +
                                "</option>";
                        });
                        $('#drug').html(drugOptions);
                    }
                });
                $("#add_btn_div").show();
            }
        });
        // display the advanced ATC level 2
        $('div#countDrug').on('change', '#drug-family', function() {
            //alert(this.value)
            //console.log("atc level 2 search");
            $('#drug-atc-level3').remove();
            $('#drug-atc-level4').remove();
            $('#drug-atc-level5').remove();
            let id = this.value;
            $.ajax({
                type: 'GET',
                url: '../dinteractions/hdi_get_drugs_families',
                dataType: 'json',
                data: {
                    'id': id
                },
                success: function(data) {
                    //e.log('ok');
                    let drugFamilySelect = '';
                    drugFamilySelect = '<div class="form-group col-md-6" id="drug-atc">' +
                        '<label class="form-check-label"><strong><h5 class="drug-title">ATC Niveau 2 <sup><i class="fas fa-asterisk text-danger" style="font-size:12px"></i></sup></h5></strong></label>' +
                        '<select name="drug-family" id="drug-atc-select" class="form-control custom-select" ></select>' +
                        '</div>';
                    if ($('#drug-atc').length === 0)
                        $(drugFamilySelect).insertAfter('#drug_div1');
                    let drugAtcOptions = '';
                    drugAtcOptions += "<option value='" +
                        0 +
                        "'>Sélectionnez une classe ATC de niveau 2" +
                        "</option>";
                    $.each(data, function(i, atc) {
                        drugAtcOptions += "<option value='" +
                            atc.id +
                            "'>" +
                            atc.code + " - " + atc.name +
                            "</option>";
                    });
                    $('#drug-atc-select').html(drugAtcOptions);
                }
            });
        });
        // display the advanced ATC level 3
        $('div#countDrug').on('change', '#drug-atc-select', function() {
            //alert(this.value)
            $('#drug-atc-level4').remove();
            $('#drug-atc-level5').remove();
            let id = this.value;
            //console.log("atc level 3 search");
            $.ajax({
                type: 'GET',
                url: '../dinteractions/hdi_get_drugs_families',
                dataType: 'json',
                data: {
                    'id': id,
                    'atc_level': 3
                },
                success: function(data) {
                    //e.log('ok');
                    let drugFamilySelect = '';
                    drugFamilySelect = '<div class="form-group col-md-6" id="drug-atc-level3">' +
                        '<label class="form-check-label"><strong><h5 class="drug-title">ATC Niveau 3 <sup><i class="fas fa-asterisk text-danger" style="font-size:12px"></i></sup></h5></strong></label>' +
                        '<select name="drug-family" id="drug-atc-select-level3" class="form-control custom-select" ></select>' +
                        '</div>';
                    if ($('#drug-atc-level3').length === 0)
                        $(drugFamilySelect).insertAfter('#drug-atc');
                    let drugAtcOptions = '';
                    drugAtcOptions += "<option value='" +
                        0 +
                        "'>Sélectionnez une classe ATC de niveau 3" +
                        "</option>";
                    $.each(data, function(i, atc) {
                        drugAtcOptions += "<option value='" +
                            atc.id +
                            "'>" +
                            atc.code + " - " + atc.name +
                            "</option>";
                    });
                    $('#drug-atc-select-level3').html(drugAtcOptions);
                }
            });
        });
        // display the advanced ATC level 4
        $('div#countDrug').on('change', '#drug-atc-select-level3', function() {
            //alert(this.value)
            $('#drug-atc-level5').remove();
            let id = this.value;
            $.ajax({
                type: 'GET',
                url: '../dinteractions/hdi_get_drugs_families',
                dataType: 'json',
                data: {
                    'id': id,
                    'atc_level': 4
                },
                success: function(data) {
                    //e.log('ok');
                    let drugFamilySelect = '';
                    drugFamilySelect = '<div class="form-group col-md-6" id="drug-atc-level4">' +
                        '<label class="form-check-label"><strong><h5 class="drug-title">ATC Niveau 4 <sup><i class="fas fa-asterisk text-danger" style="font-size:12px"></i></sup></h5></strong></label>' +
                        '<select name="drug-family" id="drug-atc-select-level4" class="form-control custom-select" ></select>' +
                        '</div>';
                    if ($('#drug-atc-level4').length === 0)
                        $(drugFamilySelect).insertAfter('#drug-atc-level3');
                    let drugAtcOptions = '';
                    drugAtcOptions += "<option value='" +
                        0 +
                        "'>Sélectionnez une classe ATC de niveau 4" +
                        "</option>";
                    $.each(data, function(i, atc) {
                        drugAtcOptions += "<option value='" +
                            atc.id +
                            "'>" +
                            atc.code + " - " + atc.name +
                            "</option>";
                    });
                    $('#drug-atc-select-level4').html(drugAtcOptions);
                }
            });
        });
        // Display DCI with ATC level 4 and multiple select possibility
        $('div#countDrug').on('change', '#drug-atc-select-level4', function() {
            $('#go-search').prop("disabled", false);
            let id = this.value;
            $.ajax({
                type: 'GET',
                url: '../dinteractions/hdi_get_drugs_families',
                dataType: 'json',
                data: {
                    'id': id,
                    'atc_level': 5
                },
                success: function(data) {
                    //console.log(data);
                    //console.log(data.length == 0);
                    let drugFamilySelect = '';
                    drugFamilySelect = '<div class="form-group col-md-6" id="drug-atc-level5">' +
                        '<label class="form-check-label"><strong><h5 class="drug-title">Liste DCI  <i style="font-size:13px;color: #dc4851; font-weight:bold;">Selectionnez les DCI en gardant la touche CTRL sur Windows ou CMD sur Mac enfoncé</i>  </h5></strong></label>' +
                        '<select name="drug-family[]" id="drug-atc-select-dci" class="form-control custom-select" multiple="multiple"></select>' +
                        '</div>';
                    if ($('#drug-atc-level5').length === 0)
                        $(drugFamilySelect).insertAfter('#drug-atc-level4');
                    let drugAtcOptions = '';
                    if (data.length == 0) {
                        defautChoice = "Aucun resultat";
                    } else {
                        defautChoice = "Chercher pour tous";
                    }
                    drugAtcOptions += "<option value='" +
                        "all" +
                        "'selected>" +
                        defautChoice +
                        "</option>";
                    $.each(data, function(i, atc) {
                        console.log(atc);
                        $pivotDrug = atc.drugs;
                        drugAtcOptions += "<option value='" +
                            atc.id +
                            "'>" +
                            atc.drug_code + " - " + $pivotDrug.name +
                            "</option>";
                    });
                    $('#drug-atc-select-dci').html(drugAtcOptions);
                }
            });
        });
    });
</script>
@endsection

@section('resultat')
<script type="text/javascript">
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function() {
        $("#myInteractionForm").submit(function() {
            var herb_id = Number($('#herb').val().trim());
            alert("Doucement vas y Doucement pas encore fait pour l'ID " + herb_id);
            $.ajax({
                type: 'post',
                url: '{{ route("hinteractions.getHerbsById") }}',
                dataType: 'json',
                data: {
                    _token: CSRF_TOKEN,
                    id: id
                },
                success: function(data) {
                    //console.log(data);
                    if (data == true) {
                        alert('success : user logged in ');
                    } else {
                        alert('erreur data')
                    }
                    //$('#hinter').html(data.html);
                },
                error: function() {
                    alert("failure");
                }
            });
            $('#results').show();
        });
    });
</script>
@endsection

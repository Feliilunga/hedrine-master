@extends('dashboard.layout')
@section('content_dashboard')

<div class="container">
    @php
        $dciCurrent = 1;
        $routeInteraction = array() ;
        $val = 0;

    @endphp
    @foreach ($drugs as $drug)

        <h2 style="color: #e32;font-family: 'Gill Sans','lucida grande', helvetica, arial, sans-serif;">
            @if ($type == "showAll")
                DCI
                @php
                    echo $dciCurrent;
                @endphp
                sur
                {{$drugs->count()}} : {{ $drug->name }}
            </h2>
                <br>
            @else
                DCI
                </h2>
                <br>
                <dl class="row" style="background: #f4f4f4">
                    <dt class="col-sm-2">Nom</dt>
                    <dd class="col-sm-3"> {{ $drug->name }}</dd>

                </dl>
            @endif


        <dl class="row">
            <dt class="col-sm-2">Voie</dt>
           
            <dd class="col-sm-3"> 
            <select name="voie" id="voie" onchange = "laFonction()" >
                <option value = 0>Veuillez choisir une voie</option>
                @foreach($drug->routesDrugs as $pivotRoute)
                    @php
                    $route = $pivotRoute->routes;
                    @endphp
                    <option value = "{{ $pivotRoute->id }}">
                    {{ $route->name }}
                    
                    </option>
                    @endforeach
            </select> </dd>
        </dl>

        <script>
            $id = 0;
            function laFonction(){
                $id = document.getElementById('voie').value;
                console.log($id);

            }
        </script>    

        @php
       // dd($route);
       @endphp
        <dl class="row" style="background: #f4f4f4">
            <dt class="col-sm-2">Famille</dt>

            <dd class="col-sm-8"> <strong>
                <!-- Author: Mohammed A.
                    Verifier si la dci contient une atc de niv 4 si oui on affiche la famille sinon on dit pas encore de famille -->
                @php
                    $pivotAtc = $drug->atcLevel4sDrugs;
                     //dd($pivotAtc);
                @endphp
                @foreach($pivotAtc as $pAtc)
                @if( $pAtc->atc_level4_id !== 0)
                {{ $pAtc->atc_level4->atc_level3->atc_level2->atc_level1->code }} -> {{ $pAtc->atc_level4->atc_level3->atc_level2->atc_level1->name }} -
                @else
                Pas encore de famille
                @endif
                @endforeach
            </strong></dd>
        </dl>
        <dl class="row">
            <dt class="col-sm-2">ATC de niveau 4</dt>

            <dd class="col-sm-8">
                @php
                    $pivotAtc = $drug->atcLevel4sDrugs;
                    //dd($pivotAtc);
                    $k=1;
                @endphp
                <div id="buttonAtc">
                <button class="btn btn-outline-success" id="atcAfficher">Afficher les ATC</button>
                <button class="btn btn-outline-success" id="atcMasquer" style="display: none;">Masquer les ATC</button><br>
                </div>
                <div class="card-body" id="atc-list-search">
                <div>
                    <ul id="atc-dynamic-tree" style="display: none;">
                        @foreach($pivotAtc as $piAtc)
                            @if( $piAtc->atc_level4_id !== 0)
                                <li id="atc4{{$k}}"><span class="btn btn-outline-success">{{ $piAtc->atc_level4->code }} - {{ $piAtc->atc_level4->name }}</span>
                                    <ul class="nested"><br>
                                        <li  id="atc3{{$k}}"><span class="btn btn-outline-success">
                                            {{ $piAtc->atc_level4->atc_level3->code }} - {{ $piAtc->atc_level4->atc_level3->name }}
                                            </span>
                                            <ul class="nested"><br>
                                                <li id="atc2{{$k}}"><span class="btn btn-outline-success" >
                                                    {{ $piAtc->atc_level4->atc_level3->atc_level2->code }} - {{ $piAtc->atc_level4->atc_level3->atc_level2->name }}
                                                    </span>
                                                    <ul class="nested">
                                                        <li id="atc1{{$k}}">
                                                            <span class="btn btn-outline-success" >
                                                            {{ $piAtc->atc_level4->atc_level3->atc_level2->atc_level1->code }} - {{ $piAtc->atc_level4->atc_level3->atc_level2->atc_level1->name }}
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </li>    
                                            </ul>
                                        </li>
                                    </ul>    
                                </li>    
                            @php
                                $k++;
                            @endphp
                            @else
                                Pas d'ATC
                            @endif
                        @endforeach
                    </ul>
                </div>
                </div>
        </dd>
        </dl>
        <div class="row">
            <div class="col-md-4 ">
                <h3 style="color: #777;font-family: 'Gill Sans','lucida grande', helvetica, arial, sans-serif;font-size: 160%;font-weight: bold">Intensité d interaction</h3>
                <div style="float:left;width:60%;" class="table-responsive-sm">
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
                <div style="margin-left:60%;width:60%;" class="table-responsive-sm">
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
        </div>
        <br>
        <br>

        <div class="col-12">
            <h3 style="color: #2c6877;">Mécanismes impliqués</h3>

            <div class="card-body table-responsive" style="background-color: #fff">
                <table id="dataTable_details" class="display responsive  table table-striped " width="100%">
                @php
                    $drugInteraction = $drug->routesDrugs;
                    $tabPRoute =  $drug->routesDrugs;
                    //dd($tabPRoute);
                    $lesId;
                           
                @endphp    
                @foreach($tabPRoute as $tRoute)
                @php
                   
                    //dd($tRoute->routes);
                           
                @endphp  
                    <thead>
                         
                        <tr style="background-color:#226AB2">
                        <th>{{$tRoute->routes->name}} </th>
                        </tr>
                        <tr>
                            <th></th>
                            <th>Effets</th>
                            <th>Intensité</th>
                            <th>Notes</th>
                            <th>Références</th>
                            <th> Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tRoute->dinteractions->sortByDesc('name') as $dinteraction)  
                        @php
                           // dd($dinteraction);
                           $lesId = $dinteraction->route_drug_id;
                           //dd($lesId);
                        @endphp
                       
                                           
                        <tr id="mecaaa{{$lesId}}">
                            <th scope="row">
                                @if(isset($dinteraction->targets->name))
                                {{$dinteraction->targets->name}}

                                @endif
                                @if(isset($dinteraction->targets->targetype->name))
                                <h6>({{optional($dinteraction->targets->targetype)->name}})</h6>
                                @endif
                            </th>
                            {{-- <td class="
                                @if($dinteraction->forces->color == 'rouge') force @elseif($dinteraction->forces->color == 'orange') moyenne @elseif($dinteraction->forces->color == 'jaune')
                                faible
                                @elseif($dinteraction->forces->color == 'vert')
                                aucune
                                @elseif($dinteraction->forces->color == 'mauve')
                                inconnue
                                @endif">
                                @foreach($dinteraction->effects as $effect)
                                {{ $effect->name}}
                                @endforeach
                            </td> --}}
                            <td>
                                @foreach($dinteraction->effects as $effect)
                                {{ $effect->name}}
                                @endforeach
                            </td>
                            {{-- adaption des couleur pour les interactions potencielles se referer  au css pour les couleurs --}}
                            <td class="	@if(isset($dinteraction->targets->name))@if($dinteraction->forces->color == 'rouge')
                                @if(str_contains (strtoupper($dinteraction->targets->name) , "ETUDE CLINIQUE" )|| str_contains (strtoupper($dinteraction->targets->name) , "CASE REPORT" ) ) force @else forceP @endif
                                @elseif($dinteraction->forces->color == 'orange')@if(str_contains (strtoupper($dinteraction->targets->name) , "ETUDE CLINIQUE" )|| str_contains (strtoupper($dinteraction->targets->name) , "CASE REPORT" ) ) moyenne @else moyenneP @endif
                                @elseif($dinteraction->forces->color == 'jaune')@if(str_contains (strtoupper($dinteraction->targets->name) , "ETUDE CLINIQUE" )|| str_contains (strtoupper($dinteraction->targets->name) , "CASE REPORT" ) )  faible @else faibleP @endif
                                @elseif($dinteraction->forces->color == 'vert') @if(str_contains (strtoupper($dinteraction->targets->name) , "ETUDE CLINIQUE" )|| str_contains (strtoupper($dinteraction->targets->name) , "CASE REPORT" ) )  aucune @else aucuneP @endif
                                @elseif($dinteraction->forces->color == 'mauve') @if(str_contains (strtoupper($dinteraction->targets->name) , "ETUDE CLINIQUE" )|| str_contains (strtoupper($dinteraction->targets->name) , "CASE REPORT" ) )  inconnue @else inconnueP @endif @endif @endif">

                                {{$dinteraction->forces->name}}
                            </td>
                            <td >
                            {{-- class="
                                        @if($dinteraction->forces->color == 'rouge') force @elseif($dinteraction->forces->color == 'orange') moyenne @elseif($dinteraction->forces->color == 'jaune')
                                faible
                                @elseif($dinteraction->forces->color == 'vert')
                                aucune
                                @elseif($dinteraction->forces->color == 'mauve')
                                inconnue
                                @endif"> --}}

                                {{$dinteraction->notes}}

                            </td>
                            <td >
                            {{-- class="
                                        @if($dinteraction->forces->color == 'rouge') force @elseif($dinteraction->forces->color == 'orange') moyenne @elseif($dinteraction->forces->color == 'jaune')
                                faible
                                @elseif($dinteraction->forces->color == 'vert')
                                aucune
                                @elseif($dinteraction->forces->color == 'mauve')
                                inconnue
                                @endif"> --}}
                                @foreach($dinteraction->references as $reference)
                                <a href="">{{$reference->year}} , {{$reference->edition}};</a>
                                <a href=" {{$reference->url}} ">
                                    <i class="fas fa-globe-europe"></i>
                                </a><br>
                                @endforeach
                            </td>
                            {{--Mohammed A. ajout du bonton  edit pour modifier  le type ou en ajouté --}}
                            @if((auth()->user()->role_id == 1) || (auth()->user()->role_id == 2) || (auth()->user()->role_id == 3))
                            <td style="width: 10rem">
                                <div class="btn-group float-right">&nbsp; &nbsp; &nbsp;
                                    <a class="btn btn-outline-success text align-self-center p-2" href="{{ route('dinteraction.edit',$dinteraction->id) }}" role="button">Edit</a> &nbsp; &nbsp;
                                </div>
                            </td>
                            @endif
                        </tr>
                        </div> 
                        @endforeach
                        
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
        <br>
    @php
        $dciCurrent += 1;
    @endphp
    @endforeach
</div>

@endsection

@section('dashboard-js')
	<script>
		$(function() {

			$('#dataTable_details').DataTable({
				"paging": false,
                "processing": true,
				"lengthChange": true,
				"searching": true,
                "deferRender": 15,
				"ordering": true,
				"info": false,
				"autoWidth": true,
				"responsive": true,
				"language": {
					"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
				}
			});
		});

        // $("#voie").change(function() {
        // console.log("changement");
        $("[id^=mecaaa]").show();
        $ids=$id;
        $('#voie').on('change', function() {
            if($('#voie').val() == 0){
                $("[id^=mecaaa]").show();
            }
            else{
            $("[id^=mecaaa]").hide();
            //$('#mecaaa'+$id).show(); 
            $("[id^=mecaaa"+$id+"]").show();
            //console.log($idPivotRoute);
            }
        });

    $i=1;
    $cpt = {{$k}};

    $('#atcAfficher').on('click', function() {
        $("[id^=atc-dynamic-tree]").show();
        $('#atcAfficher').hide();
        $('#atcMasquer').show();
        $('[id^=atc3]').hide();
        $('[id^=atc2]').hide();
        $('[id^=atc1]').hide();
    });

    $('#atcMasquer').on('click', function() {
        $("[id^=atc-dynamic-tree]").hide();
        $('#atcAfficher').show();
        $('#atcMasquer').hide();
    });

    var toggler = $("[id^=atc4]");
        var t;

        for (t = 0; t < toggler.length; t++) {
            console.log(toggler);
            toggler[t].addEventListener("click", function() {
                this.parentElement.querySelector("[id^=atc3]").classList.toggle("active");
                this.classList.toggle("[id^=atc4]-down");
            });
        }

    //console.log($cpt);
 
    
    // $('#atc41').on('click', function() {
    //         $('#atc31').show();   
    // });


    

	</script>
@endsection


@extends('dashboard.layout')

<!-- @yield('content_title') créé dans la view master_dashboard.blade.php-->

@section('content_dashboard')
<div class="row">

	<div class="col-12">
		<section class="content">
			<div class="container-fluid">
				<div class="row justify-content-end" style="padding-bottom: 0.75rem">
					@if((auth()->user()->role_id == 1) || (auth()->user()->role_id == 2) || (auth()->user()->role_id == 3) )
					<a class="btn btn-light" href="{{ route('drug.create') }}" role="button">Créer un nouveau médicament</a>
					@endif
				</div>
				@if(session()->has('message'))
				<div class="col s12">
					<div class="card purple darken-3">
						<div class="card-content white-text center-align">
							{{ session('message') }}
						</div>
					</div>
				</div>

				@endif
				<div class="row">
					<div class="col-md-8 offset-md-2 ">
						<!-- general form elements -->
						<div class="card card-success">
							<div class="card-header">
								<h3 class="card-title">
									<strong>
										@if(Route::currentRouteName() === 'drug.create')
										Ajouter un nouveau DCI
										@else
										Modification d un DCI
										@endif
									</strong>
								</h3>
							</div>
							<!-- /.card-header -->
							<!-- form start -->
							<form class=" justify-content-center" role="form" method="POST" action="@isset($drug) {{ route('drug.update', $drug->id) }} @else {{
								route('drug.store')}} @endisset">
								<div class="card-body">
									<div class="form-group">
										<!-- @isset($drug) @method('PUT') @endisset -->
										@csrf
										<label for="name">Nom du DCI </label>
										<input type="text" class="form-control" id="name" name="name" required placeholder="Veuillez indiquer un nom pour le DCI" value="{{isset($drug) ? $drug->name : ''}}">
									</div>

									@php
										
										$k=0;
										$num=1;
										$r=1;
										$b=0;
									@endphp
									
                                    
                                    @if(Route::currentRouteName() === 'drug.create')
										<div class="form-group">
											<label for="route_id">1. Route</label>
											<select name="route_id0" class="form-control">
												<option value="" disabled selected>Veuillez indiquer une route pour le DCI </option>
												@foreach ($routes as $route)
												<option value="{{$route->id}}">{{$route->name}}</option>
												@endforeach
											</select>	
										</div>
										<button id="removeRoute0" type="button" class="btn btn-outline-success float-right">Supprimer Routes 1</button>
										<br>
									
										<div id="addRoute"></div>
										<div>
										<button id="btnRouteAdd" type="button" class="btn btn-outline-success ">Ajouter Routes</button>
										</div><br>

										<div class="form-group" >
											<label for="atc_level4_id">1. ATC</label>
											<select name="atc_level4_id0" class="form-control" id="select">
													<option value="" selected="selected">Veuillez indiquer un atc pour le DCI </option>
													@foreach ($atc4All as $atc_level)
														<option value="{{$atc_level->id}}">{{$atc_level->code}}: {{$atc_level->name}} </option>
													@endforeach
												
											</select>
										</div>

										<div class="form-group">
											<label for="code">1. Code</label>
												<input type="text" class="form-control" id="code0" name="code0" required placeholder="Veuillez indiquer un code pour le DCI" value="{{isset($drug) ? $atcPivot->drug_code : ''}}">
											
										</div><br>
										<button  id="removeAtc0" type="button" class="btn btn-outline-success float-right">Supprimer ATC 1</button>
										<br>

										<div id="atcSelect"></div>
											<div>
												<button id="btnAtcAdd" type="button" class="btn btn-outline-success float-left">Ajouter ATC</button>
										</div>	

									@else									
										<!-- Dans le cas d'un formulaire edit pour chaque route qui existe, afficher. Félicien -->
										@php
											$roPivot = $drug->routesDrugs;
											
											$lesRoutes = $drug->routesDrugs;
											$lesAtc = $drug->atcLevel4sDrugs;
											//dd($atcPiv);
											
										@endphp
										@foreach($lesRoutes as $laRoute)	
											<div class="form-group" id="divRoute{{$b}}">
												<label for="route_id">{{$r}}. Route</label>
												<select name="route_id{{$b}}" class="form-control">
													<option></option>
														@foreach ($routes as $route)
															<option value="{{$route->id}}" @if($laRoute->route_id === $route->id) selected @endif>{{$route->name}}</option>
														@endforeach
												</select>
											</div>
											<!-- <button id="removeRoute{{$b}}" type="button" class="btn btn-outline-success float-right">Supprimer Routes {{$r}}</button> -->
	

											<div class="form-group" id="divInteraction{{$b}}">
												<label for="target">{{$r}}. Modifier l'interaction  : </label>
												<br/>
													@if($laRoute->dinteractions->count() > 0 )
														@foreach ($laRoute->dinteractions as $dinteraction)

															<a  id="interactionUpdates" class="btn btn-outline-success text align-self-center p-2" href="{{ route('dinteraction.edit', $dinteraction->id) }}" role="button">
																{{$dinteraction->targets->name}}</a>&nbsp; &nbsp;


														@endforeach
													@else
															Aucune interaction. Vous devez en cree avant.
													@endif
											</div><br>
											@php
												$r++;
												$b++;
											@endphp	
										@endforeach

										<div id="addRoute"></div>
										<div>
										<button id="btnRouteAdd" type="button" class="btn btn-outline-success ">Ajouter Routes</button>
										</div><br>
		
										<!-- pour chaque atc afficher son atc et son drug_code Félicien -->
											@foreach($lesAtc as $atcPivot)
												<div class="form-group" id="divAtc{{$k}}">
													<label for="atc_level4_id">{{$num}}. ATC</label>
														<select name="atc_level4_id{{$k}}" class="form-control" id="select{{$k}}">
															<option value="" selected="selected">Veuillez indiquer un atc pour le DCI </option>	
															@foreach ($atc4All as $atc_level)
																<option value="{{$atc_level->id }} "
																	@if($atcPivot->atc_level4_id === $atc_level->id) selected @endif
																>{{$atc_level->code}}: {{$atc_level->name}} </option>
															@endforeach
														</select>
												</div>
												<div class="form-group" id="divCode{{$k}}">
													<label for="code">{{$num}}. Code</label>	
													
															<input type="text" class="form-control" id="code{{$k}}" name="code{{$k}}" required placeholder="Veuillez indiquer un code pour le DCI" value="{{isset($drug) ? $atcPivot->drug_code : ' '}}">
												</div>
												<br>
												<!-- <button id="removeAtc{{$k}}" type="button" class="btn btn-outline-success float-right">Supprimer ATC {{$num}}</button> -->
												<br>
												@php
													$k++;
													$num ++;
												@endphp	
											@endforeach

											<div id="atcSelect"></div>
											<div>
												<button id="btnAtcAdd" type="button" class="btn btn-outline-success float-left">Ajouter ATC</button>
											</div>	

											
									@endif
									
									<div type="hidden"  id="compteur"></div>
									<div type="hidden"  id="compteurRoute"></div>
									<br>
									<br>
									

                                    <!-- ajout de des target dInteraction qui rediregerons vers le formulaire pour les modifier-->
                                    <div class="form-group">
                                    <!--Mohammed A. ajout de des target dInteraction qui rediregerons vers le formulaire pour les modifier
                                      ajout d'un if eles pour diferencier la creation de la modfication
                                      2 eme ajout de if else pour verifier si il y a une  intearaction ou pas
                                    -->

                                   
									

									

                                    @if(\Illuminate\Support\Facades\Auth::user()->role_id <=2)
                                        <div class="form-group form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" name="validated" value="1" checked="checked">
                                            <label class="form-check-label"> Validé ? </label>
                                        </div>
                                    @else
                                        <div class="form-group form-check form-check-inline">
                                            <input type="hidden" class="form-check-input" name="validated" value="0">
                                            <!-- <label class="form-check-label"> Validé ? </label> -->
                                        </div>
								    @endif
						</div>
					</div>
					<!-- /.card-body -->
					<div class="card-footer">
						<div class="control-group">
							<div class="controls">
								<a class="btn btn-light" href="{{ route('drug.index') }}" role="button"><i class="fas fa-arrow-left"></i> Retour à la liste des DCI</a>
								<button type="submit" class="btn btn-outline-success float-right"><i class="fas fa-location-arrow"></i>
									@if(Route::currentRouteName() === 'drug.create')
									Ajouter un nouveau DCI
									@else
									Sauvegarder
									@endif
								</button>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
	</div>
</div>
</section>
</div>
</div>
<script>
$leCpt=11;
</script>
@endsection

@section('dashboard-js')
<script>
// Félicien ajoute un select à chaque fois qu'on appuie sur le bouton ajout atc
$i=0;
$leCpt = 0;
$cptRoute = 0;
//je recupère la dernière valeur du select atc Félicien
$nb = "{{$num}}";
$nbr = parseInt($nb);
$nbre = $nbr - 1;
$a = $nbre -1;
//je recupère la dernière valeur du select route Félicien
$ro = "{{$r}}";
$rou = parseInt($ro);
$rout = $rou - 1;
$v = $rout -1;
console.log($rout);
$("#btnAtcAdd").click(function() {
	$i = $i + 1;
	$p = $i+1
	$leCpt = $leCpt +1;
	$nbre++;
	$a++;
	$('#atcSelect').append('@if(Route::currentRouteName() === "drug.create")' +
								'<div class="form-group" id="divAtc' + $i + '">' +
									'<label for="atc_level4_id">' + $p + '. ATC</label>' +
									'<select name="atc_level4_id' + $i + '" class="form-control" id="select">' +
                                            '@if(Route::currentRouteName() === "drug.create")' +
                                            '<option value="" selected="selected">Veuillez indiquer un atc pour le DCI </option>' +
                                            '@foreach ($atc4All as $atc_level)' +
                                            '<option value="{{$atc_level->id}}">{{$atc_level->code}}: {{$atc_level->name}} </option>' +
                                            '@endforeach' +
                                            '@else' +
                                            '{{-- Mohammed on recuper pas l id atc level 4 mais l id atc et correction de la valu pur la modification car il recuper toujour la valeur 1 --}}' +
                                                '@foreach ($atc4All as $atc_level)' +
                                                    '<option value="{{$atc_level->id }}"' +
                                                    '@if($drug->atc_level4_id === $atc_level->id) selected @endif'+
                                                    '>{{$atc_level->code}}: {{$atc_level->name}} </option> </option>' +
                                                '@endforeach' +
                                            '@endif' +
                                        '</select>' +
										'</div>' +
										'<br>' +
										'<div class="form-group" id="divCode' + $i + '">' +
										'<label for="code">' + $p + '. Code</label>' +
										'<input type="text" class="form-control" id="code' + $i + '" name="code' + $i + '" required placeholder="Veuillez indiquer un code pour le DCI" value="{{isset($drug) ? $atcPivot->drug_code : ''}}">' +
										'</div><br>' +
										'<button id="removeAtc' + $i + '" type="button" class="btn btn-outline-success float-right">Supprimer ATC ' + $p + '</button>' +

							'@else' +
								'<div class="form-group" id="divAtc' + $a + '">' +
								'<label for="atc_level4_id">' + $nbre + '. ATC</label>' +
									'<select name="atc_level4_id' + $a + '" class="form-control" id="select' + $a + '">' +
                                            '@if(Route::currentRouteName() === "drug.create")' +
                                            '<option value="" selected="selected">Veuillez indiquer un atc pour le DCI </option>' +
                                            '@foreach ($atc4All as $atc_level)' +
                                            '<option value="{{$atc_level->id}}">{{$atc_level->code}}: {{$atc_level->name}} </option>' +
                                            '@endforeach' +
                                            '@else' +
                                            '{{-- Mohammed on recuper pas l id atc level 4 mais l id atc et correction de la valu pur la modification car il recuper toujour la valeur 1 --}}' +
                                                '@foreach ($atc4All as $atc_level)' +
                                                    '<option value="{{$atc_level->id }}"' +
                                                    '@if($drug->atc_level4_id === $atc_level->id) selected @endif'+
                                                    '>{{$atc_level->code}}: {{$atc_level->name}} </option> </option>' +
                                                '@endforeach' +
                                            '@endif' +
                                        '</select>' +
										'</div><br>' +
										
										'<div class="form-group" id="divCode' + $a + '">' +
										'<label for="code">' + $nbre + '. Code</label>' +
										'<input type="text" class="form-control" id="code' + $a + '" name="code' + $a + '" required placeholder="Veuillez indiquer un code pour le DCI" value="{{isset($drug) ? $atcPivot->drug_code : ''}}">' +
										'</div><br>' +
										'<button id="removeAtc' + $a + '" type="button" class="btn btn-outline-success float-right">Supprimer ATC ' + $nbre + '</button>' +
										'<br>'+
										'@endif');
										
										$('#compteur').html('@if(Route::currentRouteName() === "drug.create")' +
															'<input type="hidden" name = "leCpt" id= "leCpt" value= "' + $leCpt +'">'+
															'@else' +
															'<input type="hidden" name = "leCpt" id= "leCpt" value= "' + $nbre +'">'+
															'@endif');
															
					});
					
$m=1;
$g=0;					
$("#btnRouteAdd").click(function(){
$cptRoute ++;
$m++;
$g++;
$rout++;
$v++;
$('#addRoute').append('@if(Route::currentRouteName() === "drug.create")' +
							'<div class="form-group" id="divRoute' + $g + '">'+
								'<label for="route_id">' + $m +'. Route</label>'+
								'<select name="route_id' + $g + '" class="form-control">'+
									'<option value="" disabled selected>Veuillez indiquer une route pour le DCI </option>'+
									'@foreach ($routes as $route)'+
										'<option value="{{$route->id}}">{{$route->name}}</option>'+
									'@endforeach'+
								'</select>'+	
							'</div>'+
							'<button id="removeRoute' + $g + '" type="button" class="btn btn-outline-success float-right">Supprimer Routes ' + $m + '</button>' +
							'<br>'+
							'@else' +
							'<div class="form-group" id="divRoute' + $v + '">'+
								'<label for="route_id">' + $rout + '. Route</label>'+
								'<select name="route_id' + $v + '" class="form-control">'+
									'<option value="" disabled selected>Veuillez indiquer une route pour le DCI </option>'+
									'@foreach ($routes as $route)'+
										'<option value="{{$route->id}}">{{$route->name}}</option>'+
									'@endforeach'+
								'</select>'+	
							'</div>'+
							'<button id="removeRoute' + $v + '" type="button" class="btn btn-outline-success float-right">Supprimer Routes ' + $rout + '</button>' +
							'<br>'+
							'@endif');

$('#compteurRoute').html('@if(Route::currentRouteName() === "drug.create")' +
							'<input type="hidden" name = "cptRoute" id= "cptRoute" value= "' + $cptRoute +'">'+
						'@else' +
							'<input type="hidden" name = "cptRoute" id= "cptRoute" value= "' + $rout +'">'+
						'@endif');


});

for($l=0; $l<6; $l++){
	$("#removeRoute" + $l).click(function(){
		$("#divRoute" + $l).remove();
		$("#divRoute0").remove();
		console.log("remove" + $l);

	});
}

$("#removeRoute0").click(function(){
		$("#divRoute0").remove();
		$("#divInteraction0").remove();
		console.log("remove0");

});

$("#removeRoute1").click(function(){
		$("#divRoute1").remove();
		$("#divInteraction1").remove();
		console.log("remove1");

});

$("#removeRoute2").click(function(){
		$("#divRoute2").remove();
		$("#divInteraction2").remove();
		console.log("remove2");

});

$("#removeRoute3").click(function(){
		$("#divRoute3").remove();
		$("#divInteraction3").remove();
		console.log("remove3");

});

$("#removeRoute4").click(function(){
		$("#divRoute4").remove();
		$("#divInteraction4").remove();
		console.log("remove4");

});

$("#removeRoute5").click(function(){
		$("#divRoute5").remove();
		$("#divInteraction5").remove();
		console.log("remove5");

});


$("#removeAtc0").click(function(){
		$("#divAtc0").remove();
		$("#divCode0").remove();
		console.log("remove0");
});

$("#removeAtc1").click(function(){
		$("#divAtc1").remove();
		$("#divCode1").remove();
		console.log("remove0");
});
$("#removeAtc2").click(function(){
		$("#divAtc2").remove();
		$("#divCode2").remove();
		console.log("remove2");
});

$("#removeAtc3").click(function(){
		$("#divAtc3").remove();
		$("#divCode3").remove();
		console.log("remove3");
});

$("#removeAtc4").click(function(){
		$("#divAtc4").remove();
		$("#divCode4").remove();
		console.log("remove4");
});

$("#removeAtc5").click(function(){
		$("#divAtc5").remove();
		//$("#divCode5").remove();
		console.log("remove5");
});

$("#removeAtc6").click(function(){
		$("#divAtc6").remove();
		$("#divCode6").remove();
		console.log("remove6");
});

$("#removeAtc7").click(function(){
		$("#divAtc7").remove();
		$("#divCode7").remove();
		console.log("remove7");
});

$("#removeAtc8").click(function(){
		$("#divAtc8").remove();
		$("#divCode8").remove();
		console.log("remove8");
});

$("#removeAtc9").click(function(){
		$("#divAtc9").remove();
		$("#divCode9").remove();
		console.log("remove9");
});

$("#removeAtc10").click(function(){
		$("#divAtc10").remove();
		$("#divCode10").remove();
		console.log("remove10");
});

$("#removeAtc11").click(function(){
		$("#divAtc11").remove();
		$("#divCode11").remove();
		console.log("remove11");
});

</script>

@endsection

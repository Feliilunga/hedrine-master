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
                                    @php /*
                                    <div class="form-group">
										<label for="drug_families_id">Famille</label>
										<select name="drug_families_id" class="form-control">
											@if(Route::currentRouteName() === 'drug.create')
											<option value="" disabled selected>Veuillez indiquer un famille pour le DCI </option>
											@foreach ($drug_families as $drug_familie)
											<option value="{{$drug_familie->id}}">{{$drug_familie->name}}</option>
											@endforeach
											@else
											<option></option>
											@foreach ($drug_families as $drug_familie)
											<option value="{{$drug_familie->id}}" @if($drug->drug_families_id == $drug_familie->id) selected @endif>{{$drug_familie->name}}</option>
											@endforeach
											@endif
										</select>
                                    </div>
                                    */ @endphp
									<div class="form-group">
										<label for="route_id">Route</label>
										<select name="route_id" class="form-control">
											@if(Route::currentRouteName() === 'drug.create')
											<option value="" disabled selected>Veuillez indiquer une route pour le DCI </option>
											@foreach ($routes as $route)
											<option value="{{$route->id}}">{{$route->name}}</option>
											@endforeach
											@else
											<option></option>
											@foreach ($routes as $route)
											<option value="{{$route->id}}" @if($drug->route_id === $route->id) selected @endif>{{$route->name}}</option>
											@endforeach
											@endif
										</select>
                                    </div>
                                    @php /*
									<div class="form-group">
										<label for="atc_level_4s_id">AtcLevel</label>
										<select name="atc_id" class="form-control">
											@if(Route::currentRouteName() === 'drug.create')
											<option value="" disabled selected>Veuillez indiquer un atc pour le DCI </option>
											@foreach ($atcs as $atc_level)
											<option value="{{$atc_level->id}}">{{$atc_level->name}}</option>
											@endforeach
											@else
											<option></option>
											@foreach ($atcs as $atc_level)
											<option value="{{$atc_level->id}}" @if($drug->atc_id == $atc_level->id) selected @endif>{{$atc_level->name}}</option>
											@endforeach
											@endif
										</select>
                                    </div>
                                    */ @endphp
                                    <div class="form-group">
                                        <label for="code">Code</label>
                                        <input type="text" class="form-control" id="code" name="code" required placeholder="Veuillez indiquer un code pour le DCI" value="{{isset($drug) ? $drug->code : ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="atc_level4_id">ATC</label>
                                        <select name="atc_level4_id" class="form-control">
                                            @if(Route::currentRouteName() === 'drug.create')
                                                <option value="" disabled selected>Veuillez indiquer un atc pour le DCI </option>
                                                @foreach ($atc4All as $atc_level)
                                                    <option value="{{$atc_level->id}}">{{$atc_level->code}}: {{$atc_level->name}} </option>
                                                @endforeach
                                            @else
                                            {{-- Mohammed on recuper pas l id atc level 4 mais l id atc et correction de la valu pur la modification car il recuper toujour la valeur 1 --}}
                                                @foreach ($atc4All as $atc_level)
                                                    <option value="{{$atc_level->id }} "
                                                        @if($drug->atc_level4_id === $atc_level->id) selected @endif
                                                    >{{$atc_level->code}}: {{$atc_level->name}} </option> </option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <!-- ajout de des target dInteraction qui rediregerons vers le formulaire pour les modifier-->
                                    <div class="form-group">
                                    <!--Mohammed A. ajout de des target dInteraction qui rediregerons vers le formulaire pour les modifier
                                      ajout d'un if eles pour diferencier la creation de la modfication
                                      2 eme ajout de if else pour verifier si il y a une  intearaction ou pas
                                    -->

                                    @if(Route::currentRouteName() === 'drug.create')

                                    @else


                                    <div class="form-group">
                                        <label for="target">Modifier l'interaction  : </label>
                                    <br/>
                                        @if($drug->dinteractions->count() > 0 )
                                       @foreach ($drug->dinteractions as $dinteraction)

                                            <a  id="interactionUpdates" class="btn btn-outline-success text align-self-center p-2" href="{{ route('dinteraction.edit', $dinteraction->id) }}" role="button">
                                                {{$dinteraction->targets->name}}</a>&nbsp; &nbsp;


                                        @endforeach
                                        @else
                                                Aucune interaction. Vous devez en cree avant.
                                        @endif
                                        @endif
                                    </div>

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

</script>
@endsection

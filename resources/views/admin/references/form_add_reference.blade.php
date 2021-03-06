@extends('dashboard.layout')

<!-- @yield('content_title') créé dans la view master_dashboard.blade.php-->

@section('content_dashboard')
	<div class="row">
		<div class="col-12">
			<section class="content">
				<div class="container-fluid">
					@if(session()->has('message'))
						<div class="col s12">
							<div class="card purple darken-3">
								<div class="card-content white-text center-align">
								{{ session('message') }}
								</div>
							</div>
						</div>
                    @endif
                    <div class="row justify-content-end" style="padding-bottom: 0.75rem">

                        <a class="btn btn-light" href="{{ route('reference.create') }}" role="button">Créer une nouvelle référence</a>

                    </div>
				    <div class="row">
						<div class="col-md-8 offset-md-2 ">
							<!-- general form elements -->
							<div class="card card-success">
								<div class="card-header">
									<h3 class="card-title">
										<strong>
											@if(Route::currentRouteName() === 'reference.create')
												Ajouter une nouvelle référence
											@else
												Modification d'une Référence
											@endif
										</strong>
									</h3>
								</div>
								<!-- /.card-header -->
								<!-- form start -->
								<form class=" justify-content-center" role="form" method="POST" action="@isset($reference) {{ route('reference.update', $reference->id) }} @else {{
								route('reference.store')}} @endisset">
									<div class="card-body">
										<div class="row">
											<div class="col-6">
												<div class="form-group">
												@isset($reference) @method('PUT') @endisset
												@csrf
												@if(Route::currentRouteName() !== 'reference.create')
												<input type="hidden" class="form-control" name="id" value="{{isset($reference) ? $reference->id : ''}}">
												@endif
												<label for="title">Titre</label>
												<input type="text" class="form-control" id="title" name="title" required placeholder="Veuillez indiquer un titre pour la révérence" value="{{isset($reference) ? $reference->title : ''}}">
												</div>
											</div>

											<div class="col-6">
												<div class="form-group">
													<label for="authors">Authors</label>
													<input type="text" class="form-control" id="authors" name="authors" required placeholder="Veuillez indiquer un nom d'auteur pour la révérence" value="{{isset($reference) ? $reference->authors : ''}}">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-6">
												<div class="form-group">
													<label for="year">Année</label>
													<input type="text" class="form-control" id="year" name="year" required placeholder="Veuillez indiquer une année pour la révérence" value="{{isset($reference) ? $reference->year : ''}}">
												</div>
											</div>

											<div class="col-6">
												<div class="form-group">
													<label for="edition">Edition</label>
													<input type="text" class="form-control" id="edition" name="edition" required placeholder="Veuillez indiquer un édition pour la révérence" value="{{isset($reference) ? $reference->edition : ''}}">
												</div>
											</div>
										</div>

										<div class="rows">
											<div class="form-group">
												<label for="url">URL de la reference</label>
													<textarea rows="5" cols="5" class="form-control" id="url" name="url" placeholder="Veuillez indiquer un url pour la révérence" required>{{ isset($reference) ? $reference->url : ''}}</textarea>
											</div>
										</div>
									</div>


									<!-- /.card-body -->
									<div class="card-footer">
										<div class="control-group">
											<div class="controls">
												<a class="btn btn-light" href="{{ route('reference.index') }}" role="button"><i class="fas fa-arrow-left"></i> Retour à la liste des Références</a>
												<button type="submit" class="btn btn-outline-success float-right"><i class="fas fa-location-arrow"></i>
													@if(Route::currentRouteName() === 'reference.create')
														Ajouter une nouvelle Référence
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
@endsection


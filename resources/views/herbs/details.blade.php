@extends('dashboard.layout')

@section('content_dashboard')

<div class="container">

	<h2 style="color: #e32;font-family: 'Gill Sans','lucida grande', helvetica, arial, sans-serif;">Plante</h2>
	<br>
	<dl class="row" style="background: #f4f4f4">
		<dt class="col-sm-2">Nom</dt>
		<dd class="col-sm-3"> {{ $herb->name }}</dd>

	</dl>
	<dl class="row">
		<dt class="col-sm-2">Nom scientifique</dt>
		<dd class="col-sm-3"> {{ $herb->sciname }}</dd>
	</dl>
	<br>

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



	<div class="col-12">
		<h3 style="color: #2c6877;">Mécanisme impliqués</h3>
		<br>
		<div class="card-body table-responsive" style="background-color: #fff">
			<table id="dataTable_details" class="table table-striped table-bordered " width="100%">
				<thead>
					<tr>
						<th></th>
						<th>Effets</th>
						<th>Intensité</th>
						<th>Notes</th>
						<th>Références</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($herb->hinteractions->sortBy('force_id') as $hinteraction)

					<tr>
						<th scope="row">
							@if(isset($hinteraction->targets->name))
							{{$hinteraction->targets->name}}

							@endif
							@if(isset($hinteraction->targets->targetype->name))
							<h6>({{optional($hinteraction->targets->targetype)->name}})</h6>
							@endif

						</th>
						<td>
							@foreach($hinteraction->effects as $effect)
							{{ $effect->name}}
							@endforeach

						</td>
                        <!--Mohammed Chairi Ajout if pour mettre en opacité 0.4 pour les interactions potentielles-->
						<td class="	@if(isset($hinteraction->targets->name))@if($hinteraction->forces->color == 'rouge')
                             @if(str_contains (strtoupper($hinteraction->targets->name) , "ETUDE CLINIQUE" )|| str_contains (strtoupper($hinteraction->targets->name) , "CASE REPORT" ) ) force @else forceP @endif
                             @elseif($hinteraction->forces->color == 'orange')@if(str_contains (strtoupper($hinteraction->targets->name) , "ETUDE CLINIQUE" )|| str_contains (strtoupper($hinteraction->targets->name) , "CASE REPORT" ) ) moyenne @else moyenneP @endif
                             @elseif($hinteraction->forces->color == 'jaune')@if(str_contains (strtoupper($hinteraction->targets->name) , "ETUDE CLINIQUE" )|| str_contains (strtoupper($hinteraction->targets->name) , "CASE REPORT" ) )  faible @else faibleP @endif
                             @elseif($hinteraction->forces->color == 'vert') @if(str_contains (strtoupper($hinteraction->targets->name) , "ETUDE CLINIQUE" )|| str_contains (strtoupper($hinteraction->targets->name) , "CASE REPORT" ) )  aucune @else aucuneP @endif
                             @elseif($hinteraction->forces->color == 'mauve') @if(str_contains (strtoupper($hinteraction->targets->name) , "ETUDE CLINIQUE" )|| str_contains (strtoupper($hinteraction->targets->name) , "CASE REPORT" ) )  inconnue @else inconnueP @endif @endif @endif">

                             @if(isset($hinteraction->targets->name))@if(str_contains (strtoupper($hinteraction->targets->name) , "ETUDE CLINIQUE" )){{$hinteraction->forces->name}}
                            @else <p style="color:rgb(0, 0, 0)">{{$hinteraction->forces->name}}</p>
                            @endif @endif

						</td>

						<td class="ajusted-text-with-line-breaks">
							{{-- $hinteraction->notes --}}
							@php
							echo nl2br(str_replace(['\r', '\n'], ["", '<br />'], "$hinteraction->notes"));
							@endphp
						</td>
						<td>

							@foreach($hinteraction->references as $reference)
							<a href="">{{$reference->year}} , {{$reference->edition}};</a>
							<a href=" {{$reference->url}} ">
								<i class="fas fa-globe-europe"></i>
							</a><br>
							@endforeach
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

	@endsection

	@section('dashboard-js')
	<script>
		$(function() {

			$('#dataTable_details').DataTable({
				"paging": true,
				"pageLength": 5,
				"lengthChange": false,
				"searching": true,
				"ordering": true,
				"order": [
					[1, "desc"]
				],
				"info": false,
				"autoWidth": true,
				"responsive": true,
				"language": {
					"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
				}
			});
		});
	</script>
	@endsection

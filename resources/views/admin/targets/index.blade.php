@extends('dashboard.layout')

@section('content_dashboard')
<div class="row justify-content-end" style="padding-bottom: 0.75rem">
	@if(Route::currentRouteName() === 'target.index')
	<a class="btn btn-light" href="{{ route('target.create') }}" role="button">Créer une nouvelle target</a>
	@endif
</div>

<div class="col-12">
	<div class="card-body " style="background-color: #fff">
		<table id="example1" class="table table-striped table-sm">
			<thead>
				<tr class="text-center">
					<th> Name</th>
					<th>Long Name</th>
					<th>Notes</th>
					<th>Type</th>
					<th>Editors</th>
					<th> Actions</th>

				</tr>
			</thead>
			<tbody>
				@foreach ($targetsWithRelations as $target)
				<tr class="text-center">
					<td>
						<a href="" class="add_style"><strong>{{$target->name}}</strong></a>
					</td>
					<td>
						{{$target->long_name}}
					</td>
					<td>
						{{$target->notes}}
					</td>
					<td>
						{{optional($target->targetype)->name}}
						
					</td>
					<td>
						{{optional($target->user)->name}}

						@if((auth()->user()->role_id == 1) || (auth()->user()->role_id == 2) || (auth()->user()->role_id == 3))
							<td>
								<div class="btn-group float-right">
									<a class="btn btn-outline-success text align-self-center p-2" href="{{ route('target.edit',$target->id) }}" role="button">Edit</a> &nbsp; &nbsp;
								</div>
							</td>
						@endif
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

		$('#example1').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
			"language": {
				"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
			}
		});
	});
</script>
@endsection

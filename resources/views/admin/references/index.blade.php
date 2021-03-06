@extends('dashboard.layout')

@section('content_dashboard')
<div class="row justify-content-end" style="padding-bottom: 0.75rem">
	@if(Route::currentRouteName() === 'reference.index')
		<a class="btn btn-light" href="{{ route('reference.create') }}" role="button">Créer une nouvelle référence</a>
	@endif
</div>

<div class="col-12">
	<div class="card-body " style="background-color: #fff">
		<table id="example1" class="table table-striped table-sm">
			<thead>
				<tr class="text-center">
					<th> Title </th>
					<th> Authors </th>
					<th> Year </th>
					<th> Edition </th>
					{{-- <th> URL </th> --}}
					<th> User </th>
					<th> Actions </th>
				</tr>
			</thead>
			<tbody>
				@foreach ($referencesWithRelations as $reference)
				<tr class="text-center">
					<td>
						<a href="" class="add_style" ><strong class="text-dark">{{$reference->title}}</strong></a>
					</td>
					<td>{{ $reference->authors }}</td>
					<td>{{ $reference->year }}</td>
					<td>{{ $reference->edition }}</td>
					{{-- <td>{{ $reference->url }}</td> --}}
					<td>{{ optional($reference->user)->name }}</td>
					<td style="width: 10rem">
						<div class="btn-group float-right">
							<a class="btn btn-outline-success align-self-center p-2" href="{{ route('reference.edit',$reference->id) }}" role="button">Edit</a> &nbsp; &nbsp;
						</div>
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
		$(function () {

		$('#example1').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
			"language":
			{
				"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
			}
		});
		});
	</script>
@endsection

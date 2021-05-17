@extends('dashboard.layout')

@section('content_dashboard')
<div class="row justify-content-end" style="padding-bottom: 0.75rem">

</div>

<div class="col-12">
	<div class="card-body " style="background-color: #fff">
		<table id="example1" class="table table-striped table-sm">
			<thead>
				<tr class="text-center">
					<th> Nom </th>
					<th> First Name </th>
					<th> Team </th>
					<th> Mobile Phone</th>
					<th> Email </th>
					<th> Is Active</th>
					<th> Rôle </th>
					<th> Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$role_names = ["", "admin", "publisher", "editor", "lector"];
				foreach ($users as $user) { ?>
				<tr class="text-center">
					<td>
						<a href="" class="add_style" ><strong class="text-dark"><?php echo $user->name; ?></strong></a>
					</td>
					<td><?php echo $user->firstname; ?></td>
					<td><?php echo $user->team; ?></td>
					<td><?php echo $user->tel1; ?></td>
					<td><?php echo $user->email; ?></td>
					<td><?php echo $user->is_active; ?></td>
					<td><?php echo $role_names[$user->role_id]; ?></td>
					<?php
					if ($user->role_id !== 4) { ?>
						<td style="width: 10rem">
							<div class="btn-group float-right">&nbsp; &nbsp; &nbsp;
								<a class="btn btn-outline-success" href="{{route('user.edit',$user->id )}}" role="button">Edit</a> &nbsp; &nbsp;
							</div>
						</td>
					<?php
					}
					else { ?>
						<td style="width: 10rem">
							<div class="btn-group float-right">&nbsp; &nbsp; &nbsp;
								<a class="btn btn-outline-success" href="{{ route('user.edit', $user->id) }} "role="button">Edit</a> &nbsp; &nbsp;
								<a class="btn btn-outline-danger" href="{{route('user.destroy.alert', $user->id )}}" role="button">Delete</a>
							</div>
						</td>
					<?php
					} ?>
				</tr>
				<?php
			 	} ?>
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

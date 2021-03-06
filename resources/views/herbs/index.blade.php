@extends('dashboard.layout')
@section('content_title')
	Plantes
@endsection
@section('content_dashboard')
	<div class="row" id="listerByAlphabetic" >
    	<div class="col-12" >
        	<div class="card">
				<div class="card-body">
						<ul class="nav">
                            {{--these go to HerbController with new function called filterByChar--}}
                            <li class="all nav-item">
                                <a class="nav-link listAlphabet {{isset($herb)&&$herb?'':'active-char'}}" href="{{url('herb')}}">
                                    ALL
                                </a>
                            </li>
                            @foreach( range('A', 'Z') as $char)
                                <li class="nav-item" style="max-width: 3.4%">
                                    <a class="nav-link {{in_array($char, $resultChars)?'listAlphabet':'disabled-char'}} {{isset($herbChar) && $herbChar===$char?"active-char":""}}" href="{{url('herb/'.$char)}}">
                                        {{ $char }}
                                    </a>
                                </li>
                            @endforeach

						</ul>
					</h5>
				</div>
			</div>
	 	</div>
		<div class="col-12">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Plantes</h1>
            </div><!-- /.col -->
			<div class="card-body " style="background-color: #fff">

				<table id="herb_table" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th> Name</th>
							<th> Sci Name</th>
                            <th> Forme(s) de la plante</th>

						</tr>
					</thead>
					<tbody>

              {{--this foreach is changed according our need to display herbs by  filtering char --}}
						@foreach (isset($herb)?$herb:$validatedHerb as $herb)

						<!--
							START COMMENT

							Les variables $lastHerb et $numberOfTimes_herbForms ont été déclrée dans le controleur Herb methode indes

							la numberOfTimes_herbForms sert à compter le nombre de qu'on a une differente forme de plande pour plant x
							La lastHerbe y est stockée l'ID de la dernier herb.
							On verifie si l'ID stocké dans $lastHerb est different de l'Herb recu à chaque boucle, si oui on reinitialise

							$numberOfTimes_herbForms pour qu'il se reincrémente au tant de fois qu'on a une nouvelle forme de plante
						-->
							@php
								if($lastHerb != $herb->id )
									$lastHerb = $herb->id;
									$numberOfTimes_herbForms = 0;
							@endphp

							<tr>
								<td>

									<a href="{{route('herbs.details', $herb->id)}} " class="add_style" ><strong class="text-success">{{$herb->name}}</strong></a>
								</td>

								<td>{{$herb->sciname}}</td>

								<td>
                                    @php
                                        echo $herb->herb_forms->implode("name", " - ");
                                    @endphp
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
  	</div>
@endsection

@section('dashboard-js')
    <script>
        $(document).ready(function() {

            $('#herb_table').DataTable({
                "paging": true,
                "processing": true,
                "lengthChange": false,
                "searching": true,
                "deferRender": 15,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,

                "language":
                {
                    "url": '//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json'
                }
            });

        });
    </script>
@endsection

@section('alfab-js')
	<script>
		$(function() {
			$(document).ready(function() {
				$('#listerByAlphabetic thead tr').clone(true).appendTo( '#listerByAlphabetic thead' );
				$('#listerByAlphabetic thead tr:eq(1) th').each( function (i) {
					var title = $(this).text();
					$(this).html( '<input type="text" placeholder="Search '+title+'" />' );

					$( 'input', this ).on( 'keyup change', function () {
						if ( table.column(i).search() !== this.value ) {
							table
								.column(i)
								.search( this.value )
								.draw();
						}
					} );
				} );

				var table = $('#listerByAlphabetic').DataTable( {
					orderCellsTop: true,
					fixedHeader: true
				} );
			} );
		})
	</script>
@endsection

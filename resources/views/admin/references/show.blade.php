@extends('dashboard.layout')
@section('content_dashboard')

<div class="container">

	<h2 style="color: #e32;font-family: 'Gill Sans','lucida grande', helvetica, arial, sans-serif;">Dans cette interaction :</h2>
    <br>
    <dl class="row">
        @if ($type == "herb")
            <dt class="col-sm-2" ><h2 style="color: #2c6877;font-size:1.7em;">Plante</h2></dt>
            <dd class="col-sm-3"> <h2 style="color: #2c6877;font-size:1.7em;">{{ $interaction->herbs->name }}</h2></dd>
        @else
            <dt class="col-sm-2" ><h2 style="color: #2c6877;font-size:1.7em;">DCI</h2></dt>
            <dd class="col-sm-3"> <h2 style="color: #2c6877;font-size:1.7em;">{{ $interaction->drugs->name }}</h2></dd>
        @endif
	</dl>
	<dl class="row" style="background: #f4f4f4">
		<dt class="col-sm-2" >Mécanisme</dt>
		 <dd class="col-sm-3"> {{ optional($interaction->targets)->name }}</dd>
	</dl>
	<dl class="row">
		<dt class="col-sm-2" >Notes</dt>

		 <dd class="col-sm-8">
            @php
                echo nl2br(str_replace(['\r', '\n'], ["", '<br />'], "$interaction->notes"));
            @endphp
            </dd>
	</dl>
	<dl class="row" style="background: #f4f4f4">
		<dt class="col-sm-2" >Intensité</dt>
		 <dd class="col-sm" style="background-color: {{$interaction->forces->color}};"> {{ $interaction->forces->name }}</dd>
	</dl>

	<br><br>
    @if ($interaction->references->count() < 1)
        <h2 style="color: #e32;font-family: 'Gill Sans','lucida grande', helvetica, arial, sans-serif;">Référence(s) :</h2>
        <br>
        <h2 style="color: #2c6877;font-size:1.7em;">Aucun résultat référencé dans Hedrine</h2>
    @else
    <div class="col-12">
		<h2 style="color: #e32;font-family: 'Gill Sans','lucida grande', helvetica, arial, sans-serif;">Référence(s) :</h2>
        <br>
        @php
            $currentRef = 1;
        @endphp
        @foreach ($interaction->references as $refLinked)
            <h2 style="color: #2c6877;font-size:1.7em;">
                Référence
                @php
                    echo $currentRef . " sur " . $referencesCount;
                    $currentRef +=1;
                @endphp
            </h2>
            <br>
            <dl class="row" style="background: #f4f4f4">
                <dt class="col-sm-2" >Titre</dt>
                <dd class="col-sm"> {{ $refLinked->title }}</dd>
            </dl>
            <dl class="row">
                <dt class="col-sm-2" >Auteur</dt>
                <dd class="col-sm"> {{ $refLinked->authors }}</dd>
            </dl>
            <dl class="row" style="background: #f4f4f4">
                <dt class="col-sm-2" >Année</dt>
                <dd class="col-sm"> {{ $refLinked->year }}</dd>
            </dl>
            <dl class="row">
                <dt class="col-sm-2" >Edition</dt>
                <dd class="col-sm"> {{ $refLinked->edition }}</dd>
            </dl>
            <dl class="row">
                <dt class="col-sm-2" >DOI / URL</dt>
                <dd class="col-sm-8"><a href="{{ $refLinked->url }}"> {{ $refLinked->url }}</a></dd>
            </dl>

            <br>
            <h2 style="color: #2c6877;font-size:1.4em;">Cette référence décrit aussi : <button class="button{{ $refLinked->id }}" onclick="toggleReferenceInteractions('{{ $refLinked->id }}');">+</button></h2>
            <div class="card-body table-responsive plante{{ $refLinked->id }}" style="background-color: #fff; display:none" >
                <table id="dataTable_details" class="display responsive  table table-striped " width="100%">
                    <thead>
                        <tr>
                        <th>Nom de la {{$typeName}}</th>
                            <th>Nom du mécanisme</th>
                            {{-- <th>Effets</th> --}}
                            <th>Intensité</th>
                            <th>Notes</th>

                        </tr>
                    </thead>
                    <tbody>

                        {{-- @foreach ($listeHinteractionLinked[$refLinked->id] as $hLinked) --}}
                        @if ($type == "herb")
                            @foreach ($refLinked->hinteractions->sortby('force_id') as $interLinked)
                                @php
                                    //echo $refLinked->id;
                                    //dd($interLinked);
                                @endphp

                                <tr>
                                    <th scope="row">
                                        {{ $interLinked->herbs->name }}
                                        <h6>({{ $interLinked->herbs->sciname }})</h6>
                                    </th>
                                    <td>{{ optional($interLinked->targets)->name }}</td>
                                    {{-- <td >effet</td> --}}
                                    <td style=" background-color: {{ $colorsList[$interLinked->forces->color] }};"> {{ $interLinked->forces->name }}</td>
                                    <td>
                                        @php
                                            echo nl2br(str_replace(['\r', '\n'], ["", '<br />'], "$interLinked->notes"));
                                        @endphp
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            @foreach ($refLinked->dinteractions->sortby('force_id') as $interLinked)
                                @php
                                    //echo $refLinked->id;
                                    //dd($interLinked);
                                @endphp

                                <tr>
                                    <th scope="row">
                                        {{ $interLinked->drugs->name }}
                                    </th>
                                    <td>{{ optional($interLinked->targets)->name }}</td>
                                    {{-- <td >effet</td> --}}
                                <td style="background-color:  {{ $colorsList[$interLinked->forces->color] }};">{{ $interLinked->forces->name }}</td>
                                    <td>
                                        @php
                                            echo nl2br(str_replace(['\r', '\n'], ["", '<br />'], "$interLinked->notes"));
                                        @endphp
                                    </td>
                                </tr>
                            @endforeach
                        @endif



                    </tbody>
                </table>
            </div>
            <br><br>
        @endforeach
	</div>
    @endif



        @endsection

@section('dashboard-js')
<script>
	function toggleReferenceInteractions(id) {
		console.log("ok");
		console.log(id);
		console.log($(".button"+id).html());
		if($(".button"+id).html() == "+"){
			$(".plante"+id).show();
			$(".button"+id).html("-")
		}
		else if($(".button"+id).html() == "-"){
			$(".plante"+id).hide();
			$(".button"+id).html("+")
		}
		else {
			$(".plante"+id).show();
		}

	}



	// $(function () {

	//   $('#dataTable_details').DataTable({
	// 	"paging": false,
	// 	"lengthChange": true,
	// 	"searching": true,
	// 	"ordering": true,
	// 	"info": false,
	// 	"autoWidth": true,
	// 	"responsive": true,
	// 	"language":
	// 	{
	// 		"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
    //     }
	//   });
	// });
  </script>
@endsection



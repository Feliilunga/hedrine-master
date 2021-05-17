@extends('dashboard.layout')

@section('content_dashboard')

    <div class="container">

        <div class="card bg-light">
            <h5 class="card-header">Votre DCI</h5>
            <div class="card-body">

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Vous ne pouvez modifier que le nom et la famille de votre medicament.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @if(session()->has('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <form method="POST" action=" {{ route('drugs.update', $drug->id) }}">
                    @isset($drug) @method('PUT') @endisset
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom du DCI</label>
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Veuillez indiquer un nom pour le DCI" value="{{isset($drug) ? $drug->name : ''}}">
                    </div>

                    <div class="form-group">
                        <label for="drug_families_id">Famille</label>
                        <select name="drug_families_id" class="form-control">
                            @foreach ($drug_families as $drug_familie)
                                <option value="{{$drug_familie->id}}" @if($drug->drug_families_id == $drug_familie->id) selected @endif>{{$drug_familie->name}}</option>
                             @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="route_id">Route</label>
                        <select name="route_id" class="form-control">

                            @foreach ($routes as $route)
                                <option value="{{$route->id}}" @if($drug->route_id == $route->id) selected @endif>{{$route->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="atc_level_4s_id">AtcLevel</label>
                        <select name="atc_id" class="form-control">

                            @foreach ($atcs as $atc_level)
                                <option value="{{$atc_level->id}}" @if($drug->atc_id == $atc_level->id) selected @endif>{{$atc_level->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <br>

                    <button type="submit" class="btn btn-primary">Sauvagarde</button>
                </form>

            </div>
        </div>
    </div>

@endsection





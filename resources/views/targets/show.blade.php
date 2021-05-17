@extends('dashboard.layout')

@section('content_dashboard')

    <div class="container">

        <div class="card bg-light">
            <h5 class="card-header">Votre Target (Cible)</h5>
            <div class="card-body">

                <form method="POST" action=" {{ route('targets.update', $target->id) }}">
                    @isset($target) @method('PUT') @endisset
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom du Target</label>
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Veuillez indiquer un nom pour le DCI" value="{{isset($target) ? $target->name : ''}}">
                    </div>

                    <div class="form-group">
                        <label for="long_name">Long nom du target</label>
                        <input type="text" class="form-control" id="long_name" name="long_name" required placeholder="Veuillez indiquer un long nom pour la target" value="{{isset($target) ? $target->long_name : ''}}">
                    </div>

                    <div class="form-group">
                        <label for="notes">Notes de la Target</label>
                        <textarea rows="10" cols="15" class="form-control" id="notes" name="notes" placeholder="Veuillez introduire une note pour la target" required>{{ isset($target) ? $target->notes : ''}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="target_type_id">Type target</label>
                        <select name="target_type_id" required="" class="form-control" placeholder="Veuillez indiquer un type de target pour la target ">

                            @foreach ($target_types as $target_type)
                                <option value=" {{$target_type->id}}" @if($target->target_type_id == $target_type->id) selected @endif>{{$target_type->name}}</option>
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





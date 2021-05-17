@extends('dashboard.layout')

@section('content_dashboard')
@include('partials.message_refuse_target')
@include('partials.messageUpdateTarget')
@include('partials.targetEdit')
<div class="container-fluid">
    <div class="col-12">
        <div class="table responsive">
            {{ csrf_field() }}
            <h3 class="text-secondary"><b><i class="fas fa-seedling mr-2"></i>Target(s) ajouté(s)</b> </h3>
            <br>
            <table id="valid-form" class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        {{--<th scope="col">Genre</th>--}}
                        <th scope="col">Type</th>
                        <th scope="col">Name</th>
                        <th scope="col">Nom Long</th>
                        <th scope="col">Note</th>
                        <th scope="col">Auteur</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($noValidTargets as $key=> $target)
                    <tr class={{$target->validated == -1? "text-info text-bolder":"text-dark"}}>
                        <td>{{$target->id}}</td>
                        <td>{{ optional($target->targetype)->name }}</td>
                        <td>{{$target->name}}</td>
                        <td>{{$target->long_name}}</td>
                        <td>{{$target->notes}}</td>
                        <td>{{$target->user->name.' '.$target->user->firstname}}</td>
                        <td>{{Carbon\Carbon::parse($target->updated_at)->diffForHumans()}}</td>
                        <td class="">
                            <a class="btn btn-outline-success text-success btn-sm" href="{{ route('admin.approve_target', $target->id) }}">
                                <i class="fas fa-thumbs-up"></i>
                            </a>
                            <i class="fas fa-spinner fa-pulse fa-lg" style="display: none"></i>
                            <a class="btn btn-outline-danger btn-sm refuse-modal" href="#" data-id="{{ $target->id }}" data-user="{{$target->user->id}}" data-toggle="tooltip" data-placement="bottom" title="Refuser la plante">
                                <i class="fas fa-thumbs-down"></i>
                            </a>
                            <button class="btn btn-outline-secondary btn-sm edit-modal-target" role="button" data-id="{{ $target->id }}" data-name="{{$target->name}}" data-longname="{{$target->long_name}}" data-notes="{{ $target->notes }}" data-toggle="tooltip" data-placement="bottom" title="Editeur rapide">
                                <i class="fas fa-edit"></i>
                            </button>
                            {{-- <a class="btn btn-outline-info btn-sm modify-modal" href="#" role="button" data-id="{{ $target->id }}" data-user="{{$target->user->id}}" data-toggle="tooltip" title="Modifier la plante">
                                <i class="fas fa-paper-plane"></i>
                            </a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <br>
            <h3 class="text-danger"><b><i class="fas fa-seedling mr-2" style="color: red"></i> Target(s) Modifié(s)</b></h3>
            <br>
            <table id="valid-form" class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        {{--<th scope="col">Genre</th>--}}
                        <th scope="col">Nom</th>
                        <th scope="col">Valeur d origine</th>
                        <th scope="col">Nouvelle valeur</th>
                        <th scope="col">Auteur</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($noValidTargetsModified as $target)
                    <tr class={{$target->validated == -1? "text-info text-bolder":"text-dark"}}>
                        <td>{{$target->type_id}}</td>
                        <td>{{$target->type_field}}</td>
                        <td>{{$target->original_value}}</td>
                        <td>{{$target->new_value}}</td>
                        <td>{{$target->author}}</td>
                        <td>{{Carbon\Carbon::parse($target->updated_at)->diffForHumans()}}</td>
                        <td class="">
                            <a class="btn btn-outline-success text-success btn-sm" href="{{ route('admin.approveTemp', $target->id) }}">
                                <i class="fas fa-thumbs-up"></i>
                            </a>

                            <i class="fas fa-spinner fa-pulse fa-lg" style="display: none"></i>
                            <a class="btn btn-outline-danger btn-sm refuse-modal" href="#" role="button" data-id="{{ $target->id }}" data-temporary="temporary" data-user="{{$target->author_id}}" data-toggle="tooltip" title="Refuser la plante">
                                <i class="fas fa-thumbs-down"></i>
                            </a>
                            <button class="btn btn-outline-secondary btn-sm edit-modal-temporary" role="button" data-temporary="temporary" data-id="{{ $target->id }}" data-title="{{$target->type_field}}" data-original="{{$target->original_value}}" data-new="{{$target->new_value}}" data-toggle="tooltip" data-placement="bottom" title="Editeur rapide">
                                <i class="fas fa-edit"></i>
                            </button>
                            {{-- <a class="btn btn-outline-info btn-sm modify-modal" href="#" role="button" data-id="{{ $target->id }}" data-user="{{$target->author_id}}" data-toggle="tooltip" title="Modifier la plante">
                                <i class="fas fa-paper-plane"></i>
                            </a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <small class="d-flex justify-content-end">{{$noValidTargetsModified->links()}}</small>
        </div>
    </div>
</div>
</div>

@endsection
{{--['url' => route('admin.refuse')]['url' => route('admin.modifs')]--}}

@section('script')
<script src="{{ asset('/js/targetEdit.js') }}" type="text/javascript"></script>
@endsection

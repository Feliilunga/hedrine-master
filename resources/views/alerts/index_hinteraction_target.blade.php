@extends('dashboard.layout')

@section('content_dashboard')
    @include('partials.message_refuse_hinteraction_target')
    @include('partials.messageUpdateHinteractionTarget')
    @include('partials.hinteractiontargetEdit')
    <div class="container-fluid">
            <div class="col-12">
                <div class="table responsive">
                    {{ csrf_field() }}
                    <h3 class="text-secondary"><b><i class="fas fa-seedling mr-2"></i>Hinteraction(s)Target(s) ajouté(s)</b> </h3>
                    <br>
                    <table id="valid-form" class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            {{--<th scope="col">Genre</th>--}}
                            <th scope="col">Herb Name</th>
                            <th scope="col">Target Name</th>
                            <th scope="col">Note</th>
                            <th scope="col">Auteur</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($noValidHinteractionTargets as $key=> $target)
                                <tr class={{$target->validated == -1? "text-info text-bolder":"text-dark"}}>
                                    <td>{{$target->id}}</td>
                                    <td>{{ optional($target->herbs)->name }}</td>
                                    <td>{{ optional($target->targets)->name }}</td>
                                    <td>{{$target->notes}}</td>
                                    <td>{{$target->user->name.' '.$target->user->firstname}}</td>
                                    <td>{{Carbon\Carbon::parse($target->updated_at)->diffForHumans()}}</td>
                                    <td class="">
                                        <a class="btn btn-outline-success text-success btn-sm " href="{{ route('admin.approve_hinteraction', $target->id) }}" data-id="{{$target->id}}" data-typeid="{{$target->type_id}}" data-title="{{$target->type_field}}" data-value="{{$target->new_value}}" role="button" data-toggle="tooltip" title="Approuver la hinteraction">
                                            <i class="fas fa-thumbs-up"></i>
                                        </a>
                                        <i class="fas fa-spinner fa-pulse fa-lg" style="display: none"></i>
                                        <a class="btn btn-outline-danger btn-sm refuse-modal" href="#" role="button" data-id="{{ $target->id }}" data-user={{$target->user->id}} data-toggle="tooltip" title="Refuser la hinteraction">
                                            <i class="fas fa-thumbs-down"></i>
                                        </a>
                                        <button {{\Illuminate\Support\Facades\Auth::user()->role_id > 2? "disabled" : ""}} class="btn btn-outline-secondary btn-sm edit-modal" role="button" data-id="{{ $target->id }}" data-herbname="{{$target->herbs->name}}" data-targetname="{{optional($target->targets)->name}}" data-notes="{{ $target->notes }}" data-toggle="tooltip" title="Editeur rapide">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <!-- <a class="btn btn-outline-info btn-sm modify-modal" href="#" role="button"  data-id="{{ $target->id }}" data-user={{$target->user->id}} data-toggle="tooltip" title="Modifier la plante">
                                            <i class="fas fa-paper-plane"></i>
                                        </a> -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <br>
                    <h3 class="text-danger"><b><i class="fas fa-seedling mr-2" style="color: red"></i> Hinteraction Target Modifié</b></h3>
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
                            @foreach($noValidHinteractionTargetsModified as $target)
                                <tr class={{$target->validated == -1? "text-info text-bolder":"text-dark"}}>
                                    <td>{{$target->type_id}}</td>
                                    <td>{{$target->type_field}}</td>
                                    @if($target->type_field === "target_forms")
                                        @php
                                            $targetForm = \Illuminate\Support\Facades\DB::table('targets')->where('id', $target->type_id)->get();
                                        @endphp
                                        <td>
                                            just for test
                                            {{--<select class="form-control targetForm selectpicker" id="temporary-forms" multiple disabled>
                                                @foreach($targetForm->target_forms as $form)
                                                    <option style="color:black" selected>{{ $form->name }}</option>
                                                @endforeach
                                            </select>--}}
                                        </td>
                                        <td>
                                            just for test
                                            {{--<select class="form-control targetForm selectpicker" id="temporary-forms" multiple disabled>
                                                @foreach($noValidtargetsModified->target_forms_temporary as $form)
                                                    <option style="color:black" selected>{{ $form->name }}</option>
                                                @endforeach
                                            </select>--}}
                                        </td>
                                    @else
                                        <td>{{$target->original_value}}</td>
                                        <td>{{$target->new_value}}</td>
                                    @endif
                                    <td>{{$target->author}}</td>
                                    <td>{{Carbon\Carbon::parse($target->updated_at)->diffForHumans()}}</td>
                                    <td class="">
                                        <a class="btn btn-outline-success text-success btn-sm" href="{{ route('admin.approveTemp',  $target->id ) }}" data-temporary="temporary" data-title="{{$target->type_field}}" data-value="{{$target->new_value}}" data-id="{{$target->id}}"  data-typeid="{{$target->type_id}}" role="button" data-toggle="tooltip" title="Approuver la hinteraction">
                                            <i class="fas fa-thumbs-up"></i>
                                        </a>
                                        <i class="fas fa-spinner fa-pulse fa-lg" style="display: none"></i>
                                        <a class="btn btn-outline-danger btn-sm refuse-modal" href="#" role="button" data-id="{{ $target->id }}" data-temporary="temporary" data-user={{$target->author_id}} data-toggle="tooltip" title="Refuser la hinteraction">
                                            <i class="fas fa-thumbs-down"></i>
                                        </a>
                                        <button {{\Illuminate\Support\Facades\Auth::user()->role_id > 2? "disabled" : ""}} class="btn btn-outline-secondary btn-sm edit-modal-temporary" role="button" data-temporary="temporary" data-id="{{ $target->id }}" data-title="{{$target->type_field}}" data-original="{{$target->original_value}}" data-new="{{$target->new_value}}" data-toggle="tooltip" title="editeur rapide">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <!-- <a class="btn btn-outline-info btn-sm modify-modal" href="#" role="button" data-id="{{ $target->id }}" data-temporary="temporary" data-user={{$target->author_id}} data-toggle="tooltip" title="Modifier la plante">
                                            <i class="fas fa-paper-plane"></i>
                                        </a> -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <small class="d-flex justify-content-end">{{$noValidHinteractionTargetsModified->links()}}</small>
                </div>
            </div>
        </div>
    </div>
@endsection
 {{--['url' => route('admin.refuse')]['url' => route('admin.modifs')]--}}







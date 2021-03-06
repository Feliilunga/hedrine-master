@extends('dashboard.layout')

@section('content_dashboard')
    @include('partials.message_refuse_dinteraction_target')
    @include('partials.messageUpdateDinteractionTarget')
    @include('partials.dinteractiontargetEdit')
    <div class="container-fluid">
            <div class="col-12">
                <div class="table responsive">
                    {{ csrf_field() }}
                    <h3 class="text-secondary"><b><i class="fas fa-capsules mr-2"></i>Dinteraction(s)Target(s) ajouté(s)</b> </h3>
                    <br>
                    <table id="valid-form" class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            {{--<th scope="col">Genre</th>--}}
                            <th scope="col">DCI Name</th>
                            <th scope="col">Target Name</th>
                            <th scope="col">Note</th>
                            <th scope="col">Auteur</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($noValidDinteractionTargets as $key=> $target)
                                <tr class={{$target->validated == -1? "text-info text-bolder":"text-dark"}}>
                                    <td>{{$target->id}}</td>
                                    
                                    <td>{{ optional($target->routesDrugs->drugs)->name }}</td>
                                    <td>{{ optional($target->targets)->name }}</td>
                                    <td>{{$target->notes}}</td>
                                    <td>{{$target->user->name.' '.$target->user->firstname}}</td>
                                    <td>{{Carbon\Carbon::parse($target->updated_at)->diffForHumans()}}</td>
                                    <td class="">
                                        <a class="btn btn-outline-success text-success btn-sm" href="{{ route('admin.approve_dinteraction', $target->id) }}" data-id="{{$target->id}}" data-typeid="{{$target->type_id}}" data-title="{{$target->type_field}}" data-value="{{$target->new_value}}" role="button" data-toggle="tooltip" title="Approuver la dinteraction">
                                            <i class="fas fa-thumbs-up"></i>
                                        </a>
                                        <i class="fas fa-spinner fa-pulse fa-lg" style="display: none"></i>
                                        <a class="btn btn-outline-danger btn-sm refuse-modal" href="#" role="button" data-id="{{ $target->id }}" data-user={{$target->user->id}} data-toggle="tooltip" title="Refuser la dinteraction">
                                            <i class="fas fa-thumbs-down"></i>
                                        </a>
                                        <!-- <button {{\Illuminate\Support\Facades\Auth::user()->role_id > 2? "disabled" : ""}} class="btn btn-outline-secondary btn-sm edit-modal" role="button" data-id="{{ $target->id }}" data-drugname="{{$target->routesDrugs->drugs->name}}" data-targetname="{{optional($target->targets)->name}}" data-notes="{{ $target->notes }}" data-toggle="tooltip" title="Editeur rapide">
                                            <i class="fas fa-edit"></i>
                                        </button> -->
                                        <a class="btn btn-outline-success text align-self-center p-2" href="{{ route('dinteraction.edit',$target->id) }}" role="button">Edit</a>
                                        {{-- <a class="btn btn-outline-info btn-sm modify-modal" href="#" role="button"  data-id="{{ $target->id }}" data-user={{$target->user->id}} data-toggle="tooltip" title="Modifier la dinteraction">
                                            <i class="fas fa-paper-plane"></i>
                                        </a> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <br>
                    <h3 class="text-danger"><b><i class="fas fa-capsules mr-2" style="color: red"></i> Dinteraction(s) Target(s) Modifié(s)</b></h3>
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
                            @foreach($noValidDinteractionTargetsModified as $target)
                                <tr class={{$target->validated == -1? "text-info text-bolder":"text-dark"}}>
                                    <td>{{$target->type_id}}</td>
                                    <td>{{$target->type_field}}</td>
                                    @php
                                        //dd($target->type_field);
                                    @endphp
                                    @if($target->type_field === "target_id")
                                        @php
                                            $targetForm = \Illuminate\Support\Facades\DB::table('targets')->where('id', $target->original_value)->get();
                                            $noValidtargetsModified = \Illuminate\Support\Facades\DB::table('targets')->where('id', $target->new_value)->get();
                                            $tabTarget = \Illuminate\Support\Facades\DB::table('targets')->where('validated', '>', 0)->get();
                                            //dd($noValidtargetsModified);
                                            
                                        @endphp
                                        <td>
                                            
                                            <select class="form-control targetForm selectpicker" id="temporary-forms" multiple disabled>
                                                @foreach($targetForm as $form)
                                                    <option style="color:black" selected>{{ $form->name }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            
                                            <select class="form-control targetForm selectpicker" id="temporary-target">
                                                @foreach($tabTarget as $targ)
                                                    @foreach($noValidtargetsModified as $form)
                                                        <option style="color:black" value="{{$targ->id}} " @if($targ->id === $form->id) selected @endif>{{ $targ->name }}</option>
                                                    @endforeach
                                                @endforeach
                                            </select>                                        
                                                
                                            
                                        </td>
                                    @else
                                        <td>{{$target->original_value}}</td>
                                        <td>{{$target->new_value}}</td>
                                    @endif
                                    <td>{{$target->author}}</td>
                                    <td>{{Carbon\Carbon::parse($target->updated_at)->diffForHumans()}}</td>
                                    <td class="">
                                        <a class="btn btn-outline-success text-success btn-sm" href="{{ route('admin.approveTemp',  $target->id) }}" data-temporary="temporary" data-title="{{$target->type_field}}" data-value="{{$target->new_value}}" data-id="{{$target->id}}"  data-typeid="{{$target->type_id}}" role="button" data-toggle="tooltip" title="Approuver la plante">
                                            <i class="fas fa-thumbs-up"></i>
                                        </a>
                                        <i class="fas fa-spinner fa-pulse fa-lg" style="display: none"></i>
                                        <a class="btn btn-outline-danger btn-sm refuse-modal" href="#" role="button" data-id="{{ $target->id }}" data-temporary="temporary" data-user={{$target->author_id}} data-toggle="tooltip" title="Refuser la plante">
                                            <i class="fas fa-thumbs-down"></i>
                                        </a>
                                        <button id='editBtn' {{\Illuminate\Support\Facades\Auth::user()->role_id > 2? "disabled" : ""}} class="btn btn-outline-secondary btn-sm edit-modal-temporary" role="button" data-temporary="temporary" data-id="{{ $target->id }}" data-title="{{$target->type_field}}" data-original="{{$target->original_value}}" data-new=  data-toggle="tooltip" title="editeur rapide">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        {{-- <a class="btn btn-outline-info btn-sm modify-modal" href="#" role="button" data-id="{{ $target->id }}" data-temporary="temporary" data-user={{$target->author_id}} data-toggle="tooltip" title="Modifier la plante">
                                            <i class="fas fa-paper-plane"></i>
                                        </a> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <small class="d-flex justify-content-end">{{$noValidDinteractionTargetsModified->links()}}</small>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('dashboard-js')
<Script> 
    $targetVal = $("#temporary-target").val();
    $('#temporary-target').change(function(){                                        
        $targetVal = $("#temporary-target").val();
        console.log($targetVal);
    });
   
    $('#editBtn').click(function(){
        $('#editBtn').data('new', $("#temporary-target").val());
    });
    

</script>

@php

@endphp

@endsection

 {{--['url' => route('admin.refuse')]['url' => route('admin.modifs')]--}}







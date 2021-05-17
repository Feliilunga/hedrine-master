@extends('dashboard.layout')

@section('content_dashboard')
@include('partials.message_refuse_drug')
@include('partials.messageUpdateDrug')
@include('partials.drugEdit')
@include('partials.temporaryEdit')
<div class="container-fluid">
    <div class="col-12">
        <div class="table responsive">
            {{ csrf_field() }}
            <h3 class="text-secondary"><b><i class="fas fa-seedling mr-2"></i>DCI ajouté(s)</b> </h3>
            <br>
            <table id="valid-form" class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        {{--<th scope="col">Genre</th>--}}
                        <th scope="col">Name</th>
                        <th scope="col">Famille</th>
                        <th scope="col">Auteur</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($noValidDrugs as $drug)
                    <tr class={{$drug->validated == -1? "text-info text-bolder":"text-dark"}}>
                        <td>{{$drug->id}}</td>
                        <td>{{$drug->name}}</td>
                        <td>{{ optional($drug->atc_level4->atc_level3->atc_level2->atc_level1)->code}}  - {{ optional($drug->atc_level4->atc_level3->atc_level2->atc_level1)->name }}</td>
                        <td>{{$drug->user->name.' '.$drug->user->firstname}}</td>
                        <td>{{Carbon\Carbon::parse($drug->updated_at)->diffForHumans()}}</td>
                        <td class="">
                            <a class="btn btn-outline-success text-success btn-sm" href="{{ route('admin.approve_drug',  $drug->id) }}">
                                <i class="fas fa-thumbs-up"></i>
                            </a>
                            <i class="fas fa-spinner fa-pulse fa-lg" style="display: none"></i>
                            <a class="btn btn-outline-danger btn-sm refuse-modal" href="#" role="button" data-id="{{ $drug->id }}" data-user="{{$drug->user->id}}" data-toggle="tooltip" title="Refuser la plante">
                                <i class="fas fa-thumbs-down"></i>
                            </a>
                            <button class="btn btn-outline-secondary btn-sm edit-modal-drugs" role="button" data-id="{{ $drug->id }}" data-name="{{$drug->name}}" data-familly="{{$drug->drug_families_id}}" data-route="{{$drug->route_id}}" data-atc="{{$drug->atc_id}}" data-toggle="tooltip" title="editeur rapide">
                                <i class="fas fa-edit"></i>
                            </button>
                            {{-- <a class="btn btn-outline-info btn-sm modify-modal" href="#" role="button" data-id="{{ $drug->id }}" data-user="{{$drug->user->id}}" data-toggle="tooltip" title="Modifier la plante">
                                <i class="fas fa-paper-plane"></i>
                            </a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <br>
            <h3 class="text-danger"><b><i class="fas fa-seedling mr-2" style="color: red"></i> DCI Modifié(s)</b></h3>
            <br>
            <table id="valid-form" class="table">
                <thead>
                    <tr>
                        <th scope="col">NOM</th>
                        {{--<th scope="col">Genre</th>--}}
                        <th scope="col">Champ modifié</th>
                        <th scope="col">Valeur d'origine</th>
                        <th scope="col">Nouvelle valeur</th>
                        <th scope="col">Auteur</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($noValidDrugsModified as $drug)
                    <tr class={{$drug->validated == -1? "text-info text-bolder":"text-dark"}}>
                        @php
                        $nom = \Illuminate\Support\Facades\DB::table('drugs')->where('id', $drug->type_id)->value('name');
                        @endphp
                        <td>{{$nom}}</td>
                        <td>{{$drug->type_field}}</td>
                        @if($drug->type_field === "drug_families_id")
                        @php
                        $original_familly = \Illuminate\Support\Facades\DB::table('drug_families')->where('id', $drug->original_value)->value('name');
                        $new_familly = \Illuminate\Support\Facades\DB::table('drug_families')->where('id', $drug->new_value)->value('name');
                        @endphp

                        <td>
                            {{$original_familly}}

                            {{-- just for test
                                                <select class="form-control drugForm selectpicker" id="temporary-forms" multiple disabled>
                                                @foreach($drugForm->drug_forms as $form)
                                                    <option style="color:black" selected>{{ $form->name }}</option>
                            @endforeach
                            </select>--}}
                        </td>
                        <td>
                            {{$new_familly}}
                            {{-- just for test
                                                <select class="form-control drugForm selectpicker" id="temporary-forms" multiple disabled>
                                                @foreach($noValiddrugsModified->drug_forms_temporary as $form)
                                                    <option style="color:black" selected>{{ $form->name }}</option>
                            @endforeach
                            </select>--}}
                        </td>
                        @elseif($drug->type_field === "route_id")
                        @php
                        $original_route = \Illuminate\Support\Facades\DB::table('routes')->where('id', $drug->original_value)->value('name');
                        $new_route = \Illuminate\Support\Facades\DB::table('routes')->where('id', $drug->new_value)->value('name');
                        @endphp
                        <td> {{$original_route}} </td>
                        <td> {{$new_route}} </td>
                        @elseif($drug->type_field === "atc_id")
                        @php
                        $original_atc = \Illuminate\Support\Facades\DB::table('atc')->where('id', $drug->original_value)->value('name');
                        $new_atc = \Illuminate\Support\Facades\DB::table('atc')->where('id', $drug->new_value)->value('name');
                        @endphp
                        <td> {{$original_atc}} </td>
                        <td> {{$new_atc}} </td>
                        @else
                        <td>{{$drug->original_value}}</td>
                        <td>{{$drug->new_value}}</td>
                        @endif
                        <td>{{$drug->author}}</td>
                        <td>{{Carbon\Carbon::parse($drug->updated_at)->diffForHumans()}}</td>
                        <td class="">
                            <a class="btn btn-outline-success text-success btn-sm" href="{{ route('admin.approveTemp', $drug->id) }}">
                                <i class="fas fa-thumbs-up"></i>
                            </a>
                            <i class="fas fa-spinner fa-pulse fa-lg" style="display: none"></i>
                            <a class="btn btn-outline-danger btn-sm refuse-modal" href="#" role="button" data-id="{{ $drug->id }}" data-temporary="temporary" data-user="{{$drug->author_id}}" data-toggle="tooltip" title="Refuser la plante">
                                <i class="fas fa-thumbs-down"></i>
                            </a>
                            <button class="btn btn-outline-secondary btn-sm edit-modal-temporary" role="button" data-id="{{ $drug->id }}" data-type="{{$drug->type_field}}" data-original="{{$drug->original_value}}" data-new="{{$drug->new_value}}" data-toggle="tooltip">
                                <i class="fas fa-edit"></i>
                            </button>
                            {{-- <a class="btn btn-outline-info btn-sm modify-modal" href="#" role="button" data-id="{{ $drug->id }}" data-temporary="temporary" data-user="{{$drug->author_id}}" data-toggle="tooltip" title="Modifier la plante">
                                <i class="fas fa-paper-plane"></i>
                            </a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <small class="d-flex justify-content-end">{{$noValidDrugsModified->links()}}</small>
        </div>
    </div>
</div>
</div>
@endsection
{{--['url' => route('admin.refuse')]['url' => route('admin.modifs')]--}}

@section('script')
<script src="{{ asset('/js/drugEdit.js') }}" type="text/javascript"></script>
@endsection

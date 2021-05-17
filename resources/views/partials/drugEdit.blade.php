<div id="myModal-drugEdit" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h4 class="modal-title">Veilliez entrez:</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="post" action="{{ route('drug.updates') }}">

                    @method('PUT')
                    @csrf

                    <div class=" form-group">
                        <div class="form-group">
                            <input hidden type="text" style="border: 0;border-bottom: 1px solid gray" class="form-control" name="fid" id="fid">
                        </div>
                        <label class="control-label col-sm-2 text-gray-dark" for="name">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" style="border: 0;border-bottom: 1px solid gray" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="herb_form">Famille</label>

                        <select class="form-control herbForm selectpicker" id="familly" name="families[]">
                            @foreach ($drug_families as $form)
                            <option style="color:black" value="{{$form->id}}">{{ $form->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="route">Route</label>
                        @php
                        $routes = \Illuminate\Support\Facades\DB::table('routes')->get()

                        @endphp
                        <select class="form-control route selectpicker" id="route" name="route[]">
                            @foreach ($routes as $route)
                            <option style="color:black" value="{{$route->id}}">{{ $route->name }}</option>
                            @endforeach
                        </select> </div>
                    <div class="form-group">
                        <label for="atc">AtcLevel</label>

                        @php
                        $atcs = \Illuminate\Support\Facades\DB::table('atc')->get()

                        @endphp
                        <select class="form-control atc selectpicker" id="atc" name="atc[]">
                            @foreach ($atcs as $atc)
                            <option style="color:black" value="{{$atc->id}}">{{ $atc->name }}</option>
                            @endforeach
                        </select> </div>
                    <div class="modal-footer">
                        <button type="submit" style="border: 0;border-bottom: 1px solid gray" class="btn">
                            <span id="footer_action_button" class='glyphicon'>
                                <i id="editdrug" class="fa fa-save"></i>
                                <i id="icon-edit" class="fas fa-spinner fa-pulse" style="display: none"></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- <div class="route">
    <input type="hidden" id="quick-edit-url" value="{{route('admin.drugEdit')}}">
</div> -->
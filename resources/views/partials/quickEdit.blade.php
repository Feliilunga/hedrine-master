<div id="myModal-quickEdit" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h4 class="modal-title">Modification d'une plante</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="post" action="{{ route('admin.quickEdit') }}">

                    @method('PUT')
                    @csrf

                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id" id="fid">
                        <label class="control-label col-sm-2 text-gray-dark" for="name">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" style="border: 0;border-bottom: 1px solid gray" class="form-control" name="name" id="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 text-gray-dark" for="sciname">Sciname:</label>
                        <div class="col-sm-10">
                            <input type="text" style="border: 0;border-bottom: 1px solid gray" class="form-control" name="sciname" id="sciname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="herb_form">Formes de la plante</label>

                        <select class="form-control herbForm selectpicker" id="forms" name="forms[]" multiple>

                            @foreach ($herb_forms as $form)
                            <option style="color:black" value="{{ $form->id }}" {{ in_array($form->id, old('forms') ?: $herb->herb_forms->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $form->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" style="border: 0;border-bottom: 1px solid gray" class="btn">
                            <span class='glyphicon'>
                                <i id="edit" class="fa fa-save"></i>
                            </span>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
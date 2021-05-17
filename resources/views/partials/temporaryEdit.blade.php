<div id="myModal-quickEdit-temporary" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h4 class="modal-title">Modification temporaire</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="post" action="{{ route('admin.editTemporary') }}">

                    @csrf

                    <div class="form-group">
                        <input hidden type="text" class="form-control" name="id" id="tid">
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 text-gray-dark" for="type_field">Titre:</label>
                        <div class="col-sm-10">
                            <input readonly type="text" style="border: 0;border-bottom: 1px solid gray" class="form-control" name="type_field" id="type_field">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 text-gray-dark" for="original_value">Valeur d'origine:</label>
                        <div class="col-sm-10">
                            <input readonly type="text" style="border: 0;border-bottom: 1px solid gray" class="form-control" name="original_value" id="original_value">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 text-gray-dark" for="new_value">Nouvelle valeur:</label>
                        <div class="col-sm-10">
                            <input type="text" style="border: 0;border-bottom: 1px solid gray" class="form-control" name="new_value" id="new_value">
                        </div>
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
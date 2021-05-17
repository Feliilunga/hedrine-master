<div id="myModal-modify-message" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title">Veuillez Préciser ici la raison:</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="post" action="{{ route('admin.modifs_target') }}">
                    @csrf

                    <input hidden type="text" id="modif-id" name="id">
                    <input hidden type="text" id="modif-user" name="user">
                    <input hidden type="text" id="modif-temporary" name="temporary">
                    <div class="form-group">
                        <label class="control-label col-sm-2 text-info" for="name">Message:</label>
                        <div class="col-sm-10">
                            <textarea id="modify-message" name="msg" style="border: 0;border-bottom: 1px solid dodgerblue" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" style="border: 0;border-bottom: 1px solid dodgerblue" class="btn">
                            <span id="footer_action_button" class='glyphicon'>
                                <i id="" class="fa fa-save"></i>
                                <i id="" class="fas fa-spinner fa-pulse" style="display: none"></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
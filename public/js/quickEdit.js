$(document).ready(function () {
    $(document).on('click', '.quick-edit-herb', function () {
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-outline-secondary');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#name').val($(this).data('name'));
        $('#sciname').val($(this).data('sciname'));
        $('#forms').val($(this).data('forms'));
        $('#myModal-quickEdit').modal('show');

    });
    $(document).on('click', '.edit-modal-temporary', function () {
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-outline-secondary');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.form-horizontal').show();
        $('#tid').val($(this).data('id'));
        $('#type_field').val($(this).data('type'));
        $('#original_value').val($(this).data('original'));
        $('#new_value').val($(this).data('new'));
        $('#myModal-quickEdit-temporary').modal('show');

    });

    $('.modal-footer').on('click', '#edit', function () {
        $('#edit').hide();
        $('i#icon-edit-t').show();
        //console.log($('.title').text())
        let url = $('#quick-edit-url').val();
        //alert(url)
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#fid").val(),
                'name': $('#name').val(),
                'sciname': $('#sciname').val(),
                'tid': $("#tid").val(),
                'forms': $('#forms').val(),
                'title': $('.title').text(),
                'new': $('#title').val(),
                'temporary': $('#temporary').val(),
            },
            success: function (data) {
                console.log($('#fid').val());
                //document.location.reload(true);
            },
            error: function (error) {
                console.log("error")
            }
        });
    });

    //unsubscribe part ...
    $('.modal-footer').on('click', '#unsubscribe', function () {
        $('#unsubscribe').html('<i class="fa fa-spinner fa-pulse" id="pending-unsubscribe"></i>');
        $('#pending-unsubscribe').show();
    });

});

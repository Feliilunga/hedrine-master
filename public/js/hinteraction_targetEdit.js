$(document).ready(function() {
    $(document).on('click', '.edit-modal', function()
    {
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-outline-secondary');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Modification Hinteraction Target');
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#herbname').val($(this).data('herbname'));
        $('#targetname').val($(this).data('targetname'));
        $('#notes').val($(this).data('notes'));
        $('#myModal-hinteractionTargetEdit').modal('show');
    });
    $(document).on('click', '.edit-modal-temporary', function()
    {
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-outline-secondary');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Quick Edit');
        $('.form-horizontal').show();
        $('#tid').val($(this).data('id'));
        $('.title').text($(this).data('title'));
        $('#title').val($(this).data('new'));
        $('#original').val($(this).data('original'));
        $('#temporary').val($(this).data('temporary'));
        $('#myModal-quickEdit-temporary').modal('show');
    });

    $('.modal-footer').on('click', '#edit', function()
    {
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
                'notes': $('#notes').val(),
                'tid': $("#tid").val(),
                'forms': $('#forms').val(),
                'title': $('.title').text(),
                'new': $('#title').val(),
                'temporary': $('#temporary').val(),
            },
            success: function(data)
            {
                //console.log(data[0]);
                document.location.reload(true);
            },
            error: function (error) {
                console.log(error)
            }
        });
    });

    //unsubscribe part ...
    $('.modal-footer').on('click', '#unsubscribe', function()
    {
        $('#unsubscribe').html('<i class="fa fa-spinner fa-pulse" id="pending-unsubscribe"></i>');
        $('#pending-unsubscribe').show();
    });

});

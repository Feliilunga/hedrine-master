$(document).ready(function() {
    $(document).on('click', '.edit-modal-drugs', function()
    {
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-outline-secondary');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Modification d une plante');
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#name').val($(this).data('name'));
        $('#familly').val($(this).data('familly'));
        $('#route').val($(this).data('route'));
        $('#atc').val($(this).data('atc'));
        $('#myModal-drugEdit').modal('show');


    });
    $(document).on('click', '.edit-modal-temporary', function()
    {
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-outline-secondary');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Modification temporaire');
        $('.form-horizontal').show();
        $('#tid').val($(this).data('id'));
        $('.title').text($(this).data('title'));
        $('#title').val($(this).data('new'));
        $('#original').val($(this).data('original'));
        $('#temporary').val($(this).data('temporary'));
        $('#myModal-quickEdit-temporary').modal('show');
        $('#fid').val($(this).data('id'));
        console.log($('#tid').val());


    });

    $('.modal-footer').on('click', '#editdrug', function()
    {
        $('#edit').hide();
        $('i#icon-edit-t').show();
        //console.log($('.title').text())
        let url = $('#quick-edit-url').val();
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#fid").val(),
                'name': $('#name').val(),
                'familly': $('#familly').val(),
                'route': $('#route').val(),
                'atc': $('#atc').val(),
                'temporary': $('#temporary').val(),
            },
            success: function(data)
            {
                //console.log($('#fid').val());
                document.location.reload(true);
            },
            error: function (error) {
                console.log("error")
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

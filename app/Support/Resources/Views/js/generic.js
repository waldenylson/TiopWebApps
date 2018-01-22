$(document).ready(function()
{
    $('.fancybox').fancybox(
        {
            'overlayShow'     : true,
            'autoScale'       : true,
            'autoDimensions'  : false,
            'modal'           : true,
            'type'            : 'iframe',
            'autoSize'        : true,
            'width'           : '90%',
            'showCloseButton' : true,
            afterShow         : function()
            {
                $('.fancybox-skin').append('<a title="Fechar" class="fancybox-item fancybox-close" id="teste" onclick="$.fancybox.close();"></a>');
            }
        });

    $('.datepicker').datetimepicker({ 'format': 'L' });

    $('.masked-date-input').mask('00/00/0000', {placeholder: '__/__/____'});
    $('.masked-time-input').mask('00:00', {placeholder: 'HH:MM'});

    $("a.btn-remover").click(function(e)
    {
        e.preventDefault();
        var link = $(this).attr('href');

        swal(
            {
                title: "Deseja Mesmo Remover o Registro?",
                text: "Esta operação não poderá ser desfeita!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Sim, Remova-o!",
                cancelButtonText: "Cancelar",
                closeOnConfirm: false
            },
            function(isConfirm)
            {
                if (isConfirm)
                {
                    window.location = link;
                }
            });
    });

    $("a.btn-finalizar").click(function(e)
    {
        e.preventDefault();
        var link = $(this).attr('href');

        swal(
            {
                title: "Deseja Mesmo Finalizar?",
                text: "Esta operação não poderá ser desfeita!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Sim, Finalize!",
                cancelButtonText: "Cancelar",
                closeOnConfirm: false
            },
            function(isConfirm)
            {
                if (isConfirm)
                {
                    window.location = link;
                }
            });
    });

    $("#btn-cancelar").click(function()
    {
        parent.$.fancybox.close();
    });

    CKEDITOR.config.height = 80;
    CKEDITOR.replaceAll();
});

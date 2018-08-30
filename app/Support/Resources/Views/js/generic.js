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

        swal({
            title: "Deseja Mesmo Remover o Registro?",
            text: "Esta operação não poderá ser desfeita!",
            icon: "warning",
            buttons: ["Cancelar", "Sim, Remova-o!"],
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                window.location = link;
            }});
    });

    $("#btn-cancelar").click(function()
    {
        parent.$.fancybox.close();
    });
});

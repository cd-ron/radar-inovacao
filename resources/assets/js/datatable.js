$(function () {
    $("#dataTable").dataTable({
        "oLanguage": {
            "sProcessing":   "Processando...",
            "sLengthMenu":   "Mostrar _MENU_ registros",
            "sZeroRecords":  "Não foram encontrados resultados",
            "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
            "sInfoFiltered": "",
            "sInfoPostFix":  "",
            "sSearch":       "Buscar:",
            "sUrl":          "",
            "oPaginate": {
                "sFirst":    "Primeiro",
                "sPrevious": "Anterior",
                "sNext":     "Seguinte",
                "sLast":     "Último"
            }
        },
        "columnDefs": [
            { "width": "75px", "targets": [-1]},
            { "width": "20px", "targets": [0]}
        ]

    });
});
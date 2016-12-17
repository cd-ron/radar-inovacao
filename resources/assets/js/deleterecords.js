var formConfirm = document.querySelectorAll('form[data-confirm]')

for (var i = 0; i < formConfirm.length; i++) {
    formConfirm[i].addEventListener('submit', function (e) {
        var form = $(this);
        e.preventDefault();

        swal({
            title: "Você tem certeza?",
            text: "Está ação não pode ser revertida",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Sim, tenho certeza!',
            cancelButtonText: "Não, cancele!",
            closeOnConfirm: false,
            closeOnCancel: true
        }, function (isConfirm) {
            if (isConfirm) {
                form.submit();
            }
        });
    });
}
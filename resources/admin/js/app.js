$(document).on('click','._dataTable-delete-btn',function (){
    Swal.fire({
        title: "Est-vous sûr?",
        text: "Vous ne pourrez pas revenir en arrière !",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Oui, supprimez!",
        cancelButtonText: "Non annuler!",
        buttonsStyling: false,
        customClass: {
            confirmButton: 'btn btn-light-danger mx-2', cancelButton: 'btn btn-light-secondary mx-2',
        },
        didOpen: () => {
            $('.btn').blur()
        },
        preConfirm: async () => {
            Swal.showLoading();
            try {
                const [response] = await Promise.all([new Promise((resolve, reject) => {
                    $.ajax({
                        url: $(this).data('url'), method: 'DELETE', headers: {
                            'X-CSRF-TOKEN': __csrf_token
                        }, success: resolve, error: (_, jqXHR) => reject(jqXHR)
                    });
                })]);

                return response;
            } catch (jqXHR) {
                let errorMessage = "Une erreur s'est produite lors de la demande.";
                if (jqXHR.status === 404) {
                    errorMessage = "La ressource n'a pas été trouvée.";
                }
                Swal.fire({
                    title: 'Erreur',
                    text: errorMessage,
                    icon: 'error',
                    buttonsStyling: false,
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'btn btn-light-danger mx-2',
                    },
                });

                throw jqXHR;
            }
        }
    }).then((result) => {
        if (result.isConfirmed) {
            if (result.value) {
                Swal.fire({
                    title: 'Succès',
                    text: result.value,
                    icon: 'success',
                    buttonsStyling: false,
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'btn btn-light-success mx-2',
                    },
                }).then(result => {
                    if ($('#dataTable').length > 0) {
                        $('#dataTable').DataTable().ajax.reload()
                    } else {
                        location.reload();
                    }
                });
            } else {
                Swal.fire({
                    title: 'Erreur',
                    text: "Une erreur s'est produite lors de la demande.",
                    icon: 'error',
                    buttonsStyling: false,
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'btn btn-light-danger mx-2',
                    },
                });
            }
        }
    })
})

$('.logout-btn').click(function (){
    $(this).closest('form').submit()
})

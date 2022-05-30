

function validar() {

    let nombre = $('#nombre').val();
    Swal.fire({
        title: 'Error!',
        text: 'Do you want to continue'+nombre,
        icon: 'error',
        confirmButtonText: 'Cool'
      });

}

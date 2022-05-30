
function validar() {

    let nombre = $('#nombre').val();
    let codigo = $('#codigo').val();
    let carrera = $('#carrera').val();
    let creditos = $('#creditos').val();
    let correo = $('#correo').val();
    let error = "";

    if(nombre.length == 0){
        error += "El nombre es requerido.\n";
    }
    if(nombre.length > 100){
        error += "El nombre no debe exceder 100 caracteres.\n";
    }

    if(codigo.length == 0){
        error += "El codigo es requerido.\n";
    }
    if(isNaN(codigo)){
        error += "El codigo debe de ser numerico.\n";
    }

    if(isNaN(creditos)){
        error += "Los creditos deben de ser numerico.\n";
    }

    if(codigo.length > 9){
        error += "El codigo no debe exceder 9 caracteres.\n"
    }

    if(creditos.length > 100){
        error += "El nombre no debe exceder 100 caracteres.\n";
    }

    if(correo.length > 100){
        error += "El nombre no debe exceder 100 caracteres.\n";
    }

    let emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    //Se muestra un texto a modo de ejemplo, luego va a ser un icono
    if(correo.length > 0){
        if (!emailRegex.test(correo)) {
            error += "El correo es invalido.\n";
        }
    }

    const parsed = Number.parseInt(creditos, 0);
    $('#creditos').val(parsed);

    if(error != ""){
        Swal.fire({
            title: 'Error!',
            text: error,
            icon: 'error',
            confirmButtonText: 'Cool'
          });
          return;
    }
    document.getElementById("formulario").submit();

}

/*Swal.fire({
    title: 'Error!',
    text: nombre,
    icon: 'error',
    confirmButtonText: 'Cool'
  });*/

function guardar(){
    db.collection("Usuarios").add({
        nombre: document.getElementById ("nombre").value,
        correo: document.getElementById ("email").value,
        contraseña: document.getElementById ("password").value
    })
    .then((docRef) => {
        alert ("Registro Exitoso");
    })
    .catch((error) => {
        alert ("Error en el registro");
    });
    //Holiii
}

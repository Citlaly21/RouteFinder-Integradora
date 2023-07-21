
  function registrarUsuario(event) {
    event.preventDefault() // Evita el envío del formulario

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    firebase.auth().createUserWithEmailAndPassword(email, password)
      .then(function(userCredential) {
        // Usuario registrado con éxito, puedes realizar más acciones aquí
        console.log("Usuario registrado:", userCredential.user);
      })
      .catch(function(error) {
        // Maneja los errores de registro aquí
        console.error("Error al registrar el usuario:", error);
      });
  }


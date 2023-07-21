function iniciarSesion(event) {
    event.preventDefault();
  
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
  
    console.log("Iniciando sesión con email:", email);
  
    firebase.auth().signInWithEmailAndPassword(email, password)
      .then(function(userCredential) {
        console.log("Usuario autenticado:", userCredential.user);
      })
      .catch(function(error) {
        console.error("Error al iniciar sesión:", error);
      });
  }
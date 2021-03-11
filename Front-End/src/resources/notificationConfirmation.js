function mostrarNotificacion(titulo, opciones) {

  if (!("Notification" in window)) {
    alert("This browser does not support desktop notification");
  }

  // Vamos a ver si los permisos de las notificaciones están aceptados
  else if (Notification.permission === "granted") {
    // Si está todo bien, vamos a mostrar notificaciones

    var notificacion = new Notification(titulo, opciones);

  }

  // De otra forma, deberemos pedirle permiso al usuario.
  else if (Notification.permission !== "denied") {
    Notification.requestPermission().then(function (permission) {
      // Si el usuario acepta, crearemos una notificacion
      if (permission === "granted") {

        var notificacion = new Notification(titulo, opciones);

      }
    });

  }
}

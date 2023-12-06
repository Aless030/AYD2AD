
function enviarDatos() {
  if (validarFormulario()) {
      const formData = new FormData(document.getElementById('fullForm'));

      // Realizo el envío al servidor 
      fetch('procesar_registro.php', {
          method: 'POST',
          body: formData,
      })
      .then((response) => {
          if (response.ok) {
              alert('Datos enviados correctamente');
          } else {
              alert('Error al enviar los datos');
          }
      })
      .catch((error) => {
          console.error('Error en la solicitud:', error);
      });
  } else {
      alert('Por favor, complete todos los campos antes de enviar el formulario.');
  }
}

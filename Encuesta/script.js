document.getElementById("encuestaForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const formData = new FormData(this);

    fetch("guardar_encuesta.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);
        // Puedes mostrar un mensaje de éxito o redirigir a otra página después de guardar la encuesta.
    })
    .catch(error => {
        console.error(error);
        // Manejar cualquier error que ocurra durante el proceso de envío.
    });
});

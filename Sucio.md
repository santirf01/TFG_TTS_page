 <!
         var audioSeleccionado = ""; // Variable global para almacenar el valor del audio seleccionado
        var audiosDelSpeaker = []; // Variable global para almacenar los audios del speaker seleccionado

        // Función para mostrar el speaker seleccionado
        function mostrarSeleccion() {
            var speakerSelect = document.getElementById("speakerSelect");
            var mostrarSeleccion = document.getElementById("mostrarSeleccion");
            var seleccion = speakerSelect.value;

            if (seleccion === "") {
                mostrarSeleccion.textContent = "Ningún speaker seleccionado";
            } else {
                mostrarSeleccion.textContent = "Speaker seleccionado: " + seleccion;
            }
        }
         // Función para cargar el contenido de audios.json
         function cargarAudiosJSON() {
            var speakerSelect = document.getElementById("speakerSelect");
            var seleccion = speakerSelect.value;

            if (seleccion === "") {
                // Si no se ha seleccionado ningún speaker, limpiamos el contenido de los desplegables
                var audioSelect = document.getElementById("audioSelect");
                audioSelect.innerHTML = '<option value="">Selecciona un audio</option>';

                var otroAudioSelect = document.getElementById("otroAudioSelect");
                otroAudioSelect.innerHTML = '<option value="">Selecciona otro audio</option>';

                var contenidoDiv = document.getElementById("contenidoAudiosJSON");
                contenidoDiv.innerHTML = "";

                audioSeleccionado = "";
                audiosDelSpeaker = [];
            } else {
                var url = "Thalento/Audios/" + seleccion + "/audios.json";

                // Realizar la solicitud fetch para leer el contenido de audios.json
                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        // Mostrar el contenido del archivo audios.json en el div
                        var contenidoDiv = document.getElementById("contenidoAudiosJSON");
                        contenidoDiv.innerHTML = "<pre>" + JSON.stringify(data, null, 2) + "</pre>";

                        // Almacenar los audios del speaker seleccionado en la variable audiosDelSpeaker
                        audiosDelSpeaker = data;

                        // Limpiar y cargar las opciones de los audios del speaker seleccionado en el primer desplegable
                        var audioSelect = document.getElementById("audioSelect");
                        audioSelect.innerHTML = '<option value="">Selecciona un audio</option>';
                        data.forEach(function(audio) {
                            var option = document.createElement("option");
                            option.value = audio;
                            option.textContent = audio;
                            audioSelect.appendChild(option);
                        });

                        // Limpiar el segundo desplegable
                        var otroAudioSelect = document.getElementById("otroAudioSelect");
                        otroAudioSelect.innerHTML = '<option value="">Selecciona otro audio</option>';
                    })
                    .catch(error => {
                        console.error("Error:", error);
                    });
            }
        }
        function guardarAudio() {
            var audioSelect = document.getElementById("audioSelect");
            var rutaAudio = "Thalento/Audios/" + audioSeleccionado;
            audioSeleccionado = audioSelect.value;
            console.log("Audio seleccionado:", audioSeleccionado); // Solo para mostrar el valor en la consola (puedes eliminar esta línea)
        }
    -->
</body>
</html>

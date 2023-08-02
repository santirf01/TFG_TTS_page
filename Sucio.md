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





*****
 <!--   
<head>
    <title>Tabla de Audios</title>
</head>
<body>
    <h2>Tabla de Audios</h2>
    <table>
        <tr>
            <th>Nombre Audio</th>
            <th>Audio</th>
            <th>Nombre Audio</th>
            <th>Audio</th>
            <th>Nombre Audio</th>
            <th>Audio</th>
            <th>Nombre Audio</th>
            <th>Audio</th>
        </tr>
        <tr>
            <td>TVD-D-0001-0001</td>
            <td><audio class="audio-button" style="width: 140" controls>  <source src="Thalento/Audios/TVD-D-0001/TVD-D-0001_0001.wav" type="audio/wav">
            Tu navegador no soporta la reproducción del audio TVD-D-0001-0001.</td>
            <td>TVD-D-0001-0002</td>
            <td><audio class="audio-button" style="width: 140" controls>  <source src="Thalento/Audios/TVD-D-0001/TVD-D-0001_0002.wav" type="audio/wav">
            Tu navegador no soporta la reproducción del audio TVD-D-0001-0002.</td>
            <td>TVD-D-0001-0003</td>
            <td><audio class="audio-button" style="width: 140" controls>  <source src="Thalento/Audios/TVD-D-0001/TVD-D-0001_0003.wav" type="audio/wav">
            Tu navegador no soporta la reproducción del audio TVD-D-0001-0003.</td>
            <td>TVD-D-0001-0004</td>
            <td><audio class="audio-button" style="width: 140" controls>  <source src="Thalento/Audios/TVD-D-0001/TVD-D-0001_0004.wav" type="audio/wav">
            Tu navegador no soporta la reproducción del audio TVD-D-0001-0004.</td>

        </tr>
          <tr>
              <td>TVD-D-0001-0097</td>
    <td>
      <audio class="audio-button" style="width: 140" controls>
        <source src="Thalento/Audios/TVD-D-0001/TVD-D-0001_0097.wav" type="audio/wav">
        Tu navegador no soporta la reproducción del audio TVD-D-0001-0097.
      </audio>
    </td>
    <td>TVD-D-0001-0098</td>
    <td>
      <audio class="audio-button" style="width: 140" controls>
        <source src="Thalento/Audios/TVD-D-0001/TVD-D-0001_0098.wav" type="audio/wav">
        Tu navegador no soporta la reproducción del audio TVD-D-0001-0098.
      </audio>
    </td>
    <td>TVD-D-0001-0099</td>
    <td>
      <audio class="audio-button" style="width: 140" controls>
        <source src="Thalento/Audios/TVD-D-0001/TVD-D-0001_0099.wav" type="audio/wav">
        Tu navegador no soporta la reproducción del audio TVD-D-0001-0099.
      </audio>
    </td>
    <td>TVD-D-0001-0100</td>
    <td>
      <audio class="audio-button" style="width: 140" controls>
        <source src="Thalento/Audios/TVD-D-0001/TVD-D-0001_0100.wav" type="audio/wav">
        Tu navegador no soporta la reproducción del audio TVD-D-0001-0100.
      </audio>
    </td>
  </tr>

    </table>
    </body>
-->

<!--
<head>
    <title>Encuesta de calidad</title>
</head>
<body>
    <h2>Encuesta</h2>
    <table>
         <tr>
            <th rowspan="2">Audio</th>
            <th rowspan="2">Pregunta</th>
            <th colspan="6">Respuesta</th>
        </tr>
        <tr>

            <th> 0 </th>
            <th> 1 </th>
            <th> 2 </th>
            <th> 3 </th>
            <th> 4 </th>
            <th> 5 </th>
        </tr>
        <tr>
            <td rowspan="2">
                <audio controls>
                    <source src="Albayzin/Audios/TVD-D-0002_0001.wav" type="audio/wav" autoplay="">
                    Tu navegador no soporta el elemento de audio.
                </audio>
            </td>
            <td>¿El audio suena a una voz natural? Calidad</td>
            <td> <button class="button_circ" onclick="enviarRespuesta('pregunta1', 0)"></button> </td>
            <td> <button class="button_circ" onclick="enviarRespuesta('pregunta1', 1)"></button> </td>
            <td> <button class="button_circ" onclick="enviarRespuesta('pregunta1', 2)"></button> </td>
            <td> <button class="button_circ" onclick="enviarRespuesta('pregunta1', 3)"></button> </td>
            <td> <button class="button_circ" onclick="enviarRespuesta('pregunta1', 4)"></button> </td>
            <td> <button class="button_circ" onclick="enviarRespuesta('pregunta1', 5)"></button> </td>
            </tr>
            <tr>
            <td>¿Se entiende lo que dice? Inteligibilidad</td>
            <td> <button class="button_circ" onclick="enviarRespuesta('pregunta2', 0)"></button>  </td>
            <td> <button class="button_circ" onclick="enviarRespuesta('pregunta2', 1)"></button>  </td>
            <td> <button class="button_circ" onclick="enviarRespuesta('pregunta2', 2)"></button>  </td>
            <td> <button class="button_circ" onclick="enviarRespuesta('pregunta2', 3)"></button>  </td>
            <td> <button class="button_circ" onclick="enviarRespuesta('pregunta2', 4)"></button>  </td>
            <td> <button class="button_circ" onclick="enviarRespuesta('pregunta2', 5)"></button>  </td>
        </tr>
    </table>
    
-->    

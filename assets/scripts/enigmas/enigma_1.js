/**
 * ENIGMA DAVID JS
 * Autor: David Corredera
 * Fecha: 11/12/2018
 * Revisor: 
 * Fecha: 
 */

var preguntaActual = 0;
var allowMe = true;
var timeOver = false;
var correctas = 0;
var incorrectas = 0;
var dificultat;
var comprobado = false;
var timer;

var obj = {
    "preguntas": []
}

var dificultat = parseInt(document.getElementById("dificultat").value);
var text1 = $('#correctas').text();
var text2 = $('#incorrectas').text();
var text3 = $('#preguntas').text();

function getPregunta(callback) {
    var timeleft = 15;

    timer = setInterval(function () {
        document.getElementById("timer").innerHTML = 0 + --timeleft;
        if (timeleft <= 0) {
            clearInterval(timer);
            timeOver = true;
            comprobarResultado();
        }

    }, 1000);

    document.getElementById("pregunta").innerHTML = obj.preguntas[preguntaActual].text;
}

function getRespuestas() {
    document.getElementById("1").innerHTML = obj.preguntas[preguntaActual].respuestas[0];
    document.getElementById("2").innerHTML = obj.preguntas[preguntaActual].respuestas[1];
    document.getElementById("3").innerHTML = obj.preguntas[preguntaActual].respuestas[2];
}

function comprobarResultado(i) {
    comprobado = true;

    if (allowMe == true) {
        var k, correcto;

        $("#siguiente").css("visibility", "visible");

        if (timeOver == false) {
            if (obj.preguntas[preguntaActual].correcta == obj.preguntas[preguntaActual].respuestas[i]) {

                correctas++;

                document.getElementById("pregunta" + (i + 1)).style.backgroundColor = "#28a745";
                clearInterval(timer);
            } else {
                var index, j;

                incorrectas++;

                for (j = 0; j < Object.keys(obj.preguntas).length; j++) {

                    if (obj.preguntas[preguntaActual].correcta == obj.preguntas[preguntaActual].respuestas[j]) {

                        index = j;
                    }
                }

                document.getElementById("pregunta" + (i + 1)).style.backgroundColor = "red";
                document.getElementById("pregunta" + (index + 1)).style.backgroundColor = "#28a745";
                clearInterval(timer);
            }

            allowMe = false;
        } else {
            var index, j;

            incorrectas++;

            for (j = 0; j < Object.keys(obj.preguntas).length; j++) {

                if (obj.preguntas[preguntaActual].correcta == obj.preguntas[preguntaActual].respuestas[j]) {

                    index = j;
                }
            }

            document.getElementById("pregunta" + (index + 1)).style.backgroundColor = "#28a745";
            clearInterval(timer);

            allowMe = false;
        }
    }
}

function siguientePregunta() {
    if (comprobado == true) {
        preguntaActual++;
        allowMe = true;
        timeOver = false;

        $("#siguiente").css("visibility", "hidden");

        if (preguntaActual < Object.keys(obj.preguntas).length) {

            comprobado = false;

            document.getElementById("timer").innerHTML = "15";

            resetRespuestas();
            getPregunta(getRespuestas());
        } else {
            resetRespuestas();

            $('#contenedorRespuestas').hide();
            document.getElementById("pregunta").style.display = "none";
            document.getElementById("timer").style.display = "none";
            $("#siguiente").css("visibility", "hidden");
            $('#infoPreguntas').show();
            document.getElementById("correctas").innerHTML = text1 + ": " + correctas;
            document.getElementById("incorrectas").innerHTML = text2 + ": " + incorrectas;
            document.getElementById("preguntas").innerHTML = text3 + ": " + 10;

            switch (dificultat) {
                case 1:
                    if (correctas > 4) {
                        document.getElementById("examen_correcto").style.display = "block";
                        $('#btnEnd').show();
                    } else {
                        document.getElementById("examen_incorrecto").style.display = "block";
                        $('#si').show();
                    }
                    break;

                case 2:
                    if (correctas > 4) {
                        document.getElementById("examen_correcto").style.display = "block";
                        $('#btnEnd').show();
                    } else {
                        document.getElementById("examen_incorrecto").style.display = "block";
                        $('#si').show();
                        $('#no').show();
                    }
                    break;

                case 3:
                    if (correctas > 4) {
                        document.getElementById("examen_correcto").style.display = "block";
                        $('#btnEnd').show();
                    } else {
                        document.getElementById("examen_incorrecto").style.display = "block";
                        $('#si').show();
                        $('#no').show();
                    }
                    break;

                case 4:
                    if (correctas > 8) {
                        document.getElementById("examen_correcto").style.display = "block";
                        $('#btnEnd').show();
                    } else {
                        document.getElementById("examen_incorrecto").style.display = "block";
                        $('#si').show();
                        $('#no').show();
                    }
                    break;
            }
        }
    }
}

function resetRespuestas() {
    $('.respuesta').css({
        'background-color': '#8515a4'
    });
}

function hideElements() {
    document.getElementById("si").style.display = "none";
    document.getElementById("no").style.display = "none";
    $("#siguiente").css("visibility", "hidden");
    document.getElementById("examen_correcto").style.display = "none";
    document.getElementById("examen_incorrecto").style.display = "none";
    $('#infoPreguntas').hide();
    $('#btnEnd').hide();
}

function seleccionarDificultat(index) {
    hideElements();

    var array = [];

    for (var i = 0; i < 10; i++) {
        var random = Math.floor((Math.random() * 15) + 0);

        for (var j = 0; j < array.length; j++) {
            if (array[j] == random) {

                var existe = true;

                while (existe == true) {

                    var existeArray = false;

                    random = Math.floor((Math.random() * 15) + 0);

                    for (var k = 0; k < array.length; k++) {

                        if (array[k] == random) {

                            existeArray = true;
                        }
                    }

                    if (existeArray == false) {

                        existe = false;
                    }
                }
            }
        }
        array.push(random);
    }

    for (var q = 0; q < array.length; q++) {
        switch (index) {
            case 1:
                obj.preguntas[q] = facil.preguntas[array[q]]
                break;

            case 2:
                obj.preguntas[q] = medio.preguntas[array[q]]
                break;

            case 3:
                obj.preguntas[q] = dificil.preguntas[array[q]]
                break;

            case 4:
                obj.preguntas[q] = extremo.preguntas[array[q]]
                break;

            default:
                obj.preguntas[q] = facil.preguntas[array[q]]
                break;
        }
    }

    dificultat = index;

    getPregunta(getRespuestas());
}

function cambiarDificultad(index) {
    if (index == 0) {

        if (dificultat > 1) {

            dificultat--;
        }
        clearInterval(timer);
        document.getElementById("timer").innerHTML = "15";
        $('#contenedorRespuestas').show();
        document.getElementById("pregunta").style.display = "block";
        document.getElementById("timer").style.display = "block";
        document.getElementById("si").style.display = "none";
        document.getElementById("no").style.display = "none";
        document.getElementById("examen_correcto").style.display = "none";
        document.getElementById("examen_incorrecto").style.display = "none";

        obj = {
            "preguntas": []
        }

        preguntaActual = 0;
        correctas = 0;
        incorrectas = 0;
        seleccionarDificultat(dificultat);
    } else {
        clearInterval(timer);
        document.getElementById("timer").innerHTML = "15";
        $('#contenedorRespuestas').show();
        document.getElementById("pregunta").style.display = "block";
        document.getElementById("timer").style.display = "block";
        document.getElementById("si").style.display = "none";
        document.getElementById("no").style.display = "none";
        document.getElementById("examen_correcto").style.display = "none";
        document.getElementById("examen_incorrecto").style.display = "none";

        obj = {
            "preguntas": []
        }

        preguntaActual = 0;
        correctas = 0;
        incorrectas = 0;
        seleccionarDificultat(dificultat);
    }
}

function volverJugar() {
    clearInterval(timer);
    document.getElementById("timer").innerHTML = "15";
    $('#contenedorRespuestas').show();
    document.getElementById("pregunta").style.display = "block";
    document.getElementById("timer").style.display = "block";
    document.getElementById("si").style.display = "none";
    document.getElementById("no").style.display = "none";
    document.getElementById("examen_incorrecto").style.display = "none";
    document.getElementById("examen_correcto").style.display = "none";

    obj = {
        "preguntas": []
    }

    preguntaActual = 0;
    correctas = 0;
    incorrectas = 0;
    seleccionarDificultat(dificultat);
}

hideElements();
$('#btn_start').click(function(){
    $('#infoModal').modal('hide');
    seleccionarDificultat(dificultat);
});

$('#infoModal').modal({
    backdrop: 'static',
    keyboard: false,
    show: true
});
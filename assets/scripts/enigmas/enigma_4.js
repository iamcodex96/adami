var items = {
    0: 'botas.png', 1: 'casco.png', 2: 'bombona.png', 3: 'traje.png', 4: 'monopatin.png', 5: 'pelota.png',
    6: 'pistola.png', 7: 'mando.png', 8: 'raqueta.png', 9: 'libro.png', 10: 'mp3.png', 11: 'ds.png', 12: 'coche.png',
    13: 'mochila.png', 14: 'raton.png', 15: 'botella.png', 16: 'smartphone.png', 17: 'destornillador.png', 18: 'flotador.png',
    19: 'baston.png', 20: 'billetes.png', 21: 'tarjeta.png', 22: 'vela.png', 23: 'banador.png', 24: 'buceo.png',
    25: 'monopatin.png', 26: 'pelota.png', 27: 'mando.png', 28: 'raqueta.png', 29: 'libro.png', 30: 'mp3.png', 31: 'ds.png',
    32: 'coche.png', 33: 'mochila.png', 34: 'raton.png', 35: 'espacial.png', 36: 'billetes.png', 37: 'tarjeta.png', 38: 'vela.png',
    39: 'banador.png'
};
var salidos = [];
var correctos = [0, 1, 2, 3, 15, 17, 35];
var new_correctos = [];
max = 40;
var pulse = [];
var it_corr = 7;
var blocked = 1;
function randItem(items) {
    do {
        var rand = Math.floor(Math.random() * max);
    } while (salidos.indexOf(rand, 0) != -1);
    salidos.push(rand);
    var bueno = false;
    var elem = items[rand];
    delete items[rand];
    for (var i = 0; i < it_corr; i++) {
        if (correctos[i] == rand) {
            bueno = true;
        }
    }
    var elem1 = [elem, bueno];
    return elem1;
}
function start(time) {
    tiempo = time;
    blocked = 0;
    mix();
    aciertos = 0;
    document.getElementById("start").disabled = true;
    document.getElementById("start").className = "btn-outline-primary col-sm-auto mr-3 mb-2";
    timing();
}
function mix() {
    var str = '../assets/media/img/enigma_4/';
    for (var i = 0; i < max; i++) {
        var elem = randItem(items);
        //console.log(elem[0]);

        if (elem[1] == true) {
            new_correctos.push(i);
        }
        document.getElementById(i).src = str.concat(elem[0]);
    }
}
function press(item) {
    if (blocked != 1) {
        if (pulse.indexOf(item, 0) != -1) {
        }
        else {
            pulse.push(item);
            if (new_correctos.indexOf(item, 0) != -1) {
                aciertos++;
                document.getElementById("puntos").innerHTML = aciertos + "/" + it_corr;
                document.getElementById("con" + item).style.backgroundColor = "green";
                document.getElementById("con" + item).className += " border border-success";
            }
            else {
                document.getElementById("con" + item).style.backgroundColor = "red";
                document.getElementById("con" + item).className += " border border-danger";
                $("#descuento").fadeIn(1500);
                document.getElementById("descuento").innerHTML = "-8'";
                $("#descuento").fadeOut(1500);
                tiempo -= 8;
            }
            if (aciertos == it_corr) {
                $('#succes').modal();
                blocked = 1;
                //Has ganado
            }
        }
    }
}
//var tiempo=50;
function timing() {
    document.getElementById('time').innerHTML = tiempo + "'";
    if (tiempo <= 0) {
        //Mensaje de GAME OVER
        tiempo = 0;
        $('#over').modal();
        blocked = 1;
    } else if (blocked == 1) { }
    else {

        tiempo -= 1;
        setTimeout("timing()", 1000);
    }
}
/*function reload(){
    for(var i=0;i<max;i++){
        document.getElementById(i).src="../assets/media/img/logo.png";
        document.getElementById("con"+i).style.backgroundColor="none";
        document.getElementById("con"+i).className -= " border border-danger";
    }
    salidos=[];
    new_correctos=[];
    pulse=[];
    document.getElementById("start").disabled=false;
    document.getElementById("start").className = "btn-primary col-sm-auto mr-3 mb-2";
}*/
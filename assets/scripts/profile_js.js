/**
 * Autor : Justine Visitacion
 */
if(screen.width >= 900) {
    document.getElementById('sideprof').className += " sideprof col-md-4";
    document.getElementById('prof').className += " prof col-md-8";
} else {
    document.getElementById('sideprof').className += " movsideprof  col-12";
    document.getElementById('prof').className += " movprof col-12";
}

var pestContenido;
pestContenido = document.getElementsByClassName("profile-content");

for(var i = 0;i<pestContenido.length;i++){
    if(i!=0){
        pestContenido[i].style.display ="none";
    }
}

/**
 * TABS Function
 * @param {*} evento 
 * @param {*Envias el id de la div que quieres mostrar} contenido 
 */
function mostrarItem(evento,contenido) {
    var pestContenido,pestLinks;
    pestContenido = document.getElementsByClassName("profile-content");

    for(var i = 0;i<pestContenido.length;i++){
        pestContenido[i].style.display ="none";
    }

    pestLinks = document.getElementsByClassName("navperfil-group");

    for(var i = 0; i<pestLinks.length;i++){
        pestLinks[i].className= pestLinks[i].className.replace(" activado","");
    }
    
    document.getElementById(contenido).style.display ="block";
    evento.currentTarget.className +=" activado";
}

/**
 * Permite editar los inputs del perfil
 */
function editMode() {
    console.log("I WAS CLICKED");
    var isChecked = document.getElementsByClassName('editar');
    var formulario = document.getElementById('info');
    if(isChecked.checked){
        for(var i = 0;i<formulario.length;i++){
                formulario[i].setAttribute("readonly","true");
                console.log("readonly=true");
        }
    } else {
        for(var i = 0;i<formulario.length;i++) {
                formulario[i].setAttribute("readonly","false");
                console.log("readonly=false");
        }
    }
}
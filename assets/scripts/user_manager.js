function setUserCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/forms";
}

function recuperarUsuarios(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');

    for (var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function setUsuarios(_tipo, _username) {
    var user;
    var usuarios_json;
    var usuarios;
    var t = new Date();
    var _time = t.getHours() + ":" + t.getMinutes() + ":" + t.getSeconds() + " " + t.getDate() + "/" + t.getMonth() + "/" + t.getFullYear();
    
    user = {tipo: _tipo, username: _username, time: _time};
    usuarios_json = recuperarUsuarios("usuarios");
    
    if (usuarios_json != "") {
        usuarios = JSON.parse(usuarios_json);
    } else {
        usuarios = JSON.parse("[]");
    }

    usuarios.push(user);
    usuarios_json = JSON.stringify(usuarios);
    setUserCookie("usuarios", usuarios_json, 1);                
}

$('#btn_login').click(function() {
    var username = $('#inputName').val();
    setUsuarios('intento', username);
});

$('#btn_logout').click(function() {
    username;
    setUsuarios('logout', username);
});
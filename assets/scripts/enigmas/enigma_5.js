/* ############### - MAPEADOR DE TECLAS - ############### */

var tW;
var tA;
var tS;
var tD;
var disparar = false;
var restarCom = false;

$(document).keydown(function(e) {
    switch(e.which){
      case 87 : tW = true; restarCom = true;break;//up
      case 38 : tW = true; restarCom = true;break;
      
      case 65 : tA = true; restarCom = true;break;//left
      case 37 : tA = true; restarCom = true;break;

      case 83 : tS = true; restarCom = true;break;//down
      case 40 : tS = true; restarCom = true;break;

      case 68 : tD = true; restarCom = true;break;//right
      case 39 : tD = true; restarCom = true;break;

      case 32: disparar = true;

    }
  });
  
  $(document).keyup(function(e) {
    switch(e.which){
        case 87 : tW = false; restarCom = false;break;//up
        case 38 : tW = false; restarCom = false;break;
        
        case 65 : tA = false; restarCom = false;break;//left
        case 37 : tA = false; restarCom = false;break;
  
        case 83 : tS = false; restarCom = false;break;//down
        case 40 : tS = false; restarCom = false;break;
  
        case 68 : tD = false; restarCom = false;break;//right
        case 39 : tD = false; restarCom = false;break;
        
        case 32: disparar = false;
    }
    if(!tW || !tA || !tS || !tD) {
      spaceship.div.css(
        'transform','rotate(0deg)'
        );
    }
  });

/* ############### - OBJETOS - ############### */
var elemento = {
    top:0,
    left:0,
};

var meteoritos = {
    velMeteorito:0,
    arrayMeteorito:[],
    campoMeteorito:$('#meteoritos'),
    numMeteoritos:0,
    meteorito:{
        div:null,
        elemento,
    },
    crearMeteoritos:function(){
        var numRandom =Math.floor((Math.random() * 90 ) + 1);
        var sizeH = Math.floor((Math.random() * 80 )+60);
        var imgR =  Math.floor((Math.random() * 3 ));
        var imagenes = ['/assets/media/img/spacejam/meteorito.png','/assets/media/img/spacejam/meteorito1.png','/assets/media/img/spacejam/meteorito2.png']
        $('<div></div>').addClass('tipo'+this.numMeteoritos +' meteorito').appendTo(this.campoMeteorito);
        aM = $('.tipo'+this.numMeteoritos);
        aM.css({
            'left': numRandom+'%',
            'height':sizeH,
            'width':sizeH,
            'top':'-'+sizeH+'px',
            'background': 'url('+imagenes[imgR]+') no-repeat',
            'background-size': "cover",
            'animation': 'caidaMeteorito'+this.velMeteorito+'linear',
            '-webkit-animation' : 'caidaMeteorito'+this.velMeteorito+'linear',
            '-moz-animation' : 'caidaMeteorito'+this.velMeteorito+'linear'})
        this.arrayMeteorito[this.numMeteoritos] = $('.tipo'+this.numMeteoritos);
        this.numMeteoritos++;
    }
};

var game_ui = {
    moonEnd:$('#moon'),
    gameOver:$('#gameover'),
    fuelBar:$('#combustible'),
    progressBar:$('#gameprogress'),
    lifeContainer:$('#vidas'),
    shotContainer:$('#disparos'),
    crearVidas:function(numVidas){
        if(numVidas>0){
            this.gameOver.hide();
            for(var i=0;i<numVidas;i++){
                $('<div></div>').addClass('vida '+i).appendTo(game_ui.lifeContainer);
            }
        }else{
            gameManager.endGame();
            this.gameOver.show();
        }
    },
    crearDisparos:function(){
        if(spaceship.numDisparo>0){
            for(var i=0;i<spaceship.numDisparo;i++){
                $('<div></div>').addClass('disparo '+i).appendTo(game_ui.shotContainer);
            }
        }
    },
}
var spaceship = {
    div:$('#spaceship'),
    elemento,
    naveVelocidad:0,
    width:150,
    numDisparo:0,
    collision:$('#shipCollision'),
    combustible:0,
    numVidas:0,
    disparoRealizados:$('#disparosR'),
    arrayDisparos:[],
    disparoContador:0,
    setUpSpaceship:function(){
        this.elemento.top = spaceship.div.position().top;
        this.elemento.left = spaceship.div.position().left;
        game_ui.fuelBar.attr('value',this.combustible);
    },
    fuelReduction: function(){
        if(spaceship.combustible>0 && restarCom){
            spaceship.combustible--;
            game_ui.fuelBar.attr('value',spaceship.combustible);
        }else if(spaceship.combustible<100 && !restarCom){
            spaceship.combustible+=0.5;
            game_ui.fuelBar.attr('value',spaceship.combustible);
        }
    },
    restarVidas:function(){
        if(spaceship.numVidas>0){
            spaceship.numVidas--;
            game_ui.lifeContainer.empty();
            game_ui.crearVidas(spaceship.numVidas);
        }
    },
    restarDisparos:function(){
        if(spaceship.numDisparo>0){
            spaceship.numDisparo--;
            game_ui.shotContainer.empty();
            game_ui.crearVidas(spaceship.numDisparo);
        }
    },
    crearDisparo:function(){
        if(this.numDisparo>0){
            this.numDisparo--;
            var imagen = '/assets/media/img/spacejam/cohete.png';
            var posNaveActual = spaceship.div.position();
            var leftGeneration = spaceship.width/2;
            $('<div></div>').addClass('disparoLanzado numDisp'+this.disparoContador).appendTo(this.disparoRealizados);
            var disparoL = $('.disparoLanzado');
            disparoL.css({
                'position':'absolute',
                'left': posNaveActual.left + leftGeneration+'px',
                'height':'72px',
                'width':'64px',
                'top': posNaveActual.top+'px',
                'background': 'url('+imagen+') no-repeat',
                'background-size': 'cover',
                'animation': 'disparoLanzado 2s linear',
                '-webkit-animation' : 'disparoLanzado 2s linear',
                '-moz-animation' : 'disparoLanzado 2s linear'})
            this.arrayDisparos[this.disparoContador] = $('.numDisp'+this.disparoContador);
            this.disparoContador++;
        } 
    },
};

var game_tutorial = {
    pantalla1:$('#tutorial1'),
    pantalla2:$('#tutorial2'),
    loadComienzo:function(){
        this.pantalla1.hide();
        this.pantalla2.show();
    },
    loadControles:function(){
        this.pantalla2.hide();
        this.pantalla1.show();
    },
    loadgame:function(){
        this.pantalla2.hide();
        gameManager.startGame();
        game_ui.crearVidas(spaceship.numVidas);
        game_ui.crearDisparos();
    }
}

//El controlador del juego, que contiene los set intervals
var gameManager = {
    entorno : $('#gamearea'),
    dificultad:1,
    movimiento:null,
    timeGame:0,
    timeEnd:60,
    nivel:null,
    cleanMeteoritos:null,
    gameprogress:null,
    collisionController:null,
    fuelController:null,
    misiles:null,
    setVarDificultad:function(){                    //Funcion para setear las variables
        switch(this.dificultad){
            case 1 : 
                spaceship.combustible = 99999999999;
                meteoritos.velMeteorito = ' 2.5s ';
                spaceship.numVidas =5;
                spaceship.numDisparo =3;
                spaceship.naveVelocidad = '1px';
                break;
            case 2 : 
                spaceship.combustible = 100;
                meteoritos.velMeteorito = ' 2s ';
                spaceship.numVidas =3;
                spaceship.numDisparo =3;
                spaceship.naveVelocidad = '1px';
                break;
            case 3 : 
                spaceship.combustible = 100;
                meteoritos.velMeteorito = ' 1.5s ';
                spaceship.numVidas =3;
                spaceship.numDisparo =3;
                spaceship.naveVelocidad = '1px';
                break;
            case 4 : 
                spaceship.combustible = 99999999999;
                meteoritos.velMeteorito = ' 1s ';
                spaceship.numVidas =1;
                spaceship.numDisparo =1;
                spaceship.naveVelocidad = '2px';
                break;
            default: 
                spaceship.combustible = 100;
                meteoritos.velMeteorito = ' 1.5s ';
                spaceship.numVidas =3;
                spaceship.numDisparo =3;
                spaceship.naveVelocidad = '1px';
                break;
        }
    },
    endGame: function(){
        clearInterval(this.nivel);
        clearInterval(this.movimiento);
        clearInterval(this.gameprogress);
        clearInterval(this.collisionController);
        clearInterval(this.fuelController);
        clearInterval(this.misiles);
    },
    keepGoing:function(){                           //Funcion de movimiento
        if(spaceship.combustible>0){
            if(tW){
                if(spaceship.div.position().top>0){
                    spaceship.div.css({
                        'top':'-='+spaceship.naveVelocidad
                    })
                }
            }
            if(tA){
                if(spaceship.div.position().left>-33){
                    spaceship.div.css({
                        'left':'-='+spaceship.naveVelocidad,
                        'transform':'rotate(-20deg)'
                    })
                }
            }
            if(tS){
                if(spaceship.div.position().top<640){
                    spaceship.div.css({
                        'top':'+='+spaceship.naveVelocidad
                    })
                }
            }
            if(tD){
                if(spaceship.div.position().left<870){
                    spaceship.div.css({
                        'left':'+='+spaceship.naveVelocidad,
                        'transform':'rotate(20deg)'
                    })
                }
            } 
        }
    },
    borrarMeteoritos:function(){                    //Funcion de borrar
        meteoritos.campoMeteorito.empty();
        meteoritos.numMeteoritos = 0;
        clearTimeout(this.cleanMeteoritos);
    },
    gameLevel: function(){                          //Funcion para getionar los meteoritos
        if(meteoritos.numMeteoritos<40) {
            meteoritos.crearMeteoritos();
        } else {
            this.cleanMeteoritos = setTimeout(gameManager.borrarMeteoritos,3000);
        }
    },
    gameProgression: function(){                    //Controlador para la victoria
        if(gameManager.timeGame<gameManager.timeEnd){
            gameManager.timeGame+=0.1;
            game_ui.progressBar.attr('value',gameManager.timeGame);
            game_ui.moonEnd.hide();
        }else{
            gameManager.endGame();
            game_ui.moonEnd.show();
        }
        if(disparar){
            
            spaceship.crearDisparo();
            game_ui.shotContainer.empty();
            game_ui.crearDisparos();
        }
    },
    getPosicion:function(elemento){                 //Recupera los vertices del div que los contiene
            if(elemento[0].className.indexOf('disparoLanzado')>=0){
                var x = elemento.position().left;
                var width = elemento.width();
                var height = elemento.height();
                var y = elemento.position().top;
            }else if(elemento[0].id == "shipCollision"){
                var x = spaceship.div.position().left+elemento.position().left;
                var width = elemento.width();
                var height = elemento.height();
                var y = spaceship.div.position().top+elemento.position().top;
            }else{
                var x = elemento.position().left;
                var width = elemento.width();
                var height = elemento.height();
                var y = elemento.position().top;
            }
        return [[x,x+width],[y,y+height]];
    },
    checkCollision:function(spaceship,meteorito){   //Comprueba si la nave i el meteorito enviado estan collisionando
        var chocado = false;
        if (spaceship[0][0] < meteorito[0][1] &&
            spaceship[0][1] > meteorito[0][0] &&
            spaceship[1][0] < meteorito[1][1] &&
            spaceship[1][1] > meteorito[1][0]) {
                chocado = true;
        }
        return chocado;
    },
    collisionObjetos:function(){                    //Deteccion de colisiones entre nave y meteoritos    
        var shipPosition = gameManager.getPosicion(spaceship.collision);
        var conMeteoritos = meteoritos.arrayMeteorito;
        try{
            for(var i=0;i<conMeteoritos.length;i++){
                var meteoritoPosition = gameManager.getPosicion(conMeteoritos[i]);
                var colisionado = gameManager.checkCollision(shipPosition,meteoritoPosition);
                if(colisionado){
                    spaceship.restarVidas();
                    conMeteoritos[i].remove();
                }
            }
        }catch(e){

        }
       
    },
    collisionMisiles:function(){           //Deteccion de colisiones entre los meteoritos y meteoritos    
        var misPosition;
        var conMeteoritos;
        var aDisparos =spaceship.arrayDisparos;
        try{
            if(aDisparos.length>0){
                for(var j = 0;aDisparos.length;j++){
                        misPosition = gameManager.getPosicion(aDisparos[j]);
                    conMeteoritos = meteoritos.arrayMeteorito;
                    for(var i=0;i<conMeteoritos.length;i++){
                        var meteoritoPosition = gameManager.getPosicion(conMeteoritos[i]);
                        var colisionado = gameManager.checkCollision(misPosition,meteoritoPosition);
                        if(colisionado){
                            conMeteoritos[i].remove();
                            spaceship.arrayDisparos[j].remove();
                            clearInterval(this.misiles);
                        }
                    }
                }
            }
        }catch(err){

        }
        
    },
    restartGame:function(){                         //Recargar la pagina
        location.reload();
    },
    startGame:function(){                 //Funcion que empezar
        this.setVarDificultad();
        spaceship.setUpSpaceship();
        this.movimiento = setInterval(this.keepGoing,1);
        this.nivel = setInterval(this.gameLevel,500);
        this.gameprogress = setInterval(this.gameProgression,100);
        this.collisionController = setInterval(this.collisionObjetos,100);
        this.fuelController = setInterval(spaceship.fuelReduction,50);
        this.misiles = setInterval(this.collisionMisiles,100);
    },
}


/* ############### - GAMEPLAY - ############### */
game_ui.moonEnd.hide();
game_ui.gameOver.hide();
game_tutorial.pantalla1.hide();
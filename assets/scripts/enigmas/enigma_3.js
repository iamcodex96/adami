var riddle = {
    gameStarted: false,
    steps: 0,
    time: 0,
    helpTime: 0,
    height: 0,
    userDiff: 0,
    dificulty: 0,
    startGame: function() {
        $('#game-info').show();
        $('#original_photo').show();
        riddle.height = $('#original_photo').height() + 2;
        $('#original_photo').hide();
        riddle.setDifficulty();
        riddle.create();
        riddle.swap('#game-container li');
        riddle.steps = 0;
        riddle.updateSteps();
        riddle.gameStarted = true;
        riddle.time = 0;
        riddle.timer();
    },
    endGame: function() {
        riddle.gameStarted = false;
        $('#original_photo').show();
        $('#game-container').empty();
        $('#game-container').removeClass('mt-3');
    },
    setDifficulty: function(){
        switch(riddle.userDiff) {
            case 1:
                riddle.helpTime = 60;
                riddle.dificulty = 3;
                break;
            case 2:
                riddle.helpTime = 120;
                riddle.dificulty = 4;
                break;
            case 3:
                riddle.helpTime = 180;
                riddle.dificulty = 6;
                break;
            case 4:
                riddle.helpTime = 3600;
                riddle.dificulty = 6;
                break;
        }
    },
    create: function() {
        $('#game-container').show();
        $('#game-container').empty();
        $('#game-container').addClass('mt-3');

        var a = riddle.dificulty;
        var numSqr = Math.pow(a, 2);
        var percentage = 100 / (a - 1);

        for (i = 0; i < numSqr; i++) {
            var xpos = (percentage * (i % a)) + '%';
            var ypos = (percentage * Math.floor(i / a)) + '%';
            
            var li = $('<li id="draggable" class="text-left big-number col-' + 12/a + '" data-value="' + (i) + '" data-xpos="' + (xpos) + '" data-ypos="' + (ypos) + '"><span class="picNum">' + i + '</span></li>').css({
                'border': 'solid 1px #18bb97',
                'background-image': 'url(/assets/media/img/nave.png)',
                'background-repeat': 'no-repeat',
                'background-position': xpos + ' ' + ypos,
                'background-size': (a * 100) + '%',
                'height': riddle.height/a,
            });
            $('#game-container').append(li);
        }
        for (var x = 0; x < 11; x++) {
            $('#game-container').randomize();
        }
    },
    swap: function(elem) {
        // JQUERY-UI Draggable API: http://api.jqueryui.com/draggable/
        $(elem).draggable({
            helper: "clone",    // Determina si es crea o no un clon de l'element a arrossegar.
            snap: '#droppable', // Determina si l'element s'ha d'ajustar als altres elements.
            snapMode: 'outer',  // Determina a quina vora s'ha d'ajustar l'element.
            scroll: false,      // Determina si es fa scroll automàticament al moure l'element.
            revert: "invalid",  // Determina si l'element ha de tornar a la seva posició original al acabar d'arrossegar.
        });
        // JQUERY-UI Draggable API: http://api.jqueryui.com/droppable/
        $(elem).droppable({
            drop: function (event, ui) {
                var $dragElem = $(ui.draggable).clone().replaceAll(this);
                $(this).replaceAll(ui.draggable);

                positionsList = $('#game-container > li').map(function (i, e) {
                    return $(e).attr('data-value');
                });

                if (riddle.puzzleChecker(positionsList)) {
                    setTimeout(riddle.endGame, 500);

                    $('#gameModal').modal({
                        backdrop: 'static',
                        keyboard: false,
                        show: true
                    });
                } else {
                    riddle.steps++;
                    riddle.updateSteps();
                }

                riddle.swap(this);
                riddle.swap($dragElem);
            }
        });
    },
    puzzleChecker: function(list) {
        for (var x = 0; x < list.length -1; x++) {
            var num = parseInt(list[x]);
            if (num != x) {
                return false;
            }
        }
        return true;
    },
    updateSteps: function() {
        $('#stepCount').text('' + riddle.steps);
    },
    timer: function() {
        if(riddle.gameStarted) {
            riddle.time += 1;
            $('#tiempo').text('' + riddle.time);

            if (riddle.time > (riddle.helpTime/2)) {
                $('#game-container').removeClass('hideNums');
            }

            setTimeout(riddle.timer, 1000);
        }
    },
    resizeImages: function(valueList, xposList, yposList) {
        $('#original_photo').show();
        riddle.height = $('#original_photo').height() + 2;
        $('#original_photo').hide();
        $('#game-container').empty();

        var a = riddle.dificulty;

        for (i = 0; i < valueList.length; i++) {
            var value = parseInt(valueList[i]);
            var xpos = xposList[i];
            var ypos = yposList[i];

            var li = $('<li id="draggable" class="text-left big-number col-' + 12/a + '" data-value="' + (value) + '" data-xpos="' + (xpos) + '" data-ypos="' + (ypos) + '"><span class="picNum">' + value + '</span></li>').css({
                'border': 'solid 1px #18bb97',
                'background-image': 'url(/assets/media/img/nave.png)',
                'background-repeat': 'no-repeat',
                'background-position': xpos + ' ' + ypos,
                'background-size': (a * 100) + '%',
                'height': riddle.height/a,
            });
            $('#game-container').append(li);
        }
        riddle.swap('#game-container li');
    }
}

/**
 * Funció per ordenar de manera aleatòria els elements d'una llista.
 * Math.random retorna un número entre 0 i 1. En restar-li 0.5, queda un valor entre -0.5 i 0.5.
 * Si el valor és negatiu, a anirà abans que b.
 * Si el valor és positiu, b anirà abans que a.
 * Trobat a: https://stackoverflow.com/questions/14555415/how-to-randomly-sort-list-items 
 */
$.fn.randomize = function (selector) {
    var $elements = selector ? $(this).find(selector) : $(this).children(),
        $parents = $elements.parent();

    $parents.each(function () {
        $(this).children(selector).sort(function () {
            return Math.round(Math.random()) - 0.5;
        }).remove().appendTo(this);
    });
    return this;
};

$('#start_btn').click(function() {
    $('#start_btn').hide();
    $('#info_btn').hide();
    riddle.startGame();
});
$('#btn_play_again').click(function() {
    $('#gameModal').modal('hide');
    riddle.startGame();
});
$('#game-info').hide();

$('#infoModal').modal({
    backdrop: 'static',
    keyboard: false,
    show: true
});

$("#btn_start").click(function(){
    $('#infoModal').modal('hide');
});

$(window).on('orientationchange resize', function(event) {
    if (riddle.steps > 0) {
        valueList = $('#game-container > li').map(function (i, e) {
            return $(e).attr('data-value');
        });
        xposList = $('#game-container > li').map(function (i, e) {
            return $(e).attr('data-xpos');
        });
        yposList = $('#game-container > li').map(function (i, e) {
            return $(e).attr('data-ypos');
        });
        riddle.resizeImages(valueList, xposList, yposList);
    }
});
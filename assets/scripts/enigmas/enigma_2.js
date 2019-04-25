(function(){
	var Memory = {
		iniciarJoc: function(cards){
			this.$joc = $(".joc");
			this.$modal = $(".modal");
			this.$restartButton = $("button.btn");
			this.cardsArray = $.merge(cards, cards);
			this.setup();
		},
		mesclarCards: function(cardsArray){
			this.$cards = $(this.mesclar(this.cardsArray));
		},
		setup: function(){	
			this.dificultad = $('#dificultat').val();
			this.mesclarCards(this.cardsArray);
			this.temps = this.dificultat(this.dificultad);
			Memory.startTemps(this.temps);
			setTimeout(function(){
				$('#timer').show();	
			}, 1000);
			this.html = this.crearCards();
			this.$joc.html(this.html);
			this.$memoryCards = $(".card");
			this.paused = false;
			this.guess = null;
			this.binding();
		},
		binding: function(){
			this.$memoryCards.on("click", this.cardClicked);
			this.$restartButton.on("click",$.proxy(function(){location.reload();}, this));
		},
		cardClicked: function(){
			var mem = Memory;
			var $card = $(this);
			if(!mem.paused && !$card.find(".contingut").hasClass("emparellada") && !$card.find(".contingut").hasClass("seleccionada")){

				$card.find(".contingut").addClass("seleccionada");
				if(!mem.guess){
					mem.guess = $(this).attr("data-id");
				} else if(mem.guess == $(this).attr("data-id") && !$(this).hasClass("seleccionada")){
					$(".seleccionada").addClass("emparellada");
					mem.guess = null;
				} else {
					mem.guess = null;
					mem.paused = true;
					setTimeout(function(){
						$(".seleccionada").removeClass("seleccionada");
						Memory.paused = false;
					}, 600);
				}
				if($(".emparellada").length == $(".card").length){
					mem.guanya();
				}
			}
		},
		perd: function(){
			this.paused = true;
			setTimeout(function(){
				Memory.mostrarModal();
				Memory.$joc.fadeOut();
			}, 1000);
			$('#btnSiguiente').hide();
			$('#timer').hide();
			$('#info').hide();
			$("#info2").show();
		},
		guanya: function(){
			this.paused = true;
			setTimeout(function(){
				Memory.mostrarModal();
				Memory.$joc.fadeOut();
			}, 1000);
			$('#btnSiguiente').show();
			$('#timer').hide();
			$('#info2').hide();
			$("#info").show();
		},
		mostrarModal: function(){
			$('#gameModal').modal({
				backdrop: 'static',
				keyboard: false,
				show: true
			});

			//this.$modal.fadeIn("slow");
		},
		dificultat:function(dif){
			var t=30;
			switch(dif){
				case "1":
					t = 90;
					break;
				case "2":
					t= 75;
					break;
				case "3":
					t= 60;
					break;
				case "4":
					t= 45;
					break;
			}
			return t;
		},

		amagarModal: function(){
			this.$modal.hide();
		},
		reset: function(){
			this.amagarModal();
			this.mesclarCards(this.cardsArray);
			this.setup();
			this.$joc.show("slow");
		},
		startTemps: function(time){
			
			tOut = time * 1000;
			time = Memory.temps;
			var segons = $('#timer');
			clearTimeout(timeOut);
			clearInterval(interval);

			var interval=null;
			var timeOut=null;

			interval = window.setInterval(function(){
						
				segons.text(0 + --time);			
			},1000);
			timeOut = setTimeout(function(){
				clearInterval(interval);
				interval=null;
				time = null;
				Memory.perd();

				if($(".emparellada").length == $(".card").length){
					clearTimeout(timeOut);
					Memory.guanya();
					clearInterval(interval);
					time =null;
				}
			},tOut);
	
		},
		mesclar: function(array) {
			var contador = array.length, j, i;
			
			while (contador > 0) {
				i = Math.floor(Math.random() * contador);
				
				contador--;
				
				j = array[contador];
				array[contador] = array[i];
				array[i] = j;
	    	}
	    	return array;
		},
		crearCards: function(){
			var frag = '';
			this.$cards.each(function(k, v){
				frag += '<div class=" col-4 col-md-6 d-block text-center card bg-transparent" data-id="'+ v.id +'"><div class="contingut">\
				<div class="cara"><img clas="mx-auto d-block" src="'+ v.img +'"\
				alt="'+ v.name +'" /><p clas="text-white mt-auto">' + v.name + '</p></div>\
				<div class="creu"><img class="mx-auto d-block" src="/assets/media/img/logo.png"\
				alt="ADAMI" /></div></div>\
				</div>';
			});
			return frag;
		}
	};

	idioma = $("html").attr("lang");
	switch(idioma){
		case 'ca':
			var cards = [ {
				name: "Mercuri",
				img: "/assets/media/img/planetas/mercurio.png",
				id: 1,
			}, {
				name: "Venus",
				img: "/assets/media/img/planetas/venus.png",
				id: 2
			}, {
				name: "Terra",
				img: "/assets/media/img/planetas/tierra.png",
				id: 3
			}, {
				name: "Lluna",
				img: "/assets/media/img/planetas/luna.png",
				id: 4
			}, {
				name: "Mart",
				img: "/assets/media/img/planetas/marte.png",
				id: 5
			}, {
				name: "Jupiter",
				img: "/assets/media/img/planetas/jupiter.png",
				id: 6
			}, {
				name: "Saturn",
				img: "/assets/media/img/planetas/saturno.png",
				id: 7
			}, {
				name: "Urà",
				img: "/assets/media/img/planetas/urano.png",
				id: 8
			}, {
				name: "Neptú",
				img: "/assets/media/img/planetas/neptuno.png",
				id: 9
			},
			];
		break;
		case 'es':
			var cards = [ {
				name: "Mercurio",
				img: "/assets/media/img/planetas/mercurio.png",
				id: 1,
			}, {
				name: "Venus",
				img: "/assets/media/img/planetas/venus.png",
				id: 2
			}, {
				name: "Tierra",
				img: "/assets/media/img/planetas/tierra.png",
				id: 3
			}, {
				name: "Luna",
				img: "/assets/media/img/planetas/luna.png",
				id: 4
			}, {
				name: "Marte",
				img: "/assets/media/img/planetas/marte.png",
				id: 5
			}, {
				name: "Jupiter",
				img: "/assets/media/img/planetas/jupiter.png",
				id: 6
			}, {
				name: "Saturno",
				img: "/assets/media/img/planetas/saturno.png",
				id: 7
			}, {
				name: "Urano",
				img: "/assets/media/img/planetas/urano.png",
				id: 8
			}, {
				name: "Neptuno",
				img: "/assets/media/img/planetas/neptuno.png",
				id: 9
			},
			];
		break;
		case 'en':
			var cards = [ {
				name: "Mercury",
				img: "/assets/media/img/planetas/mercurio.png",
				id: 1,
			}, {
				name: "Venus",
				img: "/assets/media/img/planetas/venus.png",
				id: 2
			}, {
				name: "Earth",
				img: "/assets/media/img/planetas/tierra.png",
				id: 3
			}, {
				name: "Moon",
				img: "/assets/media/img/planetas/luna.png",
				id: 4
			}, {
				name: "Mars",
				img: "/assets/media/img/planetas/marte.png",
				id: 5
			}, {
				name: "Jupiter",
				img: "/assets/media/img/planetas/jupiter.png",
				id: 6
			}, {
				name: "Saturn",
				img: "/assets/media/img/planetas/saturno.png",
				id: 7
			}, {
				name: "Uranus",
				img: "/assets/media/img/planetas/urano.png",
				id: 8
			}, {
				name: "Neptune",
				img: "/assets/media/img/planetas/neptuno.png",
				id: 9
			},
			];
		break;
		case 'fr':
			var cards = [ {
				name: "Mercure",
				img: "/assets/media/img/planetas/mercurio.png",
				id: 1,
			}, {
				name: "Vénus",
				img: "/assets/media/img/planetas/venus.png",
				id: 2
			}, {
				name: "La terre",
				img: "/assets/media/img/planetas/tierra.png",
				id: 3
			}, {
				name: "La lune",
				img: "/assets/media/img/planetas/luna.png",
				id: 4
			}, {
				name: "Mars",
				img: "/assets/media/img/planetas/marte.png",
				id: 5
			}, {
				name: "Jupiter",
				img: "/assets/media/img/planetas/jupiter.png",
				id: 6
			}, {
				name: "Saturne",
				img: "/assets/media/img/planetas/saturno.png",
				id: 7
			}, {
				name: "Uranus",
				img: "/assets/media/img/planetas/urano.png",
				id: 8
			}, {
				name: "Neptune",
				img: "/assets/media/img/planetas/neptuno.png",
				id: 9
			},
			];
		break;
		case 'it':
			var cards = [ {
				name: "Mercurio",
				img: "/assets/media/img/planetas/mercurio.png",
				id: 1,
			}, {
				name: "Venere",
				img: "/assets/media/img/planetas/venus.png",
				id: 2
			}, {
				name: "Terra",
				img: "/assets/media/img/planetas/tierra.png",
				id: 3
			}, {
				name: "Luna",
				img: "/assets/media/img/planetas/luna.png",
				id: 4
			}, {
				name: "Marte",
				img: "/assets/media/img/planetas/marte.png",
				id: 5
			}, {
				name: "Giove",
				img: "/assets/media/img/planetas/jupiter.png",
				id: 6
			}, {
				name: "Saturno",
				img: "/assets/media/img/planetas/saturno.png",
				id: 7
			}, {
				name: "Urano",
				img: "/assets/media/img/planetas/urano.png",
				id: 8
			}, {
				name: "Nettuno",
				img: "/assets/media/img/planetas/neptuno.png",
				id: 9
			},
			];
		break;
			case 'ru':
			var cards = [ {
				name: "Меркурий",
				img: "/assets/media/img/planetas/mercurio.png",
				id: 1,
			}, {
				name: "Венера",
				img: "/assets/media/img/planetas/venus.png",
				id: 2
			}, {
				name: "Земля",
				img: "/assets/media/img/planetas/tierra.png",
				id: 3
			}, {
				name: "Луна",
				img: "/assets/media/img/planetas/luna.png",
				id: 4
			}, {
				name: "Марс",
				img: "/assets/media/img/planetas/marte.png",
				id: 5
			}, {
				name: "Юпитер",
				img: "/assets/media/img/planetas/jupiter.png",
				id: 6
			}, {
				name: "Сатурн",
				img: "/assets/media/img/planetas/saturno.png",
				id: 7
			}, {
				name: "Уран",
				img: "/assets/media/img/planetas/urano.png",
				id: 8
			}, {
				name: "Нептун",
				img: "/assets/media/img/planetas/neptuno.png",
				id: 9
			},
		];
		break;
	}
	
	$("#btn_start").click(function(){
		$('#infoModal').modal('hide');
		Memory.iniciarJoc(cards);
	});
})();
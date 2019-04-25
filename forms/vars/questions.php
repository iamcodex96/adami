<?php
    /**
     * QUESTIONS ENIGMA
     * Autor: David Corredera
     * Fecha: 11/12/2018
     * Revisor: 
     * Fecha: 
     */
    
    switch($lang) {
        case 'es':
        ?>
            <script>
                var facil = {
                    "preguntas": [
                        {"text":"¿Que forma tiene la Tierra?", "respuestas":["Esférica", "Plana", "Cuadrada"],"correcta": "Esférica"},
                        {"text":"¿La Tierra gira alrededor de...?", "respuestas":["El Sol", "La Luna", "Saturno"],"correcta": "El Sol"},
                        {"text":"¿Cuantos polos tiene la Tierra?", "respuestas":["2", "1" ,"3"],"correcta": "2"},
                        {"text":"¿La Luna gira alrededor de...?", "respuestas":["El Sol", "La Tierra", "Marte"],"correcta": "La Tierra"},
                        {"text":"¿Cual de estos cuerpos celestes es un satélite?", "respuestas":["Plutón", "La Luna", "Mercurio"],"correcta": "La Luna"},
                        {"text":"¿Quien fue el primer astronauta en pisar la Luna?", "respuestas":["Neil Armstrong", "Neil Degrasse Tyson", "Bill Nye"],"correcta": "Neil Armstrong"},
                        {"text":"¿Cuál es el planeta más grande del Sistema Solar?", "respuestas":["El Sol", "Saturno", "Júpiter"],"correcta": "Júpiter"},
                        {"text":"¿Cuál es el planeta más pequeño del Sistema Solar?", "respuestas":["Plutón", "Marte", "Mercurio"],"correcta": "Mercurio"},
                        {"text":"¿Que es Urano?", "respuestas":["Un planeta", "Un satélite", "Un sistema solar"],"correcta": "Un planeta"},
                        {"text":"¿Cual de estos cuerpos celestes no es un planeta?", "respuestas":["Plutón", "Mercurio", "Júpiter"],"correcta": "Plutón"},
                        {"text":"¿Cual es el primer planeta del Sistema Solar?", "respuestas":["Mercurio", "Venus", "La Tierra"],"correcta": "Mercurio"},
                        {"text":"¿Cuanto tarda la Tierra en dar un giro completo sobre su eje?", "respuestas":["24 horas", "30 dias", "365 dias"],"correcta": "24 horas"},
                        {"text":"¿De que está compuesto el núcleo interno de la Tierra?", "respuestas":["Magma", "Fuego", "Metales fundidos"],"correcta": "Metales fundidos"},
                        {"text":"¿La Estrella Polar...?", "respuestas":["Indica el Polo Norte", "Es la más grande de todas las estrellas", "Es la más brillante de todas las estrellas"],"correcta": "Indica el Polo Norte"},
                        {"text":"¿Cuantos satelites tiene la Tierra?", "respuestas":["1", "2", "0"],"correcta": "1"}
                    ]
                }
                var medio = {
                    "preguntas": [
                        {"text":"¿Quien fue el primer animal en ir al espacio?", "respuestas":["Macaco Sam", "Mono Baker", "Perra Laika"],"correcta": "Perra Laika"},
                        {"text":"¿Quien fue el primer hombre en ir al espacio?", "respuestas":["Neil Armstrong","Yuri Gagarin", "Alan Shepard"],"correcta": "Yuri Gagarin"},
                        {"text":"¿Quién fue la primera mujer en ir al espacio?", "respuestas":["Svetlana Savitskaya", "Sally Ride", "Valentina Tereshkova"],"correcta": "Valentina Tereshkova"},
                        {"text":"¿En que año comenzó la Carrera Espacial?", "respuestas":["1956", "1957", "1958"],"correcta": "1957"},
                        {"text":"¿En que año acabó la Carrera Espacial?", "respuestas":["1978", "1975", "1977"],"correcta": "1975"},
                        {"text":"¿Quién ganó la Carrera Espacial?", "respuestas":["Estados Unidos", "Unión Soviética", "China"],"correcta": "Estados Unidos"},
                        {"text":"¿Cuál es el satélite más grande del Sistema Solar?", "respuestas":["Ganímedes", "Europa", "La Luna"],"correcta": "Ganímedes"},
                        {"text":"¿Cuando se produce un eclipse lunar?", "respuestas":["La Luna se sitúa entre la Tierra y el Sol", "La Tierra se sitúa entre la Luna y el Sol", "El sol se sitúa entre la Tierra y la Luna"],"correcta": "La Tierra se sitúa entre la Luna y el Sol"},
                        {"text":"¿Que es la Vía Láctea?", "respuestas":["La estela que dejan los planetas al orbitar", "La galaxia en la que se encuentra el Sistema Solar", "Una constelación"],"correcta": "La galaxia en la que se encuentra el Sistema Solar"},
                        {"text":"¿Que es una supernova?", "respuestas":["Una explosión estelar", "Es un tipo de galaxia", "Un tipo de planeta"],"correcta": "Una explosión estelar"},
                        {"text":"¿Que es una nebulosa?", "respuestas":["Conjunto de planetas", "Esfera luminosa formada de metales","Masa de materia cósmica celeste formada por gases"],"correcta": "Masa de materia cósmica celeste formada por gases"},
                        {"text":"¿Que es un año luz?", "respuestas":["Distancia recorrida por la luz en un año solar", "Tiempo que tarda la luz en recorrer la distancia entre el Sol y la Tierra", "365 días"],"correcta": "Distancia recorrida por la luz en un año solar"},
                        {"text":"¿Que diferencia una estrella de un planeta?", "respuestas":["Las estrellas son más grandes que los planetas", "Las estrellas brillan con luz propia, y los planetas no", "Las estrellas son más pequeñas que los planetas"],"correcta": "Las estrellas brillan con luz propia, y los planetas no"},
                        {"text":"¿Que es un cuásar?", "respuestas":["Unos de los astros más luminosos del universo", "Una partícula atómica", "Un tipo de cometa"],"correcta": "Unos de los astros más luminosos del universo"},
                        {"text":"¿Que es cierto de los agujeros negros?", "respuestas":["La luz no puede atravesar", "Su fuerza de gravedad es muy grande", "Ambas son ciertas"],"correcta": "Ambas son ciertas"}
                    ]
                }
                var dificil = {
                    "preguntas": [
                        {"text":"¿En que año se lanzó el Apollo 13?", "respuestas":["1968", "1969", "1970"],"correcta": "1970"},
                        {"text":"¿En que año se llegó a la Luna?", "respuestas":["1968", "1969", "1967"],"correcta": "1969"},
                        {"text":"¿En que año se lanzó el primer cohete al espacio?", "respuestas":["1965", "1960", "1950"],"correcta": "1950"},
                        {"text":"¿Sabes cómo se llama y dónde se encuentra la montaña más alta del sistema solar?", "respuestas":["El Monte Olimpo, en Marte", "El Altar de Zeus, en Júpiter", "La Morada de los Titanes, en Júpiter"],"correcta": "El Monte Olimpo, en Marte",},
                        {"text":"¿Cuál es la estrella más cercana al Sistema Solar?", "respuestas":["Rigel Kentaurus", "Wolf 359", "Alpha Centauri"],"correcta": "Alpha Centauri"},
                        {"text":"¿En que siglo se inventó el primer telescopio?", "respuestas":["Siglo IX", "Siglo XII", "Siglo XVII"],"correcta": "Siglo XVII"},
                        {"text":"¿A que corresponde una Unidad Astronómica (UA)?", "respuestas":["A un año luz", "La distancia entre la Tierra y el Sol", "La distancia entre el Sol la estrella más cercana"],"correcta": "La distancia entre la Tierra y el Sol"},
                        {"text":"¿Cuál de estos cuerpos celestes no es una luna del planeta Júpiter?", "respuestas":["Ganímedes", "Calisto", "Deimos"],"correcta": "Deimos"},
                        {"text":"¿Cómo se llama el proyecto destinado a la búsqueda de vida inteligente más allá de la Tierra?", "respuestas":["Proyecto Área 51", "Proyecto SETI", "Proyecto Isaac Asimov"],"correcta": "Proyecto SETI"},
                        {"text":"¿Que sistema estelar recibe su nombre de un conocido literato universal?", "respuestas":["Sistema Cervantes", "Sistema de Ernest Hemingway", "Sistema de William Shakespeare"],"correcta": "Sistema Cervantes"},
                        {"text":"¿Cuál es la estrella mas grande conocida por el ser humano?", "respuestas":["UY Scuti", "VY Canis Majoris","Arcturus"],"correcta": "Arcturus"},
                        {"text":"¿Sabes que temperaturas se pueden llegar a alcanzar el nucleo del Sol?", "respuestas":["2.000.000 ºC", "10.000.000 ºC", "15.000.000 ºC"],"correcta": "15.000.000 ºC"},
                        {"text":"¿Que nombre recibe la región del sistema solar comprendida entre las órbitas de Marte y Júpiter?", "respuestas":["Cinturón de asteroides", "Cinturón de Kuiper", "Cinturón de Orión"],"correcta": "Cinturón de asteroides"},
                        {"text":"¿Sabes cuál es el objeto fabricado por el hombre que actualmente se encuentra más alejado de la Tierra?", "respuestas":["Sonda espacial Cassini", "Sonda espacial Voyager 1", "El Halcón Milenario"],"correcta": "Sonda espacial Voyager 1"},
                        {"text":"¿Que descubrió Copérnico?", "respuestas":["La existencia de Urano", "La teoría del heliocentrismo", "La distancia entre la Tierra y la Luna"],"correcta": "La teoría del heliocentrismo"}
                    ]
                }
                var extremo = {
                    "preguntas": [
                        {"text":"Los nombres de la mayoría de las estrellas se los debemos a los...", "respuestas":["Árabes", "Griegos", "Egipcios"],"correcta": "Árabes"},
                        {"text":"¿Cual es la temperatura de la superficie solar?", "respuestas":["2000°C", "6000°C", "50000°C"],"correcta": "6000°C"},
                        {"text":"¿La estrella Antares?", "respuestas":["Es una estrella múltiple", "Su clase espectral es K9", "Es una de las 10 estrellas más brillantes"],"correcta": "Es una estrella múltiple"},
                        {"text":"¿Cual es el planeta que gira casi tumbado?", "respuestas":["Neptuno", "Urano", "Saturno"],"correcta": "Urano"},
                        {"text":"¿Que planeta gira alrededor de su eje en el sentido de las agujas del reloj?", "respuestas":["Marte", "Mercurio", "Venus"],"correcta": "Venus"},
                        {"text":"¿Cual es la estrella que se mueve más rápido?", "respuestas":["La estrella de Barnard", "Wolf 359" ,"Alfa centauri"],"correcta": "La estrella de Barnard"},
                        {"text":"¿Que estrella alcanza una diferencia mayor de brillo entre el máximo y el mínimo?", "respuestas":["Mira", "Antares", "Algol"],"correcta": "Mira"},
                        {"text":"La Luna se aleja de la Tierra a la velocidad de:", "respuestas":["50 cm/año", "2 cm/año" ,"4 cm/año"],"correcta": "4 cm/año"},
                        {"text":"La clase espectral del Sol es:", "respuestas":["G7", "G0", "G2"],"correcta": "G2"},
                        {"text":"La galaxia más grande conocida hasta ahora es:", "respuestas":["M31", "M87", "M81"],"correcta": "M87"},
                        {"text":"¿Que estrella será la polar en el 14.000 d.C.?", "respuestas":["Alderamín", "Deneb", "Vega"],"correcta": "Vega"},
                        {"text":"¿Cual es el asteoride más grande descubierto hasta hoy?", "respuestas":["Ceres", "Vesta", "Higeia"],"correcta": "Ceres"},
                        {"text":"El primer satélite artificial fue lanzado en:", "respuestas":["1957","1962","1940"],"correcta": "1957"},
                        {"text":"Entre el día más largo del año (21 de junio) y el más corto (21 de diciembre), los días se acortan:", "respuestas":["Un minuto por la mañana y otro por la tarde", "Más despacio en los solsticios y más rápido en el equinocio", "Más rápido en los solsticios y más lento en los equinocios"],"correcta": "Más despacio en los solsticios y más rápido en el equinocio"},
                        {"text":"¿Que estrellas son muy útiles a la hora de determinar grandes distancias?", "respuestas":["Las cefeidas", "Las supernovas", "Las estrellas de neutrones"],"correcta": "Las cefeidas"}
                    ]
                }
            </script>
        <?php
            break;
        case 'en':
        ?>
            <script>
                var facil = {
                    "preguntas": [
                        {"text":"What form does the Earth has?", "respuestas":["Spherical", "Flat", "Square"],"correcta": "Spherical"},
                        {"text":"The Earth spins around of...", "respuestas":["The Sun", "The Moon", "Saturn"],"correcta": "The Sun"},
                        {"text":"How many poles has the Earth?", "respuestas":["2", "1" ,"3"],"correcta": "2"},
                        {"text":"The Moon spins around of...", "respuestas":["The Sun", "The Earth", "Saturn"],"correcta": "The Earth"},
                        {"text":"Which of these heavenly bodies is a satellite?", "respuestas":["Saturn", "The Moon", "Mercury"],"correcta": "The Moon"},
                        {"text":"Who was the first astronaut to step on the moon?", "respuestas":["Neil Armstrong", "Neil Degrasse Tyson", "Bill Nye"],"correcta": "Neil Armstrong"},
                        {"text":"What is the largest planet in the solar system?", "respuestas":["Sun", "Saturn", "Jupiter"],"correcta": "Jupiter"},
                        {"text":"What is the smallest planet in the solar system?", "respuestas":["Pluto", "Mars", "Mercury"],"correcta": "Mercury"},
                        {"text":"What is Uranus?", "respuestas":["A planet", "A satellite", "A solar system"],"correcta": "A planet"},
                        {"text":"Which of these heavenly bodies is not a planet?", "respuestas":["Pluto", "Mercury", "Jupiter"],"correcta": "Pluto"},
                        {"text":"Which is the first planet of the Solar System?", "respuestas":["Mercury", "Venus", "The Earth"],"correcta": "Mercury"},
                        {"text":"How long does the Earth take a full turn on its axis?", "respuestas":["24 hours", "30 days", "365 days"],"correcta": "24 hours"},
                        {"text":"What is the inner core of the Earth composed of?", "respuestas":["Magma", "Fire", "Molten metals"],"correcta": "Molten metals"},
                        {"text":"The Polar Star?", "respuestas":["Indicates the north pole", "Is the biggest of all the stars", "It is the smallest of all the stars"],"correcta": "Indicates the north pole"},
                        {"text":"How many satellites has the Earth?", "respuestas":["1", "2", "0"],"correcta": "1"}
                    ]
                }
                var medio = {
                    "preguntas": [
                        {"text":"Who was the first animal to visit the space?", "respuestas":["Macaco Sam", "Mono Baker", "Perra Laika"],"correcta": "Perra Laika"},
                        {"text":"Who was the first man to visit the space?", "respuestas":["Neil Armstrong","Yuri Gagarin", "Alan Shepard"],"correcta": "Yuri Gagarin"},
                        {"text":"Who was the first woman to visit the space?", "respuestas":["Svetlana Savitskaya", "Sally Ride", "Valentina Tereshkova"],"correcta": "Valentina Tereshkova"},
                        {"text":"What year did the Space Race begin?", "respuestas":["1956", "1957", "1958"],"correcta": "1957"},
                        {"text":"What year did the Space Race end?", "respuestas":["1978", "1975", "1977"],"correcta": "1975"},
                        {"text":"Who won the Space Race?", "respuestas":["United States of America", "Soviet Unior", "China"],"correcta": "United States of America"},
                        {"text":"What is the largest satellite in the Solar System?", "respuestas":["Ganymede", "Europe", "The Moon"],"correcta": "Ganymede"},
                        {"text":"When a lunar eclipse occurs?", "respuestas":["The Moon is between the Earth and the Sun", "The Earth is between the Moon and the Sun", "The Sun is between the Earth and the Moon"],"correcta": "The Earth is between the Moon and the Sun"},
                        {"text":"What is the Milky Way?", "respuestas":["The wake that the planets leave when they orbit", "The galaxy in which the Solar System is located", "A constellation"],"correcta": "The galaxy in which the Solar System is located"},
                        {"text":"What is a supernova?", "respuestas":["A stellar explosion", "It's a kind of galaxy", "A type of planet"],"correcta": "A stellar explosion"},
                        {"text":"What is a nebula?", "respuestas":["Set of planets", "Luminous sphere formed of metals", "Mass of cosmic celestial matter formed by gases"],"correcta": "Mass of cosmic celestial matter formed by gases"},
                        {"text":"What is a light-year?", "respuestas":["Distance traveled by light in a solar year", "Time it takes for light to travel the distance between the Sun and the Earth", "365 days"],"correcta": "Distance traveled by light in a solar year"},
                        {"text":"What differentiates a star from a planet?", "respuestas":["The stars are bigger than the planets", "The stars shine with their own light, and the planets do not", "The stars are smaller than the planets"],"correcta": "The stars shine with their own light, and the planets do not"},
                        {"text":"What is a quasar?", "respuestas":["One of the most luminous stars in the universe", "An atomic particle", "A type of comet"],"correcta": "One of the most luminous stars in the universe"},
                        {"text":"What is true of black holes?", "respuestas":["Light can not go through", "Its gravity is very large", "Both are true"],"correcta": "Both are true"}
                    ]
                }
                var dificil = {
                    "preguntas": [        
                        {"text":"In what year was Apollo 13 released?", "respuestas":["1968", "1969", "1970"],"correcta": "1970"},
                        {"text":"In what year did you get to the Moon?", "respuestas":["1968", "1969", "1967"],"correcta": "1969"},
                        {"text":"In what year was the first rocket launched into space?", "respuestas":["1965", "1960", "1950"],"correcta": "1950"},
                        {"text":"Do you know what it is called and where is the highest mountain in the solar system?", "respuestas":["Mount Olympus, on Mars", "The Altar of Zeus, on Jupiter", "The Abode of the Titans, on Jupiter"],"correcta": "Mount Olympus, on Mars"},
                        {"text":"What is the closest star to the Solar System?", "respuestas":["Rigel Kentaurus", "Wolf 359", "Alpha Centauri"],"correcta": "Alpha Centauri"},
                        {"text":"In what century was the first telescope invented?", "respuestas":["IX century", "XIII century", "XVII century"],"correcta": "XVII century"},
                        {"text":"To what corresponds an Astronomical Unit (AU)?", "respuestas":["To a light year", "The distance between the Earth and the Sun", "The distance between the Sun the star closest"],"correcta": "The distance between the Earth and the Sun"},
                        {"text":"Which of these celestial bodies is not a moon of the planet Júpiter?", "respuestas":["Ganymede", "Callisto", "Deimos"],"correcta": "Deimos"},
                        {"text":"What is the name of the project for the search for intelligent life beyond Earth?", "respuestas":["Project Area 51", "SETI Project", "Project Isaac Asimov"],"correcta": "SETI Project"},
                        {"text":"Which star system gets its name from a well-known universal writer?", "respuestas":["Cervantes System", "Ernest Hemingway System", "William Shakespeare System"],"correcta": "Cervantes System"},
                        {"text":"What is the largest star known to man?", "respuestas":["UY Scuti", "VY Canis Majoris", "Arcturus"],"correcta": "Arcturus"},
                        {"text":"Do you know what temperatures can reach the core of the Sun?", "respuestas":["2,000,000 ºC", "10,000,000 ºC", "15,000,000 ºC"],"correcta": "15,000,000 ºC"},
                        {"text":"What name does the region of the solar system receive between the orbits of Mars and Júpiter?", "respuestas":["Asteroid Belt", "Kuiper Belt", "Orion Belt"],"correcta": "Asteroid Belt"},
                        {"text":"Do you know which object is manufactured by man that is currently farthest from Earth?", "respuestas":["Cassini space probe", "Voyager 1 space probe", "The Millennium Falcon"],"correcta": "Voyager 1 space probe"},
                        {"text":"What did Copernicus discover?", "respuestas":["The existence of Uranus", "The theory of heliocentrism", "The distance between Earth and the Moon"],"correcta": "The theory of heliocentrism"}
                    ]
                }
                var extremo = {
                    "preguntas": [   
                        {"text": "The names of most stars we owe to the...", "respuestas": ["Arabs", "Greeks", "Egyptians"], "correcta": "Arabs"},
                        {"text": "What is the temperature of the solar surface?", "respuestas": ["2000 C°", "6000 C°", "50000 C°"], "correcta": "6000 C°"},
                        {"text": "The star Antares?", "respuestas": ["It's a multiple star", "Its spectral class is K9", "It's one of the 10 brightest stars"], "correcta": "It's a multiple star"},
                        {"text": "What is the planet that spins almost lying down?", "respuestas": ["Neptune", "Uranus", "Saturn"], "correcta": "Uranus"},
                        {"text": "Which planet rotates around its axis in a clockwise direction?", "respuestas": ["Mars", "Mercury", "Venus"], "correcta": "Venus" },
                        {"text": "What is the fastest moving star?", "respuestas": ["The star of Barnard", "Wolf 359", "Alpha centauri"], "correcta": "The star of Barnard"},
                        {"text": "Which star achieves a greater difference in brightness between maximum and minimum?", "respuestas": ["Mira", "Antares", "Algol"], "correcta": "Mira"},
                        {"text": "The Moon moves away from Earth at the speed of:", "respuestas": ["50 cm / year", "2 cm / year", "4 cm / year"], "correcta": "4 cm / year"},
                        {"text": "The spectral class of the Sun is:", "respuestas": ["G7", "G0", "G2"],  "correcta": "G2"},
                        {"text": "The largest galaxy known so far is:", "respuestas": ["M31", "M87", "M81"], "correcta": "M87"},
                        {"text": "What star will be the polar in 14,000 AD?", "respuestas": ["Alderamín", "Deneb", "Vega"], "correcta": "Vega"},
                        {"text": "What is the largest asteoride discovered until today?", "respuestas": ["Ceres", "Vesta", "Higeia"], "correcta": "Ceres"},
                        {"text": "The first artificial satellite was launched in:", "respuestas": ["1957", "1962", "1940"], "correcta": "1957"},
                        {"text": "Between the longest day of the year (June 21) and the shortest day (December 21), the days are shortened:", "respuestas": ["One minute in the morning and one minute in the afternoon","Slower at the solstices and faster at the equinox","Faster at the solstices and slower at the equinoxes"], "correcta":"Slower at the solstices and faster at the equinox"},
                        {"text": "Which stars are very useful when determining large distances?", "respuestas": ["The Cepheids", "Supernovas", "Neutron stars"], "correcta": "The Cepheids"}
                    ]
                }
            </script>
        <?php
            break;
        case 'ca':
        ?>
            <script>
                var facil = {
                    "preguntas": [
                        {"text":"¿Quina forma té la Terra?", "respuestas":["Esfèrica", "Plana", "Quadrada"], "correcta": "Esfèrica"},
                        {"text":"La Terra gira al voltant de...?", "respuestas":["El Sol", "La Lluna", "Saturn"], "correcta": "El Sol"},
                        {"text":"Quants pols té la Terra?", "respuestas":["2", "1" ,"3"], "correcta": "2"},
                        {"text":"La Lluna gira al voltant de...?", "respuestas":["Sol", "La Terra", "Saturn"], "correcta": "La Terra"},
                        {"text":"Quin d'aquests cossos celestes és un satèl·lit?", "respuestas":["Saturn", "La Lluna", "Mercuri"], "correcta": "La Lluna"},
                        {"text":"Qui va ser el primer astronauta en trepitjar la Lluna?", "respuestas":["Neil Armstrong", "Neil Degrasse Tyson", "Bill Nye"], "correcta": "Neil Armstrong"},
                        {"text":"Quin és el planeta més gran del Sistema Solar?", "respuestas":["El Sol", "Saturn", "Júpiter"], "correcta": "Júpiter"},
                        {"text":"Quin és el planeta més petit del Sistema Solar?", "respuestas":["Plutó", "Mart", "Mercuri"], "correcta": "Mercuri"},
                        {"text":"Que és Urà?", "respuestas":["Un planeta", "Un satèl·lit", "Un sistema solar"], "correcta": "Un planeta"},
                        {"text":"Quin d'aquests cossos celestes no és un planeta?", "respuestas":["Plutó", "Mercuri", "Júpiter"], "correcta": "Plutó"},
                        {"text":"Quin és el primer planeta del Sistema Solar?", "respuestas":["Mercuri", "Venus", "La Terra"], "correcta": "Mercuri"},
                        {"text":"Quant tarda la Terra és donar un gir complet sobre el seu eix?", "respuestas":["24 hores", "30 dies", "365 dies"], "correcta": "24 hores"},
                        {"text":"De que esta compost el nucli intern de la Terra?", "respuestas":["Magma", "Foc", "Metalls fosos"], "correcta": "Metalls fosos"},
                        {"text":"La estrella Polar...?", "respuestas":["Indica el pol nord", "És la més gran de totes les estrelles", "És la més brillant de totes les estrelles"], "correcta": "Indica el pol nord"},
                        {"text":"Quants satèl·lits té la Terra?", "respuestas":["1", "2", "0"], "correcta": "1"}
                    ]
                }
                var medio = {
                    "preguntas": [
                        {"text":"Qui va ser el primer animal en anar a l'espai?", "respuestas":["Macaco Sam", "Mono Baker", "Perra Laika"], "correcta": "Perra Laika"},
                        {"text":"Qui va ser el primer home en visitar l'espai?", "respuestas":["Neil Armstrong","Yuri Gagarin", "Alan Shepard"], "correcta": "Yuri Gagarin"},
                        {"text":"Qui va ser la primera dona en visitar l'espai?", "respuestas":["Svetlana Savitskaya", "Sally Ride", "Valentina Tereshkova"], "correcta": "Valentina Tereshkova"},
                        {"text":"En quin any va començar la Carrera espacial?", "respuestas":["1956", "1957", "1958"], "correcta": "1957"},
                        {"text":"En quin any va acabar la Carrera espacial?", "respuestas":["1978", "1975", "1977"], "correcta": "1975"},
                        {"text":"Qui va guanyar la Carrera espacial?", "respuestas":["Estats Units", "Unió Soviética", "China"], "correcta": "Estats Units"},
                        {"text":"Quin és el satèl·lit més gran del Sistema Solar?", "respuestas":["Ganímedes", "Europa", "La Lluna"], "correcta": "Ganímedes"},
                        {"text":"Quan és produiex un eclipse lunar?", "respuestas":["La Lluna és situa entre la Terra i el Sol", "La Terra és situa entre la Lluna i el Sol", "El Sol és situa entre la Terra i la Lluna"], "correcta": "La Terra és situa entre la Lluna i el Sol"},
                        {"text":"que és la Vía Láctea?", "respuestas":["La estela que deixan els planetas al orbitar", "La galaxia on és troba el Sistema Solar", "Una constel·lació"], "correcta": "La galaxia on és troba el Sistema Solar"},
                        {"text":"Que és una supernova?", "respuestas":["Una explosió estelar", "és un tipus de galàxia", "Un tipus de planeta"], "correcta": "Una explosió estelar"},
                        {"text":"Que és una nebulosa?", "respuestas":["Conjunt de planetas", "esfera lluminosa formada per metalls", "Masa de materia cósmica celeste formada per gasos"], "correcta": "Masa de materia cósmica celeste formada per gasos"},
                        {"text":"que és un any llum?", "respuestas":["Distancia recorrida per la llum en un any solar", "Temps que tarda la llum en recorrer la distancia entre el Sol y la Terra", "365 dies"], "correcta": "Distancia recorrida per la llum en un any solar"},
                        {"text":"que diferència una estrella de un planeta?", "respuestas":["Les estrelles son más grans que els planetas", "Les estrelles brillen amb llum propia, y els planetas no", "Las estrellas son més petites que els planetes"], "correcta": "Les estrelles brillen amb llum propia, y els planetas no"},
                        {"text":"que és un cuásar?", "respuestas":["Un dels astrés més lluminosos del univers", "Una partícula atómica", "Un tipus de cometa"], "correcta": "Un dels astrés més lluminosos del univers"},
                        {"text":"Que és cert dels forats negres?", "respuestas":["La llum no pot atravessar", "La seva força de gravetat és molt gran", "Les dués son certes"], "correcta": "Les dués son certes"}
                    ]
                }
                var dificil = {
                    "preguntas": [
                        {"text":"En quin any és va llançar el Apollo 13?", "respuestas":["1968", "1969", "1970"], "correcta": "1970"},
                        {"text":"En quin any és va arribar a la Lluna?", "respuestas":["1968", "1969", "1967"], "correcta": "1969"},
                        {"text":"En quin any és va llançar el primer coet a l'espai?", "respuestas":["1965", "1960", "1950"], "correcta": "1950"},
                        {"text":"Saps com és diu i on és troba la montanya més gran del Sistema Solar?", "respuestas":["El Monte Olimpo, en Mart", "El Altar de Zeus, en Júpiter", "La Morada de los Titanes, en Júpiter"], "correcta": "El Monte Olimpo, en Mart",},
                        {"text":"Quina és la estrella més propera al Sistema Solar?", "respuestas":["Rigel Kentaurus", "Wolf 359", "Alpha Centauri"], "correcta": "Alpha Centauri"},
                        {"text":"En quin segle és va inventar el primer telescopi?", "respuestas":["Segle IX", "Segle XII", "Segle XVII"], "correcta": "Segle XVII"},
                        {"text":"A que correspon una Unidad Astronómica (UA)?", "respuestas":["A un any llum", "La distancia entre la Terra i el Sol", "La distancia entre el Sol i la estrella més propera"], "correcta": "La distancia entre la Terra i el Sol"},
                        {"text":"Quina d'aquests cossos celestes no és una lluna de Júpiter?", "respuestas":["Ganímedes", "Calisto", "Deimos"], "correcta": "Deimos"},
                        {"text":"Com és diu el projecte destinat a la busqueda de vida intel·ligent més enllà de la Terra?", "respuestas":["Projecte Área 51", "Projecte SETI", "Projecte Isaac Asimov"], "correcta": "Projecte SETI"},
                        {"text":"Quin sistema rep el seu nom d'un conegut literat universal?", "respuestas":["Sistema Cervantes", "Sistema de Ernest Hemingway", "Sistema de William Shakespeare"], "correcta": "Sistema Cervantes"},
                        {"text":"Quina és la estrella més gran conegruda per el esser humà?", "respuestas":["UY Scuti", "VY Canis Majoris","Arcturus"], "correcta": "Arcturus"},
                        {"text":"¿Saps quinés temperatures pot arribar el nucli del Sol?", "respuestas":["2.000.000 ºC", "10.000.000 ºC", "15.000.000 ºC"], "correcta": "15.000.000 ºC"},
                        {"text":"Quin nom rep la regio del Sistema Solar compresa entre les orbites de Mart i Júpiter ?", "respuestas":["Cinturó de asteroides", "Cinturó de Kuiper", "Cinturó de Orión"], "correcta": "Cinturó de asteroides"},
                        {"text":"Quin és el objecte fabricat per el home que actualment és troba més allunyat de la Terra?", "respuestas":["Sonda espacial Cassini", "Sonda espacial Voyager 1", "El Halcón Milenario"], "correcta": "Sonda espacial Voyager 1"},
                        {"text":"Que va descubir Copérnico?", "respuestas":["L'existencia de Urà", "La teoría del heliocentrisme", "La distancia entre la Terra y la Lluna"], "correcta": "La teoría del heliocentrisme"}
                    ]
                }
                var extremo = {
                    "preguntas": [
                        {"text":"Els noms de la majoria de estrelles els devem als:", "respuestas":["Àrabs","Grecs","Egipcis"], "correcta": "Àrabs"},
                        {"text":"Quina és la temperatura de la superficie solar?", "respuestas":["2000°C", "6000°C", "50000°C"], "correcta": "6000°C"},
                        {"text":"La estrella Antares?", "respuestas":["És una estrella múltiple", "La seva clase espectral és K9", "És una de las 10 estrelles més brillants"], "correcta": "És una estrella múltiple"},
                        {"text":"Quin és el planeta que gira gairabé tumbat?", "respuestas":["Neptú", "Urà", "Saturn"], "correcta": "Urà"},
                        {"text":"Quin planeta gira al voltant de el seu eix en el sentit de les agujes del relotge?", "respuestas":["Mart", "Mercuri", "Venus"], "correcta": "Venus"},
                        {"text":"Quina és la estrella que és mou més rapid?", "respuestas":["La estrella de Barnard", "Wolf 359" ,"Alfa centauri"], "correcta": "La estrella de Barnard"},
                        {"text":"Quina estrella arriba a una diferència major de brillante entre el maxim i el minim?", "respuestas":["Mira", "Antares", "Algol"], "correcta": "Mira"},
                        {"text":"La Lluna s'allunya de la Terra a una velocitat de:", "respuestas":["50 cm/any", "2 cm/any" ,"4 cm/any"], "correcta": "4 cm/any"},
                        {"text":"La classe espectral del Sol es:", "respuestas":["G7", "G0", "G2"], "correcta": "G2"},
                        {"text":"La galàxia més gran coneguda fins ara es:", "respuestas":["M31", "M87", "M81"], "correcta": "M87"},
                        {"text":"Quina estrella será la polar en el 14.000 d.C.?", "respuestas":["Alderamín", "Deneb", "Vega"], "correcta": "Vega"},
                        {"text":"Quin és el asteroide més gran descobert fins ara", "respuestas":["Ceres", "Vesta", "Higeia"], "correcta": "Ceres"},
                        {"text":"El primer satel·lit artificial va ser llançat en::", "respuestas":["1962","1957","1940"], "correcta": "1957"},
                        {"text":"Entre el día més llarg del any (21 de juny) y el más curt (21 de desembre), els dies és tallen:", "respuestas":["Un minut per el matí y un altre per la tarda", "Més lentament en los solsticis y más rápid en el equinoci", "Més rápid en los solsticis y més lentament en los equinocis"], "correcta": "Més lentament en los solsticis y más rápid en el equinoci"},
                        {"text":"Quinés estrelles son més utils al determinar grans distancies?", "respuestas":["Les cefeides", "Les supernovas", "Les estrellas de neutrons"], "correcta": "Les cefeides"}
                    ]
                }
            </script>
        <?php
            break;
        case 'fr':
        ?>
            <script>     
                var facil = {
                    "preguntas": [
                        {"text":"Quelle forme a la Terre?", "respuestas":["Sphérique", "Plat", "Carré"], "correcta": "Sphérique"},
                        {"text":"La Terre tourne-t-elle autour de ...?", "respuestas":["Le Soleil", "La Lune", "Saturne"], "correcta": "Le Soleil"},
                        {"text":"Combien de pôles a la Terre?", "respuestas":["2", "1" ,"3"], "correcta": "2"},
                        {"text":"Est-ce que la lune tourne autour ...?", "respuestas":["Le Soleil", "La Terre", "Mars"], "correcta": "La Terre"},
                        {"text":"Lequel de ces corps célestes est un satellite?", "respuestas":["Pluton", "La Lune", "Mercure"], "correcta": "La Lune"},
                        {"text":"Qui a été le premier astronaute à marcher sur la lune?", "respuestas":["Neil Armstrong", "Neil Degrasse Tyson", "Bill Nye"], "correcta": "Neil Armstrong"},
                        {"text":"Quelle est la plus grande planète du système solaire?", "respuestas":["Le soleil", "Saturne", "Jupiter"], "correcta": "Jupiter"},
                        {"text":"Quelle est la plus petite planète du système solaire?", "respuestas":["Pluton", "Mars", "Mercure"], "correcta": "Mercure"},
                        {"text":"Qu'est-ce que Uranus?", "respuestas":["Une planète", "Un satellite", "Un système solaire"], "correcta": "Une planète"},
                        {"text":"Lequel de ces corps célestes n'est pas une planète?", "respuestas":["Pluton", "Mercure", "Jupiter"], "correcta": "Pluton"},
                        {"text":"Quelle est la première planète du système solaire?", "respuestas":["Mercure", " Vénus", "La Terre"], "correcta": "Mercure"},
                        {"text":"Combien de temps la Terre fait-elle un tour complet sur son axe?", "respuestas":["24 heures", "30 jours", "365 jours"], "correcta": "24 heures"},
                        {"text":"De quoi est composé le noyau intérieur de la Terre?", "respuestas":["Magma", "Feu", "Métaux en fusion"], "correcta": "Métaux en fusion"},
                        {"text":"L'étoile polaire ...?", "respuestas":["Indique le pôle Nord", "C'est la plus grande des étoiles", "C'est la plus brillante des étoiles"], "correcta": "Indique le pôle nord"},
                        {"text":"Combien de satellites la Terre a-t-elle?", "respuestas":["1","2","0"], "correcta": "1"}
                    ]
                }
                var medio = {
                    "preguntas": [
                        {"text":"Quelle forme a la Terre?", "respuestas":["Sphérique", "Plat", "Carré"], "correcta": "Sphérique"},
                        {"text":"La Terre tourne-t-elle autour de ...?", "respuestas":["Le Soleil", "La Lune", "Saturne"], "correcta": "Le Soleil"},
                        {"text":"Combien de pôles a la Terre?", "respuestas":["2", "1" ,"3"], "correcta": "2"},
                        {"text":"Est-ce que la lune tourne autour ...?", "respuestas":["Le Soleil", "La Terre", "Mars"], "correcta": "La Terre"},
                        {"text":"Lequel de ces corps célestes est un satellite?", "respuestas":["Pluton", "La Lune", "Mercure"], "correcta": "La Lune"},
                        {"text":"Qui a été le premier astronaute à marcher sur la lune?", "respuestas":["Neil Armstrong", "Neil Degrasse Tyson", "Bill Nye"], "correcta": "Neil Armstrong"},
                        {"text":"Quelle est la plus grande planète du système solaire?", "respuestas":["Le soleil", "Saturne", "Jupiter"], "correcta": "Jupiter"},
                        {"text":"Quelle est la plus petite planète du système solaire?", "respuestas":["Pluton", "Mars", "Mercure"], "correcta": "Mercure"},
                        {"text":"Qu'est-ce que Uranus?", "respuestas":["Une planète", "Un satellite", "Un système solaire"], "correcta": "Une planète"},
                        {"text":"Lequel de ces corps célestes n'est pas une planète?", "respuestas":["Pluton", "Mercure", "Jupiter"], "correcta": "Pluton"},
                        {"text":"Quelle est la première planète du système solaire?", "respuestas":["Mercure", " Vénus", "La Terre"], "correcta": "Mercure"},
                        {"text":"Combien de temps la Terre fait-elle un tour complet sur son axe?", "respuestas":["24 heures", "30 jours", "365 jours"], "correcta": "24 heures"},
                        {"text":"De quoi est composé le noyau intérieur de la Terre?", "respuestas":["Magma", "Feu", "Métaux en fusion"], "correcta": "Métaux en fusion"},
                        {"text":"L'étoile polaire ...?", "respuestas":["Indique le pôle Nord", "C'est la plus grande des étoiles", "C'est la plus brillante des étoiles"], "correcta": "Indique le pôle nord"},
                        {"text":"Combien de satellites la Terre a-t-elle?", "respuestas":["1","2","0"], "correcta": "1"}
                    ]
                }
                var dificil = {
                    "preguntas": [
                        {"text":"Quelle forme a la Terre?", "respuestas":["Sphérique", "Plat", "Carré"], "correcta": "Sphérique"},
                        {"text":"La Terre tourne-t-elle autour de ...?", "respuestas":["Le Soleil", "La Lune", "Saturne"], "correcta": "Le Soleil"},
                        {"text":"Combien de pôles a la Terre?", "respuestas":["2", "1" ,"3"], "correcta": "2"},
                        {"text":"Est-ce que la lune tourne autour ...?", "respuestas":["Le Soleil", "La Terre", "Mars"], "correcta": "La Terre"},
                        {"text":"Lequel de ces corps célestes est un satellite?", "respuestas":["Pluton", "La Lune", "Mercure"], "correcta": "La Lune"},
                        {"text":"Qui a été le premier astronaute à marcher sur la lune?", "respuestas":["Neil Armstrong", "Neil Degrasse Tyson", "Bill Nye"], "correcta": "Neil Armstrong"},
                        {"text":"Quelle est la plus grande planète du système solaire?", "respuestas":["Le soleil", "Saturne", "Jupiter"], "correcta": "Jupiter"},
                        {"text":"Quelle est la plus petite planète du système solaire?", "respuestas":["Pluton", "Mars", "Mercure"], "correcta": "Mercure"},
                        {"text":"Qu'est-ce que Uranus?", "respuestas":["Une planète", "Un satellite", "Un système solaire"], "correcta": "Une planète"},
                        {"text":"Lequel de ces corps célestes n'est pas une planète?", "respuestas":["Pluton", "Mercure", "Jupiter"], "correcta": "Pluton"},
                        {"text":"Quelle est la première planète du système solaire?", "respuestas":["Mercure", " Vénus", "La Terre"], "correcta": "Mercure"},
                        {"text":"Combien de temps la Terre fait-elle un tour complet sur son axe?", "respuestas":["24 heures", "30 jours", "365 jours"], "correcta": "24 heures"},
                        {"text":"De quoi est composé le noyau intérieur de la Terre?", "respuestas":["Magma", "Feu", "Métaux en fusion"], "correcta": "Métaux en fusion"},
                        {"text":"L'étoile polaire ...?", "respuestas":["Indique le pôle Nord", "C'est la plus grande des étoiles", "C'est la plus brillante des étoiles"], "correcta": "Indique le pôle nord"},
                        {"text":"Combien de satellites la Terre a-t-elle?", "respuestas":["1","2","0"], "correcta": "1"}
                    ]
                }
                var extremo = {
                    "preguntas": [
                        {"text":"Quelle forme a la Terre?", "respuestas":["Sphérique", "Plat", "Carré"], "correcta": "Sphérique"},
                        {"text":"La Terre tourne-t-elle autour de ...?", "respuestas":["Le Soleil", "La Lune", "Saturne"], "correcta": "Le Soleil"},
                        {"text":"Combien de pôles a la Terre?", "respuestas":["2", "1" ,"3"], "correcta": "2"},
                        {"text":"Est-ce que la lune tourne autour ...?", "respuestas":["Le Soleil", "La Terre", "Mars"], "correcta": "La Terre"},
                        {"text":"Lequel de ces corps célestes est un satellite?", "respuestas":["Pluton", "La Lune", "Mercure"], "correcta": "La Lune"},
                        {"text":"Qui a été le premier astronaute à marcher sur la lune?", "respuestas":["Neil Armstrong", "Neil Degrasse Tyson", "Bill Nye"], "correcta": "Neil Armstrong"},
                        {"text":"Quelle est la plus grande planète du système solaire?", "respuestas":["Le soleil", "Saturne", "Jupiter"], "correcta": "Jupiter"},
                        {"text":"Quelle est la plus petite planète du système solaire?", "respuestas":["Pluton", "Mars", "Mercure"], "correcta": "Mercure"},
                        {"text":"Qu'est-ce que Uranus?", "respuestas":["Une planète", "Un satellite", "Un système solaire"], "correcta": "Une planète"},
                        {"text":"Lequel de ces corps célestes n'est pas une planète?", "respuestas":["Pluton", "Mercure", "Jupiter"], "correcta": "Pluton"},
                        {"text":"Quelle est la première planète du système solaire?", "respuestas":["Mercure", " Vénus", "La Terre"], "correcta": "Mercure"},
                        {"text":"Combien de temps la Terre fait-elle un tour complet sur son axe?", "respuestas":["24 heures", "30 jours", "365 jours"], "correcta": "24 heures"},
                        {"text":"De quoi est composé le noyau intérieur de la Terre?", "respuestas":["Magma", "Feu", "Métaux en fusion"], "correcta": "Métaux en fusion"},
                        {"text":"L'étoile polaire ...?", "respuestas":["Indique le pôle Nord", "C'est la plus grande des étoiles", "C'est la plus brillante des étoiles"], "correcta": "Indique le pôle nord"},
                        {"text":"Combien de satellites la Terre a-t-elle?", "respuestas":["1","2","0"], "correcta": "1"}
                    ]
                }
            </script>
        <?php
            break;
        case 'it':
        ?>
            <script>    
                var facil = {
                    "preguntas": [
                        {"text":"Qual è la forma della Terra", "respuestas":["sferica", "piatto", "piazza"],"correcta": "sferica"},
                        {"text":"La Terra gira intorno...?", "respuestas":["Il Sole", "La Luna", "Saturn"],"correcta": "Il Sole"},
                        {"text":"Quanti pali è la Terra?", "respuestas":["2", "1", "3"],"correcta": "2"},
                        {"text":"La luna ruota intorno ...?", "respuestas":["Il Sole", "La Terra", "Marte"],"correcta": "La Terra"},
                        {"text":"Quale di questi corpi celesti è un satellite?", "respuestas":["Pluto", "La Luna", "Mercurio"],"correcta": "La Luna"},
                        {"text":"Chi è stato il primo astronauta a camminare sulla Luna?", "respuestas":["Neil Armstrong", "Neil deGrasse Tyson", "Bill Nye"],"correcta": "Neil Armstrong"},
                        {"text":"Qual è il più grande pianeta del sistema solare?", "respuestas":["Il Sole", "Saturno","Giove"],"correcta": "Giove"},
                        {"text":"Qual è il più piccolo pianeta del sistema solare?", "respuestas":["Pluto", "Marte", "Mercurio"],"correcta": "Mercurio"},
                        {"text":"Cos'è Urano?", "respuestas":["Un pianeta", "Un satellite", "Un sistema solare"],"correcta": "Un pianeta"},
                        {"text":"Quale di questi corpi celesti non è un pianeta", "respuestas":["Pluto", "Mercurio", "Giove"],"correcta": "Pluto"},
                        {"text":"Qual è il primo pianeta del sistema solare?", "respuestas":["Mercurio", "Venere", "La Terra"],"correcta": "Mercurio"},
                        {"text":"Quanto tempo ci vuole la Terra per fare una rotazione completa sul proprio asse?", "respuestas":["24 ore", "30 giorni", "365 giorni"],"correcta": "24 ore"},
                        {"text":"Che cosa è fatto il nucleo interno della Terra?", "respuestas":["Magma", "Fuoco", "Metallo fuso"],"correcta": "Metallo fuso"},
                        {"text":"La Stella Polar...", "respuestas":["indica il Polo Nord", "E 'la più grande di tutte le stelle", "E' la più brillante di tutte le stelle"],"correcta": "Indica il Polo Nord"},
                        {"text":"Quanti satelliti ha la Terra?", "respuestas":["1", "2", "0"],"correcta": "1"}
                    ]
                }
                var medio = {
                    "preguntas": [
                        {"text":"Qual è la forma della Terra", "respuestas":["sferica", "piatto", "piazza"],"correcta": "sferica"},
                        {"text":"La Terra gira intorno...?", "respuestas":["Il Sole", "La Luna", "Saturn"],"correcta": "Il Sole"},
                        {"text":"Quanti pali è la Terra?", "respuestas":["2", "1", "3"],"correcta": "2"},
                        {"text":"La luna ruota intorno ...?", "respuestas":["Il Sole", "La Terra", "Marte"],"correcta": "La Terra"},
                        {"text":"Quale di questi corpi celesti è un satellite?", "respuestas":["Pluto", "La Luna", "Mercurio"],"correcta": "La Luna"},
                        {"text":"Chi è stato il primo astronauta a camminare sulla Luna?", "respuestas":["Neil Armstrong", "Neil deGrasse Tyson", "Bill Nye"],"correcta": "Neil Armstrong"},
                        {"text":"Qual è il più grande pianeta del sistema solare?", "respuestas":["Il Sole", "Saturno","Giove"],"correcta": "Giove"},
                        {"text":"Qual è il più piccolo pianeta del sistema solare?", "respuestas":["Pluto", "Marte", "Mercurio"],"correcta": "Mercurio"},
                        {"text":"Cos'è Urano?", "respuestas":["Un pianeta", "Un satellite", "Un sistema solare"],"correcta": "Un pianeta"},
                        {"text":"Quale di questi corpi celesti non è un pianeta", "respuestas":["Pluto", "Mercurio", "Giove"],"correcta": "Pluto"},
                        {"text":"Qual è il primo pianeta del sistema solare?", "respuestas":["Mercurio", "Venere", "La Terra"],"correcta": "Mercurio"},
                        {"text":"Quanto tempo ci vuole la Terra per fare una rotazione completa sul proprio asse?", "respuestas":["24 ore", "30 giorni", "365 giorni"],"correcta": "24 ore"},
                        {"text":"Che cosa è fatto il nucleo interno della Terra?", "respuestas":["Magma", "Fuoco", "Metallo fuso"],"correcta": "Metallo fuso"},
                        {"text":"La Stella Polar...", "respuestas":["indica il Polo Nord", "E 'la più grande di tutte le stelle", "E' la più brillante di tutte le stelle"],"correcta": "Indica il Polo Nord"},
                        {"text":"Quanti satelliti ha la Terra?", "respuestas":["1", "2", "0"],"correcta": "1"}
                    ]
                }
                var dificil = {
                    "preguntas": [
                        {"text":"Qual è la forma della Terra", "respuestas":["sferica", "piatto", "piazza"],"correcta": "sferica"},
                        {"text":"La Terra gira intorno...?", "respuestas":["Il Sole", "La Luna", "Saturn"],"correcta": "Il Sole"},
                        {"text":"Quanti pali è la Terra?", "respuestas":["2", "1", "3"],"correcta": "2"},
                        {"text":"La luna ruota intorno ...?", "respuestas":["Il Sole", "La Terra", "Marte"],"correcta": "La Terra"},
                        {"text":"Quale di questi corpi celesti è un satellite?", "respuestas":["Pluto", "La Luna", "Mercurio"],"correcta": "La Luna"},
                        {"text":"Chi è stato il primo astronauta a camminare sulla Luna?", "respuestas":["Neil Armstrong", "Neil deGrasse Tyson", "Bill Nye"],"correcta": "Neil Armstrong"},
                        {"text":"Qual è il più grande pianeta del sistema solare?", "respuestas":["Il Sole", "Saturno","Giove"],"correcta": "Giove"},
                        {"text":"Qual è il più piccolo pianeta del sistema solare?", "respuestas":["Pluto", "Marte", "Mercurio"],"correcta": "Mercurio"},
                        {"text":"Cos'è Urano?", "respuestas":["Un pianeta", "Un satellite", "Un sistema solare"],"correcta": "Un pianeta"},
                        {"text":"Quale di questi corpi celesti non è un pianeta", "respuestas":["Pluto", "Mercurio", "Giove"],"correcta": "Pluto"},
                        {"text":"Qual è il primo pianeta del sistema solare?", "respuestas":["Mercurio", "Venere", "La Terra"],"correcta": "Mercurio"},
                        {"text":"Quanto tempo ci vuole la Terra per fare una rotazione completa sul proprio asse?", "respuestas":["24 ore", "30 giorni", "365 giorni"],"correcta": "24 ore"},
                        {"text":"Che cosa è fatto il nucleo interno della Terra?", "respuestas":["Magma", "Fuoco", "Metallo fuso"],"correcta": "Metallo fuso"},
                        {"text":"La Stella Polar...", "respuestas":["indica il Polo Nord", "E 'la più grande di tutte le stelle", "E' la più brillante di tutte le stelle"],"correcta": "Indica il Polo Nord"},
                        {"text":"Quanti satelliti ha la Terra?", "respuestas":["1", "2", "0"],"correcta": "1"}
                    ]
                }
                var extremo = {
                    "preguntas": [
                        {"text":"Qual è la forma della Terra", "respuestas":["sferica", "piatto", "piazza"],"correcta": "sferica"},
                        {"text":"La Terra gira intorno...?", "respuestas":["Il Sole", "La Luna", "Saturn"],"correcta": "Il Sole"},
                        {"text":"Quanti pali è la Terra?", "respuestas":["2", "1", "3"],"correcta": "2"},
                        {"text":"La luna ruota intorno ...?", "respuestas":["Il Sole", "La Terra", "Marte"],"correcta": "La Terra"},
                        {"text":"Quale di questi corpi celesti è un satellite?", "respuestas":["Pluto", "La Luna", "Mercurio"],"correcta": "La Luna"},
                        {"text":"Chi è stato il primo astronauta a camminare sulla Luna?", "respuestas":["Neil Armstrong", "Neil deGrasse Tyson", "Bill Nye"],"correcta": "Neil Armstrong"},
                        {"text":"Qual è il più grande pianeta del sistema solare?", "respuestas":["Il Sole", "Saturno","Giove"],"correcta": "Giove"},
                        {"text":"Qual è il più piccolo pianeta del sistema solare?", "respuestas":["Pluto", "Marte", "Mercurio"],"correcta": "Mercurio"},
                        {"text":"Cos'è Urano?", "respuestas":["Un pianeta", "Un satellite", "Un sistema solare"],"correcta": "Un pianeta"},
                        {"text":"Quale di questi corpi celesti non è un pianeta", "respuestas":["Pluto", "Mercurio", "Giove"],"correcta": "Pluto"},
                        {"text":"Qual è il primo pianeta del sistema solare?", "respuestas":["Mercurio", "Venere", "La Terra"],"correcta": "Mercurio"},
                        {"text":"Quanto tempo ci vuole la Terra per fare una rotazione completa sul proprio asse?", "respuestas":["24 ore", "30 giorni", "365 giorni"],"correcta": "24 ore"},
                        {"text":"Che cosa è fatto il nucleo interno della Terra?", "respuestas":["Magma", "Fuoco", "Metallo fuso"],"correcta": "Metallo fuso"},
                        {"text":"La Stella Polar...", "respuestas":["indica il Polo Nord", "E 'la più grande di tutte le stelle", "E' la più brillante di tutte le stelle"],"correcta": "Indica il Polo Nord"},
                        {"text":"Quanti satelliti ha la Terra?", "respuestas":["1", "2", "0"],"correcta": "1"}
                    ]
                }
            </script>
        <?php
            break;
        case 'ru':
        ?>
            <script>     
                var facil = {
                    "preguntas": [
                        {"text":" Какую форму имеет земля?", "respuestas":[" Сферическaя ", " Плоская ", "Квадратная"], "correcta": "Сферическая"},
                        {"text":" Земля вращается вокруг ...?", "respuestas":["Солнца", "Луны", "Сатурна"], "correcta": "Солнца"},
                        {"text":"Сколько полюсов имеет Земля?", "respuestas":["2", "1" ,"3"], "correcta": "2"},
                        {"text":" Луна вращается вокруг ...?", "respuestas":["Солнца", "Земли", "Марса"], "correcta": "Земли"},
                        {"text":" Каким из этих небесных тел является спутник?", "respuestas":["Плутон", "Луна", "Меркурий"], "correcta": "Луна"},
                        {"text":" Кто был первым космонавтом который наступил на Луну?", "respuestas":[" Нил Армстронг ", " Нил Деграсс Тайсон ", " Билл Най "], "correcta": " Нил Армстронг"},
                        {"text":" Какой является самой большой планетой в Солнечной системе??", "respuestas":["Солнце", "Сатурн", "Юпитер"], "correcta": "Юпитер"},
                        {"text":" Какой является самой маленькой планетой в Солнечной системе??", "respuestas":["Плутон", "Марс", "Меркурий"], "correcta": "Меркурий"},
                        {"text":"Чем является Уран?", "respuestas":["Планетой", "Спутником", "Солнечной системой"], "correcta": "Планетой"},
                        {"text":" Каким из этих небесных тел не является планетой?", "respuestas":["Плутон", "Меркурий", "Юпитер"], "correcta": "Плутон"},
                        {"text":" Как называется первая планета в Солнечной системе??", "respuestas":["Меркурий", "Венус", "Земля"], "correcta": "Меркурий"},
                        {"text":"Сколько времени нужно Земле чтобы она полностью повернулась вокруг своей оси?", "respuestas":["24 часа", "30 дней", "365 дней"], "correcta": "24 часа"},
                        {"text":" Из чего состоит внутреннее ядро земли??", "respuestas":["Магмы", "Огня", " Расплавленных металов "], "correcta": " Расплавленных металов "},
                        {"text":" Полярная звезда указывает на ...?»", "respuestas":[" Указывает на северный полюс ", "Самая большая из звезд", " Это самая яркая из всех звезд "], "correcta": " Указывает на северный полюс "},
                        {"text":" Сколько спутников имеет Земля??", "respuestas":["1", "2", "0"], "correcta": "1"}
                    ]
                }
                var medio = {
                    "preguntas": [
                        {"text":"Кто был первым животным, отправившимся в космос?", "respuestas":["Макако Сам", "Чебурашка Бакер", "Собака Лайка"], "correcta": "Собака Лайка"},
                        {"text":" Кто был первым человеком, который отправился в космос?", "respuestas":[" Нил Армстронг "," Юрий Гагарин ", " Алан Шепард "], "correcta": " Юрий Гагарин"},
                        {"text":"Кем является первой женщиной, которая отправилась в космос?", "respuestas":["Светлана Савицкая", "Салли Райд", "Валентина Терешкова"], "correcta": " Валентина Терешкова"},
                        {"text":"В каком году началась космическая гонка?", "respuestas":["1956", "1957", "1958"], "correcta": "1957"},
                        {"text":"В каком году закончилась космическая гонка?", "respuestas":["1978", "1975", "1977"], "correcta": "1975"},
                        {"text":"Кто выиграл космическую гонку?", "respuestas":[" Соединенные Штаты ", " Советский Союз ", " Китай "], "correcta": " Соединенные Штаты"},
                        {"text":"Каким является самым большим спутником в Солнечной системе?", "respuestas":["Ганимид", "Европа", "Луна"], "correcta": "GanÌmedes"},
                        {"text":"Когда происходит лунное затмение?", "respuestas":["Когда Луна расположется между Землей и Солнцем ", "Когда Земля расположется между Луной и Солнцем ", " Когда Солнце расположается между Землей и Луной "], "correcta": " Когда Земля расположется между Луной и Солнцем "},
                        {"text":" Что такое Млечный Путь?", "respuestas":["След, который оставляют планеты, когда они вращаются ", " Галактика, в которой находится Солнечная система ", " Созвездие "], "correcta": " Галактика, в которой находится Солнечная система "},
                        {"text":" Что такое сверхновая?", "respuestas":[" Звездный взрыв ", " Это галактика ", "Это планета"], "correcta": "Звездный взрыв"},
                        {"text":" Что такое туманность?", "respuestas":[" Набор планет ", " Светящаяся сфера из металлов "," Масса небесной космической материи, образованная газами "], "correcta": " Масса небесной космической материи, образованная газами "},
                        {"text":" Что такое светлый год?", "respuestas":[" Расстояние, пройденное светом в солнечный год "," Время, которое требуется свету, чтобы пройти расстояние между Солнцем и Землей ", "365 дней"], "correcta": " Расстояние, пройденное светом в солнечный год "},
                        {"text":" Что отличает звезду от планеты?", "respuestas":[" Звезды больше планет ", " Звезды сияют своим собственным светом, а планеты - нет ", " Звезды меньше планет "], "correcta": " Звезды сияют своим собственным светом, а планеты - нет "},
                        {"text":" Что такое квазар?", "respuestas":[" Одна из самых ярких звезд во вселенной ", " Атомная частица ", " Тип кометы"], "correcta": " Одна из самых ярких звезд во вселенной"},
                        {"text":" Что обозначается верным для черных дыр из этих ответов?", "respuestas":[" Свет не может пройти между дыр", " Гравитация дыр очень велика ", " Оба ответа верны "], "correcta": " Оба ответа верны "}
                    ]
                }
                var dificil = {
                    "preguntas": [
                        {"text":"В каком году был запущен Аполлон 13?", "respuestas":["1968", "1969", "1970"], "correcta": "1970"},
                        {"text":" В каком году была достигнута луна?", "respuestas":["1968", "1969", "1967"], "correcta": "1969"},
                        {"text":" В каком году была запущена в космос первая ракета?", "respuestas":["1965", "1960", "1950"], "correcta": "1950"},
                        {"text":" Вы знаете, как называется самая высокая гора в солнечной системе и где она находится?", "respuestas":[" Гора Олимп, в Марсе", " Алтарь Зевса в Юпитере ", " Резиденция титанов в Юпитере "], "correcta": " Гора Олимп, в Марсе",},
                        {"text":" Какая звезда находится ближе всего к Солнечной системе?", "respuestas":[" Ригель Кентаурус ", " Волк 359", " Альфа Центавра "], "correcta": " Альфа Центавра "},
                        {"text":" В каком веке был изобретен первый телескоп?", "respuestas":["В IX веке", "В XII веке", "В XVII веке"], "correcta": "В XVII веке"},
                        {"text":" Где соответствует Астрономическая Единица (АС)?", "respuestas":[" Один световой год ", " На расстоянии между Землей и Солнцем ", " Расстояние между Солнцем, ближайшей звездой "], "correcta": " На расстоянии между Землей и Солнцем"},
                        {"text":"Какое из этих небесных тел не является лунной планетой Юпитера?", "respuestas":["Ганимед", "Калист", " Деймос "], "correcta": " Деймос "},
                        {"text":"Как называется проект по поиску разумной жизни за пределами Земли??", "respuestas":[" Площадь проекта 51", " Проект SETI ", " Проект Исаака Азимова "], "correcta": " Проект SETI"},
                        {"text":" Какая звездная система получила свое название от известного универсального писателя?", "respuestas":["Система Сервантес", " Система Эрнест Хемингуэй Хемингуэй", " Система Уильяма Шекспира "], "correcta": " Система Сервантес"},
                        {"text":" Какая является самой большой звездщй известная человеку?", "respuestas":["UY Scuti", "VY Canis Majoris","Arcturus"], "correcta": "Arcturus"},
                        {"text":" Вы знаете, какую температуру вы можете достичь в ядре Солнца?", "respuestas":["2.000.000 ∫C", "10.000.000 ∫C", "15.000.000 ∫C"], "correcta": "15.000.000 ∫C"},
                        {"text":" Как называется область солнечной системы между орбитами Марса и Юпитера??", "respuestas":["Пояс астероидов", " Пояс Койпера ", "Пояс Билта"], "correcta": " Пояс астероидов "},
                        {"text":" Вы знаете, что является искусственным объектом, который в настоящее время является самым дальним от Земли?", "respuestas":[" Космический зонд Кассини ", " Космический зонд Voyager 1", " Тысячелетний сокол "], "correcta": " Космический зонд Voyager 1"},
                        {"text":"Что обнаружил Коперников?", "respuestas":[" Существование Урана ", " Теория гелиоцентризма ", " Расстояние между Землей и Луной "], "correcta": " Теория гелиоцентризма"}
                    ]
                }
                var extremo = {
                    "preguntas": [
                        {"text":" Имена большинства звезд мы обязаны ...", "respuestas":[" Арабам ", " Грекам ", " Египтяням "], "correcta": "Арабам"},
                        {"text":" Какова температура солнечной поверхности?", "respuestas":["2000∞C", "6000∞C", "50000∞C"], "correcta": "6000∞C"},
                        {"text":"Что такоеЗвезда Антарес?", "respuestas":[" Это множественная звезда ", " Его спектральный класс - K9", " Это одна из 10 самых ярких звезд "], "correcta": " Это множественная звезда "},
                        {"text":" Какая планета превращается почти лежа?", "respuestas":["Нептун", "Уран", "Сатурн"], "correcta": "Уран"},
                        {"text":" Какая планета вращается вокруг своей оси по часовой стрелке?", "respuestas":["Марс", "Меркурий", "Венус"], "correcta": "Венус"},
                        {"text":" Какая звезда движется быстрее всех??", "respuestas":[" Звезда Барнарда ", "Волк 359" ," Альфа Центавра "], "correcta": " Звезда Барнарда"},
                        {"text":" Какая звезда достигает большей разницы в яркости между максимумом и минимумом?", "respuestas":["Мира", "Антарес", "Альголь"], "correcta": "Мира"},
                        {"text":" Луна удаляется от Земли со скоростью:", "respuestas":["50 см / год ", "2 см / год " ," 4 см / год "], "correcta": "4 см / год "},
                        {"text":" Спектральный класс Солнца:", "respuestas":["G7", "G0", "G2"], "correcta": "G2"},
                        {"text":" Самая большая из известных нам галактик является:", "respuestas":["M31", "M87", "M81"], "correcta": "M87"},
                        {"text":" Какая звезда будет полярной в 14000 году нашей эры?", "respuestas":["Алдермин", "Денеб", "Вега"], "correcta": "Вега"},
                        {"text":" Каким является самым большим астероидом обнаруженым до сегодняшнего дня?", "respuestas":[" Церера ", " Веста ", "Иджеия"], "correcta": "Церера"},
                        {"text":" Первый искусственный спутник был запущен в:", "respuestas":["1957","1962","1940"], "correcta": "1957"},
                        {"text":" Между самым длинным днем года (21 июня) и самым коротким (21 декабря), дни сокращаются:", "respuestas":[" Одна минута утром и другая днем ", " Медленнее в солнцестоянии и быстрее в день равноденствия ", " Быстрее в солнцестояние и медленнее в равноденствия "], "correcta": " Медленнее в солнцестоянияии быстрее в день равноденствия "},
                        {"text":" Какие звезды очень полезны при определении больших расстояний?", "respuestas":["Цефеиды ", " Сверхновые ", " Нейтронные звезды "], "correcta": "Цефеиды"}
                    ]
                }
            </script>
        <?php
            break;
        default:
        ?>
            <script>
                var facil = {
                    "preguntas": [
                        {"text":"¿Que forma tiene la tierra?", "respuestas":["Esférica", "Plana", "Cuadrada"], "correcta": "Esférica"},
                        {"text":"¿La tierra gira alrededor de...?", "respuestas":["Sol", "La Luna", "Saturno"], "correcta": "Sol"},
                        {"text":"¿Cuantos polos tiene la tierra?", "respuestas":["2", "1" ,"3"], "correcta": "2"},
                        {"text":"¿La luna gira alrededor de...?", "respuestas":["Sol", "La Tierra", "Saturno"], "correcta": "La Tierra"},
                        {"text":"¿Cual de estos cuerpos celestes es un satélite?", "respuestas":["Saturno", "La Luna", "Mercurio"], "correcta": "La Luna"},
                        {"text":"¿Quien fue el primer astronauta en pisar la luna?", "respuestas":["Neil Armstrong", "Neil Degrasse Tyson", "Bill Nye"], "correcta": "Neil Armstrong"},
                        {"text":"¿Cuál es el planeta más grande del Sistema Solar?", "respuestas":["Sol", "Saturno", "Júpiter"], "correcta": "Júpiter"},
                        {"text":"¿Cuál es el planeta más pequeño del Sistema Solar?", "respuestas":["Plutón", "Marte", "Mercurio"], "correcta": "Mercurio"},
                        {"text":"¿Que es Urano?", "respuestas":["Un planeta", "Un satélite", "Un sistema solar"], "correcta": "Un planeta"},
                        {"text":"¿Cual de estos cuerpos celestes no es un planeta?", "respuestas":["Plutón", "Mercurio", "Júpiter"], "correcta": "Plutón"},
                        {"text":"¿Cual es el primer planeta del sistema solar?", "respuestas":["Mercurio", "Venus", "La Tierra"], "correcta": "Mercurio"},
                        {"text":"¿Cuanto tarda la tierra en dar un giro completo sobre su eje?", "respuestas":["24 horas", "27 horas", "12 horas"], "correcta": "24 horas"},
                        {"text":"¿De que está compuesto el núcleo interno de la tierra?", "respuestas":["Magma", "Fuego", "Metales fundidos"], "correcta": "Metales fundidos"},
                        {"text":"¿La estrella polar...?", "respuestas":["Indica el polo norte", "Es la más grande de todas las estrellas", "Es la más brillante de todas las estrellas"], "correcta": "Indica el polo norte"},
                        {"text":"¿Cuantos satelites tiene la Tierra?", "respuestas":["1", "2", "0"], "correcta": "1"}
                    ]
                }
                var medio = {
                    "preguntas": [
                        {"text":"¿Quien fue el primer animal en ir al espacio?", "respuestas":["Macaco Sam", "Mono Baker", "Perra Laika"], "correcta": "Perra Laika"},
                        {"text":"¿Quien fue el primer hombre en ir al espacio?", "respuestas":["Neil Armstrong","Yuri Gagarin", "Alan Shepard"], "correcta": "Yuri Gagarin"},
                        {"text":"¿Quién fue la primera mujer en ir al espacio?", "respuestas":["Svetlana Savitskaya", "Sally Ride", "Valentina Tereshkova"], "correcta": "Valentina Tereshkova"},
                        {"text":"¿En que año comenzó la carrera espacial?", "respuestas":["1956", "1957", "1958"], "correcta": "1957"},
                        {"text":"¿En que año acabó la carrera espacial?", "respuestas":["1978", "1975", "1977"], "correcta": "1975"},
                        {"text":"¿Quién ganó la carrera espacial?", "respuestas":["Estados Unidos", "Unión Soviética", "China"], "correcta": "Estados Unidos"},
                        {"text":"¿Cuál es el satélite más grande del sistema Solar?", "respuestas":["Ganímedes", "Europa", "La Luna"], "correcta": "Ganímedes"},
                        {"text":"¿Cuando se produce un eclipse lunar?", "respuestas":["La Luna se sitúa entre la Tierra y el Sol", "La Tierra se sitúa entre la Luna y el Sol", "El sol se sitúa entre la Tierra y la Luna"], "correcta": "La Tierra se sitúa entre la Luna y el Sol"},
                        {"text":"¿Que es la Vía Láctea?", "respuestas":["La estela que dejan los planetas al orbitar", "La galaxia en la que se encuentra el Sistema Solar", "Una constelación"], "correcta": "La galaxia en la que se encuentra el Sistema Solar"},
                        {"text":"¿Que es una supernova?", "respuestas":["Una explosión estelar", "Es un tipo de galaxia", "Un tipo de planeta"], "correcta": "Una explosión estelar"},
                        {"text":"¿Que es una nebulosa?", "respuestas":["Conjunto de planetas", "Esfera luminosa formada de metales","Masa de materia cósmica celeste formada por gases"], "correcta": "Masa de materia cósmica celeste formada por gases"},
                        {"text":"¿Que es un año luz?", "respuestas":["Distancia recorrida por la luz en un año solar","Tiempo que tarda la luz en recorrer la distancia entre el Sol y la Tierra", "365 días"], "correcta": "Distancia recorrida por la luz en un año solar"},
                        {"text":"¿Que diferencia una estrella de un planeta?", "respuestas":["Las estrellas son más grandes que los planetas", "Las estrellas brillan con luz propia, y los planetas no", "Las estrellas son más pequeñas que los planetas"], "correcta": "Las estrellas brillan con luz propia, y los planetas no"},
                        {"text":"¿Que es un cuásar?", "respuestas":["Unos de los astros más luminosos del universo", "Una partícula atómica", "Un tipo de cometa"], "correcta": "Unos de los astros más luminosos del universo"},
                        {"text":"¿Que es cierto de los agujeros negros?", "respuestas":["La luz no puede atravesar", "Su fuerza de gravedad es muy grande", "Ambas son ciertas"], "correcta": "Ambas son ciertas"}
                    ]
                }
                var dificil = {
                    "preguntas": [
                        {"text":"¿En que año se lanzó el apollo 13?", "respuestas":["1968", "1969", "1970"], "correcta": "1970"},
                        {"text":"¿En que año se llegó a la luna?", "respuestas":["1968", "1969", "1967"], "correcta": "1969"},
                        {"text":"¿En que año se lanzó el primer cohete al espacio?", "respuestas":["1965", "1960", "1950"], "correcta": "1950"},
                        {"text":"¿Sabes cómo se llama y dónde se encuentra la montaña más alta del sistema solar?", "respuestas":["El Monte Olimpo, en Marte", "El Altar de Zeus, en Júpiter", "La Morada de los Titanes, en Júpiter"], "correcta": "El Monte Olimpo, en Marte",},
                        {"text":"¿Cuál es la estrella más cercana al sistema solar?", "respuestas":["Rigel Kentaurus", "Wolf 359", "Alpha Centauri"], "correcta": "Alpha Centauri"},
                        {"text":"¿En que siglo se inventó el primer telescopio?", "respuestas":["Siglo IX", "Siglo XII", "Siglo XVII"], "correcta": "Siglo XVII"},
                        {"text":"¿A que corresponde una Unidad Astronómica (UA)?", "respuestas":["A un año luz", "A la distancia entre la Tierra y el Sol", "La distancia entre el Sol la estrella más cercana"], "correcta": "A la distancia entre la Tierra y el Sol"},
                        {"text":"¿Cuál de estos cuerpos celestes no es una luna del planeta Júpiter?", "respuestas":["Ganímedes", "Calisto", "Deimos"], "correcta": "Deimos"},
                        {"text":"¿Cómo se llama el proyecto destinado a la búsqueda de vida inteligente más allá de la Tierra?", "respuestas":["Proyecto Área 51", "Proyecto SETI", "Proyecto Isaac Asimov"], "correcta": "Proyecto SETI"},
                        {"text":"¿Que sistema estelar recibe su nombre de un conocido literato universal?", "respuestas":["Sistema Cervantes", "Sistema de Ernest Hemingway", "Sistema de William Shakespeare"], "correcta": "Sistema Cervantes"},
                        {"text":"¿Cuál es la estrella mas grande conocida por el ser humano?", "respuestas":["UY Scuti", "VY Canis Majoris","Arcturus"], "correcta": "Arcturus"},
                        {"text":"¿Sabes que temperaturas se pueden llegar a alcanzar en el Sol?", "respuestas":["2.000.000 ºC", "10.000.000 ºC", "15.000.000 ºC"], "correcta": "15.000.000 ºC"},
                        {"text":"¿Que nombre recibe la región del sistema solar comprendida entre las órbitas de Marte y Júpiter?", "respuestas":["Cinturón de asteroides", "Cinturón de Kuiper", "Cinturón de Orión"], "correcta": "Cinturón de asteroides"},
                        {"text":"¿Sabes cuál es el objeto fabricado por el hombre que actualmente se encuentra más alejado de la Tierra?", "respuestas":["Sonda espacial Cassini", "Sonda espacial Voyager 1", "El Halcón Milenario"], "correcta": "Sonda espacial Voyager 1"},
                        {"text":"¿Que descubrió Copérnico?", "respuestas":["La existencia de Urano", "La teoría del heliocentrismo", "La distancia entre la Tierra y la Luna"], "correcta": "La teoría del heliocentrismo"}
                    ]
                }
                var extremo = {
                    "preguntas": [
                        {"text":"Los nombres de la mayoría de las estrellas se los debemos a los...", "respuestas":["Árabes", "Griegos", "Egipcios"], "correcta": "Árabes"},
                        {"text":"¿Cual es la temperatura de la superficie solar?", "respuestas":["2000°C", "6000°C", "50000°C"], "correcta": "6000°C"},
                        {"text":"¿La estrella Antares?", "respuestas":["Es una estrella múltiple", "Su clase espectral es K9", "Es una de las 10 estrellas más brillantes"], "correcta": "Es una estrella múltiple"},
                        {"text":"¿Cual es el planeta que gira casi tumbado?", "respuestas":["Neptuno", "Urano", "Saturno"], "correcta": "Urano"},
                        {"text":"¿Que planeta gira alrededor de su eje en el sentido de las agujas del reloj?", "respuestas":["Marte", "Mercurio", "Venus"], "correcta": "Venus"},
                        {"text":"¿Cual es la estrella que se mueve más rápido?", "respuestas":["La estrella de Barnard", "Wolf 359" ,"Alfa centauri"], "correcta": "La estrella de Barnard"},
                        {"text":"¿Que estrella alcanza una diferencia mayor de brillo entre el máximo y el mínimo?", "respuestas":["Mira", "Antares", "Algol"], "correcta": "Mira"},
                        {"text":"La Luna se aleja de la Tierra a la velocidad de:", "respuestas":["50 cm/año", "2 cm/año" ,"4 cm/año"], "correcta": "4 cm/año"},
                        {"text":"La clase espectral del Sol es:", "respuestas":["G7", "G0", "G2"], "correcta": "G2"},
                        {"text":"La galaxia más grande conocida hasta ahora es:", "respuestas":["M31", "M87", "M81"], "correcta": "M87"},
                        {"text":"Que estrella será la polar en el 14.000 d.C.?", "respuestas":["Alderamín", "Deneb", "Vega"], "correcta": "Vega"},
                        {"text":"¿Cual es el asteoride más grande descubierto hasta hoy?", "respuestas":["Ceres", "Vesta", "Higeia"], "correcta": "Ceres"},
                        {"text":"El primer satélite artificial fue lanzado en:", "respuestas":["1957","1962","1940"], "correcta": "1957"},
                        {"text":"Entre el día más largo del año (21 de junio) y el más corto (21 de diciembre), los días se acortan:", "respuestas":["Un minuto por la mañana y otro por la tarde", "Más despacio en los solsticios y más rápido en el equinocio", "Más rápido en los solsticios y más lento en los equinocios"], "correcta": "Más despacio en los solsticios y más rápido en el equinocio"},
                        {"text":"¿Que estrellas son muy útiles a la hora de determinar grandes distancias?", "respuestas":["Las cefeidas", "Las supernovas", "Las estrellas de neutrones"], "correcta": "Las cefeidas"}
                    ]
                }
            </script>
        <?php
            break;
    }
?>
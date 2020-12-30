<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>GRAN RIFA SOLIDARIA A JOAQUIN MORAN </title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #4A2340;
                color: #F9D564;
                margin: 0;
            }
            .titulo {
                letter-spacing:0.2em;
                font-family: 'Fredoka One', cursive;
                font-weight: 200;
                font-size: 10vw;
                text-transform: uppercase;
                text-align:center;
            }
            .subtitulo {
                letter-spacing:0.2em;
                font-family: 'Fredoka One', cursive;
                font-weight: 200;
                font-size: 4vw;
                text-transform: uppercase;
                text-align:center;
            }
            .contenedor{
                padding-left: 2%;
                padding-right: 2%;
            }

            .informacion{
                color:beige;
                letter-spacing:1.2px;
                font-family: 'Poppins', sans-serif;
                text-transform: uppercase;
                font-weight: 200;
            }
            .informacion p{
                margin: 0;
            }
            .informacion li{
                list-style-type: none;
            }

            #imprimir{
                color:black;
                font-family: 'Poppins', sans-serif;
            }
            .flex-row{
                display: flex;
                flex-direction: column;
            }
            .flex-row ul{
                margin:0px;
            }
            .flex-center{
                display: flex;
                flex-direction: row;
                justify-content: center;
            }
            #numeros{
                border-spacing: 0;
            }

            .bg-secundario{
                background: #70386A;
            }
            .btn{
                width:120px;
                display: flex;
                border-radius:8px;
                padding: 5px 8px;
                font-family: 'Poppins', sans-serif;
            }
            
            .btn img{
                height: 35px;
            }
            .facebook{
                background:#3A559F;
                color:white;
            }
            .google{
                background:white;
                color:black;
            }
            .btn-danger{
                background: #b71c1c;
                color:white;
            }
            
            @media screen and (min-width: 800px) {

                .titulo{
                    font-size: 85px;
                }

                .subtitulo {
                    font-size: 32px;
                }
                .flex-row{
                    flex-direction: row;
                }
                .contenedor{
                    padding-left: 8%;
                    padding-right: 8%;
                }
            }
        </style>
    </head>
    <body>
        <div class="contenedor" align="center">
            <h1 class="titulo">GRAN RIFA</h1>
            <h4 class="subtitulo">A BENEFICIO DE LA REHABILITACIÓN DE JOAQUIN MORAN QUIEN SE ENCUENTRA CON LESIÓN MEDULAR </h4>

            <div align="left" style="font-size:1rem" class="informacion">
                <h3>La cuenta oficial para recaudar el dinero es:</h3>
                <p>Cuenta de Ahorro Banco Estado</p>
                <p>Nº: 36761766109</p>
                <p>NOMBRE: LESLIE MARÍN PÉREZ</p>
                <p>RUT: 16.280.312-3</p>
                <p>EMAIL: LESLIEMARIN.18@GMAIL.COM</p>
                <p><b>P.D:</b> Al depositar, por favor, indicar en el comentario el número de rifa asociado</p>
            </div>
            <br>
            <h4 class="subtitulo">Para ayudar puedes generar una Rifa utilizando tu facebook o Gmail personal</h4>
            <div class="informacion bg-secundario" align="center" style="max-width:400px;padding:8px;border-radius:8px;">
                <div style="display:block" id="sesionoff">
                    <h1>Inicia Sesion</h1>
                    <p>Necesitas iniciar con una cuenta para descargar una rifa</p>
                    <br>
                    <div class="flex-center">
                        <button class="btn google" id="googleLogin">
                            <img src="{{ url('/') }}/img/Google.svg" alt="">
                            Con Google
                        </button>
                        <button class="btn facebook" id="facebookLogin">
                            <img src="{{ url('/') }}/img/facebook.svg" alt="">
                            Con Facebook
                        </button>
                    </div>
                </div>
                <div style="display:none" id="sesionon">
                    <p>Una vez descarges la Rifa tu te haras responsable de ella.</p>
                    <br>
                    <button class="btn" style="width:150px;background:white" id="generarRifa">
                        <img src="{{ url('/') }}/img/pdf.svg" alt="">
                        Descargar una Rifa
                    </button>
                    <br>
                    <div class="flex-center">
                        <button class="btn btn-danger" id="cerrar">
                            <img src="{{ url('/') }}/img/off.svg" alt="">
                            Cerrar Sesion
                        </button>
                        <div style="display:block;width:2rem;heigth:2rem;">

                        </div>
                        <button class="btn" onclick="location='{{ url('/') }}/listado'" style="background:#0d47a1;color:white">
                            <img src="{{ url('/') }}/img/lista.svg" alt="">
                            Lista de Rifas
                        </button>
                    </div>
                </div>
            </div>
            <h4 class="subtitulo">VALOR: $2.000 SORTEO 05 FEBRERO 2021</h4>
            <br>          
            <div class="informacion" align="left">
                <h3>Premios:</h3>
                <div class="flex-row">
                    <ul>
                        <li>1.- $500.000(QUINIENTOSMIL PESOS)</li>
                        <li>2.- $200.000(DOSCIENTOSMIL PESOS)</li>
                        <li>3.- NOCHE CABAÑA 2 PERSONAS PARQUE TRENSUR</li>
                        <li>4.- MICROONDAS</li>
                        <li>5.- DÍA DE CAMPO EN REFUGIO LICANCO PARA 4 PERSONAS</li>
                        <li>6.- 2 NOCHES DE PARTAMENTO EQUIPADO EN PUCÓN 4 PERSONAS</li>
                        <li>7.- 2 TELARES ÁRBOL</li>
                        <li>8.- CANASTA FAMILIAR</li>
                        <li>9.- KIT PREMIUM PRODUCTOS ECOFOOD</li>
                        <li>10.- 2 BIKINIS: PUEDE SER UNA PRENDA O CONJUNTO A ELECCIÓ KUYENVIOLETACCESORIOS</li>
                        <li>11.- ARTESANIA DECO - 2 BOTELLAS DE VINO VITROFUSIÓN</li>
                        <li>12.- SET ACCESORIOS DE PLATA - FIORE.ACC</li>
                        <li>13.- ESTUCHE HECHO A MANO - AMMONITE.DESIGN</li>
                        <li>14.- UN HORNO ELÉCTRICO</li>
                        <li>15.- UNA SANDWICHERA</li>
                        <li>16.- CONJUNTO JOYAS - SUYAI JOYAS</li>
                        <li>17.- 2 SESIONES DE ARTETERAPIA</li>
                        <li>18.- UNA OLLA ARROCERA ELÉCTRICA</li>
                        <li>19.- 1 KILO DE MANTEQUILLA DE MANÍ + 1 KILO DE GRANOLA - LOVELY.MANTEQUILLAS</li>
                        <li>20.- COLLAR DE PERLAS - ARTELUZ HECHO CON AMOR</li>
                        <li>21.- MÁQUINA PARA HACER HELADOS</li>
                        <li>22.- FUENTE DE CHOCOLATE</li>
                        <li>23.- TABLA PREMIUM - LA VINKINGA GOURMET O TORTA (18PERS.) AELECCIÓN-</li>                 
                    </ul>
                    <ul>
                        <li>24.- DOCENA DE CUPCAKES + MINITORTA - ISICAKES</li>
                        <li>25.- JUEGO DE LOZA 30 PIEZAS</li>   
                        <li>26.- MANICURE + PEDICURE - BL ESTUDIOS</li>
                        <li>27.- GIFT CARD UÑAS $15.000 - AMY_NAILSTCO</li>
                        <li>28.- PASEO EN LANCHA PARA 4 PERSONAS LICANRAY</li>
                        <li>29.- 3 REPISAS HEXAGONALES - DECOMADERA_TEMUCO</li>
                        <li>30.- CANASTA DE VINOS</li>
                        <li>31.- AGENDA MAGGUS STORE</li>
                        <li>32.- UNA COMIDA PARA 2 PERSONAS JACK BURGUER</li>
                        <li>33.- UNA JUGUERA</li>
                        <li>34.- POSTRE TIRAMISÚ</li>
                        <li>35.- CONSULTA ODONTOPEDRIATRÍA INCLUYE KIT DE HIGIENE ORAL</li>
                        <li>36.- JUEGO DE LOZA 24 PIEZAS Y HERVIDO RELECTRICO</li>
                        <li>37.- KIT CIENTÍFICO PARA NIÑOS/AS</li>
                        <li>38.- KIT MATERO - COMPLEMENTATUMATE</li>
                        <li>39.- MANTENCIÓN DE PC NOTEBOOK - SOCORROPC</li>
                        <li>40.- CLASE DE YOGA</li>
                        <li>41.- KIT JUST EUCASOL + CREMA DE TOMILLO</li>
                        <li>42.- UN BALÓN DE FUTBOL</li>
                        <li>43.- 2 PARES DE CALZADO DE MUJER ESTACIÓN</li>
                        <li>44.- PACKDONAMANCIO: 1 LOMOAHUMADO,1KG DE LONGANIZA ALEMANA Y 1KG DE LONGANIZA TRADICIONAL</li>
                        <li>45.- CAMISETA DEPORTES TEMUCO</li>
                        <li>46.- EXPRIMIDOR ELÉCTRICO</li>
                        <li>47.- CAFETERA ELÉCTRICA</li>
                    </ul>
                </div>
            </div>          
            <h4 class="subtitulo">MÁS INFORMACIÓN AL: +56958379948 O EN NUESTRA FANPAGE DE FACEBOOK "JOACOTON"</h4>
        </div>
        <div style="position:fixed;right:100%">
            <div style="width:794px;background-color:white;" align="center" id="imprimir">
                <div style="margin:20px 40px 0px 40px">
                    <div align="right">
                        Nº:<b><span id="Numero"></span></b>
                    </div>
                    <div style="font-size: 1.2rem;">GRAN RIFA</div>
                    <div style="font-size: 0.9rem;">A BENEFICIO DE LA REHABILITACIÓN DE JOAQUIN MORAN QUIEN SE ENCUENTRA CON LESIÓN MEDULAR</div>
                    <div style="font-size: 0.8rem;">SORTEO 05 FEBRERO 2021</div>
                    <div align="left" style="width:100%;font-size: 0.8rem;">
                        <div>Premios</div>
                        <div align="left" style="display:flex;font-size:0.7rem">
                            <div style="width:50%">
                                <div>1.- $500.000(QUINIENTOSMIL PESOS)</div>
                                <div>2.- $200.000(DOSCIENTOSMIL PESOS)</div>
                                <div>3.- NOCHE CABAÑA 2 PERSONAS PARQUE TRENSUR</div>
                                <div>4.- MICROONDAS</div>
                                <div>5.- DÍA DE CAMPO EN REFUGIO LICANCO PARA 4 PERSONAS</div>
                                <div>6.- 2 NOCHES DE PARTAMENTO EQUIPADO EN PUCÓN 4 PERSONAS</div>
                                <div>7.- 2 TELARES ÁRBOL</div>
                                <div>8.- CANASTA FAMILIAR</div>
                                <div>9.- KIT PREMIUM PRODUCTOS ECOFOOD</div>
                                <div>10.- 2 BIKINIS: PUEDE SER UNA PRENDA O CONJUNTO A ELECCIÓ KUYENVIOLETACCESORIOS</div>
                                <div>11.- ARTESANIA DECO - 2 BOTELLAS DE VINO VITROFUSIÓN</div>
                                <div>12.- SET ACCESORIOS DE PLATA - FIORE.ACC</div>
                                <div>13.- ESTUCHE HECHO A MANO - AMMONITE.DESIGN</div>
                                <div>14.- UN HORNO ELÉCTRICO</div>
                                <div>15.- UNA SANDWICHERA</div>
                                <div>16.- CONJUNTO JOYAS - SUYAI JOYAS</div>
                                <div>17.- 2 SESIONES DE ARTETERAPIA</div>
                                <div>18.- UNA OLLA ARROCERA ELÉCTRICA</div>
                                <div>19.- 1 KILO DE MANTEQUILLA DE MANÍ + 1 KILO DE GRANOLA - LOVELY.MANTEQUILLAS</div>
                                <div>20.- COLLAR DE PERLAS - ARTELUZ HECHO CON AMOR</div>
                                <div>21.- MÁQUINA PARA HACER HELADOS</div>
                                <div>22.- FUENTE DE CHOCOLATE</div>
                                <div>23.- TABLA PREMIUM - LA VINKINGA GOURMET O TORTA (18PERS.) AELECCIÓN-</div>
                            </div>
                            <div style="width:50%">
                                <div>24.- DOCENA DE CUPCAKES + MINITORTA - ISICAKES</div>
                                <div>25.- JUEGO DE LOZA 30 PIEZAS</div>
                                <div>26.- MANICURE + PEDICURE - BL ESTUDIOS</div>
                                <div>27.- GIFT CARD UÑAS $15.000 - AMY_NAILSTCO</div>
                                <div>28.- PASEO EN LANCHA PARA 4 PERSONAS LICANRAY</div>
                                <div>29.- 3 REPISAS HEXAGONALES - DECOMADERA_TEMUCO</div>
                                <div>30.- CANASTA DE VINOS</div>
                                <div>31.- AGENDA MAGGUS STORE</div>
                                <div>32.- UNA COMIDA PARA 2 PERSONAS JACK BURGUER</div>
                                <div>33.- UNA JUGUERA</div>
                                <div>34.- POSTRE TIRAMISÚ</div>
                                <div>35.- CONSULTA ODONTOPEDRIATRÍA INCLUYE KIT DE HIGIENE ORAL</div>
                                <div>36.- JUEGO DE LOZA 24 PIEZAS Y HERVIDO RELECTRICO</div>
                                <div>37.- KIT CIENTÍFICO PARA NIÑOS/AS</div>
                                <div>38.- KIT MATERO - COMPLEMENTATUMATE</div>
                                <div>39.- MANTENCIÓN DE PC NOTEBOOK - SOCORROPC</div>
                                <div>40.- CLASE DE YOGA</div>
                                <div>41.- KIT JUST EUCASOL + CREMA DE TOMILLO</div>
                                <div>42.- UN BALÓN DE FUTBOL</div>
                                <div>43.- 2 PARES DE CALZADO DE MUJER ESTACIÓN</div>
                                <div>44.- PACKDONAMANCIO: 1 LOMOAHUMADO,1KG DE LONGANIZA ALEMANA Y 1KG DE LONGANIZA TRADICIONAL</div>
                                <div>45.- CAMISETA DEPORTES TEMUCO</div>
                                <div>46.- EXPRIMIDOR ELÉCTRICO</div>
                                <div>47.- CAFETERA ELÉCTRICA</div>                        
                            </div>
                        </div>
                        <br>
                        <div style="font-size: 0.8rem;">VALOR Nº: $2.000 pesos</div>
                        <table border=1 style="width:100%;font-size: 0.8rem;" id="numeros">
                            <tr>
                                <th width="5%">
                                    Nº
                                </th>
                                <th width="30%">
                                    Nombre
                                </th>
                                <th width="40%">
                                    Dirección
                                </th>
                                <th width="25%">
                                    Teléfono
                                </th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="{{ url('/') }}/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="https://www.gstatic.com/firebasejs/7.21.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.21.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.21.1/firebase-firestore.js"></script>

    <script src="{{ url('/') }}/js/html2pdf.bundle.js"></script>

    <script>
        // Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "AIzaSyAymmyn_yfJUGJuD1kEnIE8EzBRnHvHXOw",
            authDomain: "rifa-4ffbe.firebaseapp.com",
            databaseURL: "https://rifa-4ffbe.firebaseio.com",
            projectId: "rifa-4ffbe",
            storageBucket: "rifa-4ffbe.appspot.com",
            messagingSenderId: "730625719589",
            appId: "1:730625719589:web:4739cac48dacbdbc5b6ecc"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        
        const auth = firebase.auth();
        const fs = firebase.firestore();
    </script>

    <script>
        const numeros = document.getElementById('numeros');
        const imprimir = document.getElementById('imprimir');
        
        const sesionoff = document.getElementById('sesionoff');
        const sesionon = document.getElementById('sesionon');
        const generarRifa = document.getElementById('generarRifa');
        const Numero = document.getElementById('Numero');
        const cerrar = document.getElementById('cerrar');
        var espera=false;

        document.addEventListener("DOMContentLoaded", function() {
            for(var i=1;i<21;i++){
                var ntr = document.createElement('tr');
                var nth = document.createElement('th');
                nth.innerHTML=i;
                ntr.append(nth);
                var ntd = document.createElement('td');
                ntr.append(ntd);
                var ntd = document.createElement('td');
                ntr.append(ntd);
                var ntd = document.createElement('td');
                ntr.append(ntd);
                numeros.append(ntr);
            }
        });
        
        auth.onAuthStateChanged(user =>{
            if(user){
                console.log("sing in");           
                sesionoff.style.display = "none";
                sesionon.style.display = "block";
            }else{
                sesionoff.style.diplay = "block";
                sesionon.style.diplay = "none";
            }
        });

        cerrar.addEventListener('click', e => {
            e.preventDefault();
            try {
                auth.signOut().then(() => {
                    console.log("signup out");
                    location.reload();
                });

            }catch{
                location.reload();
            }
        })

        // Login with Google
        const googleButton = document.querySelector("#googleLogin");
        googleButton.addEventListener("click", (e) => {
            e.preventDefault();
            $("#signinModal").modal("hide");

            const provider = new firebase.auth.GoogleAuthProvider();
            auth.signInWithPopup(provider).then((result) => {
                console.log(result);
                console.log("google sign in");
            })
            .catch(err => {
                console.log(err);
            })
        });

        // Login with Facebook
        const facebookButton = document.querySelector('#facebookLogin');
            facebookButton.addEventListener('click', e => {
            e.preventDefault();
            $("#signinModal").modal("hide");

            const provider = new firebase.auth.FacebookAuthProvider();
            auth.signInWithPopup(provider).then((result) => {
                console.log(result);
                console.log("facebook sign in");
            })
            .catch(err => {
                console.log(err);
            })
        });

        generarRifa.addEventListener("click", async function(e){
            e.preventDefault();
            if(!espera){
                espera=true;
                var user = firebase.auth().currentUser;
                if (user != null) {
                    var senddata = {
                        _token:$('meta[name="csrf-token"]').attr('content'),
                        nombre:user.displayName,
                        email:user.email,
                        identificador:user.uid
                    }
                    $.post( "{{url('/')}}/rifa/add",senddata,function( data ){
                        if(typeof data === 'object'){
                            if(data.id)
                            Numero.innerHTML = (data.id);
                            pruebaDivAPdf(data.id);
                        }else{
                            alert('Error al crear la Rifa, intente mas tarde');
                            espera=false;
                        }
                    });
                }else{
                    console.log('sin usuario');
                }
            }
        })


        function pruebaDivAPdf(x) {
            var opt = {
                margin:       0.0,
                filename:     'Rifa_'+x+'.pdf',
                image:        { type: 'jpeg', quality: 1 },
            };
            html2pdf().set(opt).from(imprimir).save();
            espera=false;
        }
    </script>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
            .container{
                padding-left: 8%;
                padding-right: 8%;
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
                flex-direction: row;
            }
            .flex-center{
                justify-content: center;
            }
            #numeros{
                border-spacing: 0;
            }

            .bg-secundario{
                background: #70386A;
            }
            .btn{
                width:110px;
                display: flex;
                border-radius:8px;
                padding: 5px 8px;
            }
            
            .btn img{
                height: 25px;
            }
            .facebook{
                background:#3A559F;
                color:white;
            }
            .google{
                background:white;
                color:black;
            }
            
            @media screen and (min-width: 800px) {

                .titulo{
                    font-size: 85px;
                }

                .subtitulo {
                    font-size: 32px;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1 class="titulo">GRAN RIFA</h1>
            <h4 class="subtitulo">A BENEFICIO DE LA REHABILITACIÓN DE JOAQUIN MORAN QUIEN SE ENCUENTRA CON LESIÓN MEDULAR </h4>
            <h4 class="subtitulo">VALOR: $2.000 SORTEO 05 FEBRERO 2021</h4>

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
            <div class="informacion bg-secundario" align="center">
                <h5 class="card-title">Inicia Sesion</h5>
                <p>Necesitas iniciar con una cuenta para descargar una rifa</p>
                <br>
                <div class="flex-row flex-center">
                    <button class="btn btn-lg google" id="googleLogin">
                        <img src="{{ url('/') }}/img/Google.svg" alt="">
                        Con Google
                    </button>
                    <button class="btn btn-lg facebook" id="facebookLogin">
                        <img src="{{ url('/') }}/img/facebook.svg" alt="">
                        Con Facebook
                    </button>
                </div>
            </div>  
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
        <div style="position:relative;">
            <div style="width:794px;background-color:white" align="center" id="imprimir">
                <div align="right">
                    Nº:<b><span id="Numero"></span></b>
                </div>
                <div style="font-size: 1.2rem;">GRAN RIFA</div>
                <div style="font-size: 0.9rem;">A BENEFICIO DE LA REHABILITACIÓN DE JOAQUIN MORAN QUIEN SE ENCUENTRA CON LESIÓN MEDULAR</div>
                <div style="font-size: 0.8rem;">VALOR: $2.000 SORTEO 05 FEBRERO 2021</div>
                <div align="left" style="width:100%">
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
                    <table border=1 style="width:100%" id="numeros">
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
    </body>
    <script>
        var numeros = document.getElementById('numeros');
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
    </script>
</html>

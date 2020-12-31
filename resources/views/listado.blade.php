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
                overflow-x:scroll; 
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
                background: red;
                color:white;
            }

            #tabla{
                width:100%;
                text-align: center;
                min-width: 800px;
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
                .informacion{
                    overflow-x:auto; 
                }
            }
        </style>
    </head>
    <body>
        <div class="contenedor" align="center">
            <h1 class="titulo">GRAN RIFA</h1>
            <h4 class="subtitulo">A BENEFICIO DE LA REHABILITACIÓN DE JOAQUIN MORAN QUIEN SE ENCUENTRA CON LESIÓN MEDULAR </h4>
            <button class="btn" onclick="window.history.back()" style="color:white;background:#f57f17 ">
                <img src="{{ url('/') }}/img/atras.svg" alt="">
                Volver Atras
            </button>
            <h4 class="subtitulo">Lista de personas que estan ayudando</h4>
            <div class="informacion bg-secundario" align="center" style="padding:8px;border-radius:8px;">
                <table id="tabla" >
                    <tr>
                        <th>
                            Nº Rifa
                        </th>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Fecha
                        </th>
                    </tr>
                </table>
            </div>       
            <h4 class="subtitulo">MÁS INFORMACIÓN AL: +56958379948 O EN NUESTRA FANPAGE DE FACEBOOK "JOACOTON"</h4>
        </div>
    </body>
    <script src="{{ url('/') }}/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        const tabla = document.getElementById('tabla');
        document.addEventListener("DOMContentLoaded", function() {
            $.get( "{{url('/')}}/rifa/list",function( data ){
                if(typeof data === 'object'){
                    data.forEach(rifa => {                        
                        var ntr = document.createElement('tr');

                        var ntd = document.createElement('td');
                        ntd.innerHTML= rifa.id;
                        ntr.append(ntd);
                        
                        var ntd = document.createElement('td');
                        ntd.innerHTML= rifa.nombre;
                        ntr.append(ntd);
                        
                        
                        var ntd = document.createElement('td');
                        ntd.innerHTML= rifa.email;
                        ntr.append(ntd);

                        var ntd = document.createElement('td');
                        var d = new Date(rifa.created_at)
                        ntd.innerHTML= d.toLocaleDateString()+" "+d.toLocaleTimeString();
                        ntr.append(ntd);

                        tabla.append(ntr);
                    });
                }else{
                    alert('Error al crear la Rifa, intente mas tarde');
                }
            });
        });
    </script>
</html>

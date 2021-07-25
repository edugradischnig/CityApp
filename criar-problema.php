<?php
session_start();
if($_SESSION['tipo'] == 'p'){
    header("location: sem-permissao.php");
}if(!isset($_SESSION['email'])){
    header("location: sem-permissao.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
    <title>Document</title>
</head>
<body>
    <form method="$_POST" action="processar-acoes-cidadao.php">
        <label for="cabecalho">Resumo do problema:</label>
        <input type="text" name="cabecalho"> <br>

        <label for="detalhe">Detalhe o problema e o que você quer que seja feito:</label>
        <input type="text" name="detalhe"> <br>

        
        <section class="envelope envelope--p">
        <div class="box" style="padding:32px 24px; margin-top:16px;">
            <h1 class="texto-titulo texto-titulo--h1" style="color:var(--cor-principal-5)">Escolha uma localização:</h1>
            <div class="objeto-recipiente" id="map" style="border:2px solid #fff; margin-top:8px;">
                <div id='map' style='width: 400px; height: 300px;'></div>
            </div>
            <div id="info" style="color:#fff"></div>
        </div>
        </section>

        <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoicGFzdGNob3dkZXIxNyIsImEiOiJja3JpYWhtdnYwdGFkMm5wa2g1bzM0ZTc2In0.DYj0Q-xSqOsK_lHVf9wTKA';
            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11',
                center: [-51.30038143450929, -29.3829],
            zoom: 13
            });

            var marker = new mapboxgl.Marker();

            function add_marker (event) {
            var coordinates = event.lngLat;
            console.log('Lng:', coordinates.lng, 'Lat:', coordinates.lat);
            marker.setLngLat(coordinates).addTo(map);
            }

            map.on('click', add_marker);
        </script>


        <input type="submit" value="Relatar problema">
    </form>
</body>
</html>
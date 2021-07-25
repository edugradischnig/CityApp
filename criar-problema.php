<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preload" href="fonts/MaterialIconsRound-Regular.woff2" as="font">
    <link rel="stylesheet" href="css/core/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
</head>
<body>
    <form action="processar-problema-cidadao.php" method="POST">
        <label for="cabecalho">Resumo do problema:</label>
        <input type="text" name="cabecalho" required> <br>

        <label for="detalhe">Detalhe o problema e o que você quer que seja feito:</label>
        <input type="text" name="detalhe" required> <br>

        
        <section class="envelope envelope--p">
        <div class="box" style="padding:32px 24px; margin-top:16px;">
            <h1 class="texto-titulo texto-titulo--h1" style="color:var(--cor-principal-5)">Escolha uma localização:</h1>
            <div class="objeto-recipiente" id="map" style="border:2px solid #fff; margin-top:8px;">
                <div id='map'></div>
            </div>
            <div id="info" style="color:#fff"></div>
        </div>
        </section>
        <p>Dica: Selecione e dê zoom sobre o local ou possível local do problema.</p>

        <!-- Gambiarra pra pegar as coordenadas!-->
        <p id="x" style="visibility: hidden;"> </p>
        <p id="y" style="visibility: hidden;"> </p>

        <input type="submit" value="Relatar problema">
    </form>

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

                document.getElementById("x").innerHTML = String(coordinates.lng);
                document.getElementById("y").innerHTML = String(coordinates.lat);

                document.cookie = "x="+String(coordinates.lng);
                document.cookie = "y="+String(coordinates.lat);

                marker.setLngLat(coordinates).addTo(map);
            }

            map.on('click', add_marker);
        </script>
</body>
</html>
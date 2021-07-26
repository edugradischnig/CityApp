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
    <section class="envelope envelope--p">
        <div class="box" style="padding:32px 24px; margin-top:16px;">
            <h1 class="texto-titulo texto-titulo--h1" style="color:var(--cor-principal-5)">Relatar um problema</h1>
            <form action="processar-problema-cidadao.php" method="POST">
                <div class="form-container" style="margin-top:8px;">
                    <div class="form-label">Resumo do problema</div>
                    <input type="text" name="cabecalho" class="form-input" required>        
                </div>
                <div class="form-container">
                    <div class="form-label">Detalhe o problema e o que você quer que seja feito:</div>
                    <input type="text" name="detalhe" class="form-input" required>
                </div>

                <h2 class="texto-titulo texto-titulo--h2" style="margin-top:16px; color:var(--cor-principal-3);">Escolha uma localização:</h1>
                <div class="objeto-recipiente" id="map" style="border:2px solid #fff; margin-top:8px;">
                    <div id='map'></div>
                </div>
                <p class="texto-corpo" style="margin-top:8px; color:var(--cor-branco-2);">Dica: Selecione e dê zoom sobre o local ou possível local do problema.</p>
            <!-- Gambiarra pra pegar as coordenadas!-->
                <p id="x" style="display:none;"> </p>
                <p id="y" style="display:none;"> </p>
                <input type="submit" value="Relatar problema" class="botao mi--a" style="margin-top:16px; background-color:var(--cor-principal-3);">
            </form>
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

            if (navigator.geolocation){ //se o broser suportar geolocalizacao
	    	    navigator.geolocation.getCurrentPosition(locationCallback);//pegar localizacao e passar pro callback se o user der allow
	        }

            //mover mapa p/ localizacao do client
	        function locationCallback(position){
		        const lat = position.coords.latitude;
		        const long = position.coords.longitude;

		        map.flyTo({
                    center: [long, lat]
                })
	        }

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

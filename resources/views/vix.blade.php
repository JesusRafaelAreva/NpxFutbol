
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ver Vix Plus online en VIVO y en directo. Futbol Gratis</title>

    <!-- Canonical URL -->
    <link rel="canonical" href="http://npxfutbol.000.pe/vix-plus" />

    <!-- SEO Meta Tags -->
    <meta name="description" content="Mira vix Plus en vivo y disfruta del mejor fútbol en directo. Accede a transmisiones exclusivas y contenido en vivo en futbol libre.">
    <meta name="keywords" content="vix Plus, Futbol en vivo, streaming, partidos en directo, futbol libre">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Futbol Gratis">

    <!-- Social Media Meta Tags -->
    <meta property="og:title" content="Ver vix Plus online en VIVO y en directo. Futbol Gratis">
    <meta property="og:description" content="Mira vix Plus en vivo y disfruta del mejor fútbol en directo. Accede a transmisiones exclusivas y contenido en vivo.">
    <meta property="og:image" content="http://npxfutbol.000.pe/img/futbollibre.png">

    <!-- Favicon Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="../../favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../../favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name='referrer' content='no-referrer' />

    <!-- Scripts y CSS -->
    <script type="text/javascript" src="horario.js?v"></script>
    <link href="../../css/bootstrap.css?v3" rel="stylesheet">
    <link href="../../css/portada.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta http-Equiv="Cache-Control" Content="no-cache" />
    <meta http-Equiv="Pragma" Content="no-cache" />
    <meta http-Equiv="Expires" Content="0" />
    <link href="../../css/starp.css" rel="stylesheet">
</head>

<body>
<div id="navbar"></div>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
<a class="my-0 mr-md-auto font-weight-normal fl" rel="home" href="/">
Futbol Gratis
</a>

<a class="btn btn-outline-fl" rel="home" href="/">
    <img src="/img/logo-futbolLibre.webp" alt="Logo de Futbol Gratis" width="25" height="25">
</a>
</div>
<div class="w3-main w3-content w3-padding" style="max-width:1200px">
    <center>
<img src="/img/logo-vixplus.png" alt="VIX+" width="250" height="100"> 
</center><br><p class="display-5 text-center">Elige el evento:</p>
	
<div id="eventos"></div>

<br>

<div class="sharethis-inline-share-buttons"></div>

<script>

function eventos() {
    var x = Math.random().toString(36).substring(7);

    $.ajax({
        url: "https://corsproxy.io/?url=https://todopelotatvhd.com/live/vixjson.json?" + x,
        type: "get",
        success: function (arr) {
            var content = '';

            for (var i = 0; i < arr.length; i++) {
                if (i % 4 == 0) {
                    if (i != 0) content += '</div>';
                    content += '<div class="w3-row-padding w3-padding-16 w3-center" id="copa">';
                }

                var obj = arr[i];
                var status = obj['fecha-evento'];
                var color = "dark"; // color por defecto

                if (status.match(/\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}Z/)) {
                    var fechaEvento = new Date(status);
                    var now = new Date();
                    if (fechaEvento > now) {
                        status = calcularCuentaRegresiva(fechaEvento); // muestra cuenta regresiva con "HOY:"
                        color = "dark"; // clase para eventos futuros con cuenta regresiva
                    } else {
                        status = "FINALIZADO"; // evento pasado
                    }
                } else if (status === "EN VIVO") {
                    color = "danger"; // clase para eventos en vivo
                }

                content += `<div class="w3-quarter">
                                <a href="${obj['url']}">
                                    <img src="${obj['img']}" alt="${obj['title']}" style="width:100%" class="w3-hover-opacity">
                                </a>
                                <a class="btn btn-block btn-${color}" href="${obj['url']}">${status}</a>
                                <div class="w3-card-4">
                                    <p><b>${obj['league']}</b></p>
                                    <p>${obj['title']}</p>
                                </div>
                            </div>`;

                if (i == arr.length-1) content += '</div>';
            }

            $("#eventos").html(content);
        }
    });
}

function calcularCuentaRegresiva(fechaEvento) {
    var ahora = new Date();
    var diferencia = fechaEvento - ahora;
    var horas = Math.floor(diferencia / 3600000);
    var minutos = Math.floor((diferencia % 3600000) / 60000);
    var segundos = Math.floor((diferencia % 60000) / 1000);
    
    // Verifica si el evento es hoy
    if (fechaEvento.toDateString() === ahora.toDateString()) {
        return `HOY: ${horas}h ${minutos}m ${segundos}s`;
    } else {
        return `${horas}h ${minutos}m ${segundos}s`;
    }
}

// Ejecutar la función eventos inmediatamente y luego cada 60 segundos
eventos();
setInterval(eventos, 60000);


</script>

<footer class="pt-4 my-md-5 pt-md-5 border-top">
<div class="row">
<div class="col-6 col-md">
<h5>Social</h5>
<ul class="list-unstyled text-small">
<li><a class="text-muted" href="https://twitter.com/" target="_blank">Twitter</a></li>
<li><a class="text-muted" href="https://www.instagram.com/" target="_blank">Instagram</a></li>
<li><a class="text-muted" href="https://www.youtube.com/" target="_blank">YouTube</a></li>
</ul>
</div>
<div class="col-6 col-md">
<h5>Fútbol Libre</h5>
<ul class="list-unstyled text-small">
<li><a class="text-muted" href="http://npxfutbol.000.pe/home/DMCA.html">DMCA</a></li>
<br>
<div style="text-align:center;">
<small class="d-block mb-3 text-muted">Futbol Gratis 2023 © Todos los derechos reservados.</small>
</div></ul>
</div>
</div>
</footer>
</div>
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5ab9c9531fff98001395a59a&product=inline-share-buttons"></script>
</body>
</html>

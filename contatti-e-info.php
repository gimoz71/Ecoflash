<?php
	$menu['contatti']='class="active"';
	$menu_sec['voce0']='class="active"';
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<link rel="stylesheet" type="text/css" media="screen" href="http://www.devslide.com/public/labs/browser-detection/browser-detection.css" />
<script type="text/javascript" src="http://www.devslide.com/public/labs/browser-detection/browser-detection.js"></script>
<script type="text/javascript">
<!--
var displayPoweredBy = false;
// -->
</script>
<script type="text/javascript" src="js/custom-form-elements.js"></script>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style type="text/css">
.clearfix:after {
	content: ".";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;
}
header #panes div {
	display:none;
}
</style>
<!--[if IE]>
<style type="text/css">
  .clearfix {
    zoom: 1;     /* triggers hasLayout */
    }  /* Only IE can see inside the conditional comment
    and read this CSS rule. Don't ever use a normal HTML
    comment inside the CC or it will close prematurely. */
</style>
<![endif]-->
<!--[if lt IE 7]>
<script src="js/DD_belatedPNG.js"></script>
<script>
  DD_belatedPNG.fix('img');
</script>
<![endif]-->
<link href="css/ecoflash.css" rel="stylesheet" type="text/css" />
<link href="css/utility.css" rel="stylesheet" type="text/css" />
<link href="css/form.css" rel="stylesheet" type="text/css" />
<title>Ecoflash</title>
<script type="text/javascript"  src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">

var directionsService = new google.maps.DirectionsService();
var directionsDisplay = new google.maps.DirectionsRenderer();

function initialize() {
	var latlng = new google.maps.LatLng(43.554131136793735, 10.348584651947021);
	var myOptions = {
		zoom: 15,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var image = 'images/logo_map.png';
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	
	directionsDisplay.setMap(map);
	directionsDisplay.setPanel(document.getElementById("panel"));
	
	var marker = new google.maps.Marker({
		position: latlng,
		map: map,
		icon: image
	});
	
	// Crea il codice per il tooltip di info 
	var tooltip = '<div id="tooltip">'+
        '<h3>Ecoflash Srl</h3>'+
        '<p>Via Del Limone, 52<br>'+
        '57121 Livorno (Italy).<br>'+
        '<img src="images/icon_mail.png" alt="phone" width="15" height="10" align="absmiddle"> <a href="mailto:info@ecoflash.it">info@ecoflash.it</a><br>'+
        '<img src="images/icon_pec.png" alt="phone" width="15" height="10" align="absmiddle"> <a href="mailto:ecoflash@pec.it">ecoflash@pec.it</a><br>'+
        'Telefono: (+39) 0586 514692<br>'+
		'Fax: (+39) 0586 401290</p>'+
        '</div>';
		
    var infowindow = new google.maps.InfoWindow({
        content: tooltip
    });
	
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });
	
	/*document.getElementById("submitmap").onclick = function() {
		calcRoute();
	}*/
  	// To add the marker to the map, call setMap();
  	marker.setMap(map);
}

// Calcola il percorso
function calcRoute() {
    var partenza = document.getElementById("partenza").value;
    var arrivo = document.getElementById("arrivo").value;
    var request = {
        origin:partenza, 
        destination:arrivo,
        travelMode: google.maps.DirectionsTravelMode.DRIVING
    };
    directionsService.route(request, function(response, status) {
		if (status == google.maps.DirectionsStatus.OK) {
			directionsDisplay.setDirections(response);
		}
	});
}
</script>
</head>
<body onLoad="initialize()">
<?php @include("inc_web/header.php"); ?>
<div id="content" class="clearfix">
    <div class="mono third_divider clearfix">
    
        <div class="third" style="height: 290px;">
        <p><img src="images/logo_contatti.png" alt="logo" width="183" height="42"><br>
            Via Del Limone, 52 - 57121 Livorno<br>
            <img src="images/icon_phone.png" alt="phone" width="15" height="10" align="absmiddle"> Tel. (+39) 0586 514692 - Fax (+39) 0586 401290<br>
			<img src="images/icon_mail.png" alt="phone" width="15" height="10" align="absmiddle"> <a href="mailto:info@ecoflash.it">info@ecoflash.it</a><br>
            <img src="images/icon_pec.png" alt="phone" width="15" height="10" align="absmiddle"> <a href="mailto:ecoflash@pec.it">ecoflash@pec.it</a><br>
			www.ecoflash.it <br>
            P.IVA/COD.FISCALE 01667490500</p>
        </div>
        <div class="third">
            <p class=""><em>amministratore</em><br>
                <strong>Cafferata Enrico</strong><br />
                <img src="images/icon_phone.png" alt="phone" width="15" height="10" align="absmiddle"> Cell. 335 6013288<br>
                <img src="images/icon_mail.png" alt="phone" width="15" height="10" align="absmiddle">  <a href="mailto:e.cafferata@ecoflash.it">e.cafferata@ecoflash.it</a></p>
        </div>
        <div class="third">
            <p class=""><em>ufficio logistico</em><br>
                <strong>Veronica Marciano</strong><br />
                <img src="images/icon_phone.png" alt="phone" width="15" height="10" align="absmiddle">Tel. 0586 514692 - Cell. 340 5869114<br>
                <img src="images/icon_mail.png" alt="phone" width="15" height="10" align="absmiddle">  <a href="mailto:v.marciano@ecoflash.it">v.marciano@ecoflash.it</a></p>
        </div>
        <div class="third">
            <p class=""><em>ufficio commerciale</em><br>
                <strong>Stefania Sassano</strong><br />
                <img src="images/icon_phone.png" alt="phone" width="15" height="10" align="absmiddle"> Tel. 0586 514692 - Cell. 345 0103860<br>
                <img src="images/icon_mail.png" alt="phone" width="15" height="10" align="absmiddle">  <a href="mailto:s.lazzerini@ecoflash.it">s.sassano@ecoflash.it</a></p>
        </div>
        <div class="third">
            <p class=""><em>ufficio Amminstrazione</em><br>
                <strong>Dania Savi</strong><br />
                <img src="images/icon_phone.png" alt="phone" width="15" height="10" align="absmiddle">Tel. 0586 514692 - Cell. 340 5869114<br>
                <img src="images/icon_mail.png" alt="phone" width="15" height="10" align="absmiddle">  <a href="mailto:d.savio@ecoflash.it">d.savi@ecoflash.it</a></p>
        </div>
        <div class="third">
            <p class=""><em>Capo cantiere</em><br>
                <strong>Francesco Gennai</strong><br>
                <img src="images/icon_phone.png" alt="phone" width="15" height="10" align="absmiddle"> Cell. 348 2469099</p>
        </div>
        
        
    </div>
    <?php /*?><div class="mono">
            <p class="contact"><strong>emergenze 24 ore su 24 - <small>(reperibilit&agrave; a scalare)</small></strong><br>
                335 6013288<br>
                347 9498488<br>
                348 2469099<br>
                340 5869114</p>
        </div><?php */?>
    <div class="clearer twenty"></div>
    <div class="bacheca_form_header">
        <h2>Come trovarci</h2>
    </div>
    <div class="mono bacheca_form clearfix">
        <div class="clearer ten"></div>
        <div class="third">
            <div style="padding: 0 10px 40px 15px;">
                <label><strong>Come arrivi?&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                    <select id="partenza" onChange="calcRoute();">
                        <option value="" selected>--</option>
                        <option value="Piazza Dante - livorno">dalla stazione FS</option>
                        <option value="Piazzale Corradino D'Ascanio - pisa">dall'aereoporto</option>
                    </select>
                    <input type="hidden" id="arrivo" value="Via Del Limone 52 - livorno" />
                </label>
                <div class="clearer ten underscore"></div>
                <div id="panel"></div>
            </div>
        </div>
        <div class="dx">
            <div style="padding: 0 15px 40px 10px;">
                <div class="googlemap" id="map_canvas"></div>
            </div>
        </div>
    </div>
    <div class="clearer twenty"></div>
    <?php @include("inc_web/servizi.php"); ?>
    <div class="clearer twenty"></div>
</div>
<?php @include("inc_web/footer.php"); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>
<script src="js/jquery.validate.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.activate.functions.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>

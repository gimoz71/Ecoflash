<?php
	$menu['azienda']='class="active"';
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
<title>Ecoflash</title>
</head>
<body>
<?php @include("inc_web/header.php"); ?>
<div id="content" class="clearfix">
   	<div class="approfondimenti_top"></div>
    <div class="mono approfondimenti clearfix">
        <div class="sx">
            <ul class="menu">
                <li><a href="azienda.php">Chi siamo</a></li>
                <li><a href="cosa-facciamo.php">Cosa facciamo</a></li>
                <li><a href="interventi.php">Interventi</a></li>
                <li><a href="tecnologia.php">Tecnologia</a></li>
                <li><a href="global-service.php" class="active">Global service</a></li>
            </ul>
        </div>
        <div class="dx">
            <h3>Il vantaggio di avere un solo referente</h3>
            <p>Ecoflash collabora con altre aziende operanti nel settore delle manutenzioni e/o dello smaltimento dei rifiuti per offrire alla clientela un servizio il più completo possibile. Con un servizio in “global services”, il cliente ha in Ecoflash un unico referente che gli risolve un problema più complesso e articolato che richiede un intervento di operatori con competenze di tipo diverso. </p>
            <p>&nbsp;</p>
        </div>
    </div>
    <div class="clearer forty"></div>
    <div class="mono third_divider clearfix">
        <div class="third">
            <h3 class="navale">Ambito navale<br /> 
                e portuale</h3>
            <p><a href="modulo-richiesta-ecologia-e-gestione-rifiuti-ambito-navale-portuale.php" class="button_scopri">Scopri di pi&ugrave;</a> oppure <a href="modulo-richiesta-ecologia-e-gestione-rifiuti-ambito-navale-portuale.php">contattaci adesso</a></p>
        </div><div class="third">
            <h3 class="industria">Per l'industria<br />
                e le PMI</h3>
            <p><a href="modulo-richiesta-eco-servizi-per-industria-e-pmi.php" class="button_scopri">Scopri di pi&ugrave;</a> oppure <a href="modulo-richiesta-eco-servizi-per-industria-e-pmi.php">contattaci adesso</a></p>
        </div>
        <div class="third">
            <h3 class="bonifiche">Bonifiche ed<br />
                emergenze ambientali</h3>
            <p><a href="modulo-richiesta-pronto-intervento-bonifiche-ed-emergenze-ambientali.php" class="button_scopri">Scopri di pi&ugrave;</a> oppure <a href="modulo-richiesta-pronto-intervento-bonifiche-ed-emergenze-ambientali.php">contattaci adesso</a></p>
        </div>
        <h2 class="clearer underscore"></h2>
        <?php @include("inc_web/servizi_simple.php"); ?>
    </div>
    <div class="clearer twenty"></div>
</div>
<?php @include("inc_web/footer.php"); ?>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Information om Tivolis karneval</title>
<link rel="stylesheet" href="cssreset.css" type="text/css" />
<link rel="stylesheet" href="stylesheet.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="javascript.js" type="text/javascript"></script>
</head>

<body>
<?php
	include 'tilmeld.html';
?>

<?php
	include 'header.html'
?>

<script type="text/javascript">
    	var id = "info";
    	document.getElementById(id+'A').style.display = "block";
    </script>

<?php
	include 'lady.html'
?>


<div id="master">
  <div id="frame">
		<div id="frametop">
				<div class="frametophtag" id="infoFrameTop">
					<div class="infoNavBox">
						<div class="infoPilDiv">
							<img id="infoPilLeft" src="images/pined.png" width="15" height="13" />
						</div><!--infoPilDiv-->
	            		<a href="#" onClick="hideshow(ofteDiv, praktiskDiv, infoPilLeft, infoPilRight)"><span id="praktiskSpan">Praktisk Info</span></a>
	      			</div><!--infoNavLeftBox-->
	      			
	      			<div class="infoNavBox">
						<div class="infoPilDiv">
							<img id="infoPilRight" src="images/pined.png" width="15" height="13" />
						</div><!--infoPilDiv-->
            			<a href="#" onClick="hideshow(praktiskDiv, ofteDiv, infoPilRight, infoPilLeft)"><span id="ofteSpan">Ofte Stilte Spørgsmål</span></a>
            	</div><!--infoNavLeftBox-->
            </div><!--frametophtag-->
        </div><!--frametop-->
        
            <div id="sideframewrapper">
            
            	<div id="rammemiddle">
                
                <div id="rammecontent">
                
                <div id="programwrapper">
                	<div id="praktiskDiv">
	                	<h4>Åbningstider</h4><br />
	                	<div class="infoOpenBox"><p class="infoDag">Torsdag</p></div><div class="infoOpenBox"><p class="infoTid">10.00-23.00</p></div><br />
	                	<div class="infoOpenBox"><p class="infoDag">Fredag</p></div><div class="infoOpenBox"><p class="infoTid">10.00-23.00</p></div><br />
	                	<div class="infoOpenBox"><p class="infoDag">Lørdag</p></div><div class="infoOpenBox"><p class="infoTid">10.00-23.00</p></div><br />
	                	<div class="infoOpenBox"><p class="infoDag">Søndag</p></div><div class="infoOpenBox"><p class="infoTid">10.00-24.00</p></div><br />
	                	<br />
	                	<hr class="hrgolden" />
	                	<h4>Priser</h4><br />
	                	<div class="infoOpenBox"><p class="infoDag">Entré barn 0- 7 år*</p></div><div class="infoOpenBox"><p class="infoTid">95Kr</p></div><br />
	                	<div class="infoOpenBox"><p class="infoDag">Entré voksen 8 år+</p></div><div class="infoOpenBox"><p class="infoTid">Gratis</p></div><br />
	                	<div class="infoOpenBox"><p class="infoDag">Gruppe entré,<br /> min. 15 personer</p></div><div class="infoOpenBox"><p class="infoTid">90Kr pr. person</p></div><br />
	                	<br />
	                	<br />
	                	<p class="p1">Hvis du møder op udklædt, vil du få 50% rabat på entré prisen.</p>
	                	<br />
	                	<p class="comment">*Børn under 8 år skal ledsages af en voksen. Én voksen kan højest ledsage fire børn under 8 år. Ved flere end fire børn per voksen betales fuld entré-pris per barn ud over det fjerde barn under 8 år.</p>
	                	<hr class="hrgolden" />
	                	<br />
                	</div><!--praktoiskDiv-->
                	
                	<div id="ofteDiv">
	                	<h4>Hvad er tivoli karneval?</h4>
	                	<p class="p1">test</p><br />
	                	<h4>Har i en Rabat-ordning?</h4>
	                	<p class="p1">test</p><br />
	                	<h4>Hvornår er karnevalet?</h4>
	                	<p class="p1">test</p><br />
	                	<h4>Hvor lang tid vare Karnevalet?</h4>
	                	<p class="p1">test</p><br />
	                	<h4>Skal man være udklædt for at komme?</h4>
	                	<p class="p1">test</p><br />
	                	<h4>Er det normal pris under Karnevalet?</h4>
	                	<p class="p1">test</p><br />
	                	<h4>Kan man købe kostume hos jer?</h4>
	                	<p class="p1">test</p><br />
	                	<h4>Skal børnene være udklædt for at slå katten af tønden?</h4>
	                	<p class="p1">test</p><br />
	                	<h4>Hvordan tilmelder jeg mig jeres konkurrence?</h4>
	                	<p class="p1">test</p><br />
                	</div><!--ofteDiv-->
                	
                </div><!--programwrapper-->
                
            	</div><!--rammecontent-->
        
        </div><!--rammemiddle-->
            
            
        </div><!--sideframewrapper-->
    	
        <div id="framebottom">
        </div><!--framebottom-->
    
    </div><!--frame-->

</div><!-- master -->



</body>
</html>
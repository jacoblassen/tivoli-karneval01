<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kontakt os</title>
<link rel="stylesheet" href="cssreset.css" type="text/css" />
<link rel="stylesheet" href="stylesheet.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT' rel='stylesheet' type='text/css'>
<script src="javascript.js" type="text/javascript"></script>
</head>

<body>
<div id="top"></div>
<?php
	include 'tilmeld.html';
?>
<?php
	include 'header.html'
?>

<script type="text/javascript">
    	var id = "kontakt";
    	document.getElementById(id+'A').style.display = "block";
</script>

<?php
	include 'lady.html'
?>
<div id="master">
  <div id="frame">
		<div id="frametop">
        	<div class="frametophtag">
            	<h1>Kontakt Tivoli</h1>
            </div><!--frametophtag-->
        </div><!--frametop-->
        <div id="sideframewrapper">
        
        <div id="rammemiddle">
        
        	<div class="rammecontent">
            	<div id="contactform">
            		<form name="input" action="email.php" method="post">
                    <p>Dit navn:</p><input type="text" name="custname">
                    <br />
					<p>Din egen e-mail:</p><input type="text" name="custemail">
                    <br />
                    <p>Indhold:</p><textarea rows="4" cols="53" name="message"></textarea>
                    <br />
					<input type="submit" value="Send">
					</form>
                </div><!--contactform-->
            </div><!--rammecontent-->
            
            <hr class="hrgolden" />
            
        	<div class="rammecontent">
            	<div class="contactwrapper">
               		<div class="contactimage1">
                		<img src="images/285414_150347188373799_4268644_n.jpg" height="150px" width="150px" />
                	</div><!--contactimage-->
                	<div class="contacttext1">
                    	<h1>Patrick Brockmann</h1>
                        <p>Underdirektør, Markedsføring.</p>
                        <p>4875 8957</p>
                        <a href="mailto:pabr@tivoli.dk"><p>pabr@tivoli.dk</p></a>
                	</div><!--contacttext-->
                </div><!--contactwrapper-->
            </div><!--rammecontent-->
            
            <hr class="hrgolden" />
            
          <div class="rammecontent">
            	<div class="contactwrapper">
                	<div class="contacttext2">
                    	<h1>Jens Peter Schandorff</h1>
                        <p>Strategisk Kommerciel Ansvarlig.</p>
                        <p>5265 4585</p>
                        <a href="mailto:Jps@tivoli.dk"><p>Jps@tivoli.dk</p></a>
                	</div><!--contacttext-->
                    <div class="contactimage2">
                		<img src="images/577900_10200102803360939_1627181608_n.jpg" height="150px" width="150px" />
                	</div><!--contactimage-->
                </div><!--contactwrapper-->
            </div><!--rammecontent-->
            
            <hr class="hrgolden" />
            
            <div class="rammecontent">
            	<div class="contactwrapper">
               		<div class="contactimage1">
                		<img src="images/311_24572588340_8483_n.jpg" height="150px" width="150px" />
                	</div><!--contactimage-->
                	<div class="contacttext1">
                    	<h1>Mike Simony</h1>
                        <p>Key Account Manager.</p>
                        <p>5975 5274</p>
                        <a href="mailto:Misi@tivoli.dk"><p>Misi@tivoli.dk</p></a>
                	</div><!--contacttext-->
                </div><!--contactwrapper-->
            </div><!--rammecontent-->
            
            <hr class="hrgolden" />
            
            <div class="rammecontent">
            	<div class="contactwrapper">
                	<div class="contacttext2">
                    	<h1>Jacob Lassen</h1>
                        <p>Direktør for Sikkerhed.</p>
                        <p>8924 3548</p>
                        <a href="mailto:Jala@tivoli.dk"><p>Jala@tivoli.dk</p></a>
                    </div><!--contacttext-->
                    <div class="contactimage2">
                		<img src="images/16954_390441190073_1680772_n.jpg" width="150px" />
                	</div><!--contactimage-->
                </div><!--contactwrapper-->
            </div><!--rammecontent-->
            
        </div><!--rammemiddle-->
            
        </div><!--sideframewrapper-->
    	<div id="framebottom">
        	<div id="tiltoppen">
        		<a href="#top"><p>Tilbage til toppen</p></a>
        	</div><!--tiltoppen-->
        </div>
    </div>
</div><!-- master -->
	

</body>
</html>
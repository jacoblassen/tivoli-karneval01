<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Tivoli Karneval</title>
		<link rel="stylesheet" href="cssreset.css" type="text/css" />
		<link rel="stylesheet" href="stylesheet.css" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Old+Standard+TT' rel='stylesheet' type='text/css' />
        <link href="css/quake.slider.css" rel="stylesheet" type="text/css" />
        <link href="skins/plain/quake.skin.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
    	<script src="js/quake.slider-min.js" type="text/javascript"></script>
    	<script src="javascript.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function () {
            $('.quake-slider').quake({ effects: ['linearPealReverse', 'slideIn', 'explodeFancy', 'chopDimensions'],
                thumbnails: true,
                captionOpacity: '0.3',
				pauseTime: 10000,
				captionOpacity: 0.7,
				 captionsSetup: [
                                {
                                    "orientation": "right",
                                    "slides": [0, 1, 2, 3],
                                    "callback": captionAnimateCallback
								}
                               ]
				
            });
			function captionAnimateCallback(captionWrapper, captionContainer, orientation) {
               captionWrapper.css({ left: '-990px' }).stop(true, true).animate({ left: 0 }, 500);
               captionContainer.css({ left: '-990px' }).stop(true, true).animate({ left: 0 }, 500);
           }
		   	function captionAnimationCallback1(captionWrapper, captionContainer, orientation) {
               captionWrapper.css({ top: '-330px' }).stop(true, true).animate({ top: 0 }, 500);
               captionContainer.css({ top: '-330px' }).stop(true, true).animate({ top: 0 }, 500);
           }
        });
    	</script>
	</head>

	<body>
    	<div id="top">
    	</div>
	

	
		<?php
			include 'tilmeld.html';
			include 'header.html';
		?> 
    
    	<script type="text/javascript">
    		var id = "index";
    		document.getElementById(id+'A').style.display = "block";
    	</script>
    
   		<?php
			include 'lady.html'
		?>
    	<div id="master">
			<div id="featherdiv">    	
            	<div class="quake-slider">
                	<div class="quake-slider-images">
                    	<a href="#linkkatten"><img src="images/fastelavn01.jpg" alt="Slå katten af tønden for de små, i Tivoli." /></a>
                    	<a href="#linkaarskort"><img src="images/tivoliaarskort.jpg" alt="Tilmeld dig karnevalsfesten i Tivoli med chance for at vinde 2 Tivoli årskort." /></a>
                    	<a href="#linkcostume"><img src="images/costumes01.jpg" alt="Kom og vær udklædt til Tivolis karneval, der er flotte priser at vinde." /></a>
                    	<a href="#linkudklaedning"><img src="images/udklaedning03.jpg" alt="Tivoli har indgået samarbejde med Udklaedning.dk" /></a>
                </div><!--quake-slider-images-->
                
                <div class="quake-slider-captions quake-slider-caption-container">
                    <div class="quake-slider-caption">
                    	<h1>Nyhed</h1>
                       	<p class="p1"> - Slå katten af tønden for de små!</p>
                       	<br />
                       	<p class="p1"> - Bliv årets kattekonge og kattedronning i Tivoli</p>
                	</div><!--quake-slider-caption-->
                	<div class="quake-slider-caption">
                    	<h1>Konkurrence</h1>
                        <br />
                        <p class="p1"> - Tilmeld dig Tivolis karneval og vær med i lodtrækningen af gratis årskort!</p>
                    </div><!--quake-slider-caption-->
                    <div class="quake-slider-caption">
                        <h1>Vind</h1>
                        <p class="p1"> - Pris for de bedst udklædte!</p>
                        <br />
                        <p class="p1"> - Kom og vær klædt ud og vind fede premier!</p>
                    </div><!--quake-slider-caption-->
                    
                     </div><!--quake-slider-caption-->
                    <div class="quake-slider-caption">
                        <h1>Udklaedning.dk</h1>
                        <p class="p1"> - Spar penge på kostumer hos Udklaedning.dk</p>
                        <br />
                        <p class="p1"> - Op til 20% rabat hos Udklaedning.dk.</p>
                    </div><!--quake-slider-caption-->
                	</div><!--quake-slider-captions quake-slider-caption-container-->
                
           	
    	</div><!--featherdiv-->
	
		
        
          <div id="frame">
                <div id="frametop">
                	<div class="frametophtag">
            			<h1>Slå katten af tønden</h1>
           			</div><!--frametophtag-->
                </div><!--frametop-->
                
                    <div id="sideframewrapper">
                    
                        <div id="rammemiddle">
                        
                        <div id="linkkatten"></div>
                        	<div class="nyhedwrapper">
                            	<div class="nyhedimage"><img src="images/fastelavn02.jpg" alt="Slå katten af tønden i Tivoli." />
                                </div><!--nyhedimage-->
                                
                                <div class="nyhedtext">
                                	<p>Fastelavn er en gammel tradition i Danmark og en tid, hvor børn klæder sig ud og har det sjovt. Vi, her i Tivoli, vil gerne være med til at fejre traditionen ved at invitere til at slå katten af tønden.</p>
                                	<br />
                                
                                	<p>Der er nye tønder med slik, fest og farver, hver dag klokken 13.30-14.30 foran koncertsalen.</p>
                                
                                	<br />
                                
                                	<p>Så hvis du har et eller flere børn mellem 5-10år, så vil i være mere end velkomne til at deltage. Kom og vær med og bliv konge eller dronning for en dag, i Tivoli.</p>
                                
                                	<div class="timestamp">
                                    	<p>Dato 16.12.2012</p>
                                    </div><!--timestamp-->
                                </div><!--nyhedtext-->
                            </div><!--nyhedwrapper-->
                
                			<hr class="hrgolden" />
                			
                			<div id="linkaarskort"></div>
                            
                            <div class="nyhedheadline">
                            <h1>Deltag og vind!</h1>
                            </div><!--nyhedheadline-->

                        	<div class="nyhedwrapper">
                            	<div class="nyhedimage" onclick="tilmeldOpen()"><a href="#"><img src="images/tivoliaarskort02.jpg" alt="Vind et årskort til Tivoli" /></a>
                                </div><!--nyhedimage-->
                                
                                <div class="nyhedtext">
                                	<p>I forbindelse med karnevallet, afholder vi en konkurrence med chance for at vinde 2 årskort. Der vil blive trukket lod hver uge op til karnevallet d. 7-10. Feb. Så jo før du tilmelder dig, jo større er chancen for at vinde et års eventyr i Tivoli.</p>
                                	<br />
                                	<p>Deltag i konkurrencen ved at trykke på fanen ude i højre side, eller billedet ovenfor.</p>
                                	
                                
                                	<div class="timestamp">
                                    	<p>Dato 10.12.2012</p>
                                    </div><!--timestamp-->
                                </div><!--nyhedtext-->
                                
                            </div><!--nyhedwrapper-->
                            
                            <hr class="hrgolden" />
                            
                            <div id="linkcostume"></div>
                            
                            <div class="nyhedheadline">
                            <h1>Vær udklædt og vind!</h1>
                            </div><!--nyhedheadline-->
                            
                            <div class="nyhedwrapper">
                            	<div class="nyhedimage"><img src="images/costumes02.jpg" alt="Kom udklædt til karneval i Tivoli og vind!" />
                                </div><!--nyhedimage-->
                                
                                <div class="nyhedtext">
                                	
                                    <p>Vi håber at se så mange, som overhovedet muligt, være udklædt ved vores karneval. Vi håber at i vil gøre lige så meget ud af festen, som vi vil, for så bliver det et brag af et karneval.</p>
                                    <br />
                                    
                                    <p>Vi vil dog ikke nægte adgang til folk uden kostumer, men vi opfordre jer til at slippe jer løs og være med.</p>
                                    
                                    <br />
                                    
                                    <p>Kom udklædt til karnevallet og få din entrébillet til 50%.</p>
                                    
                                	<div class="timestamp">
                                    	<p>Dato 07.12.2012</p>
                                    </div><!--timestamp-->
                                </div><!--nyhedtext-->
                            </div><!--nyhedwrapper-->
                            
                            <hr class="hrgolden" />
                            
                            <div id="linkudklaedning"></div>
                            
                            <div class="nyhedheadline">
                            <h1>Tivoli og Udklaedning.dk</h1>
                            </div><!--nyhedheadline-->
                            
                            <div class="nyhedwrapper">
                            	<div class="nyhedimage"><a href="http://www.udklaedning.dk" target="_blank"><img src="images/udklaedning02.jpg" alt="Kom udklædt til karneval i Tivoli og vind!" /></a>
                                </div><!--nyhedimage-->
                                
                                <div class="nyhedtext">
                                	<p>Tivoli har indgået et samarbejde med Udklaedning.dk. Det har vi gjort for at gøre det nemt og billigt for dig, at få inspiration til et kostume, eller købe et fra deres webshop.</p>                        
                                    
                                	<div class="timestamp">
                                    	<p>Dato 01.12.2012</p>
                                    </div><!--timestamp-->
                                </div><!--nyhedtext-->
                            </div><!--nyhedwrapper-->
                            
                            
        						
        					
                
                		</div><!--rammemiddle-->
                    
               		</div><!--sideframewrapper-->
                
                	<div id="framebottom">
                    <div id="tiltoppen">
        							<p><a class="tilTop" href="#top">Tilbage til toppen</a></p>
        						</div><!--tiltoppen-->
                	</div><!--framebottom-->
            
          </div><!--frame-->

    </div><!--master-->
        
	</body>
</html>

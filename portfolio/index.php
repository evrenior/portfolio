<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dzianis Zhaunerchyk | LAMP Stack Developer </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../img/favicon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../img/favicon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../img/favicon-72.png">
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../img/favicon-57.png">
        <link rel="icon" sizes="32x32"  href="./img/favicon-32.png">
        <link rel="stylesheet" href="../css/fakeLoader.css">
        <link rel="stylesheet" type="text/css" href="../css/normalize.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
        <script type="text/javascript" src="../js/fakeLoader.min.js"></script>
        <script type="text/javascript" src="../js/tether.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/main.js"></script>
        <script type="text/javascript" src="../js/validator.js"></script>
   </head>
   <body>
      <div id="fakeLoader"></div>
      <div class="container">
         <div class="row p-y-2 row-blue row-full ">
            <div id="content-sidebar"class="container" >
               <div id="sidebar" class="hidden-md-down col-md-4 col-lg-4 col-xl-6 ">
	      <img src="../img/denis.jpg" class="img-fluid img-rounded" alt="Dzianis Zhaunerchyk Photo" >
               </div>
               <div id="content" class="col-xs-12 col-sm-12 col-md-12 col-md-8 col-lg-8 col-xl-6 text-justify">
	      <div class=" h3 text-xs-center p-y-2" style="font-size: 3.75rem; min-width:100%;">
                     Hire Dzianis...
	      </div> 
	      <div>
	         <form id="contact-form" method="post"  role="form">
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group">
	                            <label for="form_name">Firstname *</label>
	                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
	                            <div class="help-block with-errors"></div>
	                        </div>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="form-group">
	                            <label for="form_lastname">Lastname *</label>
	                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
	                            <div class="help-block with-errors"></div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	            <div class="col-md-6">
	                <div class="form-group">
	                    <label for="form_email">Email *</label>
	                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
	                    <div class="help-block with-errors"></div>
	                </div>
	            </div>
	            <div class="col-md-6">
	                <div class="form-group">
	                    <label for="form_phone">Phone</label>
	                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
	                    <div class="help-block with-errors"></div>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-md-12">
	                <div class="form-group">
	                    <label for="form_message">Message *</label>
	                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
	                    <div class="help-block with-errors"></div>
	                </div>
	            </div>
	            <div class="col-md-12">
	                <input type="submit" class="btn btn-success btn-send" value="Send message">
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-md-12">
	                <p class="text-muted"><strong>*</strong> These fields are required.</p>
	            </div>
	        </div>
	    </div>
	</form>
        </div>
    </div>	
</div>	
</div>
<div class="row p-y-2 row-green row-full">
    <div class="container">
        <div class="row">
    <div class="col-xl-12 text-justify">
        <div class="h2 m-b-2">EXPERIENCE</div>      
        <?php require_once("./experience/tantor.php");?>
    </div>  
</div>
<div class="row">
    <div class="col-xl-12 text-justify">        
        <?php require_once("./experience/staples.php");?>
    </div>                      
</div>
<div class="row">
    <div class="col-xl-12 text-justify">        
        <?php require_once("./experience/wisemarketingct.php");?>
    </div>                      
</div>
<div class="row">
    <div class="col-xl-12 text-justify">        
        <?php require_once("./experience/basecards.php");?>
    </div>                      
</div>
<div class="row">
    <div class="col-xl-12 text-justify">        
        <?php require_once("./experience/spts.php");?>                      
    </div>                      
</div>
<div class="row">
    <div class="col-xl-12 text-justify">
        <?php require_once("./experience/nesovru.php");?>                       
    </div>                      
</div>  
<div class="row">
    <div class="col-xl-12 text-justify">
        <?php require_once("./experience/maccommunity.php");?>                      
    </div>                      
</div>  
<div class="row">
    <div class="col-xl-12 text-justify">
        <?php require_once("./experience/kniki.php");?>                     
    </div>                      
</div>
<div class="row">
	<div class="col-xl-12 text-justify">
		<?php require_once("./experience/epam.php");?>						
	        </div>						
                </div>										
            </div>
        </div>
        <div class="row p-y-2 row-yellow row-full">
            <div class="container">
	    <div class="col-xs-12 text-justify">
	        <h2>
	            PROJECTS
	        </h2>
	        <p class="h3 centered" style="width: 100%; text-align:center;"> Coming soon...</p>
	    </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
       (function ($) {
           $("#fakeLoader").fakeLoader({			
               timeToHide:1800, //Time in milliseconds for fakeLoader disappear
               zIndex:999, // Default zIndex
               spinner:"spinner4",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7' 
               bgColor:"#1A1A1A", //Hex, RGB or RGBA colors           
           });
        }(jQuery));
    </script>
</body>
</html>
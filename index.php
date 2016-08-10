<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
        <link rel="stylesheet" href="./css/fakeLoader.css">
        <script src="./js/fakeLoader.min.js"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/font-awesome.css">    
        <!-- Custom CSS -->
        <link rel="stylesheet" href="./css/style.css">
    </head>
  <body>
  <div id="fakeLoader"></div>
    <section id="cover">
        <div id="cover-caption">
            <div class="container">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="display-2">DZ</div>
                    <p>Thank you for coming to my personal page. Here you will find the most interesting and recent  examples of my work and projects in Frontend and Backend development.</p>
                        <a href="./portfolio" type="button" class="btn btn-success btn-lg ">PORTFOLIO  <i class="fa fa-arrow-right"></i></a>          
                </div>
            </div>
        </div>
    </section>
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="./js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $("#fakeLoader").fakeLoader({           
                timeToHide:2000, //Time in milliseconds for fakeLoader disappear
                zIndex:999, // Default zIndex
                spinner:"spinner4",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7' 
                bgColor:"#1A1A1A", //Hex, RGB or RGBA colors
                //imagePath:"../img/page-loader.gif" //If you want can you insert your custom image            
        });
    </script>
  </body>
</html>













<?php

//require_once 'conectarBd.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Blog articulando">
    <link rel="icon" type="image/x-icon" href="img/icon.png">
	<title>Blog Articulei - Contato</title>


     <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107394088-1"></script> 
    <!-- Facebook Pixel Code -->
      <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '323209771475770');
      fbq('track', 'PageView');
    </script> 
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=323209771475770&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments)};
      gtag('js', new Date());

      gtag('config', 'UA-107394088-1');
    </script>


	<!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="fonts/Bariol.ttf" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> <!-- load jquery via CDN -->
    <script src="js/style.js"></script> <!-- load our javascript file -->

    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <link href="fonts/Bariol.ttf" rel="stylesheet">

</head>

<body>
<header>

<header>

<nav class="navbar navbar-default">
      <div class="container clear">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span style="background-color:#00756b;" class="sr-only">Menu</span>
            <span style="background-color:#00756b;" class="icon-bar"></span>
            <span style="background-color:#00756b;" class="icon-bar"></span>
            <span style="background-color:#00756b;" class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img style="max-width:50px; margin-top: -25px;" src="img/teste.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">HOME</a></li>
              <li><a href="sobre.php">SOBRE</a href="sobre.php"></li>
              <li class="active"><a href="contato.php">CONTATO</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
</header>

    <div class="contato">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-6">
                  <img src="img/MarcaRedonda.png" class="img-responsive">
                  
              </div>
              <div class="col-lg-6 colg-md-6" style="margin-top: 35px;">
                    <p id="text_contato">
                    Gostou do nosso conteúdo?<br> 
                    Gostaria de fazer uma sugestão?<br>  
                    Ou até mesmo uma reclamação?<br><br>  
                    <A href="https://www.facebook.com/articulei" text-decoration:none; color:none; title="Pequena Descrição">Clique aqui</A> para curtir a nossa página no facebook e ficar por dentro de todas as novidades do blog<br> <br> 

                    Você também pode enviar a sua crítica ou elogio. Teremos o maior prazer em receber o seu feedback<br> 
                    Um abraço.<br> 
                    Equipe Articulei.<br> <br> 
              </div>
          </div>
      </div>

        <!--Rodapé-->
    <div class="container-fluid">
        <div class="row" style="margin-top: 15px;text-align: center; background-color: black; min-height:130px; background: rgba(0,0,0,0.5);">
            <h5 style="color: white; font-size: 17px;">Curtiu saber mais sobre a gente? \o/</h5>
            <h3 style="color: white;">Entre para nossa lista e receba um infográfico incrível e conteúdos com exclusividade</h3>
            <form action="armazenamento.php" method="POST" >
                <div class="col-md-3 col-md-offset-3 " >
                    <div class="input-group" style="min-width: 300px">
                        <input type="text" class="form-control" name="nome" placeholder="Nome completo" required style="border-radius: 5px; margin-bottom: 5px;">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group" style="min-width:300px">
                        <input type="email" class="form-control" name="email" placeholder="Email" required style="margin-bottom: 5px;">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit" style="color:#7F7F7F; background-color:#FFE000;margin-bottom: 5px;"><strong>Quero receber</strong></button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <img id="divCorpo" class="img-responsive" width="20">
    <div id="obrigado"></div>
    </div> 
        <div class="copyright">
            <div class="container">
                <div class="row text-center">
                        <p>Copyright © 2017 All rights reserved</p>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
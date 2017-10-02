<?php

require_once 'conectarBd.php';

?>


<!DOCTYPE html>
<html>
<head>
     <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107394088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments)};
      gtag('js', new Date());

      gtag('config', 'UA-107394088-1');
    </script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Blog articulando">
    <link rel="icon" type="image/x-icon" href="img/icon.png">
	<title>Blog Articulei</title>

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

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> <!-- load jquery via CDN -->
    <script src="js/style.js"></script> <!-- load our javascript file -->
</head>
<body>
    <header>
    <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: -20px; min-height:82px;">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="index.php">
                    <img src="img/articulei_logo.png" class="img-responsive" width="60">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="menu">
                <!-- Left Side Of Navbar -->
                <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" style="margin-right: 100px;">
                        <ul class="nav navbar-nav" style="margin-top: 20px;">
<!--                             <li class="active">
                                <a href="#"><span>Saiba Mais</span></a>
                            </li> -->
                            <li class="active"><a href="#">HOME</a></li>
                            <li><a href="#">SOBRE</a></li>
                            <li><a href="#">CONTATO</a></li>
                        </ul>
                    </ul>
            </div>
        </div>
    </nav>
</header>
<div class="jumbotron">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5" style="margin-top: 100px;">
                <h3 style="font-family:">Conhecer <b>dicas de aprimoramento</b>
                pessoal me trouxe <b>confiança</b> e agora
                é mais fácil me apresentar publicamente</h3>
                <p id="p_capa">Biana Kiestn</p>
            </div>
            <div class="col-md-6">
                <img src="img/efeito-marca.png" class="img-responsive" width="1000">
            </div>
        </div>
            <div class="row" style="margin-top: 20px;text-align: center; background-color: black; min-height:130px; opacity: 0.6">
                <h5>QUER ADQUIRIR CADA VEZ MAIS CONHECIMENTO?</h5>
                <h3>Cadastre-se e não perca nenhum de nossos conteúdos</h3>
                <form action="armazenamento.php" method="POST">
                    <div class="col-md-4 col-md-offset-3">
                        <div class="input-group">
                            <input type="text" class="form-control" name="nome" placeholder="Nome">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="input-group">
                            <input type="text" class="form-control" name="email" placeholder="email">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="submit" style="color:white; font-weight: 300;">Enviar</button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
           <div id="obrigado"></div>
    </div>
</div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
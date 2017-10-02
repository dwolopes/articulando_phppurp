<?php

require_once 'conectarBd.php';

?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Blog articulando">
    <link rel="icon" type="image/x-icon" href="img/icon.png">
	<title>Blog articulando</title>

	<!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> <!-- load jquery via CDN -->
    <script src="js/style.js"></script> <!-- load our javascript file -->
</head>
<body>
    <header>
    <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: -20px;">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <!-- Right Side Of Navbar -->
                <div class="row">
                    <div class="col-md-6">
                        <ul class="nav navbar-nav">
                            &nbsp;
                            &nbsp;
                            &nbsp;
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="#"><span>Saiba Mais</span></a>
                            </li>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Sobre</a></li>
                            <li><a href="#">Contato</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="jumbotron">
    <div class="container-fluid">
        <div class="row">
            <h3>Conhecer dicas de aprimoramento<br>
            pessoal me trouxe confiança e agora<br> 
            é mais fácil me apresentar publicamente</h3>
            <div class="col-md-6 col-md-offset-6">
                <img src="img/efeito-marca.png" class="img-responsive">
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
    </div>
</div>
</body>
</html>
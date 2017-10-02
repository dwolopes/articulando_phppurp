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
</head>
<body>
    <header>
    <nav class="navbar navbar-default navbar-static-top">
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
    <h3>Conhecer dicas de aprimoramento<br>
    pessoal me trouxe confiança e agora<br> 
    é mais fácil me apresentar publicamente</h3> 
    <div class="row">
        <div class="col-md-12">
            <form class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Seu nome">
                </div>
                <div class="form-group input-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Seu endereço de e-mail">
                    <div class="input-group-btn">
                        <button class="btn btn-default btn-submit" type="submit">
                            Enviar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
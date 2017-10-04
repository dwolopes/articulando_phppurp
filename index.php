<?php

//require_once 'conectarBd.php';

?>

<!DOCTYPE html>
<html>
<head>
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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> <!-- load jquery via CDN -->
    <script src="js/style.js"></script> <!-- load our javascript file -->

    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="fonts/Bariol.ttf" rel="stylesheet">

</head>

<body>
<header>


    <nav class="navbar navbar-default navbar-static-top" style="min-height: 70px;">
        <div class="container clear">
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
                    <img src="img/articulei_logo.png" class="img-responsive" width="60" >
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
<div class="jumbotron img-responsive" style="border: 2px solid black;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6" style="margin-top: 100px;">
                <h3 style="font-family:'Montserrat', sans-serif; color: white; margin-left: 100px;">Conhecer <b>dicas de aprimoramento</b>
                pessoal me trouxe <b>confiança</b> e agora
                é mais fácil me apresentar publicamente</h3>
                <p id="p_capa">Biana Kiestn</p>
            </div>
            <div class="col-md-6">
                <img src="img/efeito-marca.png" class="img-responsive" width="1000">
            </div>
        </div>
        <div class="row" style="margin-top: 15px; background: rgba(0,0,0,0.5); text-align: center; min-height:130px;">
            <h5 style="color: white;">QUER ADQUIRIR CADA VEZ MAIS CONHECIMENTO?</h5>
            <h3 style="color: white;">Cadastre-se e não perca nenhum de nossos conteúdos</h3>
            <form action="armazenamento.php" method="POST" >
                <div class="col-md-4 col-md-offset-3 " >
                    <div class="input-group" style="width: 300px">
                        <input type="text" class="form-control" name="nome" placeholder="Nome completo">
                    </div>
                </div>

                <div class="col-md-5 ">
                    <div class="input-group" style="width:300px">
                        <input type="email" class="form-control" name="email" placeholder="Email">
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

    <!--Corpo do Blog-->
    <!--Postagem Destaque-->
    <div class="row">
        <div class="col-md-12">
            <section class="postagens">
                <div class="container">
                    <div class="row" style="margin-top: 20px;text-align: center; min-height:130px">
                        <div class="col-lg-5  col-md-5 col-sm-5 col-xs-12">
                            <a href="dicas-discurso-envolvente.php">
                                <img  src="https://imageshack.com/i/pnPlEfg3p" class="img-responsive" min-width="100%">
                            </a>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <a href="dicas-discurso-envolvente.php">
                                <h1 style="font-family: 'Montserrat', sans-serif;">5 dicas infalíveis para deixar seu discurso cada vez mais envolvente</h1>
                            </a>
                            <h4 style="font-family: 'Montserrat', sans-serif;">Você sabia que um dos maiores medos da Humanidade é falar em público?
                                Acidentes de trânsito, morte, aranhas e falar em público. Esta é a ordem dos quatro maiores medos[...] 
                            </h4>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>    

    <!--segunda postagem-->
    <section class="postagens">
        <div class="container">
            <hr>
            <div class="row" >
                                        
                <div class="col-lg-4  col-md-4 col-sm-4 col-xs-12">
                    <a href="marketing-bicho-7cabecas.php">
                        <img src="https://imageshack.com/i/pmqIMGeAp" class="img-responsive" width="280"  style=" margin-left:60px">
                    </a>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <a href="marketing-bicho-7cabecas.php">
                        <h3 style="font-family: 'Montserrat', sans-serif;">Marketing pessoal, o bicho de 7 cabeças</h3>
                    </a>
                    <h5 style="font-family: 'Montserrat', sans-serif;">Marketing pessoal pode parecer um bicho de 7 cabeças para algumas pessoas,  mas estou aqui para provar para você que não é bem assim. Com apenas algumas boas práticas já dá para perceber[...] 
                    </h5>
                </div>
            </div>
        </div>
    </section>


    <!--terceira postagem-->
    <section class="postagens">
        <div class="container">
            <hr>
            <div class="row" >
                                        
                <div class="col-lg-4  col-md-4 col-sm-4 col-xs-12">
                    <a href="influenciar-dicas.php">
                        <img src="https://imageshack.com/i/pmKdXnWOp" class="img-responsive" width="280" style=" margin-left:60px">
                    </a>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <a href="influenciar-dicas.php">
                        <h3 style="font-family: 'Montserrat', sans-serif;">Quer influenciar pessoas? Então essas dicas são pra você.</h3>
                    </a>
                    <h5>Para que as pessoas gostem mais de você, um conjunto de princípios essenciais deve ser seguido. São dicas simples que, quando aplicadas, fazem com que você seja mais admirado[...] 
                    </h5 style="font-family: 'Montserrat', sans-serif;">
                </div>
            </div>
        </div>
    </section>

    <!--quarta postagem-->
   <!-- <section class="postagens">
        <div class="container">
            <hr>
            <div class="row" >
                                        
                <div class="col-lg-6  col-md-12 col-sm-12 col-xs-12">
                    <a href="post2/marketing-bicho-7cabecas.php">
                        <img src="post2/2_lista.png" class="img-responsive" max-width="500">
                    </a>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <a href="post2/marketing-bicho-7cabecas.php">
                        <h1>Marketing pessoal, o bicho de 7 cabeças</h1>
                    </a>
                    <h4>Marketing pessoal pode parecer um bicho de 7 cabeças para algumas pessoas,  mas estou aqui para provar para você que não é bem assim. Com apenas algumas boas práticas já dá para perceber[...] 
                    </h4>
                </div>
            </div>
        </div>
    </section>
-->
    <!--quinta postagem-->
   <!-- <section class="postagens">
        <div class="container">
            <hr>
            <div class="row" >
                                        
                <div class="col-lg-6  col-md-12 col-sm-12 col-xs-12">
                    <a href="post2/marketing-bicho-7cabecas.php">
                        <img src="post2/2_lista.png" class="img-responsive" max-width="500">
                    </a>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <a href="post2/marketing-bicho-7cabecas.php">
                        <h1>Marketing pessoal, o bicho de 7 cabeças</h1>
                    </a>
                    <h4>Marketing pessoal pode parecer um bicho de 7 cabeças para algumas pessoas,  mas estou aqui para provar para você que não é bem assim. Com apenas algumas boas práticas já dá para perceber[...] 
                    </h4>
                </div>
            </div>
        </div>
    </section>

-->



    <!--Rodapé-->
    <div class="row">
        <div class="search-text"> 
            <div class="container">
                <div class="row text-center">
                    <div class="form-inline">
                        <h5>Quer adquirir cada vez mais conhecimento?</h5>
                        <h4 class="cham">Cadastre-se e seja sempre o primeiro a receber as novidades</h4>
                        <form action="armazenamento.php" method="POST" >
                            <div class="col-md-4 col-md-offset-3">
                                <div class="input-group" style="width: 300px">
                                    <input type="text" class="form-control" name="nome" placeholder="Nome completo">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="input-group" style="width:300px">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
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
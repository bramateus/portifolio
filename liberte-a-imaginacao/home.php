<?php
require_once('includes/config.php');

$btninscrevase = "ENVIAR";
$btnaguarde = "ENVIANDO SOLICITAÇÃO...";
$topoformulario = "<span style='font-size: 32px; text-align:left; font-family: rounded'>ASSINE JÁ</span><br><span style='font-size: 22px; text-align:left'></span><span style='font-size:14px; font-family: rounded'>Basta preencher o formulário abaixo para demonstrar seu interesse.</span>";
$btnregulamento = "";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Google Tag Manager -->
    <!-- End Google Tag Manager -->
    <!-- <?php /* echo $rowsun['instituicao_tagmanager_head'] */; ?>  -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="cache-control" content="public">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">

    <title>Doce Leitura</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="distribution" content="global">
    <meta name="rating" content="General">
    <meta name="language" content="pt-br">
    <meta name="url" content="">
    <meta name="doc-class" content="completed">
    <meta name="doc-rights" content="public">
    <meta name="autor" content="">
    <meta name="company" content="">
    <meta name="revisit-after" content="1">
    <meta property="og:image" content="fully_qualified_image_url_here" />
    <link rev="made" href="">
    <link rel="canonical" href="https://promocao.doceleitura.com.br/como-lidar-com-ciumes-entre-irmaos/">

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/lpbootstrap.min.css" rel="stylesheet">

    <!-- Medias -->
    <link href="css/media-geral.css" rel="stylesheet">
    <link href="css/media-xsss.css" rel="stylesheet" media="(min-width: 1px) and (max-width: 320px)">
    <link href="css/media-xss.css" rel="stylesheet" media="(min-width: 321px) and (max-width: 375px)">
    <link href="css/media-xs.css" rel="stylesheet" media="(min-width: 376px) and (max-width: 425px)">
    <link href="css/media-sm.css" rel="stylesheet" media="(min-width: 426px) and (max-width: 767px)">
    <link href="css/media-md.css" rel="stylesheet" media="(min-width: 768px) and (max-width: 991px)">
    <link href="css/media-mdd.css" rel="stylesheet" media="(min-width: 992px) and (max-width: 1199px)">
    <link href="css/media-lg.css" rel="stylesheet" media="(min-width: 1200px) and (max-width: 1440px)">
    <link href="css/media-xl.css" rel="stylesheet" media="(min-width: 1441px)">
    <link href="css/style.css" rel="stylesheet" media="(min-width: 1441px)">

    <!-- Fontawesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
</head>
<body>




<!-- LP -->
<!-- FORMULÁRIO -->

<div class="box" id="form-box" style="border: solid 5px #a90d4d;  padding: 8px; border-radius: 9px; background-clip: content-box; background-color: #a90d4d;  /*line-height: 1.5;*/ border-top-right-radius: 25px; border-top-left-radius: 25px; border-bottom-left-radius: 25px; border-bottom-right-radius:25px; ">

    <button class="btn btn-warning btn-sm btn-close"><i class="fa fa-close fa-fw"></i></button>
    <p class="text-uppercase text-light"><?php echo $topoformulario; ?></p>
    <form action="formulario.php" method="post">
        <div class="form-group">
            <input type="text" name="NomeCompleto" class="form-control" placeholder="Digite seu nome:" required>
        </div>
        <div class="form-group">
            <input type="email" name="Email" class="form-control" placeholder="E-mail que lê:" id="myEmail" required>
        </div>
        <div class="form-group">
            <input type="text" name="Cidade" class="form-control" placeholder="Cidade:"  required>
        </div>

        <div class="form-group">
            <select class="form-control" name="kit" title="" required>
                <option value="">Kit de Interesse?</option>
                <option value="Pacote 1 - 4 livros" >Pacote 1 - 4 Livros</option>
                <option value="Pacote 2 - 7 livros" >Pacote 2 - 7 Livros</option>
                <option value="Pacote 3 - 10 livros" >Pacote 3 - 10 Livros</option>

            </select>
        </div>

        <div class="form-group">
            <select class="form-control" name="ComoConheceu" title="" required>
                <option value="">Como nos conheceu?</option>
                <option value="Facebook" >Facebook</option>
                <option value="Instagram">Instagram</option>
                <option value="Vi em um site">Vi em um site</option>
                <option value="Pesquisei no Google">Pesquisei no Google</option>
                <option value="Recebi um SMS">Recebi um SMS</option>
                <option value="Indicação de Amigo">Indicação de Amigo</option>
                <option value="Conversei com um vendedor externo">Conversei com um vendedor externo</option>
                <option value="Outdoor">Outdoor</option>
                <option value="Faixa">Faixa</option>
                <option value="Panfleto">Panfleto</option>
                <option value="Rádio">Rádio</option>
                <option value="Cartaz">Cartaz</option>
            </select>
        </div>


        <!-- <div style="padding-bottom: 15px"></div> -->

       
        <div class="form-check">
            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                <!-- <input type="checkbox" class="custom-control-input" name="AceiteRegulamento" required> -->
                <!-- <span class="custom-control-indicator"></span> -->
                <!-- <span class="custom-control-description"><a href="<?php echo $btnregulamento; ?>" target="_blank" class="text-light">Clique aqui e leia o regulamento*.</a></span> -->
            </label>
        </div>
        <!-- <div style="padding-bottom: 15px"></div> -->

        <div class="form-group">
            <button id="submit" class="btn btn-hover d-block mx-auto" aria-pressed="true" style="background-color: #f8b133 ;color: #fff; position: absolute; left: 10%;  width: 80%; height: 14%; bottom: -6%; border-radius: 10px">
                <div class="reflexo"></div>
                <span style="color: #000 ;font-size: 1.3em; font-weight: bold;  font-family: rounded" id="inscreva"><?php echo $btninscrevase; ?></span>
                <span id="aguarde"><i class="fa fa-spinner fa-spin fa-fw"></i> <?php echo $btnaguarde; ?></span>
            </button>
        </div>
    </form>
    </div>


<!-- EFEITO DE FUNDO PARA FORMULÁRIO MOBILE -->
<div class="efeito" id="eft"></div>

<!-- CONTEUDO COMPLETO -->
<section class="container-fluid mt-4">
    <!-- DOBRA 1 -->
    <div class="row">

        <div class="scene">
            <div data-offset="40" class="parallax clouds"></div>   
            <div data-offset="80" class="parallax cloud-top"></div>
            <div data-offset="200" class="parallax fly"></div>
        </div>

        <!-- ESPAÇO ESQUERDO SOBRA -->
        <div class="col-xss-2 col-xs-0 col-sm-2 col-md-2 col-mdd-1 col-lg-4 col-xl-1"></div>

        <!-- CONTEUDO -->
        <div class="col-xss-10 col-xs-12 col-sm-9 col-md-8 col-mdd-5 col-lg-4 col-xl-4" id="mobil">
             <img  src="img/conteudo_a.png" class="img-flui ml-2 conteudo-a d-block mx-auto" alt="">
        </div>

        <!-- CONTEUDO B -->
        <div  class="col-xs-0 col-sm-0 col-md-1 col-mdd-3 col-lg-2 col-xl-4">
             <!-- <img src="img/conteudo_b.png" class="img-fluid ml-2 conteudo-b d-block mx-auto" alt=""> -->
        </div>

        <!-- ONDE O FORMULÁRIO IRÁ PASSAR -->
        <div style="" class="col-xs-0 col-sm-0 col-md-0 col-mdd-3 col-lg-2 col-xl-3">
             <img style="position: relative;"  class="img-fluid ml-2 conteudo-a d-block mx-auto" alt="">
        </div>
       
    </div>

    <!-- BOTÃO QUE ABRE O FORMULÁRIO NO MOBILE -->
    <div class="btn-formulario-display">
        <button class="btn btn-success btn-lg d-block mx-auto" id="btn-formulario-a"><?php echo $btninscrevase; ?></button>
    </div>
</section>

<script src="js/jquery.mask.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/api.js"></script>
<!-- <script src="https://unpkg.com/blip-chat-widget" type="text/javascript">
</script>
<script>
    (function () {
        window.onload = function () {
            new BlipChat()
            .withAppKey('bHVjaWFuYTpiOTAzOTJmNi1mOGJkLTQyOWUtYTA1NC00YTg5NzEwM2UyMzM=')
            .withButton({"color":"#BF1E2E","icon":"https://s3-sa-east-1.amazonaws.com/msging.net/Services/Images/a74a202c-20e4-45bf-9969-0640a09e1472"})
            .build();
        }
    })();
</script> -->
</body>
</html>
<?php
require_once("data/info.php");
?>

<!doctype html>
<html lang="pt">
<head>

  <meta http-equiv="pragma" content="no-cache"/>
<meta http-equiv="cache-control" content="no-cache"/>
<meta http-equiv="cache-control" content="must-revalidate"/>
<meta http-equiv="cache-control" content="no-store"/>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

   <link rel="apple-touch-icon" sizes="76x76" href="images/favicon.ico"/>
   <link rel="icon" type="image/png" href="images/favicon.ico"/>
   <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"/>
   <link href="css/now/bootstrap.min.css" rel="stylesheet" />
   <link href="css/now/now-ui-kit.css" rel="stylesheet" />
   <link href="css/now/demo.css" rel="stylesheet" />
   <link href="css/main.css" rel="stylesheet" />

   <title><?=$data['processo']?></title>

   <meta name="keywords" content="<?=$data['palavrasChave']?>">
   <meta name="description" content="<?=$data['descricao']?>">
   <meta itemprop="name" content="<?=$data['processo']?>">
   <meta itemprop="description" content="<?=$data['descricao']?>">
   <meta itemprop="image" content="<?=$data['imagem']?>">
   <meta name="twitter:card" content="product">
   <meta name="twitter:site" content="@UENPOficial">
   <meta name="twitter:title" content="<?=$data['processo']?>">
   <meta name="twitter:description" content="<?=$data['descricao']?>">
   <meta name="twitter:creator" content="<?=$data['sigla']?>">
   <meta name="twitter:image" content="<?=$data['imagem']?>">
   <meta property="og:title" content="<?=$data['processo']?>" />
   <meta property="og:type" content="website" />
   <meta property="og:url" content="<?=$data['url']?>" />
   <meta property="og:image" content="<?=$data['imagem']?>"/>
   <meta property="og:image:secure_url" content="<?=$data['imagem']?>"/>
   
   <meta property="og:description" content="<?=$data['descricao']?>" />
   <meta property="og:site_name" content="<?=$data['processo']?>" />

</head>
<a name="inicio"></a>
<body class="landing-page sidebar-collapse">

<link itemprop="thumbnailUrl" href="<?=$data['imagem']?>"> 
<span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject"> 
  <link itemprop="url" href="<?=$data['imagem']?>"> 
</span>
   <?php require("layout/menu.php"); ?>
   <div class="wrapper">
  
      <!-- <div class="page-header page-header-small  clear-filter">
         <div class="page-header-image" data-parallax="true"></div>
      </div> -->
      <div style="margin-top:60px; background-color: #FFD504; text-align:center;">
         <img src="images/bg-lg.png"/>
      </div>
      <div class="section section-about-us"  style="width: 100%; margin: 0 auto; background-color: #fcfcfc;">
         <div class="container">
            <div class="row">
               <div class="col text-center">
                  <h1 class="title"><?=$data['processo']?></h1>
               </div>
            </div>



<!-- Central Modal Medium Info -->
<div class="modal fade left" id="sideModalTLInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info modal-side modal-top-left" role="document">
    <!--Content-->
    <div class="modal-content">
    <div class="modal-body">
         <center>
      <div>
      <iframe src='https://webchat.botframework.com/embed/vestchatbotservice-bot?s=Pgkm1l8LaNA.mkvrT-2kMIg_HKW34oTVVdMJ_GwuIJM4vo_mrLX21o4'  style='min-width: 400px; width: 100%; min-height: 500px;'></iframe>
    </div>
        </center>
      </div>
      <!--Header-->
      <!--
      <div class="modal-header">
        <p class="heading lead">Chat</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>
        -->

      <!--Body-->
      <!--
      <div class="modal-body">
         <center>
      <div>
        <iframe src='https://webchat.botframework.com/embed/uenpchatbottest-bot-bot?s=_UhBBwiTTJ0.ImVBIZS_CmdCE4IGxF9-T3b2YQJUzdWyyphp1UGO9u4' width="100%" height="100%"></iframe>

    </div>
        </center>
      </div>
        -->

      <!--Footer-->
      <div class="modal-footer justify-content-center">
        <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">Close</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Central Modal Medium Info-->

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#sideModalTLInfo">Chat <i class="far fa-eye ml-1"></i></a>
</div>







           
            <!--
            <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
   <button class="open-button" onclick="openForm()">Chat</button>
   <div class="chat-popup" id="myForm">
  <form  class="form-container">
  <div>
        <iframe src='https://webchat.botframework.com/embed/uenpchatbottest-bot-bot?s=_UhBBwiTTJ0.ImVBIZS_CmdCE4IGxF9-T3b2YQJUzdWyyphp1UGO9u4'></iframe>

    </div>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>   
  </form>
   </div>

        -->
            <div class="row">
               <?php require("layout/inscricoes.php")?>
            </div>
            <div class="separator separator-primary" style="margin-top: 100px;margin-bottom: 100px;"></div>
            <div class="row">
               <div class="col text-center">
                  <?php require("layout/noticias.php")?>
               </div>
            </div>
            <div class="separator separator-primary" style="margin-top: 100px;margin-bottom: 100px;"></div>
            <div class="row">
               <div class="col text-center">
                  <?php require("layout/galeria.php")?>
               </div>
            </div>
            <div class="separator separator-primary" style="margin-top: 100px;margin-bottom: 100px;"></div>
            <div class="row">
               <div class="col text-center">
                  <?php require("layout/publicacoes.php")?>
               </div>
            </div>
            <div class="separator separator-primary" style="margin-top: 100px;margin-bottom: 100px;"></div>
            <div class="row">
               <div class="col text-center">
                  <?php require("layout/orientacoes.php")?>
               </div>
            </div>
            <div class="separator separator-primary" style="margin-top: 100px;margin-bottom: 100px;"></div>
            <div class="row">
               <div class="col text-center">
                  <?php require("layout/cronograma.php")?>
               </div>
            </div>
            <div class="separator separator-primary" style="margin-top: 100px;margin-bottom: 100px;"></div>
            <div class="row">
               <div class="col text-center">
                  <?php require("layout/faleconosco.php")?>
               </div>
            </div>
            <?php require("layout/back_top.php")?>
         </div>
      </div>
      


   </div>

   <?php require("layout/footer.php")?>
   
</body>

<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="js/analytics.js" type="text/javascript"></script>
<script src="js/now/popper.min.js" type="text/javascript"></script>
<script src="js/now/bootstrap.min.js" type="text/javascript"></script>


</html>

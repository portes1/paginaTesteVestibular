<?php
require_once("data/info.php");
$page = "";
if (isset( $_GET['page']))
  $page =  "layout/".$_GET['page'].".php";
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
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
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
   <meta property="og:type" content="page" />
   <meta property="og:url" content="<?=$data['url']?>" />
   <meta property="og:image" content="<?=$data['imagem']?>"/>
   <meta property="og:description" content="<?=$data['descricao']?>" />
   <meta property="og:site_name" content="<?=$data['processo']?>" />

</head>
<a name="inicio"></a>
<body class="landing-page sidebar-collapse">
   <?php require("layout/menu.php"); ?>
   <div class="wrapper">
      <div class="page-header page-header-small  clear-filter">
         <div class="page-header-image" data-parallax="true"></div>
      </div>
      <div class="section section-about-us"  style="width: 98%; margin: 0 auto; background-color: #fcfcfc;">
         <div class="container">
            <div class="row">
               <div class="col text-center">
                  <h1 class="title"><?=$data['processo']?></h1>               </div>
            </div>
            <div class="separator separator-primary" style="margin-top: 50px;margin-bottom: 50px;"></div>
            <div class="row">
              <div class="col-12">
                <div class="text-center">

               <?php require($page)?>
               </div>
               </div>
            </div>
            <div class="separator separator-primary" style="margin-top: 100px;margin-bottom: 100px;"></div>
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

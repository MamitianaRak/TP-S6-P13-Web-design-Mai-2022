
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="decription" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Liste Actus</title>
    <link rel="stylesheet" href="<?php echo bootstrapcss_loader("bootstrap.min.css") ?>" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="<?php echo font_loader("font-awesome.min.css")?>">
    <link rel="stylesheet" href="<?php echo css_loader("cards.css")?>">
    <link rel="stylesheet" href="<?php echo css_loader("styles.css")?>">
</head>

<body>
    <div>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="#">ActuMada.com</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link " href="#">Acceuil</a></li>
                    <li class="nav-item"><a class="nav-link" href="ajout-contenu">Ajout</a></li>
                    <!-- <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#">Dropdown </a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
        <div class="container">
        <h1>Liste des Actus</h1>
            <h2 style="margin-top:52px;margin-left:34px;font-family:'Open Sans', sans-serif;font-size:22px;font-weight:800;line-height:32px;color:rgb(0,0,0);">Actus 2022</h2>
            <div class="cust_bloglistintro">
                <p style="margin-left:34px;color:rgba(255,255,255,0.5);font-size:14px;"></p>
            </div>
            <div class="row">
                <?php for($i = 0;$i<count($listeactus);$i++) { ?>
                <div class="col-md-4 cust_blogteaser" style="padding-bottom:20px;margin-bottom:32px;"><a href="#"><img class="img-fluid" style="height:auto;" src="assets/img/image_03.png"></a>
                    <h3 style="text-align:left;margin-top:20px;font-family:'Open Sans', sans-serif;font-size:18px;margin-right:0;margin-left:24px;line-height:34px;letter-spacing:0px;font-style:normal;font-weight:bold;"><?php echo $listeactus[$i]['titre']?><br><?php echo $listeactus[$i]['date']?></h3>
                    <p class="text-secondary" style="text-align:left;font-size:14px;font-family:'Open Sans', sans-serif;line-height:22px;color:rgb(9,9,10);margin-left:24px;"><?php echo $listeactus[$i]['resume']?></p>
                    <a class="h4" href="<?php echo  $listeactus[$i]['url'] ?>"><i class="fa fa-arrow-circle-right" style="margin-left:23px;"></i></a>
                </div>
                <?php  } ?>
            </div>
        </div>
    </div>
    <script src="<?php echo js_loader("jquery.min.js")?>"></script>
    <script src="<?php echo bootstrapjs_loader("bootstrap.min.js")?>"></script>
</body>

</html>
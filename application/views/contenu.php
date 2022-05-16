<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $contenu[3]?></title>
    <link rel="stylesheet" href="<?php echo bootstrapcss_loader("bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?php echo bootstrapcss_loader("font-awesome.min.css") ?>">
    <link rel="stylesheet" href="<?php echo bootstrapcss_loader("canito-detalle-producto.css") ?>">
    <link rel="stylesheet" href="<?php echo bootstrapcss_loader("styles.css") ?>">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Fiche Details</h1>
        <div class="row">`
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12"><img class="img-thumbnail img-fluid center-block" src="../assets/img/image_03.png"></div>
                </div>
            </div>
            <div class="col-md-4">
                <h1><?php echo $contenu['titre']." - ActuMada.com"?></h1>
                <h3 style="color:blue">Categorie: <span style="color:green"><?php echo $categorie['nom'] ?></span></h3>
                <h3 style="color:blue">Resumé</h3>
                <p>
                    <?php echo $contenu['resume']?><br>
                </p>
                <h3 style="color:blue">Contenu</h3>
                <p>
                    <?php echo $contenu['contenu']?><br>
                </p>
            </div>
        </div>
    </div>
    <script src="<?php echo js_loader("jquery.min.js")?>"></script>
    <script src="<?php echo bootstrapjs_loader("bootstrap.min.js")?>"></script>
</body>

</html>
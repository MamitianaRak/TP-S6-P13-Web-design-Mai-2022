
  <main id="main">
<section class="details-card1">
  <div class="section-title">
          <h2>Actualite</h2>
    <div class="container ">
      
        <div class="row justify-content-center">
          <div id="carouselExampleControls" style="background-color: rgba(169,169,169,0.3);" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

            <?php $conteur = 0 ; $isa = 0; ?>
            <?php for($j=0;$j<3;$j++) { ?>
              <div  class="carousel-item <?php if($j == 0 ) echo 'active' ?>">
                <div class="justify-content-center row d-flex" >
                <?php $conteur = 0 ; ?>
                <?php while($conteur < 2) { ?>
                    <div class=" col-md-4">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="<?php  echo img_loader($listeactusrand[$isa]['img']) ?>" alt="">
                            <span><h4><?php echo $listeactusrand[$isa]['nom'] ?></h4></span>
                        </div>
                        <div class="card-desc" >
                            <h3><?php echo $listeactusrand[$isa]['titre'] ?></h3>

                            <p style="height: 70px;" ><?php echo $listeactusrand[$isa]['resume'] ?></p>
                                <a href="<?php echo 'actualite/'.$listeactusrand[$isa]['url'] ?>" class="btn-card">Read</a>   
                        </div>
                    </div>
                    </div>
                    <?php $conteur = $conteur+1;  $isa= $isa +1;?>
                    <?php  } ?>
                  </div>
                </div>
                <?php  } ?>


                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </div>
</section>
   

   <section class="details-card">
  <div class="section-title">
          <h3 style=" font-weight: 700 ;color: #5cb880;" class="title title--bold title--highlight">Dernieres News</h3>
        </div>
    <div class="container ">
      
        <div class="row justify-content-center">

                <?php for($j=0;$j<count($listeactus);$j++) { ?>
                <div class="col-md-4" style="margin-top:5px">
                    <div class="card-content ">
                        <div class="card-img">
                            <img src="<?php echo img_loader($listeactus[$j]['img']) ?>" alt="">
                            <span><h4><?php echo $listeactus[$j]['nom'] ?></h4></span>
                        </div>
                        <div class="card-desc">
                            <h3><?php echo $listeactus[$j]['titre'] ?></h3>
                            <p><?php echo $listeactus[$j]['resume'] ?></p>
                                <a href="<?php echo 'actualite/'.$listeactusrand[$j]['url'] ?>" class="btn-card">Read</a>   
                        </div>
                    </div>
                    </div>
                    <?php  } ?>


                

        </div>
    </div>
</section>

    
  </main><!-- End #main -->
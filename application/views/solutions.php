
  <main id="main">

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="section-title">
      <h2>Solutions</h2>
      <h3 style=" font-weight: 700 ;color: #5cb880;" class="title title--bold title--highlight">
      Réchauffement climatique : Sauvons notre planete</h3>
      <p>Nous pouvons tous contribuer à atténuer les changements climatiques. Que ce soit par nos déplacements, par notre consommation d’électricité ou par notre alimentation, nous pouvons faire la différence.</p>
    </div>

    <div class="row">
      <h3 style="font-weight: 700 ;">Quelles sont les solutions contre le réchauffement climatique ?</h3><br>

      <?php for($i=0;$i<count($solutions);$i++) { ?>
      <div class="col-12">
        <br>
        <h4 style="font-weight: 600 ;"><?php echo $solutions[$i]['designation'] ?></h4><br>

        <div class="col-12">
      <div class="col-12  content">
          <p><?php echo $solutions[$i]['details'] ?></p>
          <br>
          </div>
          <?php if(isset($solutions[$i]['img'])) { ?>
          <div class="col-12 d-flex justify-content-center" >
        <img src="<?php echo  img_loader($solutions[$i]['img']) ?>" class="img-fluid" alt="">
      </div>
      <?php  } ?>

          </div>
          </div>
          <?php  } ?>

          </div>

      </div>
    </div>

  </div>
</section><!-- End About Us Section -->




</main><!-- End #main -->
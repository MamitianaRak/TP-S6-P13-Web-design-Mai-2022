<main id="main">

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="section-title">
      <h2>Consequences</h2>
      <h3 style=" font-weight: 700 ;color: #5cb880;" class="title title--bold title--highlight">
      Réchauffement climatique : l’humanité sous la menace </h3>
      <p>Un réchauffement climatique durable supérieur au seuil de + 1,5 °C aurait des impacts irréversibles pour les systèmes humains et écologiques.Quel que soit le rythme de réduction des émissions de gaz à effet de serre, les impacts dévastateurs du réchauffement sur la nature et l’humanité qui en dépend vont s’accélérer et devenir douloureusement palpables bien avant 2050.</p>
    </div>

    <div class="row">
      <h3 style="font-weight: 700 ;">Quelles sont les conséquences du réchauffement climatique ?</h3><br>

    <?php for($i=0;$i<count($cons);$i++) { ?>
      <div class="col-12">
        <br>
        <h4 style="font-weight: 600 ;"><p><?php echo $cons[$i]['designation'] ?></p></h4>
        <div class="col-12">

        <?php if(isset($cons[$i]['img'])) { ?>
      <div class="col-5 " style="float: right;">
        <img src="<?php echo  img_loader($cons[$i]['img']) ?>" class="img-fluid" alt="">
      </div>
      <?php  } ?>

      <div class="col-6  content" style="width: 100%">
          <p style="font-weight: 500;"><p><?php echo $cons[$i]['details'] ?></p></p>
          <br>
          </div>

          </div>
          </div>
          <?php  } ?>

      </div>
    </div>

  </div>
</section><!-- End About Us Section -->




</main><!-- End #main -->
<main id="main">

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="section-title">
      <h2>Causes</h2>
      <h3 style=" font-weight: 700 ;color: #5cb880;" class="title title--bold title--highlight">
      L’action de l’homme, au cœur du réchauffement climatique</h3>
      <p>Les humains ont un impact de plus en plus important sur le climat et la température de la terre, en consommant des combustibles fossiles, en abattant des forêts et en élevant du bétail.Ces activités libèrent d'énormes quantités de gaz à effet de serre, qui viennent s'ajouter à celles naturellement présentes dans l’atmosphère, renforçant ainsi l'effet de serre et le réchauffement de la planète.</p>
    </div>

    <div class="row">
      <h3 style="font-weight: 700 ;">Quelles sont les causes du réchauffement climatique ?</h3><br>

      <div class="col-12">
        <br>
        <h4 style="font-weight: 600 ;">Les causes de la hausse des émissions</h4><br>


        <?php for($i=0;$i<count($causes);$i++) { ?>
        <div class="col-12">
        <?php if(isset($causes[$i]['img'])) { ?>
      <div class="col-4 " style="float: right;" >
        <img src="<?php echo  img_loader($causes[$i]['img']) ?>" class="img-fluid" alt="" >
      </div>
      <?php  } ?>

      <div class="col-6  content" style="width: 100%">
          <h5 style="font-weight: 500 ;color: #5cb880;" ><?php echo $causes[$i]['designation'] ?></h5><br>
          <p><?php echo $causes[$i]['details'] ?></p>
          <br>
        </div>

        </div>
        <?php  } ?>

      </div>
    </div>

  </div>
</section><!-- End About Us Section -->




</main><!-- End #main -->
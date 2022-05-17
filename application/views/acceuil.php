  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-6.webp)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Réchauffement climatique : Sauvons notre planete</h2>
              <p class="animate__animated animate__fadeInUp">Nous pouvons tous contribuer à atténuer les changements climatiques. Que ce soit par nos déplacements, par notre consommation d’électricité ou par notre alimentation, nous pouvons faire la différence.</p>
              <a href="<?php  echo base_url("climat/solutions") ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">En savoir plus</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-7.webp)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Suivez nous chaque jour!</h2>
              <p class="animate__animated animate__fadeInUp">Nous apportons des nouvelles de notre planète.</p>
              <a href="<?php  echo base_url("actualite") ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">En savoir plus</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Rechauffement climatique</h2>
          <h3 style=" font-weight: 700 ;color: #5cb880;" class="title title--bold title--highlight">Le réchauffement climatique : le plus grand défi de notre époque</h3>
          <p><?php echo $rclimat['resume'] ?></p>
        </div>

        <div class="row" >
          <div class="col-12">
            <div class="col-lg-6 " style="float: right">
            <img src="<?php echo img_loader($rclimat['img']) ?>" class="img-fluid"  alt="">
          </div>

          <div class="col-lg-6 content" style="width: 100%">
          <h3 style="font-weight: 700 ;">Définitions du réchauffement climatique</h3><br>
              <h4 style="font-weight: 600 ;">Définition simple du réchauffement climatique</h4><br>
              <p><?php echo $rclimat['definition_simple'] ?></p><br>
              <h4 style="font-weight: 600 ;">Définition scientifique du réchauffement climatique</h4><br>
              <p><?php echo $rclimat['definition_scientifique'] ?></p>
          </div>

        </div>
        </div>

        <div class="row justify-content-center " >
          <div class="col-4  d-flex justify-content-center ">
            <div class="card" style="width: 30rem;">
              <img src="<?php echo img_loader("team/team-5.webp") ?>" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Cause du rechauffement climatique</h5>
                <p class="card-text">L’action de l’homme, au cœur du réchauffement climatique</p>
                <a href="<?php  echo base_url("climat/causes") ?>" class="btn">En savoir plus</a>
              </div>
            </div>
            
          </div>
 
           <div class="col-4  d-flex justify-content-center ">
            <div class="card" style="width: 30rem;">
              <img src="<?php echo img_loader("team/team-4.webp") ?>" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Consequences du rechauffement climatique</h5>
                <p class="card-text">L’humanité sous la menace  du réchauffement climatique</p>
                <a href="<?php  echo base_url("climat/consequences") ?>" class="btn">En savoir plus</a>
              </div>
            </div>
            
          </div>
          
          

            
        </div>

      </div>
    </section><!-- End About Us Section -->

   

    
  </main><!-- End #main -->
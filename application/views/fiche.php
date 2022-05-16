<main id="main">
   <section class="details-card">
    <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title">
                          <h2>Fiche</h2>
                      </div>
                        <div class="page-wrapper">
                            <div class="blog-title-area text-center ">
                            <ol class=" justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
                                    <li class="breadcrumb-item"><a href="#">Actualite</a></li>
                                    <li class="breadcrumb-item active"><?php echo $contenu['titre']; ?></li>
                                </ol>

                               <span  class="color-orange"><?php echo $categorie['nom']; ?></span>

                                <h3><?php echo $contenu['titre']; ?></h3>

                                <div class="blog-meta big-meta">
                                    <small><?php echo $contenu['date']; ?></small>
                                </div><!-- end meta -->

                            </div><!-- end title -->

                            <div class="single-post-media">
                                <img src="<?php echo img_loader($contenu['img']); ?>" alt="" class="img-fluid">
                            </div><!-- end media -->

                            <div class="blog-content">  
                                <div class="pp">
                                <p><?php echo $contenu['resume']; ?></p>

                                    <p><?php echo $contenu['contenu']; ?></p>

                                </div><!-- end pp -->
                            </div><!-- end content -->

                            <hr class="invis1">

                            <div class="custombox prevnextpost clearfix">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blog-list-widget">
                                            <div class="list-group">
                                                <a href="<?php echo base_url('actualite/'.$contenurand[0]['url']); ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="w-100 justify-content-between text-right">
                                                        <img src="<?php echo img_loader($contenurand[0]['img']); ?>" alt="" class="img-fluid float-right">
                                                        <h5 class="mb-1"><?php echo $contenurand[0]['resume']; ?></h5>
                                                        <small>Prev Post</small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-lg-6">
                                        <div class="blog-list-widget">
                                            <div class="list-group">
                                                <a href="<?php echo base_url('actualite/'.$contenurand[1]['url']); ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="w-100 justify-content-between">
                                                        <img src="<?php echo img_loader($contenurand[1]['img']); ?>" alt="" class="img-fluid float-left">
                                                        <h5 class="mb-1"><?php echo $contenurand[1]['resume']; ?></h5>
                                                        <small>Next Post</small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end author-box -->

                            <hr class="invis1">

                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->


                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="upload/banner_07.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->

                          

                            <div class="widget">
                                <h2 class="widget-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Articles populaires</font></font></h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">


                                        <?php for($i=0;$i<count($contenulast);$i++) { ?>
                                        <a href="<?php echo 'actualite/'.$contenulast[$i]['url']; ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="<?php echo img_loader($contenulast[$i]['img']) ?>" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $contenulast[$i]['resume']; ?></font></font></h5>
                                                <small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $contenulast[$i]['date']; ?></font></font></small>
                                            </div>
                                        </a>
                                        <?php } ?>

                                     
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                           
                            <br>
                            <div class="widget">
                            <h2 class="widget-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Video Informative</font></font></h2>
                                <div class="trend-videos" >
                                <div class="blog-box" >
                                        <div class="post-media" >
                                            <a href="tech-single.html" title="">
                                            <iframe height="300"  src="https://www.youtube.com/embed/T4LVXCCmIKA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                               
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end blog-box -->
                                </div><!-- end videos -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div>
                
                </div><!-- end row -->
            </div><!-- end container -->
</section>

    
  </main><!-- End #main -->

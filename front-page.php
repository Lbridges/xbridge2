<?php /* Front Page */ ?>

<?php
get_header();
?>


  <!-- ======= Hero Section ======= -->
  <section id="hero">
  <div id="frontCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
    <ol class="carousel-indicators">
        <li data-target="#frontCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#frontCarousel" data-slide-to="1"></li>
        <li data-target="#frontCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="first-slide" src="<?php echo get_template_directory_uri() . '/img/vacation-ownership-mountain-pool-slide.png'; ?>" alt="Vacation Ownership Reflecting Sky">
        <div class="container">
            <div class="carousel-caption text-left">
              <!-- add form here -->
            <h1>Vacation Ownership</h1>
            <p><a class="btn btn-lg btn-outline" href="#" role="button">Level Up Today</a></p>
            </div>
        </div>
        </div>
        <div class="carousel-item">
        <img class="second-slide" src="<?php echo get_template_directory_uri() . '/img/vacation-ownership-pool-peace-slide.png'; ?>" alt="Vacation Ownership Relaxation">
        <div class="container">
            <div class="carousel-caption">
            <h1>Adventure Investment</h1>
            <p><a class="btn btn-lg btn-outline" href="#" role="button">Explore Options</a></p>
            </div>
        </div>
        </div>
        <div class="carousel-item">
        <img class="third-slide" src="<?php echo get_template_directory_uri() . '/img/vacation-ownership-scenery-slide.png
        '; ?>" alt="Vacation Ownership Mountain Scene">
        <div class="container">
            <div class="carousel-caption text-right">
            <h1>Discover New Luxury</h1>
            <p><a class="btn btn-lg btn-outline" href="#" role="button">Browse Locations</a></p>
            </div>
        </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#frontCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#frontCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Logo Section ======= -->
    <section id="logo-banner" class="logo-banner section-bg">
      <div class="container">

        <div class="row">

          <div class="col-md-6 d-flex align-items-center justify-content-around">
            <img src="<?php echo get_template_directory_uri() . '/img/l-logo.png'; ?>" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri() . '/img/a-logo.png'; ?>" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri() . '/img/u-logo.png'; ?>" class="img-fluid" alt="">
          </div>
          <div class="col-md-6 d-flex align-items-center justify-content-around">
            <img src="<?php echo get_template_directory_uri() . '/img/r-logo.png'; ?>" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri() . '/img/e-logo.png'; ?>" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri() . '/img/n-logo.png'; ?>" class="img-fluid" alt="">
          </div> 

        </div>

      </div>
    </section><!-- End Logo Section -->  


    <!-- Marketing messaging and featurettes
================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <section class="properties">
      <div class="container marketing">  
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">Contact Forms</h2>
                    <p class="lead fw-normal text-muted mb-5">How will we implement these? We have a few options.</p>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <div class="col-lg-4 mb-6">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/vacation-palm-trees-sunset-orange.png'; ?>" alt="..." />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Shortcode the Form</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Shortcodes</h5></a>
                        <p class="card-text mb-0">Tried and true. This is a simple method, and a perfect introduction to an easy plugin. The shortcode for the form could be used on a page or a post.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-6">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/rustic-luxury-vacation-home-access.png'; ?>" alt="..." />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Child Themes</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Child Theme with Contact Page</h5></a>
                        <p class="card-text mb-0">This method uses the template hierarchy to display a custom template for a specific page. Using a child theme to add a form would require an entire page layout.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-6">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/orange-sunset-skyline-vacation.png'; ?>" alt="..." />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Custom Blocks</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Custom Form Block</h5></a>
                        <p class="card-text mb-0">For this we can use Node to develop the custom block locally with @wordpress/create-block. This creates a plugin that we can use on multiple sites.</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>


        <!-- ======= Full Width CTA ======= -->
    <section id="fw-cta" class="fw-cta section-bg">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-8">
            
            <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/img/orange-sunset-skyline-vacation.png'; ?>" alt="Small Image Impact" width="700" height="300"/>            
            
          </div>
          <div class="col-md-4">
          <h4>We Want Contact Information.</h4>
            <p>If the visitor clicks the button, they will be taken to the contact page, where
              the primary intent of the page is to capture information about the visitor that we do not already have.</p>
            <a href="#" class="btn btn-lg btn-outline-cta" role="button">Request More Information</a>
          </div>
        </div>
      </div>
    </section><!-- End Full Width CTA -->

      <!-- START THE FEATURETTES -->
    <section class="features">
      <div class="container">
        <div class="row">
          <div class="col"><h3>Niched Content</h3></div>
        </div>
        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h3 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h3>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            <a href="#" class="btn btn-sm btn-outline-dk" role="button">Read More</a>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="<?php echo get_template_directory_uri() . '/img/vacation-ownership-night-palms-slide.png' ?>" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h3 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h3>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            <a href="#" class="btn btn-sm btn-outline-dk" role="button">Learn More</a>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="<?php echo get_template_directory_uri() . '/img/vacation-ownership-pool-peace-slide.png' ?>" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h3 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h3>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            <a href="#" class="btn btn-sm btn-outline-dk" role="button">Explore Further</a>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="<?php echo get_template_directory_uri() . '/img/vacation-ownership-reflecting-sky-slide.png' ?>" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->
    </section>

<?php
get_footer();
?>
        

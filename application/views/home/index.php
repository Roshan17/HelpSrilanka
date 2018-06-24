<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Help Lanka Official Website</title>

    <!-- Bootstrap core CSS -->

    <link href="<?=base_url()?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?=base_url()?>public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?=base_url()?>public/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>public/css/creative.min.css" rel="stylesheet">
      <link href="<?=base_url()?>public/css/creative.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
      	<img style="height: 50px; width: 60px" src="<?=base_url()?>public/img/lionIcon.png">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Help Lanka</a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?=site_url('projects/index')?>">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="header-content">
        <div class="header-content-inner">
          <h1 id="homeHeading">We can't help everyone, But everyone can help someone.</h1>
          <hr>
          <h2>The purpose of human life is to serve, and to show compassion and the will to help others.</h2>
          <h3 style="text-align: right;">Albert Schweitzer</h3>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Post your fundraiser here</h2>
            <hr class="light">
            <p class="text-faded">Charity begins at home,but should not end there.</p>
              <p class="text-faded">"Thousands of candles can be lighted from a single candle, and the life of the candle will not be shortened. Happiness never decreases by being shared."</p>
              <a class="btn btn-default btn-xl js-scroll-trigger" data-toggle="modal" data-target="#myModal">Get Started!</a>
          </div>
        </div>
          <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                      <div class="modal-header">
                          <h4>Sign in</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>

                      </div>
                      <div class="modal-body">
                          <form id="login_form" class="form-horizontal" method="post" action="<?=site_url('api/login');?>">
                              <div class="control-group">
                                  <label class="control-label">Email:</label>
                                  <div class="controls">
                                      <input type="email" name="email" class="input-xlarge">
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Password:</label>
                                  <div class="controls">
                                      <input type="password" name="password" class="input-xlarge">
                                  </div>
                              </div>
                              <div class="control-group">
                                  <div class="controls">
                                      <button class="button button2">Signin</button>
                                  </div>
                              </div>
                          </form>
                          <p>Don't have an account! <a data-toggle="modal" data-target="#ModalRegister" href="#" data-dismiss="modal">Sign Up Here</a></p>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                  </div>

              </div>
          </div>

          <div class="modal fade" id="ModalRegister" role="dialog">
              <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content">
                      <div class="modal-header">
                          <h4>Sign in</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>

                      </div>
                      <div class="modal-body">

                          <form id="registration_form" class="form-horizontal" method="post" action="<?=site_url('api/register')?>">
                              <hr>
                              <h5 style="color: #f05f40">Personal Details</h5>
                              <hr>
                              <div class="control-group">
                                  <label class="control-label">Name:</label>
                                  <div class="controls">
                                      <input type="text" name="name" class="input-xlarge">
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Address:</label>
                                  <div class="controls">
                                      <input type="text" name="address" class="input-xlarge">
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Telephone Number:</label>
                                  <div class="controls">
                                      <input type="text" name="tp" class="input-xlarge">
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Email:</label>
                                  <div class="controls">
                                      <input type="email" name="email" class="input-xlarge">
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Job Position:</label>
                                  <div class="controls">
                                      <input type="text" name="job" class="input-xlarge">
                                  </div>
                              </div>
                              <hr>
                              <h5 style="color: #f05f40">Company Details / Organization Details</h5>
                              <hr>

                              <div class="control-group">
                                  <label class="control-label">Comapny/Oraganization Name:</label>
                                  <div class="controls">
                                      <input type="text" name="company_name" class="input-xlarge">
                                  </div>
                              </div>

                              <div class="control-group">
                                  <label class="control-label">Comapny/Oraganization Address:</label>
                                  <div class="controls">
                                      <input type="text" name="company_address" class="input-xlarge">
                                  </div>
                              </div>

                              <div class="control-group">
                                  <label class="control-label">Comapny/Oraganization Telephone Number:</label>
                                  <div class="controls">
                                      <input type="text" name="company_tp" class="input-xlarge">
                                  </div>
                              </div>

                              <div class="control-group">
                                  <label class="control-label">Comapny/Oraganization Email Address:</label>
                                  <div class="controls">
                                      <input type="email" name="company_email" class="input-xlarge">
                                  </div>
                              </div>

                              <div class="control-group">
                                  <label class="control-label">Select a Profile Picture:</label>
                                  <div class="controls">
                                      <input type="file" name="profile_picture" class="input-xlarge">
                                  </div>
                              </div>
                              <br>

                              <hr>
                              <h5 style="color: #f05f40">Bank Details</h5>
                              <hr>


                              <div class="control-group">
                                  <label class="control-label">Bank Name:</label>
                                  <div class="controls">
                                      <input type="text" name="bank_name" class="input-xlarge">
                                  </div>
                              </div>


                              <div class="control-group">
                                  <label class="control-label">Branch:</label>
                                  <div class="controls">
                                      <input type="text" name="bank_branch" class="input-xlarge">
                                  </div>
                              </div>


                              <div class="control-group">
                                  <label class="control-label">Account Holders Name:</label>
                                  <div class="controls">
                                      <input type="text" name="acHolders_name" class="input-xlarge">
                                  </div>
                              </div>


                              <div class="control-group">
                                  <label class="control-label">Account Number:</label>
                                  <div class="controls">
                                      <input type="text" name="account_number" class="input-xlarge">
                                  </div>
                              </div>

                              <div class="control-group">
                                  <label class="control-label">PayPal Account Number:</label>
                                  <div class="controls">
                                      <input type="text" name="paypal_account_number" class="input-xlarge">
                                  </div>
                              </div>


                              <hr>
                              <h5>Login Password</h5>
                              <hr>


                              <div class="control-group">
                                  <label class="control-label">Enter Password:</label>
                                  <div class="controls">
                                      <input type="password" name="password" class="input-xlarge">
                                  </div>
                              </div>


                              <div class="control-group">
                                  <label class="control-label">Confirm Password:</label>
                                  <div class="controls">
                                      <input type="password" name="confirm_password" class="input-xlarge">
                                  </div>
                              </div>


                              <div class="control-group">
                                  <div class="controls">
                                      <button class="button button2" data-toggle="modal" data-target="#error_message">Signup</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                  </div>

              </div>
          </div>
      </div>


        <!--Modal For show success/error message-->
        <div id="error_message" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">

                        <h4 id="error_head" class="modal-title" style="color: red">Please fill form correctly!</h4>
                        <h4 id="success_head" class="modal-title" style="color: green">Registration process completed!</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="register_form_error" class="alert alert-warning"> ><!--Dynamic-->

                        </div>
                    </div>

                    <div class="modal-body">
                        <div id="register_form_success" class="alert alert-success"> <!--Dynamic-->
                            <h5>Submitted For approval!</h5>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="p-0" id="portfolio">
      <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?=base_url()?>public/img/portfolio/fullsize/1.jpg">
              <img class="img-fluid" src="<?=base_url()?>public/img/portfolio/thumbnails/1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?=base_url()?>public/img/portfolio/fullsize/2.jpg">
              <img class="img-fluid" src="<?=base_url()?>public/img/portfolio/thumbnails/2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?=base_url()?>public/img/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="<?=base_url()?>public/img/portfolio/thumbnails/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?=base_url()?>public/img/portfolio/fullsize/4.jpg">
              <img class="img-fluid" src="<?=base_url()?>public/img/portfolio/thumbnails/4.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?=base_url()?>public/img/portfolio/fullsize/5.jpg">
              <img class="img-fluid" src="<?=base_url()?>public/img/portfolio/thumbnails/5.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?=base_url()?>public/img/portfolio/fullsize/6.jpg">
              <img class="img-fluid" src="<?=base_url()?>public/img/portfolio/thumbnails/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>



    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="primary">
            <p>01123189716</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x sr-contact"></i>
            <p></p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x sr-contact"></i>
            <p>
              <a href="<?=base_url()?>mailto:your-email@your-domain.com">HelpLanka@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>
  </body>



    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url()?>public/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!--form submission-->
  <script type="text/javascript">
      $(function(){
          $("#login_form").submit(function(evt){

              evt.preventDefault();
              var url=$(this).attr('action');
              var postData=$(this).serialize();

              $.post(url,postData,function(o){
                  if(o.result==1){
                      window.location.href='<?=site_url('dashboard')?>';
                  }


              },'json');


          });

          $("#error_head").hide();
          $("#success_head").hide();
          $("#register_form_error").hide();
          $("#register_form_success").hide();

          $("#registration_form").submit(function(evt){

              var url=$(this).attr('action');
              var postData=$(this).serialize();

              $.post(url,postData,function(o){
                  if(o.result==1){
                      $("#success_head").show();
                      $("#register_form_success").show();
                  }
                  else {

                      var output='<ul>';
                      for (var key in o.error){
                          var value=o.error[key];
                          output+='<li>'+value+'</li>';

                      }
                      output+='</ul>';
                      $("#error_head").show();
                      $("#register_form_error").show();
                      $("#register_form_error").html(output);

                  }
              },'json');
              evt.preventDefault();

          });

      });

  </script>
    <!-- Plugin JavaScript -->
    <script src="<?=base_url()?>public/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?=base_url()?>public/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?=base_url()?>public/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>


    <!-- Custom scripts for this template -->
    <script src="<?=base_url()?>public/js/creative.min.js"></script>



</html>

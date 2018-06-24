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

<hr>
<hr>
<?php foreach ($project_list as $p_key){?>

<div class="container">
    <div class="media">
        <div class="media-left media-top">
            <img src="img_avatar1.png" class="media-object" style="width:80px">
        </div>
        <div class="media-body">
            <h4 class="media-heading"><?php echo $p_key->project_title; ?><i><small>       Posted on December 12, 2017</i></small></h4>
            <p></p>
            <p><?php echo $p_key->content; ?></p>
            <p></p>
        </div>
    </div>
    <form>
        <input type="text" style="width: 100px" value="$ 0.00">     <input type="submit" value="Donate">
    </form>
    <hr>
    <hr>
</div>
<?php } ?>




</body>



<!-- Bootstrap core JavaScript -->
<script src="<?=base_url()?>public/vendor/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</script>
<!-- Plugin JavaScript -->
<script src="<?=base_url()?>public/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?=base_url()?>public/vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="<?=base_url()?>public/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>


<!-- Custom scripts for this template -->
<script src="<?=base_url()?>public/js/creative.min.js"></script>



</html>

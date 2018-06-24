<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>public/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?=base_url()?>public/assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Material Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?=base_url()?>public/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?=base_url()?>public/assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?=base_url()?>public/assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>





    <script src="<?=base_url()?>public/assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>

    <script src="<?base_url()?>public/js/rsdash/dashboard/result.js"> </script>
    <script src="<?=base_url()?>public/js/rsdash/dashboard/event.js"> </script>
    <script src="<?=base_url()?>public/js/rsdash/dashboard/template.js"> </script>
    <script src="<?=base_url()?>public/js/rsdash/dashboard.js"> </script>

]

</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="red" data-image="<?=base_url()?>public/assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <img src="<?=base_url()?>public/img/lionicon.png" style="height: 50px; width: 60px">
                <p class="simple-text">Help Lanka</p>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="./user.html">
                            <i class="material-icons">person</i>
                            <p>User Profile</p>
                        </a>
                    </li>

                    <li>
                        <a href="./notifications.html">
                            <i class="material-icons text-gray">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Post Your Fundraiser Here! </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?=site_url('dashboard/logout')?>">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">content_copy</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Projects</p>
                                    <h3 class="title">
                                        <small>GB</small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">warning</i>
                                        <a href="#pablo">Few days to the Event</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">store</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Funds Collected:</p>
                                    <h3 class="title">$34,245</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Last 24 Hours
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="purple">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title">Projects:</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="active">
                                                    <a href="#profile" data-toggle="tab">
                                                        <i class="material-icons">date_range</i>Recent
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#messages" data-toggle="tab">
                                                        <i class="material-icons">library_books</i> Add new
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content" id="list_project">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile">
                                            <table class="table" id="table">

                                            </table>

                                        </div>
                                        <div class="tab-pane" id="messages">


<!-------------------------------------------------------------------------------------------------------------------->
                                            <!--Alert success-->
                                            <div class="alert alert-success hide" id="success_alert">
                                                <div class="container-fluid">
                                                    <div class="alert-icon">
                                                        <i class="material-icons">check</i>
                                                    </div>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                                    </button>
                                                    <b>Success Alert:</b> <p id="success_msg"></p>
                                                </div>
                                            </div>

                                            <!--Alert Fail-->
                                            <container id="#error" class="hide" >
                                            <div  class="alert alert-danger " >
                                                <div class="container-fluid">
                                                    <div class="alert-icon">
                                                        <i class="material-icons">error_outline</i>
                                                    </div>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                                    </button>
                                                    <b>Error Alert:</b> <p id="error_msg"></p>
                                                </div>
                                            </div>
                                            </container>
  <!------------------------------------------------------------------------------------------------------------------------------->


                                            <form id="create_project" method="POST" action="<?=site_url('api/create_project')?>">
                                              <div >
                                                  <div class="form-group label-floating">
                                                      <label class="control-label">Project Name:</label>
                                                      <input type="text"  name="project_name" class="form-control" />
                                                  </div>
                                              </div>


                                              <div>
                                                  <div class="form-group label-floating">
                                                      <label class="control-label">Content:</label>
                                                      <textarea name="project_content" class="form-control"  rows="15"></textarea>
                                                  </div>
                                              </div>

                                              <div>
                                                  <label class="control-label">Add an image:</label>
                                                  <input type="file" name="project_img"/>

                                              </div>
                                              <button type="submit" class="btn btn-primary pull-right">Post Project</button>


                                          </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header" data-background-color="orange">
                                        <i class="material-icons">content_copy</i>
                                    </div>
                                    <div class="card-content">
                                        <p class="category">Events</p>
                                        <h3 class="title">
                                            <small>GB</small>
                                        </h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons text-danger">warning</i>
                                            <a href="#pablo">Get More Space...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header" data-background-color="green">
                                        <i class="material-icons">store</i>
                                    </div>
                                    <div class="card-content">
                                        <p class="category">Revenue</p>
                                        <h3 class="title">$34,245</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">date_range</i> Last 24 Hours
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="card card-nav-tabs">
                                        <div class="card-header" data-background-color="purple">
                                            <div class="nav-tabs-navigation">
                                                <div class="nav-tabs-wrapper">
                                                    <span class="nav-tabs-title">Events:</span>
                                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                                        <li class="active">
                                                            <a href="#events" data-toggle="tab">
                                                                <i class="material-icons">date_range</i>Recent
                                                                <div class="ripple-container"></div>
                                                            </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#post_event" data-toggle="tab">
                                                                <i class="material-icons">library_books</i> Add new
                                                                <div class="ripple-container"></div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="events">
                                                    <table class="table">
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="optionsCheckboxes" checked>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                            <td class="td-actions text-right">
                                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                    <i class="material-icons">edit</i>
                                                                </button>
                                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="optionsCheckboxes">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                            <td class="td-actions text-right">
                                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                    <i class="material-icons">edit</i>
                                                                </button>
                                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="optionsCheckboxes">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                            </td>
                                                            <td class="td-actions text-right">
                                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                    <i class="material-icons">edit</i>
                                                                </button>
                                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="optionsCheckboxes" checked>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                                            <td class="td-actions text-right">
                                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                    <i class="material-icons">edit</i>
                                                                </button>
                                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <div class="tab-pane" id="post_event">

                                                    <form id="create_event">
                                                        <div >
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Event Name:</label>
                                                                <input type="text"  class="form-control" />
                                                            </div>
                                                        </div>

                                                        <div >
                                                            <div class="form-group label-floating">
                                                                <label >Date:</label>
                                                                <input type="date"  class="form-control" />
                                                            </div>
                                                        </div>


                                                        <div>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Content:</label>
                                                                <textarea class="form-control"  rows="15"></textarea>
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <label class="control-label">Add an image:</label>
                                                            <input type="file"/>

                                                        </div>
                                                        <button type="submit" class="btn btn-primary pull-right">Post Project</button>


                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>

                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://www.creative-tim.com">Help Srilanka </a>, made with love for a better mankind
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>



<script src="<?=base_url()?>public/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>public/assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="<?=base_url()?>public/assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="<?=base_url()?>public/assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="<?=base_url()?>public/assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?=base_url()?>public/assets/js/bootstrap-notify.js"></script>

<!-- Material Dashboard javascript methods -->
<script src="<?=base_url()?>public/assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?=base_url()?>public/assets/js/demo.js"></script>





</html>
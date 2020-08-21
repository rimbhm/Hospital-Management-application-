<?php
	session_start();
	
		
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEM</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
   </head>
	<body>
	<?php
	 if (isset($_SESSION['username'])) { 	
?>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h3>Gestion des examens médicaux à l'Hôpital Régional Mohamed Taher Al Maamouri</h3>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger">3</span><i class="fa fa-envelope fa-3x"></i>
                    </a>
                    <!-- dropdown-messages -->
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-danger">Andrew Smith</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-info">Jonney Depp</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-success">Jonney Depp</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-messages -->
                </li>


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>Mon espace personnel</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li><a href="deconnection.php"><i class="fa fa-sign-out fa-fw"></i>Déconnection</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/images.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div> <strong><?php echo  ''.$_SESSION['username'];?></strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;En ligne
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Rechercher...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li class="selected">
                        <a href="accper.php"><i class="fa fa-home fa-fw"></i>Accueil</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-stethoscope fa-fw"></i> Mon espace personnel<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Modifier profil</a>
                            </li>
                            <li>
                                <a href="suppers.php">Supprimer profil</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
					
					
                
                   
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
           <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Accueil</h1>
                </div>
                <!--End Page Header -->
           

         <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;Bienvenu !  </b>
</i><b>&nbsp;dans notre espace de gestion des examens médicales. </b> 
                    </div>
                </div>
                <!--end  Welcome -->
            </div>

    
  <div class="col-lg-12">
     <div class="info-box"> 
    <div class="box-body">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic" data-slide-to="0"   class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                     <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>

                      <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>

                      <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>

                      <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>

                      <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>

                    </ol>
                    <div class="carousel-inner">
                      <div class="item active">
                        <img src="assets/img/n.jpg" alt="First slide">
                        <div class="carousel-caption">
                          1
                        </div>
                      </div>
                      <div class="item">
                        <img src="assets/img/t.jpg" alt="Second slide">
                        <div class="carousel-caption">
                         2
                        </div>
                      </div>
                      <div class="item">
                        <img src="assets/img/ge.jpg" alt="Third slide">
                        <div class="carousel-caption">
                          3
                        </div>
                      </div>
                      <div class="item">
                        <img src="assets/img/w.jpg" alt="Third slide">
                        <div class="carousel-caption">
                          4
                        </div>
                      </div>
                      <div class="item">
                        <img src="assets/img/med.jpg"  alt="Third slide">
                        <div class="carousel-caption">
                          5
                        </div>
                      </div>
                      <div class="item">
                        <img src="assets/img/m.jpg"  alt="Third slide">
                        <div class="carousel-caption">
                          6
                        </div>
                      </div>
					   <div class="item">
                        <img src="assets/img/sw.jpg"  alt="Third slide">
                        <div class="carousel-caption">
                          7
                        </div>
                      </div>
					   <div class="item">
                        <img src="assets/img/qqq.jpg"  alt="Third slide">
                        <div class="carousel-caption">
                         8
                        </div>
                      </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                      <span class="fa fa-angle-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                      <span class="fa fa-angle-right"></span>
                    </a>
                  </div>
                </div>
           


</div>
</div>
 </div>
<br>
<br>
   


            <div class="row">
                <!--quick info section -->
                <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        <i class="fa fa-stethoscope fa-3x"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Gestion des Medecins</b>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-success text-center">
                        <i class="fa  fa-flask fa-3x"></i>&nbsp;&nbsp;<b>Gestion des laboratoires </b>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-info text-center">
                        <i class="fa fa-user fa-3x"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Gestion des personnel</b> 

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-warning text-center">
                        <i class="fa  fa-medkit fa-3x"></i>&nbsp;&nbsp;<b>Gestion des équipements </b>
                    </div>
                </div>
                <!--end quick info section -->
            </div>
         


        </div>
	<?php } else { 
	header('location:deconnection.php');
	}
?>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>

</body>

</html>

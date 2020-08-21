<?php
	include_once 'classes/medecin.php';
				
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
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
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
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div> <strong><?php echo ''.$_SESSION['username'];?></strong></div>
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
                        <a href="accueil.php"><i class="fa fa-home fa-fw"></i>Accueil</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-stethoscope fa-fw"></i> Gestion des médecins<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="gestionmedecin.php">Liste médecin</a>
                            </li>
                            <li>
                                <a href="ajoutmed.php">Nouveau médecin</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
					 <li>
                        <a href="#"><i class="fa fa-flask fa-fw"></i> Gestion des laboratoires<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="gestionlabo.php">Liste laboratoires</a>
                            </li>
                            <li>
                                <a href="ajoutlabo.php">Nouvlle laboratoire</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
					 <li>
                        <a href="#"><i class="fa fa-user fa-fw"></i> Gestion des Personnels<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="gestionmed.php">Liste personnel</a>
                            </li>
                            <li>
                                <a href="ajoutmed.php">Nouvlle personnel</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
					 <li>
                        <a href="#"><i class="fa fa-medkit fa-fw"></i> Gestion des équipements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="gestionmed.php">Liste équipements</a>
                            </li>
                            <li>
                                <a href="ajoutmed.php">Nouvlle équipement</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
					 <li>
                        <a href="#"><i class="fa fa-hospital-o fa-fw"></i> Gestion des examens<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="gestionmed.php">Affecter examens</a>
                            <li>
                                <a href="ajoutmed.php">Nouveau examen</a>
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
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Gestion des médecins</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Liste des médecins
                        </div>

                        <div class="panel-body">
						  <div class="form-group input-group">
						  <form class="form" action ="rech.php" method="post">
                                            <input type="text" name="search" class="">
                                            <span class="">
                                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
											</form>
                                        </div>
                            <div class="table-responsive">
                               
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
										<th>Id</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Spécialité</th>
                                            <th>Téléphone</th>
                                            <th>Email</th>
											<th>Disponibilité</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                           
										   <?php

try{
$user="root";
$passwd="";
$dbh = new PDO('mysql:host=localhost;dbname=pfe', $user, $passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$specialite= $_POST['search'];
$st=$dbh->query("select * from medecin where specialite ='$specialite'");
  $st-> execute(); 
    While($r= $st->fetch() ){
       
  echo '
														
				 <tr class="odd gradeX">
						<td> '.$r['id_M'].'</td>
					<td> '.$r['nom_M'].'</td>
					<td> '.$r['prenom_M'].'</td>

				<td> '.$r ['specialite'].'</td>

				<td> '.$r['tel_M'].'</td>
				<td> '.$r['email_M'].'</td>
				<td> '.$r['disponibilite'].'</td>

				
				<td>
																
				<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																	
				<a class="green" href="modifmedecin.php?id_M='.$r['id_M'].'" onclick="return confirm(\'Voulez vous vraiment modifier ce Medecin ?\')">
				<i class="fa  fa-pencil"></i>

				<a class="red" href="supmed.php?t=medecin&id_M='.$r['id_M'].'" onclick="return confirm(\'Voulez vous vraiment supprimer ce Medecin ?\')">
				<i class="fa fa-trash-o"></i>
					</a>
				 </td>
				</tr>  ' ;	
				}


}catch(Exception $e) {
  die('Erreur : '. $e->getMessage());
}

    ?>
										   
                                        </tr>
                                        <tr class="even gradeC">
                                        
                                       
                                    </tbody>
                                </table>
                            
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
         
        
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>

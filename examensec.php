<?php
	include_once 'classes/examen.php';
				
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
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                     <h3>Gestion des laboratoires d'analyses médicales à l'Hôpital Universitaire Mohamed Taher El Maamouri</h3>
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
                                <img src="assets/img/sec.png" alt="">
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
                        <a href="accsec.php"><i class="fa fa-home fa-fw"></i>Accueil</a>
                    </li>
                  
				
				
					 <li>
                        <a href="#"><i class="fa fa-hospital-o fa-fw"></i> Suivi des examens<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="examensec.php">Affecter examens</a>
								</li>
                            <li>
                                <a href=".php">Nouveau examen</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                 <li>
                        <a href="#"><i class="fa fa-calendar fa-fw"></i> Planning des examens</a>
                       
                        <!-- second-level-items -->
                    </li>
                   
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
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
                     <h3>Gestion des laboratoires d'analyses médicales à l'Hôpital Universitaire Mohamed Taher El Maamouri</h3>
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
                           Modifier ce médecins
                        </div>
                        <div class="panel-body">
						
                            <div class="table-responsive">
							  <div class="panel-heading"><form role="form" method ="POST" >
                                <div class="form-group">
										 
										<label>Spécialité demandé: </label><select name ="specialite" class="form-control">
										<option> Choisissez la spécialité</option>
										<?php






															$c=new Connexion();
															$c->affichespecialite();
																$c->closeBase();


										?>
										</select>
                                        </div>
										
										
										<input type="submit" name="submit" class="btn btn-info" value="Afficher les medecins disponibles de spécialité choisie ">
										</form>
										<div class='form-group'>
													<label>Medecin : </label><select name ='med' class='form-control'>
										<?php


							try{
									if(isset($_POST['submit'])){
								$user="root";
								$passwd="";
								$dbh = new PDO('mysql:host=localhost;dbname=pfe', $user, $passwd);
								$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

								$st=$dbh->query("select nom_M,prenom_M from medecin where disponibilite = 'Disponible' and specialite = '".$_POST['specialite']."'");
								$st -> execute(); 

										while($r = $st->fetch() )
										{
												
													echo "
													
													
													
													<option > " . $r['nom_M'] . " " . $r['prenom_M'] . "</option>"; 
											
										}
									}
							}catch(Exception $e) {
									die('Erreur : '. $e->getMessage());
							}

							?>
							</select></div>
							</div>			
                             <form role="form" method ="POST" action="ajoutexamen.php">
                                        <div class="form-group">
                                            
                                            <input type="date" name ="date" class="form-control"  required>
                                        </div>
                                        <div class="form-group">
                                          <input type="text" name ="nom"  class="form-control" placeholder="Veuillez entrez le nom de patient">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name ="prenom" class="form-control" placeholder="Veuillez entrez le prénom de patient">
                                        </div>
									    <div class="form-group">
										<select name ="type" class="form-control">
										<option> Choisissez le type d'examen</option>
										<option> Examen sero-immunologique</option>
										<option> Examen de Bactériologie</option>
										<option> Examen d'hématologie</option>
										<option> Examen de Biochimie</option>
										<option> Examen de parasitologie</option>
										</select>
                                        </div>
										
                                       
                                       
										 
                                       
										 <div class="form-group">
										<label>Laboratoire : </label><select name ="med" class="form-control">
			
										<?php






															$c=new Connexion();
															$c->affichelabo();
																$c->closeBase();


											?>
										</select>
                                        </div>
										<br>
                                       
										<input type="submit"  class="btn btn-success" value="Valider" />
											
									  <input type="reset" class="btn btn-primary" value="Annuler" onclick="window.location.replace('../suiviexamen.php')">
                                       
																		   
                                  
                         
                    <!--End Advanced Tables -->
             
            
         </form>
        
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

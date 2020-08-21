
<!DOCTYPE html>
<?php
	session_start();
	
	define('_HOST_NAME_', 'localhost');
	define('_USER_NAME_', 'root');
	define('_DB_PASSWORD', '');
	define('_DATABASE_NAME_', 'pfe');
	
	//PDO Database Connection
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
	
if(isset($_POST['submit'])){
		$errMsg = '';
		//username and password sent from Form
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		
		if(($username == '')or ($password == ''))
			$errMsg .= 'Vous devez entrer votre Username et password!!<br>';
		
		
		
		
		if($errMsg == ''){
			$records = $databaseConnection->prepare('SELECT * FROM utilisateur WHERE username = :username AND password = :password');
			$records->bindParam(':username', $username);
			$records->bindParam(':password', $password);
			$records->execute();
			$rows = $records->fetch(PDO::FETCH_NUM);
			$results = $records->fetch(PDO::FETCH_ASSOC);
			
		//	if((count($results)) > 0 ){
			if( $rows > 0 ){
				
				$_SESSION['username'] = $rows[1] ;
				$sql =$databaseConnection->prepare( 'SELECT type
				FROM utilisateur WHERE username=:username' );
				$sql->bindValue( 'username', $_POST['username'],
				PDO::PARAM_STR);
			
				$sql->execute() or die('Erreur SQL !<br />'.$sql.'<br />'.$sql->errorInfo());

				while($data = $sql->fetch(PDO::FETCH_BOTH)){
						
						$_SESSION['type'] = $data['type'];
			
					if($_SESSION['type'] == 'Admin'){ 
					header('Location:accueil.php');
					exit();
					}
					elseif($_SESSION['type'] == 'Medecin'){
					header('Location: accmed.php');
					exit();
					}
					elseif($_SESSION['type'] == 'Personnel'){
					header('Location: accper.php');
					exit();
					}
					elseif($_SESSION['type'] == 'Secretaire'){
					header('Location: accsec.php');

					exit();
					}

			

				}
							
			

			
			}else{
				$errMsg .= 'Username et Password non valident<br>';
			}
		}
	}
 
?>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des examamens hospitalières</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
           <div class="col-md-4 col-md-offset-4 ">
            <h3 class="page-header">Gestion des examens médicaux </h3>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Veuillez vous connectez</h3>
                    </div>
                    <div class="panel-body">
							<?php
							if(isset($errMsg)){
								echo '<div style="color:#FF0000;text-align:center;font-size:12px;">'.$errMsg.'</div>';
							}
							?>
                        <form role="form" action="" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="username" name="username"  autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" >
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Se souvenir de moi.
										
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name='submit'  value="Connecter" class="btn btn-lg btn-success btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>

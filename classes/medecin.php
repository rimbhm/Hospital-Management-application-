

<?php 
class connexion {

	private  $host='localhost'; 
	private  $dbname='pfe';
    private $user='root';
    private $pass='';
	private $c;
	public $a;
  public function Connexion(){
			try {  
				$this->c = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
				$this->c->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
   
				
			}
			 catch (PDOException $e) {

            echo $e->getMessage();
			}  

		}//function ends


/////////////////////////////////////////////////gestionnmed///////////////////////////////////////


public function gestionmed(){
		
		$q = $this->c->prepare("select * from medecin");
		$q -> execute(); 
		
		while($r = $q->fetch() )
			{
		echo '
														
				 <tr class="odd gradeX">
						<td> '.$r['id_M'].'</td>
					<td> '.$r['nom_M'].'</td>
					<td> '.$r['prenom_M'].'</td>

				<td> '.$r ['specialite'].'</td>

				<td> '.$r['tel_M'].'</td>
				<td> '.$r['email_M'].'</td>
				<td> '.$r['username'].'</td>
				<td> '.$r['password'].'</td>
				<td> '.$r['disponibilite'].'</td>
	<td> '.$r['username'].'</td>
		<td> '.$r['password'].'</td>
				
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
		//} 
}
	
	////////////////////////////////////////////////editmed///////////////////////////////////////
	
	public function modifmed(){
		$id_M=$_GET['id_M'];
		$q = $this->c->prepare("select * from medecin where id_M='$id_M'");
		$q -> execute(); 
		While($r= $q->fetch() ){
					$id_M= $r['id_M'];
				    $nom_M = $r['nom_M'];
					$prenom_M = $r['prenom_M'];
					$specialite = $r['specialite'];
					$tel_M = $r['tel_M'];
					$email_M = $r['email_M'];
					$disponibilite = $r['disponibilite'];
					$username = $r['username'];
					$password = $r['password'];
				echo '
				<div class="form-group">
                                            <label for="field1"><span>Id:  <span class="required">*</span></span>
                                            <input type="text" class="form-control" name ="id_M" value="'.$id_M.'" required >
                                        </div>
										<div class="form-group">
                                           <span>Nom:  <span class="required">*</span></span>
                                            <input type="text" class="form-control" name ="nom" value="'.$nom_M.'" required >
                                        </div>
                                        <div class="form-group">
										<span>Prenom:  <span class="required">*</span></span>
                                          <input type="text" class="form-control" name ="prenom"  value="'.$prenom_M.'" required>
                                        </div>
                                        <div class="form-group">
										<span>Specialite:  <span class="required">*</span></span>
                                            <input type="text" class="form-control" name ="specialite"  value="'.$specialite.'" required>
                                        </div>
                                        <div class="form-group">
										<span>Tel:  <span class="required">*</span></span>
                                           <input type="text" class="form-control" name ="tel"  value="'.$tel_M.'" required>
                                       

										  </div>
                                        <div class="form-group">
										<span>Email:  <span class="required">*</span></span>
                                             <input type="text" class="form-control" name ="email" value="'.$email_M.'" required>
                                       
                                            </div>
                                            
                                        <div class="form-group">
										<span>Disponibilite:  <span class="required">*</span></span>
                                           <input type="text" class="form-control" name ="disponibilite"  value="'.$disponibilite.'" required>
                                       
                                        </div>
									<div class="form-group">
										<span>Usename:  <span class="required">*</span></span>
                                           <input type="text" class="form-control" name ="username"  value="'.$username.'" required>
                                       
                                        </div>
										<div class="form-group">
                                   	<span>Password:  <span class="required">*</span></span>
                                           <input type="text" class="form-control" name ="password"  value="'.$password.'" required>
                                       
                                        </div>
                                   
										<input type="submit" class="btn btn-primary" value="Valider" />
											
									 	 <a href= "gestionmedecin.php" class="btn btn-primary"  >Annuler</a>
';
	}
	}
	
	
	////////////////////////////////////////////////////////////////////////////////////////////////////
	
	
	public function consult(){
	$nom=$_SESSION['username'];
		//$id_M=$_GET['id_M'];
		$q = $this->c->prepare("select * from medecin where username='$nom'");
		$q -> execute(); 
		While($r= $q->fetch() ){
					$id_M= $r['id_M'];
				    $nom_M = $r['nom_M'];
					$prenom_M = $r['prenom_M'];
					$specialite = $r['specialite'];
					$tel_M = $r['tel_M'];
					$email_M = $r['email_M'];
					$disponibilite = $r['disponibilite'];
					//$username = $r['username'];
					$password = $r['password'];
					
				echo '
				
                                           
										<div class="form-group">
                                           <span>Nom:  <span class="required">*</span></span>
                                            <input type="text" class="form-control" name ="nom" value="'.$nom_M.'" disabled >
                                        </div>
                                        <div class="form-group">
										<span>Prenom:  <span class="required">*</span></span>
                                          <input type="text" class="form-control" name ="prenom"  value="'.$prenom_M.'" disabled>
                                        </div>
                                        <div class="form-group">
										<span>Specialite:  <span class="required">*</span></span>
                                            <input type="text" class="form-control" name ="specialite"  value="'.$specialite.'" disabled>
                                        </div>
                                        <div class="form-group">
										<span>Tel:  <span class="required">*</span></span>
                                           <input type="text" class="form-control" name ="tel"  value="'.$tel_M.'" disabled>
                                       

										  </div>
                                        <div class="form-group">
										<span>Email:  <span class="required">*</span></span>
                                             <input type="text" class="form-control" name ="email" value="'.$email_M.'" disabled>
                                       
                                            </div>
                                            
                                        <div class="form-group">
										<span>Disponibilite:  <span class="required">*</span></span>
                                           <input type="text" class="form-control" name ="disponibilite"  value="'.$disponibilite.'" disabled>
                                       
                                        </div>
									<div class="form-group">
										<span>Usename:  <span class="required">*</span></span>
                                           <input type="text" class="form-control" name ="username"  value="'.$nom.'" disabled>
                                       
                                        </div>
										<div class="form-group">
                                   	<span>Password:  <span class="required">*</span></span>
                                           <input type="text" class="form-control" name ="password"  value="'.$password.'" disabled>
                                       
                                        </div>
                                   
										
											
									 	 <a href= "gestionmedecin.php" class="btn btn-primary"  >Retours</a>
';
	}
	}
	
	
	/////////////////////////////////////////////////////////////////////////////////
	public function modifier(){
	$nom=$_SESSION['username'];
		//$id_M=$_GET['id_M'];
		$q = $this->c->prepare("select * from medecin where username='$nom'");
		$q -> execute(); 
		While($r= $q->fetch() ){
					$id_M= $r['id_M'];
				    $nom_M = $r['nom_M'];
					$prenom_M = $r['prenom_M'];
					$specialite = $r['specialite'];
					$tel_M = $r['tel_M'];
					$email_M = $r['email_M'];
					$disponibilite = $r['disponibilite'];
					//$username = $r['username'];
					$password = $r['password'];
					
				echo '
										<div class="form-group">
                                            <label for="field1"><span>Id:  <span class="required">*</span></span>
                                            <input type="text" class="form-control" name ="id_M" value="'.$id_M.'" required >
                                        </div>
                                           
										<div class="form-group">
                                           <span>Nom:  <span class="required">*</span></span>
                                            <input type="text" class="form-control" name ="nom" value="'.$nom_M.'" required >
                                        </div>
                                        <div class="form-group">
										<span>Prenom:  <span class="required">*</span></span>
                                          <input type="text" class="form-control" name ="prenom"  value="'.$prenom_M.'" required>
                                        </div>
                                        <div class="form-group">
										<span>Specialite:  <span class="required">*</span></span>
                                            <input type="text" class="form-control" name ="specialite"  value="'.$specialite.'" required>
                                        </div>
                                        <div class="form-group">
										<span>Tel:  <span class="required">*</span></span>
                                           <input type="text" class="form-control" name ="tel"  value="'.$tel_M.'" required>
                                       

										  </div>
                                        <div class="form-group">
										<span>Email:  <span class="required">*</span></span>
                                             <input type="text" class="form-control" name ="email" value="'.$email_M.'" required>
                                       
                                            </div>
                                            
                                        <div class="form-group">
										<span>Disponibilite:  <span class="required">*</span></span>
                                           <input type="text" class="form-control" name ="disponibilite"  value="'.$disponibilite.'" required>
                                       
                                        </div>
									<div class="form-group">
										<span>Usename:  <span class="required">*</span></span>
                                           <input type="text" class="form-control" name ="username"  value="'.$nom.'" required>
                                       
                                        </div>
										<div class="form-group">
                                   	<span>Password:  <span class="required">*</span></span>
                                           <input type="text" class="form-control" name ="password"  value="'.$password.'" required>
                                       
                                        </div>
                                   
											<input type="submit" class="btn btn-primary" value="Valider" />
											
									 	 <a href= "gestionmedecin.php" class="btn btn-primary"  >Retours</a>
';
	}
	}
	
	
	
	
	
////////////////////////////////////////////////close///////////////////////////////////////

	
			public function closeBase() 
			{
				     $this->c = null;
			}
	}
?>

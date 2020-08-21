

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


public function gestionper(){
		
		$q = $this->c->prepare("select * from personnel");
		$q -> execute(); 
		
		while($r = $q->fetch() )
			{
		echo '
														
				 <tr class="odd gradeX">
						<td> '.$r['id_P'].'</td>
					<td> '.$r['nom_P'].'</td>
					<td> '.$r['prenom_P'].'</td>

			

				<td> '.$r['tel_P'].'</td>
				<td> '.$r['email_P'].'</td>
				<td> '.$r['disponibilite'].'</td>

				<td> '.$r['username'].'</td>
				<td> '.$r['password'].'</td>
				<td>
																
				<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																	
				<a class="green" href="modifperso.php?id_P='.$r['id_P'].'" onclick="return confirm(\'Voulez vous vraiment modifier ce Personnel ?\')">
				<i class="fa  fa-pencil"></i>

				<a class="red" href="supper.php?t=personnel&id_P='.$r['id_P'].'" onclick="return confirm(\'Voulez vous vraiment supprimer ce Personnel ?\')">
				<i class="fa fa-trash-o"></i>
					</a>
				 </td>
				</tr>  ' ;	
				}
		//} 
}
	
	////////////////////////////////////////////////editmed///////////////////////////////////////
	
	public function modifp(){
		$id_P=$_GET['id_P'];
		$q = $this->c->prepare("select * from personnel where id_P='$id_P'");
		$q -> execute(); 
		While($r= $q->fetch() ){
					$id_P= $r['id_P'];
				    $nom_P = $r['nom_P'];
					$prenom_P = $r['prenom_P'];
				
					$tel_P = $r['tel_P'];
					$email_P = $r['email_P'];
					$disponibilite = $r['disponibilite'];
					$username = $r['username'];
					$password = $r['password'];
				echo '
				<div class="form-group">
                                            <label for="field1"><span>Id:  <span class="required">*</span></span>
                                            <input type="text" class="form-control" name ="id_P" value="'.$id_P.'" required >
                                        </div>
										<div class="form-group">
                                           <span>Nom:  <span class="required">*</span></span>
                                            <input type="text" class="form-control" name ="nom" value="'.$nom_P.'" required >
                                        </div>
                                        <div class="form-group">
										<span>Prenom:  <span class="required">*</span></span>
                                          <input type="text" class="form-control" name ="prenom"  value="'.$prenom_P.'" required>
                                        </div>
                                       
                                        <div class="form-group">
										<span>Tel:  <span class="required">*</span></span>
                                           <input type="text" class="form-control" name ="tel"  value="'.$tel_P.'" required>
                                       

										  </div>
                                        <div class="form-group">
										<span>Email:  <span class="required">*</span></span>
                                             <input type="text" class="form-control" name ="email" value="'.$email_P.'" required>
                                       
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
										<input type="submit" class="btn btn-success" value="Valider" />
											
									  <a href= "gestionperso.php" class="btn btn-primary"  >Annuler</a>
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

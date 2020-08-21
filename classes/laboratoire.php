

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



/////////////////////////////////////////////////gestionlab///////////////////////////////////////


public function gestionlab(){
		
		$q = $this->c->prepare("select * from laboratoire");
		$q -> execute(); 
		
		while($r = $q->fetch() )
			{
		echo '
														
				 <tr class="odd gradeX">
					<td> '.$r['id_lab'].'</td>
					<td> '.$r['nom_lab'].'</td>
					<td> '.$r['type_lab'].'</td>
					<td> '.$r['disponibilite'].'</td>
				
				
				<td>
																
				<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																	
				<a class="green" href="modiflabo.php?id_lab='.$r['id_lab'].'" onclick="return confirm(\'Voulez vous vraiment modifier cette labo?\')">
				<i class="fa  fa-pencil"></i>

				<a class="red" href="suplab.php?t=laboratoire&id_lab='.$r['id_lab'].'" onclick="return confirm(\'Voulez vous vraiment supprimer cette labo?\')">
				<i class="fa fa-trash-o"></i>
					</a>
				 </td>
				</tr>  ' ;	
				}
		//} 
}
	
	////////////////////////////////////////////////editmed///////////////////////////////////////
	
	public function modifl(){
		$id_lab=$_GET['id_lab'];
		$q = $this->c->prepare("select * from laboratoire where id_lab='$id_lab'");
		$q -> execute(); 
		While($r= $q->fetch() ){
					$id_lab= $r['id_lab'];
				    $nom_lab = $r['nom_lab'];
					$type_lab = $r['type_lab'];
					$disponibilite = $r['disponibilite'];
					
				echo '
				<div class="form-group">
                                            <label for="field1"><span>Id:  <span class="required">*</span></span>
                                            <input type="text" class="form-control" name ="id_lab" value="'.$id_lab.'" required >
                                        </div>
										<div class="form-group">
                                           <span>Nom:  <span class="required">*</span></span>
                                            <input type="text" class="form-control" name ="nom" value="'.$nom_lab.'" required >
                                        </div>
                                        <div class="form-group">
										<span>Type:  <span class="required">*</span></span>
                                          <input type="text" class="form-control" name ="type"  value="'.$type_lab.'" required>
                                        </div>
                                       
                                            <div class="form-group">
										<span>Disponibilite:  <span class="required">*</span></span>
                                          <input type="text" class="form-control" name ="disponibilite"  value="'.$disponibilite.'" required>
                                        </div>
                                        
                                       
									
                                   
										<input type="submit" class="btn btn-primary" value="Valider" />
											
									  <input type="reset" class="btn btn-success" value="Annuler" onclick="window.location.replace("../gestionlabo.php")">
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

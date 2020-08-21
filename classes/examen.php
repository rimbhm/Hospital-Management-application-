

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



	
	
	///////////////////////////////////////////////////////////
	
	
	function affichemed()
{
$specialite= $_POST['specialite'];
$q = $this->c->prepare("select nom_M,prenom_M from medecin where disponibilite = 'Disponible' ");
		$q -> execute(); 
	//	$respj=$this->c->prepare("select * from piecejointe ");
	//	if($l=$respj->fetch())	{		
		

		while ($r = $q->fetch() ){
			

	
           
		echo 
														
				 
					"<option > " . $r['nom_M'] . " " . $r['prenom_M'] . "</option>"
					; 
				
              
			   }  
			
			

   }
	
///////////////////////////////////////////////////////////
	
	function affichespecialite()
{

$q = $this->c->prepare("select  DISTINCT  specialite from medecin");
		$q -> execute(); 
	//	$respj=$this->c->prepare("select * from piecejointe ");
	//	if($l=$respj->fetch())	{		
		

		while ($r = $q->fetch() ){
			

;	
           
		echo 
														
				 
					"<option > " . $r['specialite'] . " </option>"
					; 
				
              
			   }  
			
			

   }	
	
	/////////////////////////////////////////////////////////
		function affichelabo()
{

$q = $this->c->prepare("select  nom_lab from laboratoire where disponibilite = 'Disponible'");
		$q -> execute(); 
	//	$respj=$this->c->prepare("select * from piecejointe ");
	//	if($l=$respj->fetch())	{		
		

		while ($r = $q->fetch() ){
			

;	
           
		echo 
														
				 
					"<option > " . $r['nom_lab'] . " </option>"
					; 
				
              
			   }  
			
			

   }	
	
	
	
////////////////////////////////////////////////close///////////////////////////////////////

	
			public function closeBase() 
			{
				     $this->c = null;
			}
	}
?>

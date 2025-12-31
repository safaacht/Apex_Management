<?php
require_once 'Database.php';
class Equipe{

    public function __construct(protected string $nom, 
                                protected float $budget,
                                protected string $manager,
                                protected ?int $id=null)
    {

    }


    
    public function setId($id):void{
        $this->id=$id;
    }

    public function setNom($nom):void{
        $this->nom=$nom;
    }

    public function setBudget($budget):void{
        $this->budget=$budget;
    }

    
    public function setManager($manager):void{
        $this->manager=$manager;
    }


    
    public function getId():int{
        return $this->id;
    }

        
    public function getNom():string{
        return $this->nom;
    }

        
    public function getBudget():float{
        return $this->budget;
    }

        
    public function getManager():string{
        return $this->manager;
    }


    public function create(){
        $db=Database::getConnection();
        $sql="INSERT INTO equipe(nom,budget,manager) VALUES(:nom,:budget,:manager)";
        $stmt=$db->prepare($sql);
        $stmt->execute(
            [':nom'=>$this->nom, 
            ':budget'=>$this->budget,
            ":manager"=>$this->manager
            ]
        );
    }

    public function affichage():array{
        $db=Database::getConnection();
        $sql="SELECT * FROM equipe";
        $rslt=$db->query($sql);
        $equipes=$rslt->fetchAll(PDO::FETCH_ASSOC);
        // print_r($equipes);
        return $equipes;
    }
}


$e=new Equipe("NomEquipe",1200000,'NomManager');
// $e->setNom("L FC");
// $e->setBudget(45289.99);
// $e->setManager("Ahmed Ahmed");
// $e->create();
foreach($e->affichage() as $equipe){
 echo "Id:". $equipe['id'] . "\n Name: " . $equipe['nom'] . "\n MANAGER: " . $equipe['manager'] . "\n";
}

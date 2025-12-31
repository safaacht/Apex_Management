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
            ':budget'=>$this->budget ,
            ":manager"=>$this->manager
            ]
        );
    }
}

$e=new Equipe("NomEquipe",1200000,'NomManager');
$e->setNom("Lions FC");
$e->setBudget(37289.99);
$e->setManager("Ahmed Benali");
$e->create();
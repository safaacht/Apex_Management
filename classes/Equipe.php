<?php
namespace classes;
use ApexMercato\Database;
use PDO;
use ApexMercato\CrudTrait;
class Equipe{
    use CrudTrait;

    public function __construct(protected string $nom, 
                                protected float $budget,
                                protected string $manager,
                                protected ?int $id=null)
    {
        $this->table = 'equipe';
        $this->initCrud();
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

    public function getId():?int{
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


    public function save():bool
    {
        $data=[
            'nom' => $this->nom,
            'budget' => $this->budget,
            'manager' => $this->manager
        ];
        return $this->create($data);
    }

}

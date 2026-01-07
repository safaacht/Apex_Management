<?php
namespace classes;
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

    // affichage equipe
    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'nom' => $this->getNom(),
            'budget' => $this->getBudget(),
            'manager' => $this->getManager(),
        ];
    }
}

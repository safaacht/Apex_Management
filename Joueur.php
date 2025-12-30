<?php
class Joueur extends Personne{
    public function __construct(string $name, 
                                string $nationalite,
                                string $email, 
                                private string $role, 
                                private float $valeur_march,
                                ?int $id=null)
    {
        $contract=new Contract(1,100000,737282,new DateTime());
         parent::__construct($name, $nationalite, $email,$contract ,$id);
    }

    public function getAnnualCost(){
        
    }
}

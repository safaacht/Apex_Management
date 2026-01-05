<?php
namespace classes;
use classes\Personne;
use classes\Contract;
use DateTime;
class Joueur extends Personne{
    public static float $prime_signature;
    public function __construct(string $name, 
                                string $nationalite,
                                string $email, 
                                private string $role, 
                                private float $valeur_march,
                                ?int $id=null)
    {
        $contract=new Contract(1,100000,737282,new DateTime(),new DateTime());
         parent::__construct($name, $nationalite, $email,$contract ,$id);
    }

    public function getAnnualCost():float{
        return ($this->contract->getSalaire()*12)+self::$prime_signature;
    }
}

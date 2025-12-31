<?php

class Coach extends Personne{
    public static float $frais_dep= 3999.99;
    public function __construct(string $name,
                                string $nationalite, 
                                string $email, 
                                Contract $contract,
                                protected string $style_coaching,
                                protected int $annee_exp, 
                                ?int $id = null)
    {
        $contract= new Contract(2,3339.99,28999.99, new DateTime(),new DateTime());
        parent::__construct($name, $nationalite, $email, $contract, $id);
    }

    public function getAnnualCost():float{
        return ($this->contract->getSalaire()*12)+self::$frais_dep;
    }
}

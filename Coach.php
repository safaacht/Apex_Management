<?php

class Coach extends Personne{

    public function __construct(string $name,
                                string $nationalite, 
                                string $email, 
                                Contract $contract,
                                protected string $style_coaching,
                                protected int $annee_exp, 
                                ?int $id = null)
    {
        $contract= new Contract(2,3339.99,28999.99, new DateTime());
        parent::__construct($name, $nationalite, $email, $contract, $id);
    }

    public function getAnnualCost(){
        
    }

}

<?php
namespace classes;
use classes\Personne;
use classes\Contract;
use DateTime;
use ApexMercato\CrudTrait;

class Coach extends Personne{
    use CrudTrait;

    public static float $frais_dep= 3999.99;
    public function __construct(string $name,
                                string $nationalite, 
                                string $email, 
                                Contract $contract,
                                protected string $style_coaching,
                                protected int $annee_exp, 
                                ?int $id = null)
    {
        // $contract= new Contract(2,3339.99,28999.99, new DateTime(),new DateTime());
        parent::__construct($name, $nationalite, $email, $contract, $id);
        $this->table = 'coach';
        $this->initCrud();
    }

    public function getAnnualCost():float{
        return ($this->contract->getSalaire()*12)+self::$frais_dep;
    }

    public function save(){
        $data=[
            'name' => $this->name,
            'nationalite' => $this->nationalite,
            'email' => $this->email,
            'contract'=>$this->contract->getId(),
            'style_coaching' => $this->style_coaching,
            'annee_exp' => $this->annee_exp
        ];

         return $this->create($data);

    }
}


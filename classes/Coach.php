<?php
namespace classes;
use classes\Personne;
use classes\Contract;
use DateTime;
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
        // $contract= new Contract(2,3339.99,28999.99, new DateTime(),new DateTime());
        parent::__construct($name, $nationalite, $email, $contract, $id);
        
    }

    public function getAnnualCost():float{
        return ($this->contract->getSalaire()*12)+self::$frais_dep;
    }

    public function setId($id):void
    {
        $this->id=$id;
    }

    public function getId():?int
    {
        return $this->id;
    }

    public function setName($name):void
    {
        $this->name=$name;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function setNationalite($nationalite):void
    {
        $this->nationalite=$nationalite;
    }

    public function getNationalite():string
    {
        return $this->nationalite;
    }

    public function getEmail():string
    {
        return $this->email;
    }

    public function getStyleCoaching():string
    {
        return $this->style_coaching;
    }


    public function getAnneeExp():int
    {
        return $this->annee_exp;
    }

    public function toArray(){
        return[
            'name' => $this->name,
            'nationalite' => $this->nationalite,
            'email' => $this->email,
            'contract_id'=>$this->contract->getId(),
            'style_coaching' => $this->style_coaching,
            'annee_exp' => $this->annee_exp
        ];

         

    }
}


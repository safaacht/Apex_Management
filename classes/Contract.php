<?php

namespace classes;
use classes\Joueur;
use classes\Coach;
use classes\Equipe;

class Contract{
    public function __construct( private float $salaire, 
                                private float $close_rachat,
                                private  \DateTime $date_fin,
                                private  readonly \DateTime $date_deb,
                                private ?int $id=null
                                )
    {
    }

    public function getSalaire():float{
        return $this->salaire;
    }
    public function setId($id):void{
        $this->id=$id;
    }
    public function getId():?int{
        return $this->id;
    }
}

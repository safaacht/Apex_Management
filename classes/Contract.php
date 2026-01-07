<?php

namespace classes;
use classes\Joueur;
use classes\Coach;
use classes\Equipe;

class Contract{
    public function __construct( private float $salaire, 
                                private float $close_rachat,
                                private string $date_fin,
                                private  readonly string $date_deb,
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

    public function getClauseRachat():float{
        return $this->close_rachat;
    }

    public function getDateFin(): string{
        return $this->date_fin;
    }

    public function getDateDep(): string {
        return $this->date_deb;
    }

    public function getId():?int{
        return $this->id;
    }

    public function toArray()
    {
        $arr = [
            "salaire" => $this->salaire, 
            "close_rachat" => $this->close_rachat,
            "date_fin" => $this->date_fin,
            "date_deb" => $this->date_deb,
        ];
        return $arr;
    }
}

<?php

class Contract{
    public function __construct(private int $id, 
                                private float $salaire, 
                                private float $clause_rachat,
                                private  \DateTime $date_fin,
                                private  readonly \DateTime $date_dep
                                )
    {
        
    }

    public function getSalaire():float{
        return $this->salaire;
    }
}

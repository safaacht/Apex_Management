<?php
namespace repositories;
use repositories\BaseRepository;
use classes\Joueur;
use classes\Contract;
use repositories\ContractRepository;

class JoueurRepository extends BaseRepository{
    protected string $table = "joueur";
 
public function findById(int $id):object
{
    $arr=parent::findById($id);
    $contractRepo=new ContractRepository();
    $contract=$contractRepo->findById($id);

    return new Joueur(
        $arr["name"],
        $arr["nationalite"],
        $arr['email'], 
        $contract,
        $arr["role"],
        $arr["valeur_marchande"]
    );
}

}
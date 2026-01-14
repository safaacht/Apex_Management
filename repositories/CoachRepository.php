<?php
namespace repositories;

use classes\Coach;
use repositories\BaseRepository;

class CoachRepository extends BaseRepository{
    protected string $table = "coach";
 

public function findById(int $id):object
{
    $arr=parent::findById($id);
    $contractRepo=new ContractRepository();
    $contract=$contractRepo->findById($id);

    return new Coach(
        $arr["name"],
        $arr["nationalite"],
        $arr['email'], 
        $contract,
        $arr["style_coaching"],
        $arr["annee_exp"]
    );
}
}

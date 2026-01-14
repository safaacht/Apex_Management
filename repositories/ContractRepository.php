<?php
namespace repositories;

use classes\Contract;
use repositories\BaseRepository;

class ContractRepository extends BaseRepository{
    protected string $table = "contract";
 
    public function findById(int $id):object
    {
        $arr = parent::findById($id);
        return new Contract($arr['salaire'], 
                            $arr['close_rachat'],
                            $arr['date_fin'],
                            $arr['date_deb'],
                            $arr['equipe_id']);
    }
}
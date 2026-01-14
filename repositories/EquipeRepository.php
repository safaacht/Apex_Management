<?php
namespace repositories;
use repositories\BaseRepository;
use classes\Equipe;

class EquipeRepository extends BaseRepository{
    protected string $table = "equipe";

    public function findById(int $id,):object
    {
        $arr=parent::findById($id);
        return new Equipe($arr["nom"],
                          $arr['budget'],
                          $arr['manager']);
    }

}
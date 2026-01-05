<?php
namespace ApexMercato;
use ApexMercato\Database;
use PDO;

trait CrudTrait{
 protected PDO $conn;
 protected string $table;
 
//  construct
protected function initCrud():void
{
    $this->conn=Database::getConnection();
}

// creat
public function create(array $data):bool
{
    $columns=implode(', ',array_keys($data));
    $placeholders=":".implode(", :", array_keys($data));

    $sql="INSERT INTO {$this->table} ($columns) VALUES ($placeholders)";
    $stmt=$this->conn->prepare($sql);
    $rslt=$stmt->execute($data);

    return $rslt;
}

// read
public function all():array{
    $sql="SELECT * FROM {$this->table}";
    $stmt=$this->conn->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// delete
public function delete(int $id):bool
{
    $stmt=$this->conn->prepare("
    DELETE FROM {$this->table} WHERE id= :id
    ");

    return $stmt->execute(["id"=>$id]);
}

// update
public function update(int $id, array $data):bool
{
    $fields="";
    foreach($data as $key=>$value){
        
        $fields .= "$key=:$key,";
    }
    $fields=rtrim($fields,",");
    $data['id']=$id;

    $stmt=$this->conn->prepare(
        "UPDATE {$this->table} SET $fields WHERE id= :id"
    );
    return $stmt->execute($data);
}
}
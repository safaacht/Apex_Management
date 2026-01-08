<?php
require_once __DIR__ . '/../ApexMercato/Autoload.php';

use classes\Contract;
use classes\Coach;
use classes\Equipe;
use repositories\CoachRepository;
use repositories\ContractRepository;
use ApexMercato\Database;
use PDO;
$conn = Database::getConnection();

if(isset($_POST['submit'])){

    // insertion
    $contract=new Contract($_POST['salaire'],
                           $_POST['clause_rachat'],
                           $_POST['date_deb'],
                           $_POST['date_fin'],
                           $_POST['equipe']
                          );
                          
    $contractRepo= new ContractRepository();
    $contractRepo->create($contract->toArray());
    $contract->setId($conn->lastInsertID());


    $coach=new Coach($_POST['name'],
                     $_POST['nationalite'],
                     $_POST['email'],
                     $contract,
                     $_POST['style_coaching'],
                     $_POST['annee_exp']
                    );
 
    $coachRepo= new CoachRepository();
    $coachRepo->create($coach->toArray());
    
header("location:../views/dashboardAdmin.php");exit;}
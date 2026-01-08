<?php
require_once '..\ApexMercato\Autoload.php';

use repositories\ContractRepository;
use ApexMercato\Database;
use classes\Contract;
use classes\Joueur;
use repositories\JoueurRepository;
$conn=Database::getConnection();


// insertion du contract premierement et puis le joueur
$contract=new Contract($_POST['salaire'],
                       $_POST['clause_rachat'],
                       $_POST['date_deb'],
                       $_POST['date_fin'],
                       $_POST['equipe']);

$contractRepo= new ContractRepository();
$contractRepo->create($contract->toArray());
$contract->setId($conn->lastInsertID());


$joueur=new Joueur($_POST['name'],
                   $_POST['nationalite'],
                   $_POST['email'],
                   $contract,
                   $_POST['role'],
                   $_POST['valeur_marchande']);

// insertion

$joueurRepo= new JoueurRepository();
$joueurRepo->create($joueur->toArray());

header("location:../views/dashboardAdmin.php");exit;
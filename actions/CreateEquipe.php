<?php
require_once '..\ApexMercato\Autoload.php';
use classes\Equipe;
use repositories\EquipeRepository;

// validation

$equipe = new Equipe($_POST['nom'],$_POST['budget'],$_POST['manager']);

// insertion
$equipeRepo = new EquipeRepository();
$equipeRepo->create($equipe->toArray());

// redirect
header("location:../views/home.php");exit;
<?php
namespace Apex\Personne;
use Apex\Contract\Contract;

abstract class Personne{

    public function __construct(protected string $name,
                                protected string $nationalite,
                                protected string $email,
                                protected Contract $contract,
                                protected ?int $id=null)
    {
    }

    abstract public function getAnnualCost();
//     - Le Joueur coûte : (Salaire mensuel * 12) + Prime de signature.
// - Le Coach coûte : (Salaire mensuel * 12) + Frais de déplacement.
}
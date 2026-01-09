<?php

final class FinancialEngine{
    private  float $taxeRate=0.2;
    private  float $agentFeesRate=0.05;

    public function calculateTotalCost(float $salaire):float
    {
        $tax= $salaire*$this->taxeRate;
        $agentFees=$salaire*$this->agentFeesRate;

        $total=$salaire+$agentFees+$tax;

        return $total;
    }

    public function affordable(float $salaire, float $equipeBudget): bool
    {
        $totalCost=$this->calculateTotalCost($salaire);
        return $totalCost<=$equipeBudget;
    }

}

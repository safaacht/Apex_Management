<?php

final class FinancialEngine{
    public static function calculateTax(float $salaire){
        return $salaire+($salaire*0.1);
    }
}

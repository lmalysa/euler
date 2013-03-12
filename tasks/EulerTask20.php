<?php
class EulerTask20 extends EulerTask
{
    private $strDescription = "Find the sum of digits in 100!";


    public function run()
    {
        $intFac = Utilities::getFactorial(100);
        $arrDigits = Utilities::getArrOfDigits((string) $intFac);
        echo array_sum($arrDigits);
    }
}
<?php
class EulerTask16 extends EulerTask
{

    public function run()
    {
        $intNumber = bcpow(2,1000);
        $strNumber = (string) $intNumber;
        $intSum = 0;
        for($intPosition = 0;$intPosition < strlen($strNumber); $intPosition++) {
            $strDigit = substr($strNumber,$intPosition, 1);
            $intSum += (int) $strDigit;
        }
        echo $intSum;
    }
}
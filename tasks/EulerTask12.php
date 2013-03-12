<?php
class EulerTask12 extends EulerTask
{
    public function run()
    {
        $intTriangle = 0;
        $intI = 1;
        while(1) {
            $intTriangle += $intI;
            if (Utilities::getNumberOfDivisors($intTriangle) > 500) {
                echo "KONIEC:".$intTriangle;
                die;
            }
            echo "T:".$intTriangle."\n";
            echo "I:".$intI."\n";
            $intI++;
        }
    }
}



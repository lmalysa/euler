<?php
class EulerTask119 extends EulerTask
{
    const MAX = 99999;

    public function run()
    {
        $intS = 1;
        $intD = 10;
        while (1) {
            $arr = Utilities::getArrOfDigits((string)$intD);
            $intSum = array_sum($arr);
            for ($intI = 2; $intI<10; $intI++) {
                //echo $intSum;
                $z = bcpow($intSum, $intI,10);
                //echo '.';
                //echo $z;
                //echo '.';
                if ($z == $intD) {
                    echo $intS.'.'.$intD."\n";
                    if ($intS == 20) {
                        die;
                    }
                    $intS++;
                }
            }
            $intD++;
        }
    }
}



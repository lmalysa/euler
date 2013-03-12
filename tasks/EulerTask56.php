<?php
class EulerTask56 extends EulerTask
{
    const A_MAX = 100;
    const B_MAX = 100;

    public function run()
    {
        $arrR = array();
        for($i = 1; $i<self::A_MAX;$i++) {
            for($j = 1; $j<self::B_MAX;$j++) {
                $num = bcpow($i,$j);
                $arrDig = Utilities::getArrOfDigits($num);
                $arrR[] = array_sum($arrDig);
            }
        }
        echo "W:".max($arrR)."\n";
    }
}
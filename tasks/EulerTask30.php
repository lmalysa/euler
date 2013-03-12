<?php
class EulerTask30 extends EulerTask
{
    const POWER = 5;
    const MIN = 88888;
    const MAX = 999999;
    private $arrNumbers = array();


    public function run()
    {

        for ($intI = 2; $intI < self::MAX; $intI ++) {
            $arrD = Utilities::getArrOfDigits((string) $intI);
            
            $intSum = 0;
            foreach ($arrD as $d) {
                $intSum += bcpow($d,self::POWER);
            }
            if ($intSum == $intI) {
                $this->arrNumbers[] = $intI;
                echo $intI."\n";
            }
        }
        echo "SUM:".array_sum($this->arrNumbers)."\n";
    }
}


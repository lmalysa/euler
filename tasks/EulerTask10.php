<?php
class EulerTask10 extends EulerTask
{

    private $intSum = 0;

    private $intN = 2000000;

    public function run()
    {
        $arrKeys = range(2, $this->intN, 1);
        $arrValues = array();
        foreach ($arrKeys as $intKey) {
           $arrValues[$intKey]= false;
        }

        for ($intI = 2; $intI*$intI <= $this->intN; $intI++) {
            echo ".";
            if ($arrValues[$intI] == true) {
                continue;
            } else {
                for ($k = 2*$intI; $k <= $this->intN; $k += $intI) {
                  $arrValues[$k] = true;
                }
            }
        }


        foreach ($arrValues as $klucz => $wartosc) {
            if(!$wartosc) {
                echo "\n".$klucz."\n";
                $this->intSum = bcadd($klucz, $this->intSum);
            }
        }

        echo "WYNIK:::::".$this->intSum;

    }
}


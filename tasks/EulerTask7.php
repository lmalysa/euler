<?php
class EulerTask7 extends EulerTask
{
    private $intLimit = 10001;

    private $arrPrimes = array();

    public function run()
    {
        $intI = 1;
        while(1) {
            if (Utilities::is_prime($intI)) {
                $this->arrPrimes[] = $intI;
                echo ".";
                if (count($this->arrPrimes) == $this->intLimit) {
                    echo "\n WYNIK: ".$this->arrPrimes[$this->intLimit - 1];
                    die;
                }
            }
            $intI++;
        }
    }
}

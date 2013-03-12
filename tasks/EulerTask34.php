<?php

class EulerTask34 extends EulerTask
{
    const LIMIT = 1000000;

    private $arrFactorials = array();

    public function  __construct() {
        foreach (array(0,1,2,3,4,5,6,7,8,9) as $val) {
            $this->arrFactorials[$val] = Utilities::getFactorial($val);
        }
    }

    public function run()
    {
        for ($i=10;$i<self::LIMIT;$i++) {
            if ($this->check($i)) {
                echo $i."\n";
            }
        }

    }

    private function translate($arrFirst) {
        $arrRet = array();
        foreach ($arrFirst as $val) {
            $arrRet[] = $this->arrFactorials[$val];
        }
        return $arrRet;
    }

    /**
     * Sprawdza czy liczba ma odpowiednia wlasciwosc
     *
     * @param int $intNUmber
     * @return boolean
     */
    private function check($intNUmber) {
       $arrDigits = Utilities::getArrOfDigits((string)$intNUmber);
       $bol =  ($intNUmber == array_sum($this->translate($arrDigits)));
       if ($bol) {
           //print_r($this->translate($arrDigits));
       }
       return $bol;
    }
    
}
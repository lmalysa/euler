<?php
class EulerTask14 extends EulerTask
{
    private $strDescription = "";

    private $intStart = 900000;

    private $arrRes = array();


    private function getnexta($intK)
    {
        return (Utilities::isEven($intK) ? ($intK / 2) : (3*$intK + 1));
    }

    public function run()
    {
        for ($intI = $this->intStart; $intI > 800000; $intI-- ) {
            echo ".";
            $intL = 0;
            $intG = $intI;

            while ($intG > 1) {
                $intG = $this->getnexta($intG);
                $intL++;
            }
            if (!isset($this->arrRes[$intL])) {
                $this->arrRes[$intL] = $intI;
            }

        }
        $keys = array_keys($this->arrRes);
        $intLongest = max($keys);
        echo "WYNIK: ".$this->arrRes[$intLongest]." TRASA: ".$intLongest;
        //print_r($this->arrRes);
    }
}


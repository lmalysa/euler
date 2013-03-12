<?php
class EulerTask25 extends EulerTask
{

    private $arrFibo = array();

    public function run()
    {
        $this->arrFibo[0] = 1;
        $this->arrFibo[1] = 1;
        $bolRun = true;
        $intPos = 2;
        while($bolRun) {
            $this->arrFibo[$intPos] = bcadd($this->arrFibo[$intPos-1],$this->arrFibo[$intPos-2]);
            //echo $this->arrFibo[$intPos];
            $strNumber = (string) $this->arrFibo[$intPos];
            $intLength = strlen($strNumber);
            if ($intLength == 1000) {
                $bolRun = false;
                echo "LICZBA:### ".$strNumber." ###";
                echo "POZYCJA::".($intPos + 1)."::";
            }
            $intPos++;
            echo "-".$intLength."-";
            //echo "&&".$strNumber;
        }
        echo '-KONIEC-';
    }
}
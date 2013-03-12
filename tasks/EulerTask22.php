<?php
class EulerTask22 extends EulerTask
{

    private $arrNames = array();
    private $arrAlpha = array();

    private function obtainNames() {
        $strNames = file_get_contents('data/data52.dat');
        $arrNames = explode(',',$strNames);
        foreach ($arrNames as $intKey => $string) {
            $arrNames[$intKey] = trim($string,'"');
        }
        sort($arrNames);
        $this->arrNames = $arrNames;
        //print_r($this->arrNames);
    }

    private function obtainAlpha()
    {
        $a = range('A','Z');
        $this->arrAlpha = array_flip($a);
        //print_r($this->arrAlpha);
    }


    public function run()
    {
        $intTotalSum = 0;

        $this->obtainNames();
        //print_r($this->arrNames);
        $this->obtainAlpha();
        //print_r($this->arrAlpha);
        foreach ($this->arrNames as $intKeyName => $strName) {
            $intPartialSum = 0;
            $arrLetters = Utilities::explodeString($strName);
            foreach ($arrLetters as $strLetter) {
                $intPartialSum += $this->arrAlpha[$strLetter] + 1;
            }
            $intTotalSum = bcadd($intTotalSum ,($intPartialSum * ($intKeyName + 1)));
            //$this->arrNames[$intKeyName] = '---'.$this->arrNames[$intKeyName]." = ".$intPartialSum." x ".($intKeyName + 1)." = ".($intPartialSum * ($intKeyName + 1));
        }
        //print_r($this->arrNames);
        echo "WYNIK: ".$intTotalSum;
    }
}
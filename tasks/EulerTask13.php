<?php
class EulerTask13 extends EulerTask
{
    private $strDescription = "";


    public function run()
    {
        $arr = file('data/data13.dat');
        //print_r($arr);
        /**
         * @var integer $intNumber to jest liczba
         */
        $intNumber = 0;
        foreach ($arr as $stringNumber) {
            //echo $stringNumber;
            //echo $intNumber;
            //echo "\n";
            //echo((double) $stringNumber);
            //echo "\n";
            $intNumber = bcadd((string) $intNumber, substr($stringNumber,0,20));
        }
        $arrDigits = Utilities::getArrOfDigits((string) $intNumber);
        for ($i = 0;$i<10;$i++) {
            echo $arrDigits[$i];
        }
    }
}


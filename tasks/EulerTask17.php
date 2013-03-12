<?php
class EulerTask17 extends EulerTask
{
    const LIMIT =1000;
    //public $arrWords = array();

    public function run()
    {
        $arrWords = array();
        $intSum = 0;
        for ($intI = 1;$intI <= self::LIMIT; $intI++)
        {
            $arrWords[] = Utilities::convert_number($intI);
            
        }
        
        foreach ($arrWords as $strWord) {
            //echo $strWord."\n";
            $strWord = str_replace(' ','',$strWord);
            $strWord = str_replace('-', '', $strWord);
            $strWord = strtolower($strWord);
            echo $strWord.":".mb_strlen(trim($strWord))."\n";
            //$intSum += mb_strlen(trim($strWord));
            $intSum += strlen(trim($strWord));
        }

        echo "WYNIK:".$intSum;

    }
}
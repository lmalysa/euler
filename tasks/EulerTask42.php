<?php
class EulerTask42 extends EulerTask
{

    private $strFile = 'data/data42.dat';

    public function run()
    {
        $intCount = 0;
        $arrWords = Utilities::getWordsFromFile($this->strFile);
        $arrT = array();
        foreach ($arrWords as $strWord) {
            $arrT[] = Utilities::getWordScore($strWord);
        }

        $max = max($arrT);
        $arrTriangles = Utilities::getTrianglesMax($max);
        //print_r($arrTriangles);
        //print_r($arrT);
        //echo "W:".count(array_intersect($arrTriangles, $arrT));
        foreach ($arrT as $val) {
            if (in_array($val, $arrTriangles) ) {
                $intCount++;
            }
        }
        echo "W:".$intCount;
    }
}


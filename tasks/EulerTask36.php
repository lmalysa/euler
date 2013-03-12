<?php
class EulerTask36 extends EulerTask
{
    private $strDescription = "";

    private $arr = array();

    private $arrDecPal = array();

    public function run()
    {
        $this->getDecPal();
        foreach ($this->arrDecPal as $in) {
           $bn = decbin($in);
           $arrBinaryD = Utilities::getArrOfDigits($bn);
           $bolP = $this->isPalindromic($arrBinaryD);
           if($bolP) {
               $this->arr[] = $in;
               echo $in ." -  ".$bn ."\n";
           }
        }

        echo "SUMA\n";
        echo array_sum($this->arr);
    }

    private function getDecPal() {
        for ($i = 1; $i<=999; $i++) {
           $sbs = (string) $i;
           $sn = $sbs . strrev($sbs);
           $in = (int) $sn;
           $this->arrDecPal[] = $in;
           if ($i<100) {
               for($j = 0;$j<=9;$j++) {
                   $sn = $sbs . $j . strrev($sbs);
                   $in = (int) $sn;
                   $this->arrDecPal[] = $in;
               }
           }
        }
        for ($k = 1;$k<=9;$k++) {
            $this->arrDecPal[] = $k;
        }
    }

    /**
     *
     * @param array $arr
     * @return boolean
     */
    private function isPalindromic($arr) {
        $c = count($arr);
        for ($i = 0; $i<= floor($c/2); $i++) {
            if ($arr[$i] != $arr[$c - 1 -$i]) {
                return false;
            }
        }
        return true;
        //111110111011111
    }
}


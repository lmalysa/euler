<?php
class EulerTask368 extends EulerTask
{

    const V = 0.5772156649;

    private $intStart = 57000000;
    private $intLimit = 70000000;

    private $digits = array('000','111','222','333',
        '444','555','666','777','888','999');

    /*private $intLA =
     * 0.2253898316407;-1mil
     * 0.2589463369444 - 2mil
     * 0.2778907635740 - 3 mil
     * 0.3013846148321 - 5 mil
     * 0.0267409191198 - od 5mil do 9 mil
     * 0.0091728873321 - od 9 mil do 11 mil
     * 0.0277982164047 - 11 do 17 mil
     * 0.0250854374726 - od 17 do 27 mil
     * 0.0091766504034 - od 27 do 33 mil
     * 0.0147291294548  - od 33 mil do 43 mil
     * 0.0164341391141 - od 43 do 57 mil
     * 0.0107069802149 - od 57 do 70 mil
     */
    private $intLA = 0.3013846148321;

    private function getFullSum($n)
    {
        return (log($n)+self::V+(bcdiv(1,2*$n,10)));
    }

    private function getPlus($n) {
        $floPlus = 0;
        for($i = $this->intStart; $i<$n;$i++) {
            $string = str_replace($this->digits, 'r', (string)$i);
            //print_r($arrV);
            if (substr_count($string, 'r')>0) {
                echo "-".$i."---";
                $div = bcdiv(1, $i,13);
                $floPlus = bcadd($floPlus, $div, 13);
            }
        }
        return $floPlus;
    }

    public function run()
    {
        echo $this->getPlus($this->intLimit);
        //$fullSum = $this->getFullSum($this->intLimit);
        //echo bcsub($fullSum, $this->intLA, 13);
    }

}

<?php
/**
 * Powinno byc proste
 * If p is the perimeter of a right angle triangle with integral length sides, {a,b,c}, there are exactly three solutions for p = 120.

{20,48,52}, {24,45,51}, {30,40,50}

For which value of p  1000, is the number of solutions maximised?
 */
class EulerTask39 extends EulerTask
{
    const BASE = 1000;

    private $arrTriangles = array();

    public function run()
    {
        $this->calc();
        //echo count($this->arrTriangles);
        $val = array_count_values($this->arrTriangles);
        asort($val);
       
        print_r($val);

    }
    
    private function calc() {
        for ($a = 1; $a <self::BASE; $a++) {
            for ($c = $a+1; (2*$c)+$a  < self::BASE; $c++) {
                //////$c = sqrt(pow($a,2)+pow($b,2));
                $b = sqrt(pow($c,2)-pow($a,2));
                $p = $a+$b+$c;
                if (!ctype_digit((string)$b)) {
                    continue;
                }
                echo ".";
                if ($p<=self::BASE) {
                    //echo $p."\n";
                    //print_r(array($a,$b,$c));
                    $this->arrTriangles[] = (int)$p;
                }
            }
        }
    }
    
}
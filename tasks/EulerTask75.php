<?php
/**
 * It turns out that 12 cm is the smallest length of wire that can be bent to form an integer sided right angle triangle in exactly one way, but there are many more examples.

12 cm: (3,4,5)
24 cm: (6,8,10)
30 cm: (5,12,13)
36 cm: (9,12,15)
40 cm: (8,15,17)
48 cm: (12,16,20)

In contrast, some lengths of wire, like 20 cm, cannot be bent to form an integer sided right angle triangle, and other lengths allow more than one solution to be found; for example, using 120 cm it is possible to form exactly three different integer sided right angle triangles.

120 cm: (30,40,50), (20,48,52), (24,45,51)

Given that L is the length of the wire, for how many values of L  1,500,000 can exactly one integer sided right angle triangle be formed?

Note: This problem has been changed recently, please check that you are using the right parameters.
 *
 * powinno byc bardziej optymalnie:
 * znalezc wyszystkie liczby pierwsze < L
 * dla tych liczb i wielokronosci znalezc trojkaty
 */
class EulerTask75 extends EulerTask
{
    const BASE = 1500000;
    //const BASE = 600;

    private $arrPerimeters = array();

    private function generateIndex($m,$n,$k=1) {
        $arr = array(
            $k*(pow($m,2) - pow($n,2)),
            $k*2*$m*$n,
            $k*(pow($m,2) + pow($n,2))
        );
        sort($arr);
        return implode('-',$arr);
    }

    protected function generateTriples() {
        $maxm = floor(sqrt(self::BASE));
        echo 'MAX:'.$maxm;
        echo "-----\n";
        for ($m = 1; $m<=$maxm;$m++) {
            //echo 'M'
            for ($n = 1;$n<$m;$n++) {
                for ($k=1;$k<10;$k++) {
                //$k=1;
                    $p = $this->getPerimeter($m, $n, $k);
                    $strKey = $this->generateIndex($m,$n, $k);

                    if ($p<=self::BASE && !isset($this->arrPerimeters[$strKey])) {

                        $this->arrPerimeters[$strKey] = $p;
                        //echo 'R';
                    }
                }
            }
        }
    }

    

   

    public function run()
    {
        $this->generateTriples();
        
        echo 'count:'.count($this->arrPerimeters);
        echo 'longest:'.max($this->arrPerimeters);
        $c = array_count_values($this->arrPerimeters);
        asort($this->arrPerimeters);
        //print_r($this->arrPerimeters);
        echo 'longest:'.max($this->arrPerimeters);
        $ones = array_count_values($c);
        if (isset($ones[1])) {
            echo "pojedyncze:".$ones[1]."\n";
            echo "2:".$ones[2]."\n";
            echo "3:".$ones[3]."\n";
        } else {
            echo "BLAD";
        }
    }


    public function zzzrun()
    {
        //$arr = $this->getCoprimePairs(13);
        $arr = $this->getCoprimePairs(13);
        foreach($arr as $r) {
            foreach ($r as $pair) {
                $m = $pair[0];
                $n = $pair[1];
                //$p = $this->getPerimeter($m, $n);
                $p = 2*$m*($m+$n);
                if ($p<=self::BASE && !isset($this->arrPerimeters[$m.'-'.$n])) {
                    $this->arrPerimeters[$m.'-'.$n] = $p;
                    echo 'R';
                }
            }
        }
        unset($arr);

        //print_r($this->arrPerimeters);
        $c = array_count_values($this->arrPerimeters);
        unset($this->arrPerimeters);
        //asort($c);
        //print_r($c);
        $ones = array_count_values($c);
        unset($c);
        if (isset($ones[1])) {
            echo "pojedyncze:".$ones[1];
        } else {
            echo "BLAD";
        }
        //echo 'max:'.max($this->arrPerimeters);
        //echo 'count:'.count($this->arrPerimeters);
        echo "\n";

    }

    private function getPerimeter($m,$n,$k=1) {
        return $k*2*$m*($m+$n);
    }

    private function getCoprimePairs($intLevel) {
        $arrPairs = array();
        $arrPairs[0] = array(array(2,1),array(3,1));
        //$arrPairs[1] = array(
            
        for ($i = 1;$i<$intLevel;$i++) {
            foreach ($arrPairs[$i - 1] as $arrRow) {
                $m = $arrRow[0];
                $n = $arrRow[1];
                if (!isset($arrPairs[$i])) {
                    $arrPairs[$i] = array();
                }
                //$arrPairs[$i] = array();
                $arrPairs[$i][] = array(2*$m-$n,$m);
                $arrPairs[$i][] = array(2*$m+$n,$m);
                $arrPairs[$i][] = array(2*$n+$m,$n);
            }
            echo ".";
        }

        return $arrPairs;
    }


}
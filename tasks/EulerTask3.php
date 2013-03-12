<?php
class EulerTask3
{
    private function is_prime($i)
    {
       if($i % 2 != 1) return false;
       $d = 3;
       $x = sqrt($i);
       while ($i % $d != 0 && $d < $x) $d += 2;
       return (($i % $d == 0 && $i != $d) * 1) == 0 ? true : false;
    }

    public function run()
    {
        $intNumber = 600851475143;

        $arrPrime = array();
        $intI = 1;
        $intCheck = 1;
        while ($intCheck < $intNumber){
               if ($this->is_prime($intI) && (bcmod($intNumber, $intI) == 0)) {
                       $arrPrime[] = $intI;
                       echo $intI."\n";
                       echo bcmod($intNumber, $intI);

                       echo bcdiv($intNumber , $intI)."\n";
                       $intCheck *= $intI;
               }
               $intI++;
        }
        echo "\nKONIEC\n";
        echo max($arrPrime);

    }
}

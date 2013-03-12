<?php
class EulerTask15 extends EulerTask
{
    /*
     *
     * x x x
     * x x x
     * x x x
     *
     *
     *
     */
    
    const SIZE = 20;

    public function run()
    {
        //$intInitBlack = self::SIZE;

        $arr = array();
        for ($intI = self::SIZE; $intI > 0; $intI--) {
            echo ".";
            $arr[] = bcdiv($intI, $intI+self::SIZE, 500);

            //echo "P:".$intProbability;
        }

        print_r($arr);

        $p = 1;
        foreach ($arr as $i) {
            $p = bcmul($p, $i,500);
        }

        echo "WYNIK::::". (bcdiv(1.0, $p, 50));
        //print_r($arr);
    }
}


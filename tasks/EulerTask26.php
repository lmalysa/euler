<?php
class EulerTask26 extends EulerTask
{
    const CMAX = 1000;
    const LENGTH = 400;

    private $arrDiv = array();

    public function run()
    {
        for ($i = 1; $i <= self::CMAX; $i++) {
            $str = (string) bcdiv(1,$i,self::LENGTH);
            if (strlen($str) > self::LENGTH - 2) {
                $arrDiv[$i] = bcdiv(1,$i,self::LENGTH);
            }
            
        }

        print_r(array_keys($arrDiv));
    }
}
<?php
class EulerTask9 extends EulerTask
{
    /*
     * a2 + b2 = c2 / 9 + 16 = 25 /3,4,5
     * a+b+c = 1000
     *
     * 1000 - a - b  = sqrt(a*a + b*b)
     * sqrt(a2+b2)+a+b = 1000;
     *
     */

    private $intSum = 1000;

    public function run()
    {
        for ($a = 1; $a < $this->intSum; $a++) {
            for ($b = 1; $b < $this->intSum; $b++) {
                //echo ".";
                if (($a+$b+sqrt(($a*$a)+($b*$b))) == $this->intSum) {
                    echo " ---WYNIK ".($a*$b*bcsqrt(  ($a*$a)+($b*$b)          ));
                }
            }
        }
    }
}

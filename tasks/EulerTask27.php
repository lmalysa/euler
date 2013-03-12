<?php
class EulerTask27 extends EulerTask
{
    const AMAX = 100;
    const BMAX = 100;

    private $aC = array(
        array(-1,-1),
        array(-1,1),
        array(1,1),
        array(1,-1)
    );

    private $arrRet = array();



    public function run()
    {
        for ($i = 1; $i < self::AMAX; $i++) {
            for ($j= 1; $j < self::BMAX;$j++) {
                for ($c = 0; $c < count($this->aC); $c++) {
                    echo '.';
                    $index = ($this->aC[$c][0]*$i)+($this->aC[$c][1]*1000*$j);
                    $n=1;
                    $this->arrRet[$index] =$this->quadratic($i, $j, $n);
                }
            }
        }

        print_r($this->arrRet);
    }

    private function quadratic($a,$b,$n)
    {
        return (($n*$n)+($a*$n)+$b);
    }
}
<?php
class EulerTask29 extends EulerTask
{

    const AMAX = 100;
    const BMAX = 100;
    
    private $arrRes = array();

    public function run()
    {
        for ($i = 2; $i<= self::AMAX; $i++) {
            for ($j = 2; $j <= self::BMAX; $j++) {
                $this->arrRes[] = bcpow($i, $j);
            }
        }

        $r = array();
        foreach ($this->arrRes as $v) {
            $r[$v] = 1;
        }
        echo 'U:'.count($r);
    }
}


<?php
class EulerTask119 extends EulerTask
{
    const MAX = 99999;

    public function run()
    {
        for ($intD =10; $intD < self::MAX; $intD++) {
            for ($intI = 2; $intI<10; $intI++) {
                $z = bcpow($intD, $intI);
                if ($z == $intD) {
                    echo $z."\n";
                }
            }
        }
    }
}


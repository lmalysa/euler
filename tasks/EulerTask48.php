<?php
class EulerTask48 extends EulerTask
{

    

    public function run()
    {
        $intSum = 0;
        for ($intI = 1; $intI <= 1000; $intI ++) {
            $intSum = bcadd(
                $intSum,
                bcpow($intI,$intI)
            );
            echo "\_/`";
        }
        echo $intSum;
    }
}
<?php
class EulerTask28 extends EulerTask
{

    const LENGTH = 1001;

    public function run()
    {
        $intCurrent = 1;
        $intSum = 1;
        $intGap = 2;
        while($intGap < self::LENGTH) {
            for ($i=0;$i<4;$i++) {
                $intCurrent += $intGap;
                $intSum += $intCurrent;
            }
            $intGap += 2;
        }
        echo "WYNIK:____".$intSum."___";
    }
}


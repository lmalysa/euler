<?php
class EulerTask19 extends EulerTask
{

   
    public function run()
    {
        $intCount = 0;
        //$strStart = '1901-01-01';
        //$strStop = '2000-12-31';
        $intDay = 60*60*24;
        $intStart = mktime(0,0,0,1,1,1902);
        $intStop = mktime(0,0,0,12,31,2000);
        echo '#-----'.$intStart;
        echo '#-----'.$intStop;
        for ($intI = $intStart;$intI <= $intStop; $intI+=$intDay) {
            if ($this->isGood($intI)) {
                $intCount++;
            }
        }
        echo "WYNIK:".($intCount+2);
    }

    private function isGood($intA)
    {
        return ((date('w', $intA) == 0) && (date('j', $intA)== 1));
    }
}
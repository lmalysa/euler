<?php
class EulerTask6 extends EulerTask
{
    private $arrNumbers = array();

    private function initialize()
    {
        for ($intI = 1; $intI <= 100; $intI++) {
            $this->arrNumbers[] = $intI;
        }
    }

    public function run()
    {
        $this->initialize();
        $intSum = array_sum($this->arrNumbers);
        $intSum = $intSum*$intSum;
        $intSumSquares = 0;
        foreach ($this->arrNumbers as $intNumber) {
            $intSumSquares += ($intNumber*$intNumber);
        }

        echo ($intSumSquares - $intSum);
    }
}

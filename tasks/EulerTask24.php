<?php
class EulerTask24 extends EulerTask
{

    private $arrDigits = array(0,1,2,3,4,5,6,7,8,9);
   
    public function run()
    {
        for ($i=0; $i < 1000000; $i++) {
            echo $this->getString()."\n";
            $this->setNext();
        }
    }

    protected function getString() {
        return implode('', $this->arrDigits);
    }

    protected function getCurrent() {
        return $this->arrDigits;
    }

    protected function setNext() {
        $arrRO = $this->getRightOrdered();
        //echo "RO:".print_r($arrRO);
        $c = count($arrRO);
        $intMissing = $this->arrDigits[9 - $c];

        

        $arrZ = array();
        foreach ($arrRO as $k => $r) {
            if ($r < $intMissing) {
                //
            } else {
                $arrZ[] = $r;
            }
        }

        $intCh = min($arrZ);

        $this->arrDigits[9 - $c] = $intCh;
        $arrMiss = array();
        $arrMiss[] = $intMissing;
        for ($w = 9 -$c + 1; $w < 10; $w ++) {
            if ($this->arrDigits[$w] != $intCh) {
                $arrMiss[] = $this->arrDigits[$w];
            }
        }

        $this->arrDigits = array_merge(
            array_slice($this->arrDigits, 0, 9 - $c + 1),
            $this->getSequence($arrMiss)
        );
    }

    protected function getSequence($arrMiss) {
        sort($arrMiss);
        return $arrMiss;
    }

    protected function getRightOrdered() {
        $arrRO = array();
        $intIndex = count($this->arrDigits) - 1;
        while ($this->arrDigits[$intIndex - 1] > $this->arrDigits[$intIndex]) {
            $intIndex--;
        }

        for ($intK = $intIndex; $intK < count($this->arrDigits); $intK++) {
            $arrRO[] = $this->arrDigits[$intK];
        }

        return $arrRO;
    }
}
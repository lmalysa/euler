<?php
require_once('EulerTask24.php');
class EulerTask43 extends EulerTask24
{
    /*
     * popatrz na problem 24
     */

    private $arrStack = array();
    
    private $arrPos = array(
        0 => array(),
        1 => array(),
        2 => array(),
        3 => array(0,2,4,6,8),
        4 => array(),
        5 => array(0,5),
        6 => array(),
        7 => array(),
        8 => array(),
        9 => array()
    );

    const MAXVAL = 9876504321;

    public function run()
    {
        while ((int) $this->getString() <= self::MAXVAL) {
            echo $this->getString()."\n";
            if ($this->validate()) {
                $this->append();
            }
            $this->setNext();
        }

        echo "---------------\n";
        echo "SUMA: ".array_sum($this->arrStack)."\n";
        echo "-------\n";
    }
    
    private function append() {
        $this->arrStack[] = (int )$this->getString();
    }

    private function validate() {
        $arr = $this->getCurrent();
        
        if (in_array($arr[3],$this->arrPos[3])) {
            //
        } else {
            return false;
        }

        if (($arr[2]+$arr[3]+$arr[4])%3 == 0) {
            //
        } else {
            return false;
        }

        if (in_array($arr[5],$this->arrPos[5])) {
            //
        } else {
            return false;
        }

        if (((100*$arr[4])+10*($arr[5])+($arr[6]))%7 == 0) {
            //
        } else {
            return false;
        }

        if (((100*$arr[5])+10*($arr[6])+($arr[7]))%11 == 0) {
            //
        } else {
            return false;
        }

        if (((100*$arr[6])+10*($arr[7])+($arr[8]))%13 == 0) {
            //
        } else {
            return false;
        }

        if (((100*$arr[7])+10*($arr[8])+($arr[9]))%17 == 0) {
            //
        } else {
            return false;
        }
        return true;
    }
}


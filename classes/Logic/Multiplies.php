<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Multiplies
 *
 * @author l.malysa
 */
class Logic_Multiplies extends Logic {
    
    /**
     * 
     * 
     * @param type $mixNumbers
     * @return array
     */
    public function getMultipliesBy($mixNumbers, $intLimit)
    {
        $arrRet = array();
        if (!is_array($mixNumbers)) {
            $mixNumbers = array(0=>$mixNumbers);
        }
        for ($i=1;$i<$intLimit;$i++) {
            if ($this->checkIfDivisible($i, $mixNumbers)) {
                $arrRet[] = $i;
            }
        }
        return $arrRet;
    }
    
    /**
     * 
     * @param type $intOp
     * @param type $arr
     * @return boolean
     */
    public function checkIfDivisible($intOp, $arr) 
    {
        foreach ($arr as $int) {
            if ($intOp % $int == 0) { 
               return true; 
            }
        }
        return false;
    }
}
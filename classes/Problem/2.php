<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of 1
 *
 * @author l.malysa
 */
class Problem_2 extends Problem {
    
    public function getResult()
    {
        $o = new Logic_Fibonacci();
        $m = new Logic_Multiplies();
        $arrSeq = $o->getSequence(4000000);
        $intSum = 0;
        foreach($arrSeq as $intElement) {
            if ($m->checkIfDivisible($intElement, 2)) {
                $intSum+=$intElement;   
            }
        }
        return $intSum;
    }
}

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
class Problem_1 {
    
    public function getResult()
    {
        $o = new Logic_Multiplies();
        $arr = $o->getMultipliesBy(array(3,5), 1000);
        return array_sum($arr);
    }
}

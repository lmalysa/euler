<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Fibonacci
 *
 * @author l.malysa
 */
class Logic_Fibonacci extends Logic{
    
    
    public function getSequence($intStop)
    {
        $arrSeq = array(0=>1,1=>1);
        $i = 2;
        while(1) {
            $arrSeq[$i] = $arrSeq[$i-1]+$arrSeq[$i-2];
            if ($arrSeq[$i] >=$intStop ) {
                unset($arrSeq[$i]);
                return $arrSeq;
            }
        }
    }
}
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Problem
 *
 * @author l.malysa
 */
abstract class Problem implements IProblem{
    
    public function getResult()
    {
        throw new Exception(__METHOD__.' must be implemented');
    }
}
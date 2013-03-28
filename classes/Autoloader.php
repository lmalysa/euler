<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Autoloader
 *
 * @author l.malysa
 */
class Autoloader {
    public static function autoload($strClassName)
    {
        $strName = 'classes/'.str_replace('_','/',$strClassName).'.php';
        if(file_exists($strName)) {
            require_once($strName);
        } else {
            throw new Autoloader_Exception();
        }
    }
}

?>

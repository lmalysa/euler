<?php
chdir(dirname(__DIR__));
require_once('classes/Autoloader.php');
spl_autoload_register(array('Autoloader','autoload'));
$strProblemClass = 'Problem_'.$_SERVER['argv'][1];
try {
    $o = new $strProblemClass();
    echo $o->getResult();
} catch (Autoloader_Exception $e) {
    echo "No problem with given number";
} catch (Exception $e) {
    echo "There was an error: ".$e->getMessage()." - FILE: ".$e->getFile()." - LINE: ".$e->getLine();
}
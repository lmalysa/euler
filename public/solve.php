<?php
chdir(dirname(__DIR__));
require_once('classes/Autoloader.php');
spl_autoload_register(array('Autoloader','autoload'));
$intProblem = $_SERVER['argv'][1];
$strProblemClass = 'Problem_'.$intProblem;
try {
    $o = new $strProblemClass();
    echo "\n";
    echo "Result of problem ".$intProblem.":";
    echo "\n";
    echo "\n";
    echo $o->getResult();
    echo "\n";
} catch (Autoloader_Exception $e) {
    echo "No problem with given number";
} catch (Exception $e) {
    echo "There was an error: ".$e->getMessage()." - FILE: ".$e->getFile()." - LINE: ".$e->getLine();
}
<?php
chdir(dirname(__DIR__));
require_once('classes/Autoloader.php');
spl_autoload_register(array('Autoloader','autoload'));
$o = new Problem_1();
echo $o->getResult();
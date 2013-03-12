<?php
require_once('EulerTask.php');
require_once('classes/Utilities.php');
//$arrOptions = getopt('h',array('help'));
if (count($_SERVER['argv']) < 2) {
    echo "Nie przekazano numeru zadania";
} else {
    EulerTask::runTask($_SERVER['argv'][1]);
}   


<?php
require_once('IEulerTask.php');
abstract class EulerTask implements IEulerTask
{
    private $strDescription = "";

    protected function getDescription()
    {
        return $this->strDescription;
    }

    public function run()
    {
         throw new Exception('run is not implemented');
    }

    /**
     * Uruchamia wybrane zadanie
     * @param integer $intIdTask
     */
    public static function runTask($intIdTask)
    {
        require_once('tasks/EulerTask'.$intIdTask.'.php');
        $strClass = 'EulerTask'.$intIdTask;
        $objTask = new $strClass();
        $objTask->run();
    }
}

<?php
class EulerTask61 extends EulerTask
{

    private $intSize = 100;
    private $strFileName = 'data67.dat';

    private $arrTriangle = array();

    private $strClassName;


    /**
     * Zapelnia trojkat
     *
     * @return void
     */
    protected function getTriangleFromFile()
    {
        //require_once('data/'.$this->strFileName);
        $arrInit = file('data/'.$this->strFileName);
        foreach($arrInit as $strRow){
            $arrRow = explode(' ', $strRow);
            $this->arrTriangle[] = $arrRow;
        }
    }

    protected function getn($a,$b)
    {
        if (isset($this->arrTriangle[$a][$b])) {
           return $this->arrTriangle[$a][$b];
        } else {
            return 0;
        }
    }

    public function run()
    {
        ////////////////
    }
}
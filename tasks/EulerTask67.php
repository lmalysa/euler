<?php
class EulerTask67 extends EulerTask
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
        $this->getTriangleFromFile();
        for ($n = $this->intSize - 2; $n >= 0; $n--) {
            for($m = 0; $m <= $n+1; $m ++) {
                $this->arrTriangle[$n][$m] =
                        $this->getn($n,$m)
                        + max(
                                $this->getn($n+1,$m),
                                $this->getn($n+1,$m+1)
                                );
            }
            echo '.';
        }
        //print_r($this->arrTriangle);
        echo "\n\nWYNIK:".$this->arrTriangle[0][0];
    }
}
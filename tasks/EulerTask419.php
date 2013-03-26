<?php
class EulerTask419 extends EulerTask
{

    private $arrTrans = array(
        '111'=> '31',
        '222'=> '32',
        '333'=> '33',
        '11'=> '21',
        '22' => '22',
        '33' => '23',
        '1' => '11',
        '2' => '12',
        '3' => '13',
    );
    
    public function run()
    {
        $strIn = '1';
        $pow = pow(2,30);
        for ($i = 2; $i<=$pow;$i++) {
            $strOut =  $this->generate($strIn);
            echo $strOut."\n\n";
            $strIn = $strOut;
        }
        echo "\n";
        echo substr_count($strOut, '1')."\n";
        echo substr_count($strOut, '2')."\n";
        echo substr_count($strOut, '3')."\n";
        

    }
    
    private function generate($str)
    {
        return strtr($str, $this->arrTrans);
    }
}


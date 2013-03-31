<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * @see http://www.njohnston.ca/2010/10/a-derivation-of-conways-degree-71-look-and-say-polynomial/
 * tabelka elementarnych subsequences
 */

/**
 * Description of 419
 *
 * @author komp
 */
class Problem_419 {
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
    
    public function getResult()
    {
        $strIn = '1';
        $pow = 90;//pow(2,30);
        for ($i = 2; $i<=$pow;$i++) {
            $strOut =  $this->generate($strIn);
            echo 'i#'.$i."#";
            $strIn = $strOut;
            
            $s1 = substr_count($strOut, '1');
            $s2 = substr_count($strOut, '2');
            $s3 = substr_count($strOut, '3');
            $sum = '';//$s1+$s2+$s3;
            echo $s1.'-'.$s2.'-'.$s3.'-'.$sum."\n";
        }
        
        
        return 'ok';
    }
    
    private function generate($str)
    {
        return strtr($str, $this->arrTrans);
    }
}
?>

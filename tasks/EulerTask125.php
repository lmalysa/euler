<?php
/**

 */
class EulerTask125 extends EulerTask
{
    const LIMIT = 100000000;
    //const LIMIT = 10000;

    private $arrSquares = array();

    private $arrCandidates = array();

   public function run() {
       $s = sqrt(self::LIMIT);
       for ($i = 1; $i <= $s;$i++) {
           $this->arrSquares[$i] = $i*$i;
       }
       echo "KONIEC";
       echo "C:".count($this->arrSquares);
       $last = count($this->arrSquares);

       for ($i = 1; $i<=$last; $i++) {
           for($len = 2;$len<=$last-$i;$len++) {
               $suma = 0;
               for ($j = $i;$j<$i+$len;$j++) {
                   $suma += $this->arrSquares[$j];
               }
               $this->arrCandidates[] = $suma;
               echo ".";
           }
       }
       echo 'UUUUU';
   }




}
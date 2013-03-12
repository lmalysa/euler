<?php
/**

 */
class EulerTask138 extends EulerTask
{
    const LIMIT = 12;

    private $sum = 0;

    public function run() {
        $k = 0;
        $h = 2;
        while ($k < self::LIMIT) {
            $d = $this->check($h);
            
            $k+=$d;
            $h++;
        }
        echo "\n";
        echo "KONIEC:".$this->sum;
    }

    private function check($h) {
        $r = 0;
        if ($this->calc($h,$h/2-0.5)) {
            $r++;
            $diff = $this->obliczc($h, $h/2-0.5);
            echo "\n";
            echo $diff."\n";
            $this->sum += $diff;
        }
        if ($this->calc($h,$h/2+0.5)) {
            $r++;
            $diff = $this->obliczc($h, $h/2+0.5);
            echo "\n";
            echo $diff."\n";
            $this->sum += $diff;
        }
        
        return $r;
    }

    private function calc($a, $b) {
        return ctype_digit((string)$this->obliczc($a, $b));
    }

    private function obliczc($a,$b) {
        return sqrt(pow($a,2)+pow($b,2));
    }


}
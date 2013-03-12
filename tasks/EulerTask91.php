<?php
class EulerTask91 extends EulerTask
{
    const WIDTH = 50;
    const PREC = 2;
    const W = 0.05;

    private function getValue() {
        $intR = 0;
        for ($xp = 0; $xp <= self::WIDTH;$xp++) {
            for ($yp = 0; $yp <= self::WIDTH;$yp++) {
                for ($xq = 0; $xq <= self::WIDTH;$xq++) {
                    for ($yq = 0; $yq <= self::WIDTH;$yq++) {
                        if (!$this->equals($xp,$yp,$xq,$yq) && !($xq == 0 && $yq == 0) && !($xp == 0 && $yp == 0)) {
                            $arrTriangle = $this->getTriangle($xp,$yp,$xq,$yq);
                            if (!in_array(0, $arrTriangle)) {
                                //print_r(array($xp,$yp,$xq,$yq));
                                //print_r($arrTriangle);
                                $max = max($arrTriangle);
                                $keys = array_keys($arrTriangle,$max);
                                $key = $keys[0];
                                unset($arrTriangle[$key]);
                                $t = bcpow($max,2,self::PREC);
                                $r = $this->sumOfSquares($arrTriangle);
                                if ($this->minDiff($t,$r)) {
                                    $intR++;
                                    //echo "\n".$t."-".$r."\n";
                                    //print_r($arrTriangle);
                                    //print_r(array($xp,$yp,$xq,$yq));
                                } else {
                                    //print_r(array($xp,$yp,$xq,$yq));
                                }
                            }
                        }
                    }
                }
            }
        }
        return $intR/2.0;
    }

    private function equals($a,$s,$f,$g) {
        $bol = (($a == $f) && ($s == $g));
        error_log((int)(($a == $f) && ($s == $g)));
        return $bol;
    }

    private function getTriangle($xp,$yp,$xq,$yq) {
        $ret = array();
        $ret[] = bcsqrt(
            (($xp*$xp)+($yp*$yp)),
            self::PREC
        );
        $ret[] = bcsqrt(
            (($xq*$xq)+($yq*$yq)),
            self::PREC
        );
        $ret[] = bcsqrt(
            ((($xp-$xq)*($xp-$xq))+(($yp-$yq)*($yp-$yq))),
            self::PREC
        );
        return $ret;
    }

    private function sumOfSquares($arr) {
        $arr = array_values($arr);
        return (bcpow($arr[0],2,self::PREC)+bcpow($arr[1],2,self::PREC));
    }

    private function minDiff($a,$b)
    {
        $diff = abs($a-$b);
        echo "&".$diff."\n";
        return ($diff <= self::W);
    }

    public function run()
    {
         echo "WYNIK: ".$this->getValue();
    }
}

<?php
/**
 * lina o dlugosci N jest podzilona M-1 punktami na M odcinkow
 * znalezc wartosc spodziewana drugiego najkrotszego odcinka
 * E(M,N) = E(10^7,100)
 *
 *
 */
class EulerTask398 extends EulerTask
{
    const N = 8;

    const M = 3;


    private $arrRope = array();
    

    public function run()
    {
        for ($i = 1; $i < self::M;$i++) {
            $this->choose();rand(1,self::N-1);
        }
        var_dump($this->arrRope);
    }

    private function choose() {
        $r = rand(1,self::N-1);
        if (in_array($r, $this->arrRope)) {
            $this->choose();
        } else {
            $this->arrRope[] = $r;
        }
    }
}


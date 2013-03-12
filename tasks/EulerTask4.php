<?php
class EulerTask4
{
    public function run()
    {
         /*
         * a * b = 100001 * x + 10010 * y + 1100 * z
         * 999 >= a,b >=100
         * a*b - max
         *
         * xyz
         *
         */

        $arrPalCoe = array();
        $arrPalindroms = array();
        $arrLargest = array();
        $arrKV = array();
        for ($intI = 0; $intI <=9; $intI++)
        {
                for ($intJ = 0; $intJ <=9; $intJ++)
                {
                        for ($intK = 0; $intK <=9; $intK++)
                        {
                                $arrPalCoe[] = array($intI,$intJ,$intK);
                        }
                }
        }

        foreach ($arrPalCoe as $arrCoff) {
                $intP = 100001 * $arrCoff[0] + 10010 * $arrCoff[1] + 1100 * $arrCoff[2];
                $arrPalindroms[] = $intP;
                echo $intP."\n";
        }

        for ($intI = 100; $intI <=999; $intI++)
        {
                for ($intJ = 100; $intJ <=999; $intJ++)
                {
                        $intProduct = $intI * $intJ;
                        if(in_array($intProduct,$arrPalindroms)) {
                                $arrLargest[] = $intProduct;
                                $arrKV[$intProduct] = $intI."+".$intJ;
                                echo $intProduct."\n";
                        }
                }
        }
        $intMaxi = max($arrLargest);
        echo "NAJWIEKSZY!"."\n";
        echo "-------".max($arrLargest)."-------".$arrKV[$intMaxi];
        echo "DONE!";

    }
}

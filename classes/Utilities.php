<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utilities
 *
 * @author lmalysa
 */
class Utilities {

    /**
     * sprawdza czy liczba jest liczba pierwsza
     *
     * @param integer $i
     * @return boolean
     */
    public static function is_prime($i)
    {
       if($i % 2 != 1) return false;
       $d = 3;
       $x = sqrt($i);
       while ($i % $d != 0 && $d < $x) $d += 2;
       return (($i % $d == 0 && $i != $d) * 1) == 0 ? true : false;
    }

    /**
     * Zwraca tabice cyfr
     *
     * @param string $str
     * @return array
     */
    public static function getArrOfDigits($str)
    {
        $str = str_replace("\n","",$str);
        $arr = array();
        for ($intI = 0;$intI< strlen($str);$intI++){
            $arr[] = (int) substr($str, $intI, 1);
        }
        //print_r($arr);
        return $arr;
    }

    public static function explodeString($str)
    {
        $str = str_replace("\n","",$str);
        $arr = array();
        for ($intI = 0;$intI< strlen($str);$intI++){
            $arr[] = substr($str, $intI, 1);
        }
        //print_r($arr);
        return $arr;
    }

    public static function getFactorial($intN)
    {
        $intRet = 1;
        for ($intI=$intN;$intI>0;$intI--) {
            $intRet =bcmul($intI, $intRet);
        }
        return $intRet;
    }

    public static function isEven($intNumber)
    {
        return (($intNumber % 2 == 0) ? true : false);
    }

    
    public static function getProperDivisors($intN)
    {
        return $arr;
    }
    
    public static function getDivisors($intN)
    {
        $arrDiv = array();
        $bound = floor(sqrt($intN));
        for ($i = 1; $i <= $bound; $i++)
        {
          if ($intN % $i == 0) {
              if (!in_array($i, $arrDiv)) { 
                $arrDiv[] = $i ;
              }
              if (!in_array($intN / $i, $arrDiv)) { 
                $arrDiv[] = $intN / $i ;
              };
          }
        }
        return $arrDiv;
    }
    
    /**
     * Zwraca liczbe podzielnikow liczby
     *
     * @param integer $val
     * @return integer
     */
    public static function getNumberOfDivisors($val) {
      $divs = 0;
      $bound = floor(sqrt($val));
      for ($i = 1; $i <= $bound; $i++)
        if ($val % $i == 0)  $divs += 2;
      if ($bound*$bound == $val)
        $divs--;
      return $divs;
    }

    public static function convert_number($number)
    {
    if (($number < 0) || ($number > 999999999))
    {
    throw new Exception("Number is out of range");
    }

    $Gn = floor($number / 1000000);  /* Millions (giga) */
    $number -= $Gn * 1000000;
    $kn = floor($number / 1000);     /* Thousands (kilo) */
    $number -= $kn * 1000;
    $Hn = floor($number / 100);      /* Hundreds (hecto) */
    $number -= $Hn * 100;
    $Dn = floor($number / 10);       /* Tens (deca) */
    $n = $number % 10;               /* Ones */

    $res = "";

    if ($Gn)
    {
        $res .= self::convert_number($Gn) . " Million";
    }

    if ($kn)
    {
        $res .= (empty($res) ? "" : " ") .
            self::convert_number($kn) . " Thousand";
    }

    if ($Hn)
    {
        $res .= (empty($res) ? "" : " ") .
            self::convert_number($Hn) . " Hundred";
    }

    $ones = array("", "One", "Two", "Three", "Four", "Five", "Six",
        "Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen",
        "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eighteen",
        "Nineteen");
    $tens = array("", "", "Twenty", "Thirty", "Forty", "Fifty", "Sixty",
        "Seventy", "Eigthy", "Ninety");

    if ($Dn || $n)
    {
        if (!empty($res))
        {
            //$res .= " and ";
            $res .= "and";
        }

        if ($Dn < 2)
        {
            $res .= $ones[$Dn * 10 + $n];
        }
        else
        {
            $res .= $tens[$Dn];

            if ($n)
            {
                //$res .= "-" . $ones[$n];
                $res .= "" . $ones[$n];
            }
        }
    }

    if (empty($res))
    {
        $res = "zero";
    }

    return $res;
    }

    public static function pc_permute($items, $perms = array( )) {
    if (empty($items)) {
        print join(' ', $perms) . "\n";
    }  else {
        for ($i = count($items) - 1; $i >= 0; --$i) {
             $newitems = $items;
             $newperms = $perms;
             list($foo) = array_splice($newitems, $i, 1);
             array_unshift($newperms, $foo);
             self::pc_permute($newitems, $newperms);
         }
    }
}

    public static function getAlphaScores()
    {
        $a = range('A','Z');
        return array_flip($a);
    }

    public static function getWordsFromFile($strFilename)
    {
        $strNames = file_get_contents($strFilename);
        $arrNames = explode(',',$strNames);
        foreach ($arrNames as $intKey => $string) {
            $arrNames[$intKey] = trim($string,'"');
        }
        return $arrNames;
    }

    public static function getTrianglesN($n)
    {
        $arrT = array();
        $arrT[1] = 1;
        for($i = 2;$i < $n;$i++){
            $arrT[$i] = $arrT[$i-1] + $i;
        }
        return $arrT;
    }

    public static function getTrianglesMax($max)
    {
        $arrT = array();
        $arrT[1] = 1;
        $i = 1;
        while($arrT[$i] < $max) {
            $i++;
            $arrT[$i] = $arrT[$i-1] + $i;
        }
        return $arrT;
    }

    public static function getWordScore($strWord)
    {
        $intSum = 0;
        $arrLetters = self::explodeString($strWord);
        $arrScores = self::getAlphaScores();
        foreach ($arrLetters as $strLetter) {
            $intSum += ($arrScores[$strLetter]+1);
        }
        return $intSum;
    }

}
?>

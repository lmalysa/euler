<?php
class EulerTask21 extends EulerTask
{
    

    public function run()
    {
       $a = Utilities::getProperDivisors(10);
       echo implode(',',$a);
    }
}
<?php

require __DIR__ . '/../vendor/autoload.php';

$test = new \ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Meter(2500);
$test2 = new \ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Meter(1500);
//$items = [$test, $test2];
//$total=0;
//foreach ($items as $item){
//    $total+= $item->convert()->toFoot()->getValue();
//}

//echo $total;

echo $test->convert()->toFoot()->getValue();

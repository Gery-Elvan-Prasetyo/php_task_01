<?php
    $uhhh = ["common", "uncommon", "natural", "rare", "divinus"];
    $hmmm = ["aegis", "seraphim", "sovereign"];
    $ohhh = ["borealis", "glitched", "projection"];
    $oushi = ["eden", "monarch", "oppression"];

     $testarray = ["1" =>$uhhh,"hallo"=>$hmmm,"true"=>$ohhh,"0.5" =>$oushi];

    var_dump($testarray['hallo'][2]);
?>
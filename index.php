<?php

$numList = array(30,45,24,16,17,24);

echo "Number 2)";
newline();
for($i=0; $i<count($numList); $i++){
    echo $numList[$i];
    newline();
}

newline();

echo "Number 3)";
newline();
for($i=0; $i<count($numList); $i++){
    if($numList[$i] % 2 == 0){
        echo $numList[$i];
        newline();
    }
}

function newline(){
    //attempt to create newline for command line or browser, can ignore
    echo "<br>\n";
}
?>
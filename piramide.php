<?php
echo("hoeveel stapels? ");
$stapels = readline();
for ($i = 1; $i < $stapels+1; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo " * ";
    }
    echo "\n";
}
?>
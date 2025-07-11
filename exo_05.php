<?php
function contenu($a,$b){
    $c=$a;
    $a=$b;
    $b=$c;
    
    echo"a:$a  b:$b";
}
contenu(1,2);
?>
<?php
function woof($a){
    $chaine="";
    for($i=0 ; $i<$a ; $i++){
        $chaine .= "woof";
    }
    return $chaine;
    
 }

  echo woof(5) ;
?>
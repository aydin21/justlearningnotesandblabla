<?php

// stringlerle bezi methodlar

$mystring = "Lorem ipsum dolor sisto ipsum odio ";

  

function qisald($metn , $limit = 16){
  $simvolsayi = strlen($metn);
    if( $simvolsayi > $limit){
        $metn = substr($metn , 0 , $limit) . " . . ";
    }
     return $metn;
}
  
echo qisald($mystring,10);

?>


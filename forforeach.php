<?php
// donguler foreach
 
 $memberdetails = [
     
    'name' => "Aydin",
    'surname' => "Quliyev",
    'age' => "20",

 ];


  foreach($memberdetails as $key => $value){

    echo $key . ':' . $value .'<hr>';
  }










// donguler for


$arr = [
  
    'udemy',
    'youtube',
    'somesite',
    'somesite',
    'somesite',
    'somesitelast',
];


for($i = 0 ; $i<=(count($arr)-1) ; $i++){

 echo $arr[$i] . '<hr>';

}
echo '<br>';

for($i<=(count($arr)-1) ; $i >= 0  ; $i--){

 echo $arr[$i] . '<hr>';

}

?>


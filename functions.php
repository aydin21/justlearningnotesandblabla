<?php

//  bosh

function cuteded($val){

  if($val%2 == 0){

   return $val;
  }

 
}

$arr = [1,2,3,4,5];

  $arr2 = array_map('artir' , $arr);
 
  $arr2 =  array_filter($arr , function($item) {

     return $item >=2 && $item<=4;
  });
   
 $arr2 = array_map('cuteded' , $arr);
   
 

  print_r($arr2);



  
 // bezi funksiyalar

function test(){

   echo func_num_args() . '<br>';

  print_r(func_get_args()) . '<br>';

  echo func_get_arg(1) . '<br>';


}


 test('Aydin' , 'NYZ' , 'Hemod' , 'Russel' , 'Qusik' , 'Ve basqalari');







$arr = [

    'Aydin0',
    'Aydin1',
    'Aydin2',
    'Aydin3',

];
$arr = array_map( function($isim){
 

  return $isim . "Quliyev";
}, $arr);

print_r($arr);



$mystring ='Nyz + WhiteNiggerWithGlasses  + Hemod + Qusik + Quasimodo + Moto-Moto';
 
   
$arr = explode('+' , $mystring);

// print_r($arr) ;

  $newstring =  implode(',' , $arr);

 echo count($arr);



  var_dump($arr);
  print_r($arr);




 //  anonim funksiyalar funksiyani deyisene menimsedme

 
 $test =  function(){

    return 'hello world' ;
 };
  
  echo $test();

?>
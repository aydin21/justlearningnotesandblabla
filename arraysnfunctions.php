<?php

/*
 Array functions

  array_filter() - funksiyaya gore filterlerleme ve ya default bosh indexleri filterleme
  
  array_map() - funksiya ile filterleme 

  array_merge() - arraylari birlesdirmek 

  array_rand() - random index elementi verir

  array_reverse() - 

  array_search() - 

  array_pop() - 

  in_array()

  array_shift() -

  array_pop() -

  array_sum() -

  array-product() -

  array_unique() - 
  
  */





// arrya funksiyalar menimsedib indexe gore caqrma

$arr = [ 

    function(){

        return 'hello world0' ;
     },

    function(){

        return 'hello world1' ;
     },

     function(){

        return 'hello world2' ;
     }


];

echo $arr[rand(0,2)]();

// bezi array funksiyalari

$arr = [ 1,2,3,4];
$arr2 = [5,6,7,8];

 $arr3 = array_merge($arr,$arr2);

 print_r(array_rand($arr3 , 3));






?>
<?php 









// sabit deyiskenlerle massiv  istifadesi

define('newmember' , [
   
    'name' => "aydin",

    'surname' => "quliyev",
    
    'work' => "developer",
    
    'age' => 21,

    'sports' => [
       
        'mma',

        'boxing',

        'bodybuilding'

    ]



]);

echo newmember['sports'][2];
 print_r(newmember);







// massiv icinde massiv elani ve childlere muraciyyet
$categories = [ 

    'websites' => [

        'e-shop' => [

            'website0', 
            'blablatest', 
            'website2', 
            'website3'
        ]
        

    ],
     
    'Study' => [

        'studystuff0',
        'studystuff1',
        'studystuff2',
        'studystuff3'
        

    ],
     
    'somestuff' => [
        'foo0',
        'foo1',
        'foo2',
        'foo3'

    ]
     
    

];

   echo $categories['websites']['e-shop'][1];
 // print_r($categories);







//  massiv elani 
// 2 cure olur isteye gore
$person = array(

    'name' => "aydin",

    'surname' => "quliyev",
    
    'work' => "developer",
    
    'age' => 21


);

 // print_r($person);


// 2ci yol
$person2 = [

    'name' => "aydin",

    'surname' => "quliyev",
    
    'work' => "developer",
    
    'age' => 21
];

 // print_r($person2);





?>

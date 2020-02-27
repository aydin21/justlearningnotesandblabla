<?php
 // rekursiv funksiya 


$categories = [ 
   
[  'id' => 1,

 'parent' => 0,
 
 'name' =>'PHP'
],

[  'id' => 2,

 'parent' => 0,
 
 'name' =>'HTML'
],

[  'id' => 3,

 'parent' => 0,
 
 'name' =>'CSS'
],

[  'id' => 4,

 'parent' => 1,
 
 'name' =>'Functions'
],

[  'id' => 5,

  'parent' => 1,
 
 'name' =>'Array'
],

[  'id' => 6,

 'parent' => 4,
 
 'name' =>'Recursive Functions'
],

[  'id' => 7,

  'parent' => 4,
 
 'name' =>'Bablabla Functions'
],

];

  function categorylist($categories , $parent = 0){
        

        $html = '';

        $html .= '<ul>';

      foreach($categories as $category){

        if( $category['parent' ] == $parent){

         $html .=  '<li>' . $category['name']; 
       
         $html .= categorylist($categories , $category['id']);
          
         $html .= '</li>';

                                           }
      }

 

      $html .= '</ul>';
     
      return $html;
  }

   echo categorylist($categories);
 ?>

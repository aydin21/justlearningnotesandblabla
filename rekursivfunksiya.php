<?php 

// rekursiv funksiya sade ornek

     function say($i) {
        
        echo "hello world $i" . '<br>'; 

        if($i < 10){

            say($i + 1);
        }

  

     }


     say(1);
   
 
  
      // rekursiv funksiya ornek

     $allvehicles =  [
 
       'regularcategory' => 'mycategory',
 
       'regularcategory2' => 'mycategory2',
  
       'vehicles' => [
 
         'RegularCar' => 'RegularOne',
 
          'cars' => [
            
            'sedan' => 'Ford Mustang',
 
            'SUW' => 'Mercedes G500',
 
            'Truck' => 'Chevrolet Colorado'
 
 
          ],
          
          'motorbikes' => [
             
           'sport' => 'Yamaha MT-10',
 
           'motocross' => 'Sky deluxe 125cc',
           
           'ATM' => 'Yellow Bull'
 
           ]
 
          
 
      ]
    
          ];
      
 
 
 
      function findvehicle($list , $keyword){
   
         foreach($list as $key => $value ){
           
 
         if($key == $keyword){
 
           return $value;
         }
         
         if(is_array($value)){
           
           $result = findvehicle($value,$keyword);
            
           if($result){
             return $result;
           }
 
         }
         
       
         }
 
         return false;
 
      }
 
 
 
    echo findvehicle($allvehicles,'sport');
 
 



?>
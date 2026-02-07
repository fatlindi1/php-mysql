<?php

  $sports = ["Football", "Basketball","Volleyball"];

  echo $sports[0];

  echo end($sports). "<hr>";

  echo count($sports). "<hr>";




  for($count=0; $count<3; $count++){
    echo $sports[$count]. "<hr>";
  }


//   array_push($sports, "Golf");

//   for($count=0; $count<4; $count++){
//     echo $sports[$count]. "<hr>";
//   }

//   var_dump($sports);

//   array_pop($sports);

//   var_dump($sports);

//   array_unshift($sports, 'Tennis');

//    var_dump($sports); 

//   array_shift($sports);

//   var_dump($sports);

  $numbers=[1,2,3,4,5,6,7,8,9,];

  $mbledhja = array_sum($numbers);

  echo $mbledhja."<hr>";




  




  ?>
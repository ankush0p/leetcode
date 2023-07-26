<?php
  // Two Sum
  
  // $nums = [2,7,11,15];
  // $target = 9;
  
  // $nums = [3,2,4];
  // $target = 6;
  
  // $nums = [3,3];
  // $target = 6;

  foreach ($nums as $key => $first) {
    foreach ($nums as $skey => $second) {
      if($key != $skey){
        $sum = $first + $second;
        if($sum == $target){
          echo "<pre>";
          print_r([$key, $skey]);
          echo "<pre>";
        }
      }
    }
  }



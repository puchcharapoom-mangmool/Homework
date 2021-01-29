<?php
  $final = $_POST['Final'];
  $mid  = $_POST['mid'];
  $assign = $_POST['assign'];
  $HW = $_POST['hw'];
  $result = 0;

  echo "Final : $final <br>";
  echo "mid : $mid <br>";
  echo "assign : $assign <br>";
  echo"hw : $HW <br>";
  $result = $final + $mid + $assign + $HW;
  echo"Total Score  $result <br>";

  if($result > 79){
      echo" Your Grade is : A "; 
  }
  else if($result > 74){
    echo" Your Grade is : B+ "; 
  }
  else if($result > 69){
    echo" Your Grade is : B "; 
  }
  else if($result > 64){
    echo" Your Grade is : C+ "; 
  }
  else if($result > 59){
    echo" Your Grade is : C "; 
  }
  else if($result > 54){
    echo" Your Grade is : D+ "; 
  }
  else if($result > 49){
    echo" Your Grade is : D "; 
  }
  else echo" Your Grade is F";


<?php

function changeLocation(){	
  global $location;
  // Write your code here:
  echo "Where do you want to go?\n";
  $temp = strtolower(readline(">> "));
  if ($location == "kitchen" and $temp == "bathroom")
  {
    echo "You go to: bathroom.\n";
    $location = "bathroom";
  }
  elseif ($location == "kitchen" and $temp == "woods")
  {
    echo "You follow the winding path, shivering as you make your way deep into the Terror Woods.\n";
    $location = "woods";
  }
  elseif ($location == "bathroom" and $temp == "kitchen")
  {
    echo "You go to: kitchen.\n";
    $location = "kitchen";
  }
  elseif ($location == "woods" and $temp == "kitchen")
  {
    echo "You go to: kitchen.\n";
    $location = "kitchen";
  }
  elseif ($location == "bathroom" and $temp == "woods" or $location == "woods" and $temp == "bathroom")
  {
    echo "You can't go directly to there from your current location. Try going somewhere else first.\n";
  }
  else
  {
    echo "That doesn't make sense. Are you confused? Try 'look around'.\n";
  }
}
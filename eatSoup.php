<?php
function eatSoup(){
	// Write your code here:
  global $is_hungry, $has_soup;

  if ($has_soup == FALSE)
    echo "You don't have any cooked food to eat!\n";
  elseif ($is_hungry == FALSE)
    echo "You're not hungry, yet.\n";
  else
  {
    echo "You have eaten the soup! Yummy!\n";
    $has_soup = FALSE;
    $is_hungry = FALSE;
  }
}
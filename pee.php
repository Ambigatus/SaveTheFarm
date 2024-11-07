<?php
  
function pee(){
	// Write your code here:
  global $location, $needs_to_pee;

  if ($location == "bathroom")
  {
    echo "You relieve yourself.\n";
    $needs_to_pee = FALSE;
  }
  elseif ($location == "woods")
  {
    echo "Nature calls! Don't hold back, follow her call!\n";
    $needs_to_pee = FALSE;
  }
  else
    echo "Are you crazy? You can't pee here!\n"; 
}
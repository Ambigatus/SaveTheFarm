<?php
// Move the cupboard
  
function moveCupboard(){
    global $is_hungry, $wearing_contacts, $wearing_glasses, $needs_to_pee, $location, $moved_cupboard;

    $ready_to_work = FALSE;
    if ($is_hungry == FALSE and $wearing_contacts == TRUE and $wearing_glasses == FALSE and $needs_to_pee == FALSE)
    {
      $ready_to_work = TRUE;
    }  
    if ($location !== "kitchen")
      echo "You don't see a cupboard here!\n";
    elseif ($moved_cupboard == TRUE)
      echo "You've already moved the cupboard!\n";
    elseif ($ready_to_work == FALSE)
      echo "You're not ready to work! You need to be properly fed, have an empty bladder, and have corrected vision (without dealing with those pesky glasses). Without these things, there's no point in even trying to move the cupboard.\n";
    else
    {
      echo "You move the cupboard aside. You have revealed a safe crudely fit into the wall behind where the cupboard used to be.\n";
      $moved_cupboard = TRUE;
    }
}
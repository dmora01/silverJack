<?php

function displayRandomCard() 
{
  $deck = array();
  $usedCards = array();
  
  for ($i = 1; $i <= 52; $i++) 
  {
      $deck[] = $i;
  }
  
  shuffle($deck);
 
  $suits = array("clubs", "diamonds", "hearts", "spades");
  $randomSuitIndex = rand(0,3);
  $randomSuit = $suits[$randomSuitIndex];      
  echo "<img src='img/cards/$randomSuit/" . rand(1,13). ".png' />";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Silver Jack</title>
    </head>
    <body>
        
        <?=displayRandomCard() ?>

    </body>
</html>
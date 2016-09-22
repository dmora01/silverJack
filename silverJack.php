<?php
$deck = array();
$usedCards = array();
$suits = array("clubs", "diamonds", "hearts", "spades");
$players = array("Player1", "Player2", "Player3", "Player4");
function displayRandomCard(){
  
  for ($i = 1; $i <= 52; $i++) 
  {
      $deck[] = $i;
  }
  
  shuffle($deck);
 
  
  $randomSuitIndex = rand(0,3);
  $randomSuit = $suits[$randomSuitIndex];      
  
}
function displayHand(){
	for($i = 0; $i < 4; $i++){
		getHand($i);
	}
	
}

function displayWinner()
{
	echo "<form action='silverJack.php'>";

	echo "</form>";
	
}




?>

<!DOCTYPE html>
<html>
    <head>
        <title>Silver Jack</title>
        
           <link rel="stylesheet" href="css/silverJ.css" type="text/css" />

    </head>
    <body>
        
        <?=displayRandomCard() ?>

    </body>
</html>
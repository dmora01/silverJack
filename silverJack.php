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
function getHand(){
	
}
function displayHand(){
	for($i = 0; $i < 4; $i++){
		getHand($i);
	}
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Silver Jack</title>
    </head>
    <body>
        
        <?=displayRandomCard() ?>
        <footer>
        	&copy; Mora, Bharat, Galvan, 2016. <br /> Disclaimer: The information on this page might not be accurate. It's used for academic purposes
        <br /><br /><img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c2/CSUMB_Athletics_logo.png/200px-CSUMB_Athletics_logo.png" id="csumb">
        </footer>

    </body>
    
</html>

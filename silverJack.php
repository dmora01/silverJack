<?php
$deck = array();
$usedCards = array();
$suits = array("clubs", "diamonds", "hearts", "spades");
$players = array("Player1", "Player2", "Player3", "Player4");
$player1 = array();
$player2 = array();
$player3 = array();
$user = array();

function displayRandomCard()
{
  for ($i = 1; $i <= 52; $i++) 
  {
      $deck[] = $i;
  }
  
  shuffle($deck);
  getCards();
}
function getCards()
{
    $temp = rand(0, 3);
    $hold = rand(1, 13);
    
    for ($i = 0; $i < 4; $i++)
    {
        foreach ($usedCards as $x => $x_value)
	   {
	       if ($player1[$x] != $x_value && array_key_exists($x, $player1) != true)
	       {
	           $player1[$suits[$temp]] = $hold;
	           $usedCards[$suits[$temp]] = $hold;
	       }
	   }
	   
	    $temp = rand(0, 3);
        $hold = rand(1, 13);
    }
    
    $temp = rand(0, 3);
    $hold = rand(1, 13);
    
    for ($i = 0; $i < 4; $i++)
    {
        foreach ($usedCards as $x => $x_value)
	   {
	       if ($player2[$x] != $x_value && array_key_exists($x, $player2) != true)
	       {
	           $player2[$suits[$temp]] = $hold;
	           $usedCards[$suits[$temp]] = $hold;
	       }
	   }
	   
	    $temp = rand(0, 3);
        $hold = rand(1, 13);
    }
    
    $temp = rand(0, 3);
    $hold = rand(1, 13);
    
    for ($i = 0; $i < 4; $i++)
    {
        foreach ($usedCards as $x => $x_value)
	   {
	       if ($player3[$x] != $x_value && array_key_exists($x, $player3) != true)
	       {
	           $player3[$suits[$temp]] = $hold;
	           $usedCards[$suits[$temp]] = $hold;
	       }
	   }
	   
	    $temp = rand(0, 3);
        $hold = rand(1, 13);
    }
    
    $temp = rand(0, 3);
    $hold = rand(1, 13);
    
    for ($i = 0; $i < 4; $i++)
    {
        foreach ($usedCards as $x => $x_value)
	   {
	       if ($user[$x] != $x_value && array_key_exists($x, $user) != true)
	       {
	           $user[$suits[$temp]] = $hold;
	           $usedCards[$suits[$temp]] = $hold;
	       }
	   }
	   
	    $temp = rand(0, 3);
        $hold = rand(1, 13);
    }
}
function getHand($playerNum)
{
    $flag = false;
    
	if ($playerNum == 0)
	{
	    if (count($usedCards) != 0)
	    {
	        foreach ($usedCards as $x => $x_value)
	        {
	            if ($player1[$x] == $x_value && array_key_exists($x, $player1) == true)
	            {
	                $flag = true;
	            }
	        }
	        
	        if ($flag == false)
	        {
	            
	        }
	    }
	}
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

    </body>
</html>
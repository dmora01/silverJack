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
  getHand();
  displayHand();
}
function getCards()
{
    $temp = rand(0, 3);
    $hold = rand(1, 13);
    
    $player1[$suits[$temp]] = $hold;
    
    $temp = rand(0, 3);
    $hold = rand(1, 13);
    
    for ($i = 1; $i < 4; $i++)
    {
        foreach ($usedCards as $x => $x_value) //Looking for cards used and comparing it with player 1's hand
	   {
	       if ($player1[$x] != $x_value && array_key_exists($x, $player1) != true) // Checking for prexisting cards
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
        foreach ($usedCards as $x => $x_value) //Looking for cards used and comparing it with player 2's hand
	   {
	       if ($player2[$x] != $x_value && array_key_exists($x, $player2) != true) // Checking for prexisting cards
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
        foreach ($usedCards as $x => $x_value) //Looking for cards used and comparing it with player 3's hand
	   {
	       if ($player3[$x] != $x_value && array_key_exists($x, $player3) != true) // Checking for prexisting cards
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
        foreach ($usedCards as $x => $x_value) //Looking for cards used and comparing it with user's hand
	   {
	       if ($user[$x] != $x_value && array_key_exists($x, $user) != true) // Checking for prexisting cards
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
    $total = 0;
    $temp = rand(0, 3);
    $hold = rand(1, 13);
    
	if ($playerNum == 0)
	{
	    if (count($usedCards) != 0)
	    {
	        foreach ($player1 as $x => $x_value)
	        {
	            $total += $x_value;
	        }
	        
	        if ($total <= 35)
	        {
	            while ($total <= 35)
	            {
	                if ($player1[$temp] != $usedCards[$temp] && array_keys($player1, $suits[$temp]) != array_keys($usedCards, $suits[$temp]))
	                {
	                    $player1[$suits[$temp]] = $hold;
	                    $usedCards[$suits[$temp]] = $hold;
	                    
	                    $temp = rand(0, 3);
	                    $hold = rand(1, 13);
	                }
	            }
	        }
	        else 
	        {
	            return;
	        }
	    }
	    
	    return;
	}
	else if ($playerNum == 1)
	{
	    if (count($usedCards) != 0)
	    {
	        foreach ($player2 as $x => $x_value)
	        {
	            $total += $x_value;
	        }
	        
	        if ($total <= 35)
	        {
	            while ($total <= 35)
	            {
	                if ($player2[$temp] != $usedCards[$temp] && array_keys($player2, $suits[$temp]) != array_keys($usedCards, $suits[$temp]))
	                {
	                    $player2[$suits[$temp]] = $hold;
	                    $usedCards[$suits[$temp]] = $hold;
	                    
	                    $temp = rand(0, 3);
	                    $hold = rand(1, 13);
	                }
	            }
	        }
	        else 
	        {
	            return;
	        }
	    }
	    
	    return;
	}
	else if ($playerNum == 2)
	{
	    if (count($usedCards) != 0)
	    {
	        foreach ($player3 as $x => $x_value)
	        {
	            $total += $x_value;
	        }
	        
	        if ($total <= 35)
	        {
	            while ($total <= 35)
	            {
	                if ($player3[$temp] != $usedCards[$temp] && array_keys($player3, $suits[$temp]) != array_keys($usedCards, $suits[$temp]))
	                {
	                    $player3[$suits[$temp]] = $hold;
	                    $usedCards[$suits[$temp]] = $hold;
	                    
	                    $temp = rand(0, 3);
	                    $hold = rand(1, 13);
	                }
	            }
	        }
	        else 
	        {
	            return;
	        }
	    }
	    
	    return;
	}
	else if ($playerNum == 3)
	{
	    if (count($usedCards) != 0)
	    {
	        foreach ($user as $x => $x_value)
	        {
	            $total += $x_value;
	        }
	        
	        if ($total <= 35)
	        {
	            while ($total <= 35)
	            {
	                if ($user[$temp] != $usedCards[$temp] && array_keys($user, $suits[$temp]) != array_keys($usedCards, $suits[$temp]))
	                {
	                    $user[$suits[$temp]] = $hold;
	                    $usedCards[$suits[$temp]] = $hold;
	                    
	                    $temp = rand(0, 3);
	                    $hold = rand(1, 13);
	                }
	            }
	        }
	        else 
	        {
	            return;
	        }
	    }
	    
	    return;
	}
	else
	{
	    return;
	}
}
function displayHand(){
    $total = 0;
    foreach($player1 as $x => $x_value){
        $total += $x_value;
        echo "<img src='img/cards/". $x .   "/" . $x_value . ".png' />";
    }
    foreach($player2 as $x => $x_value){
        $total += $x_value;
        echo "<img src='img/cards/". $x .   "/" . $x_value . ".png' />";
    }
    foreach($player3 as $x => $x_value){
        $total += $x_value;
        echo "<img src='img/cards/". $x .   "/" . $x_value . ".png' />";
    }
    foreach($user as $x => $x_value){
        $total += $x_value;
        echo "<img src='img/cards/". $x .   "/" . $x_value . ".png' />";
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
        <footer>
        	&copy; Mora, Bharat, Galvan, 2016. <br /> Disclaimer: The information on this page might not be accurate. It's used for academic purposes
        <br /><br /><img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c2/CSUMB_Athletics_logo.png/200px-CSUMB_Athletics_logo.png" id="csumb">
        </footer>

    </body>
    
</html>

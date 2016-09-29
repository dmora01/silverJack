<?php

function displayRandomCard()
{
	$deck = array();
	$used = array();
	$player1Cards = array();
	$player2Cards = array();
	$player3Cards = array();
	$user = array();
	$usedCount = 0;
	
	for ($i = 1; $i <= 52; $i++)
	{
		$deck[] = $i;
	}
  
	shuffle($deck);
  
	$temp = rand(1, 52);
	
	for ($i = 0; $i < 4; $i++) // Assigning cards for player 1
	{
    	if (in_array($deck[$temp], $used) == false)
    	{
    		$used[$usedCount] = $deck[$temp];
    		$usedCount++;
    		$player1Cards[$i] = $deck[$temp];
    		$temp = rand(1, 52);
    	}
    	else
    	{
    		while (in_array($deck[$temp], $used) == true)
    		{
    			$temp = rand(1, 52);
    		}
    		
    		$used[$usedCount] = $deck[$temp];
    		$usedCount++;
    		$player1Cards[$i] = $deck[$temp];
    		$temp = rand(1, 52);
    	}
   }
   print_r($player1Cards);
   echo "<br><br>";
    
   for ($i = 0; $i < 4; $i++) // Assigning cards for player 2
   {
    	if (in_array($deck[$temp], $used) == false)
    	{
    		$used[$usedCount] = $deck[$temp];
    		$usedCount++;
    		$player2Cards[$i] = $deck[$temp];
    		$temp = rand(1, 52);
    	}
    	else
    	{
    		while (in_array($deck[$temp], $used) == true)
    		{
    			$temp = rand(1, 52);
    		}
    		
    		$used[$usedCount] = $deck[$temp];
    		$usedCount++;
    		$player2Cards[$i] = $deck[$temp];
    		$temp = rand(1, 52);
    	}
    }
    print_r($player2Cards);
    echo "<br><br>";
    
    for ($i = 0; $i < 4; $i++) //Assigning cards for player 3
    {
    	if (in_array($deck[$temp], $used) == false)
    	{
    		$used[$usedCount] = $deck[$temp];
    		$usedCount++;
    		$player3Cards[$i] = $deck[$temp];
    		$temp = rand(1, 52);
    	}
    	else
    	{
    		while (in_array($deck[$temp], $used) == true)
    		{
    			$temp = rand(1, 52);
    		}
    		
    		$used[$usedCount] = $deck[$temp];
    		$usedCount++;
    		$player3Cards[$i] = $deck[$temp];
    		$temp = rand(1, 52);
    	}
    }
    print_r($player3Cards);
    echo "<br><br>";
    
    for ($i = 0; $i < 4; $i++) //Assigning cards for the user
    {
    	if (in_array($deck[$temp], $used) == false)
    	{
    		$used[$usedCount] = $deck[$temp];
    		$usedCount++;
    		$user[$i] = $deck[$temp];
    		$temp = rand(1, 52);
    	}
    	else
    	{
    		while (in_array($deck[$temp], $used) == true)
    		{
    			$temp = rand(1, 52);
    		}
    		
    		$used[$usedCount] = $deck[$temp];
    		$usedCount++;
    		$user[$i] = $deck[$temp];
    		$temp = rand(1, 52);
    	}
    }
    print_r($user);
    echo "<br><br>";
    
    $amount = 0;
    $size = count($player1Cards);
    
    for ($i = 0; $i < count($player1Cards); $i++) // Counting up values to see the amount for player 1
    {
    	$amount += ($player1Cards[$i] % 13) + 1;
    }
    
    if ($amount <= 35)
    {
    	while ($amount <= 35)
    	{
			if (in_array($deck[$temp], $used) == false)
    		{
    			$used[$usedCount] = $deck[$temp];
    			$usedCount++;
    			$player1Cards[$size] = $deck[$temp];
    			$temp = rand(1, 52);
    		}
    		else
    		{
    			while (in_array($deck[$temp], $used) == true)
    			{
    				$temp = rand(1, 52);
    			}
    		
    			$used[$usedCount] = $deck[$temp];
    			$usedCount++;
    			$player1Cards[$i] = $deck[$temp];
    			$temp = rand(1, 52);
    		}
    		
    		$amount += ($player1Cards[$size] % 13) + 1; //Used mod to find the wrap around and find the actual value
    		$size++;
    	}
    }
    echo $amount;
    echo "<br>";
    
    $amount = 0;
    $size = count($player2Cards);
    
    for ($i = 0; $i < count($player2Cards); $i++) //Finding total amount for player 2
    {
    	$amount += ($player1Cards[$i] % 13) + 1;
    }
    
    if ($amount <= 35)
    {
    	while ($amount <= 35)
    	{
			if (in_array($deck[$temp], $used) == false)
    		{
    			$used[$usedCount] = $deck[$temp];
    			$usedCount++;
    			$player2Cards[$size] = $deck[$temp];
    			$temp = rand(1, 52);
    		}
    		else
    		{
    			while (in_array($deck[$temp], $used) == true)
    			{
    				$temp = rand(1, 52);
    			}
    		
    			$used[$usedCount] = $deck[$temp];
    			$usedCount++;
    			$player2Cards[$i] = $deck[$temp];
    			$temp = rand(1, 52);
    		}
    		
    		$amount += ($player2Cards[$size] % 13) + 1; //Using mod to find actual value
    		$size++;
    	}
    }
    echo $amount;
    echo "<br>";
    $amount = 0;
    $size = count($player3Cards);
    
    for ($i = 0; $i < count($player3Cards); $i++) //Finding total vaue for player3
    {
    	$amount += ($player1Cards[$i] % 13) + 1;
    }
    
    if ($amount <= 35)
    {
    	while ($amount <= 35)
    	{
			if (in_array($deck[$temp], $used) == false)
    		{
    			$used[$usedCount] = $deck[$temp];
    			$usedCount++;
    			$player3Cards[$size] = $deck[$temp];
    			$temp = rand(1, 52);
    		}
    		else
    		{
    			while (in_array($deck[$temp], $used) == true)
    			{
    				$temp = rand(1, 52);
    			}
    		
    			$used[$usedCount] = $deck[$temp];
    			$usedCount++;
    			$player3Cards[$i] = $deck[$temp];
    			$temp = rand(1, 52);
    		}
    		
    		$amount += ($player3Cards[$size] % 13) + 1; //Using mod to find actual value
    		$size++;
    	}
    }
    echo $amount;
    echo "<br>";
    $amount = 0;
    $size = count($user);
    
    for ($i = 0; $i < count($user); $i++)
    {
    	$amount += ($player1Cards[$i] % 13) + 1;
    }
    
    if ($amount <= 35)
    {
    	while ($amount <= 35)
    	{
			if (in_array($deck[$temp], $used) == false)
    		{
    			$used[$usedCount] = $deck[$temp];
    			$usedCount++;
    			$user[$size] = $deck[$temp];
    			$temp = rand(1, 52);
    		}
    		else
    		{
    			while (in_array($deck[$temp], $used) == true)
    			{
    				$temp = rand(1, 52);
    			}
    		
    			$used[$usedCount] = $deck[$temp];
    			$usedCount++;
    			$user[$i] = $deck[$temp];
    			$temp = rand(1, 52);
    		}
    		
    		$amount += ($user[$size] % 13) + 1;
    		$size++;
    	}
    }
    echo $amount;
}
function displayHand()
{
    for($i = 0; $i < count($player1Cards); $i++){
        if($player1Cards[$i] >= 1 && $player1Cards[$i] <= 13){
            //clubs
        }
        if($player1Cards[$i] >= 14 && $player1Cards[$i] <= 26){
            //diamonds
        }
        
        if($player1Cards[$i] >= 27 && $player1Cards[$i] <= 39){
            //hearts
        }
        
        if($player1Cards[$i] >= 40 && $player1Cards[$i] <= 52){
            //spades
        }
    }
    
    for($i = 0; $i < count($player2Cards); $i++){
        if($player2Cards[$i] >= 1 && $player2Cards[$i] <= 13){
            //clubs
        }
        if($player2CardsCards[$i] >= 14 && $player2Cards[$i] <= 26){
            //diamonds
        }
        
        if($player2Cards[$i] >= 27 && $player2Cards[$i] <= 39){
            //hearts
        }
        
        if($player2Cards[$i] >= 40 && $player2Cards[$i] <= 52){
            //spades
        }
    }
    for($i = 0; $i < count($player3Cards); $i++){
        if($player3Cards[$i] >= 1 && $player3Cards[$i] <= 13){
            //clubs
        }
        if($player3CardsCards[$i] >= 14 && $player3Cards[$i] <= 26){
            //diamonds
        }
        
        if($player3Cards[$i] >= 27 && $player3Cards[$i] <= 39){
            //hearts
        }
        
        if($player3Cards[$i] >= 40 && $player3Cards[$i] <= 52){
            //spades
        }
    }
    for($i = 0; $i < count($user); $i++){
        if($user[$i] >= 1 && $user[$i] <= 13){
            //clubs
        }
        if($userCards[$i] >= 14 && $user[$i] <= 26){
            //diamonds
        }
        
        if($user[$i] >= 27 && $user[$i] <= 39){
            //hearts
        }
        
        if($user[$i] >= 40 && $user[$i] <= 52){
            //spades
        }
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
        
           <link rel="stylesheet" href="CSS/styles.css" type="text/css"/>

    </head>
    <body>
        
        <?=displayRandomCard()?>
        
        
        <footer>
        	&copy; Mora, Bharat, Galvan, 2016. <br /> Disclaimer: The information on this page might not be accurate. It's used for academic purposes
        <br /><br /><img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c2/CSUMB_Athletics_logo.png/200px-CSUMB_Athletics_logo.png" id="csumb">
        </footer>

    </body>
    
</html>

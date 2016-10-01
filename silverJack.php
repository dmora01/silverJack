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
	
	$p1Win = 0;
	$p2Win = 0;
	$p3Win = 0;
	$userWin = 0;
	
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
   //print_r($player1Cards);
   echo "<br><br>";
   shuffle($deck);
   
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
    //print_r($player2Cards);
    echo "<br><br>";
    shuffle($deck);
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
    //print_r($player3Cards);
    echo "<br><br>";
    shuffle($deck);
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
    //print_r($user);
    echo "<br><br>";
    
    $amount = 0;
    $size = count($player1Cards);
    
    for ($i = 0; $i < count($player1Cards); $i++) // Counting up values to see the amount for player 1
    {
    	$amount += ($player1Cards[$i] % 13) + 1;
    }
    
    if ($amount <= 36)
    {
    	while ($amount <= 36)
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
    //echo $amount;
    echo "<br>";
    
    $amount = 0;
    $size = count($player2Cards);
    
    for ($i = 0; $i < count($player2Cards); $i++) //Finding total amount for player 2
    {
    	$amount += ($player1Cards[$i] % 13) + 1;
    }
    
    if ($amount <= 36)
    {
    	while ($amount <= 36)
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
    //echo $amount;
    echo "<br>";
    $amount = 0;
    $size = count($player3Cards);
    
    for ($i = 0; $i < count($player3Cards); $i++) //Finding total vaue for player3
    {
    	$amount += ($player1Cards[$i] % 13) + 1;
    }
    
    if ($amount <= 36)
    {
    	while ($amount <= 36)
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
    //echo $amount;
    echo "<br>";
    $amount = 0;
    $size = count($user);
    
    for ($i = 0; $i < count($user); $i++)
    {
    	$amount += ($player1Cards[$i] % 13) + 1;
    }
    
    if ($amount <= 36)
    {
    	while ($amount <= 36)
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
    //echo $amount;
    echo "<br />";
    $player1total = 0;
    $player2total = 0;
    $player3total = 0;
    $usertotal = 0;
    
    $usedPics = array();
    
     $randPicNum = rand(1,4);
     
    echo "<img src='img/". $randPicNum. ".jpg' />";

    
    for($i = 0; $i < count($player1Cards); $i++)
    {
        if($player1Cards[$i] >= 1 && $player1Cards[$i] <= 13)
        {
            echo "&emsp; &emsp;";
            echo "<img src='img/cards/clubs/" . ($player1Cards[$i] % 13 + 1). ".png' />";
            
        }
        if($player1Cards[$i] >= 14 && $player1Cards[$i] <= 26)
        {
            //diamonds
            echo "&emsp; &emsp;";
            echo "<img src='img/cards/diamonds/" . ($player1Cards[$i] % 13 + 1). ".png' />";
        }
        if($player1Cards[$i] >= 27 && $player1Cards[$i] <= 39)
        {
            //hearts
            echo "&emsp; &emsp;";
            echo "<img src='img/cards/hearts/" . ($player1Cards[$i] % 13 + 1). ".png' />";
            
        }
        if($player1Cards[$i] >= 40 && $player1Cards[$i] <= 52)
        {
            //spades
            echo "&emsp; &emsp;";
            echo "<img src='img/cards/spades/" . ($player1Cards[$i] % 13 + 1). ".png' />";
        }
        $player1total += ($player1Cards[$i] % 13 + 1);
    }
    echo "&emsp; &emsp; &emsp; &emsp;";
      echo "<b> ".  $player1total . "</b>";
      $p1Win = displayWinner($player1total);
    echo "<br />";
    
 
  $randPicNum = rand(1,4);
    echo "<img src='img/". $randPicNum. ".jpg' />";
    
    
    for($i = 0; $i < count($player2Cards); $i++)
    {
        if($player2Cards[$i] >= 1 && $player2Cards[$i] <= 13)
        {
            echo "&emsp; &emsp;";
            echo "<img src='img/cards/clubs/" . ($player2Cards[$i] % 13 + 1). ".png' />";
            
        }
        if($player2Cards[$i] >= 14 && $player2Cards[$i] <= 26)
        {
            //diamonds
            echo "&emsp; &emsp;";
            echo "<img src='img/cards/diamonds/" . ($player2Cards[$i] % 13 + 1). ".png' />";
        }
        if($player2Cards[$i] >= 27 && $player2Cards[$i] <= 39)
        {
            //hearts
            echo "&emsp; &emsp;";
            echo "<img src='img/cards/hearts/" . ($player2Cards[$i] % 13 + 1). ".png' />";
            
        }
        if($player2Cards[$i] >= 40 && $player2Cards[$i] <= 52)
        {
            //spades
            echo "&emsp; &emsp;";
            echo "<img src='img/cards/spades/" . ($player2Cards[$i] % 13 + 1). ".png' />";
        }
        $player2total += ($player2Cards[$i] % 13 + 1);
    }
    echo "&emsp; &emsp; &emsp; &emsp;";
     echo "<b> ".  $player2total . "</b>";
     $p2Win = displayWinner($player2total);

    echo "<br />";
    
    $randPicNum = rand(1,4);

    echo "<img src='img/". $randPicNum. ".jpg' />";

    for($i = 0; $i < count($player3Cards); $i++)
    {
        if($player3Cards[$i] >= 1 && $player3Cards[$i] <= 13)
        {
            echo "&emsp; &emsp;";
            echo "<img src='img/cards/clubs/" . ($player3Cards[$i] % 13 + 1). ".png' />";
            
        }
        if($player3Cards[$i] >= 14 && $player3Cards[$i] <= 26)
        {
            //diamonds
            echo "&emsp; &emsp;";
            echo "<img src='img/cards/diamonds/" . ($player3Cards[$i] % 13 + 1). ".png' />";
        }
        if($player3Cards[$i] >= 27 && $player3Cards[$i] <= 39)
        {
            //hearts
            echo "&emsp; &emsp;";
            echo "<img src='img/cards/hearts/" . ($player3Cards[$i] % 13 + 1). ".png' />";
            
        }
        if($player3Cards[$i] >= 40 && $player3Cards[$i] <= 52)
        {
            //spades
            echo "&emsp; &emsp;";
            echo "<img src='img/cards/spades/" . ($player3Cards[$i] % 13 + 1). ".png' />";
        }
        $player3total += ($player3Cards[$i] % 13 + 1);
    }
    echo "&emsp; &emsp; &emsp; &emsp;";
     echo "<b> ".  $player3total . "</b>";
     $p3Win = displayWinner($player3total);
    echo "<br />";
    
    $randPicNum = rand(1,4);

    echo "<img src='img/". $randPicNum. ".jpg' />";

    

    
    for($i = 0; $i < count($user); $i++)
    {
        if($user[$i] >= 1 && $user[$i] <= 13)
        {
            echo "&emsp; &emsp;";
            echo "<img src='img/cards/clubs/" . ($user[$i] % 13 + 1). ".png' />";
            
        }
        if($user[$i] >= 14 && $user[$i] <= 26)
        {
            //diamonds
            echo "&emsp; &emsp;";
            echo "<img src='img/cards/diamonds/" . ($user[$i] % 13 + 1). ".png' />";
        }
        if($user[$i] >= 27 && $user[$i] <= 39)
        {
            //hearts
            echo "&emsp; &emsp;";
            echo "<img src='img/cards/hearts/" . ($user[$i] % 13 + 1). ".png' />";
            
        }
        if($user[$i] >= 40 && $user[$i] <= 52)
        {
            //spades
            echo "&emsp; &emsp;";
            echo "<img src='img/cards/spades/" . ($user[$i] % 13 + 1). ".png' />";
        }
        $usertotal += ($user[$i] % 13 + 1);
   
    }
    echo "&emsp; &emsp; &emsp; &emsp;";
     echo "<b> ".  $usertotal. "</b>";
     $userWin = displayWinner($usertotal);
    echo "<br />";
    
    if($p1Win < $p2Win && $p1Win < $p3Win  && $p1Win < $userWin)
    {
        echo " <p>";
        echo "<c> <b> PLAYER ONE WINS! </b> </c>";
        echo "</p>";
    }
    if($p2Win < $p1Win && $p2Win < $p3Win && $p2Win < $userWin)
    {
        echo " <p>";
        echo "<c> <b> PLAYER TWO WINS! </b> </c>";
        echo " </p>";
    }
    if($p3Win < $p2Win && $p3Win < $p1Win && $p3Win < $userWin)
    {
        echo " <p>";
        echo " <c> < b> PLAYER THREE WINS! </b> </c>";
        echo " </p>";
    }
    if($p3Win < $p2Win && $p3Win < $p1Win && $p3Win < $userWin)
    {
        echo " <p>";
        echo " <c> < b> PLAYER THREE WINS! </b> </c>";
        echo " </p>";
    }
     if($userWin < $p1Win && $userWin < $p2Win && $userWin < $p3Win)
    {
        echo " <p>";
        echo " <c> < b> PLAYER FOUR WINS! </b> </c>";
        echo " </p>";
    }
}

function displayWinner($num)
{
    
    if($num > 42)
    {
        $total = $num - 42;
    }
    else
    {
        $total = 42 - $num;
    }
    
    return $total;
}



?>

<!DOCTYPE html>
<html>
    <head>
        <title>Silver Jack</title>
        
           <link rel="stylesheet" href="CSS/styles.css" type="text/css"/>

    </head>
    <body>
        
        <b> <h> Silver Jack! </h></b>
        <?=displayRandomCard()?>
        
        
        <footer>
        	&copy; Mora, Bharat, Galvan, 2016. <br /> Disclaimer: The information on this page might not be accurate. It's used for academic purposes
        <br /><br /><img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c2/CSUMB_Athletics_logo.png/200px-CSUMB_Athletics_logo.png" id="csumb">
        </footer>

    </body>
    
</html>

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
	
	for ($i = 0; $i < 4; $i++)
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
    
   for ($i = 0; $i < 4; $i++)
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
    
    for ($i = 0; $i < 4; $i++)
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
}
function displayHand()
{
    $total = 0;
    
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

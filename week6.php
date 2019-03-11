
</html>
<head>
<title>SHARANYU S 8a27c2dd</title>
</head>
<body>
<h1>WELCOME TO MY GUESSING GAME</h1>
<p>
<? php
       if(!isset($_GET['value'])){
	   echo "Missing guess parameter";
       }else
       {
	   if(strlen($_GET['value'])<1)
	   {
		echo "Your guess is too short";
	   }
       elseif( ! is_numeric($_GET['value']) )
	    {
			echo "Your guess is not a number";
		} elseif ( $_GET['value'] < 42) 
		{
			echo "Your guess is too low";
		} 
		elseif ( $_GET['value'] > 42 ) 
		{
			echo "Your guess is too high";
		}
		else 
		 {
			echo "Congratulations - You are right";
		}
	}
?>
</p>
</body>
</html>

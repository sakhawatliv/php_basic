<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>PHP learning</h1>
        
        <?php
            echo "This is a php line";
        ?>
        <br>

        <?php
        	$x = 10;
        	var_dump($x);
        ?>

        <?php
        	define("sakhawat", "this is sakhawat");
        	echo sakhawat;
        ?>


        <br>
        <!-- defile practice with function -->


        <?php
        	define("Greet", "Welcome to my learning area");

        	function test()
        	{
        		echo Greet;;
        	}
        	test();
        ?>
        <br>

        <?php
        	$convar = 0;

        	if ($convar >= 10) {
        		echo "its 10 or more";
        	}
        	elseif ($convar == 0) 
        	{
        		echo "its zero";
        	}
        	else
        	{
        		echo "its less than 10";
        	}
        ?>
        <br>
        	<?php
        	 	$convar = 10;
        		switch ($convar) {
        			case 10:
        				echo "its 10";
        				break;

        			case 20:
        				echo "its 20";
        				break;
        			
        			default:
        				echo "none of this";
        				break;
        		}
        	?>
        <br>
        
        <?php
            function myFunnction($name)
            {
                echo "Your name is"." ". $name;
            }
        
            myFunnction("Faisal");
        ?>
        <br>
        
        <?php 
        	function yourName($fname, $lname)
        	{
        		echo "Your name is $fname $lname";
        	}
        	yourName("sakhawat", "Hossain");
        ?>
        
        
        
    </body>
</html>
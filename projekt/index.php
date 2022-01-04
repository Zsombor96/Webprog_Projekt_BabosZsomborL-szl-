<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //5-1. példa
        echo strrev(" .dlrow olleH"); // Reverse string
        echo str_repeat("Hip", 2); // Repeat String
        echo strtoupper("hooray!")."<br><br>"; // String to uppercase
            
        $lowered = strtolower("aNY # of Letters and Punctuation you WANT"); echo $lowered."<br><br>";
        
        /*
        //5-2. példa
        echo fix_names("WILLIAM", "henry", "gatES");
	function fix_names($n1, $n2, $n3)
	{
		$n1 = ucifirst(strtolower($n1));
		$n2 = ucifirst(strtolower($n2));
		$n3 = ucifirst(strtolower($n3));
		
		return $n1 . " " .  $n2 . " " . $n3;
	}
        */
        
        /*
        //5-3. példa
        $names = fix_names("WILLIAM", "henry", "gatES");
 	echo $names[0] . " " . $names[1] . " " . $names[2] . "<br><br>";

 	function fix_names($n1, $n2, $n3)
 	{
 		$n1 = ucfirst(strtolower($n1));
 		$n2 = ucfirst(strtolower($n2));
 		$n3 = ucfirst(strtolower($n3));

 		return array($n1, $n2, $n3);
 	}
        */
        
        /*
        //5-4. példa
        $a1 = "WILLIAM";
 	$a2 = "henry";
 	$a3 = "gatES";
 	echo $a1 . " " . $a2 . " " . $a3 . "<br>";
 	fix_names($a1, $a2, $a3);
 	echo $a1 . " " . $a2 . " " . $a3 . "<br><br>";
 	function fix_names(&$n1, &$n2, &$n3)
 	{
 		$n1 = ucfirst(strtolower($n1));
 		$n2 = ucfirst(strtolower($n2));
 		$n3 = ucfirst(strtolower($n3));
 	}
        */
        
        //5-5. példa
        $a1 = "WILLIAM";
 	$a2 = "henry";
 	$a3 = "gatES";
 	echo $a1 . " " . $a2 . " " . $a3 . "<br>";
 	fix_names();
 	echo $a1 . " " . $a2 . " " . $a3 . "<br><br>";
 	function fix_names()
 	{
 		global $a1; $a1 = ucfirst(strtolower($a1));
 		global $a2; $a2 = ucfirst(strtolower($a2));
 		global $a3; $a3 = ucfirst(strtolower($a3));
 	}

        printf("My name is %s. I'm %d years old, which is %X in hexadecimal", 'Simon', 33, 33);
        echo "<br><br>";
        printf("<span style='color:#%X%X%X'>Hello</span>", 65, 127, 245);
        echo "<br><br>";
        printf("The result is: $%.2f", 123.42 / 12);
        echo "<br><br>";
        
        //7-1. példa
        echo "<pre>"; // Enables viewing of the spaces

	// Pad to 15 spaces
	printf("The result is $%15f\n", 123.42 / 12);

	// Pad to 15 spaces, fill with zeros
	printf("The result is $%015f\n", 123.42 / 12);

	// Pad to 15 spaces, 2 decimal places precision
	printf("The result is $%15.2f\n", 123.42 / 12);

	// Pad to 15 spaces, 2 decimal places precision, fill with zeros
	printf("The result is $%015.2f\n", 123.42 / 12);

	// Pad to 15 spaces, 2 decimal places precision, fill with # symbol
	printf("The result is $%'#15.2f\n", 123.42 / 12);

        //7-2. példa
        echo "<pre>"; // Enables viewing of the spaces

	$h = 'Rasmus';

	printf("[%s]\n", $h); // Standard string output
	printf("[%12s]\n", $h); // Right justify with spaces to width 12
	printf("[%-12s]\n", $h); // Left justify with spaces
	printf("[%012s]\n", $h); // Pad with zeros
	printf("[%'#12s]\n\n", $h); // Use the custom padding character '#'

	$d = 'Rasmus Lerdorf'; // The original creator of PHP

	printf("[%12.8s]\n", $d); // Right justify, cutoff of 8 characters
	printf("[%-12.12s]\n", $d); // Left justify, cutoff of 12 characters
	printf("[%-'@12.10s]\n", $d); // Left justify, pad with '@', cutoff 10 chars

        echo "<br><br>";
        echo time();
        
        echo "<br><br>";
        echo time() + 7 * 24 * 60 * 60;
        
        echo "<br><br>";
        echo mktime(0, 0, 0, 1, 1, 2000);
        
        echo "<br><br>";
        echo date("l F jS, Y - g:ia", time());
        
        echo "<br><br>";
        //7-3. példa
        $month = 9; // September (only has 30 days)
	$day = 31; // 31st
	$year = 2022; // 2022

	if (checkdate($month, $day, $year)) echo "Date is valid";
	else echo "Date is invalid";

        ?>
    </body>
</html>

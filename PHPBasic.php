<!DOCTYPE html>	
<!DOCTYPE html>
<html>
<head>
	<title>PHP Basic</title>
</head>
<body>
	<h1>My first php Script</h1>
	<?php
	echo "hellow world <br>";
	$color = "red";
    echo "My car is " . $color ."<br>" ;
    //Variable
    $txt = "W3Schools.com";
    echo "I love $txt! <br>";
    //or
    echo "I love" .$txt ."!" ."<br>";
    //addition
    $x = 5;
    $y = 4;
    $z=$x+$y;
    echo "<p>Total is: $z </p>";
    echo"<br>";
    //String
    echo"<h3>Rasel</h3>";
    print"Rasel";
    echo"<br>";
    $x="PHP";
    $y="learn";
    echo $x ." ". $y;
    echo"<br>";
    var_dump($x);
    echo"<br>";
    $c=true;
    var_dump($c);
     echo"<br>";
    //array
    $cars = array("Volvo","20","Toyota");
    var_dump($cars);
    echo"<br>";
    echo"$cars[0]";
    echo"<br>";
    for($i=0;$i<count($cars);$i++)
    {
    	echo"$cars[$i]"."<br>";
    }
    echo"<br>";
    echo count($cars);
    echo"<br>";
    //casting
    // Cast float to int
    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;
    echo "<br>";
    //Math
    echo (pi()."<br>");
    echo(sqrt(64). "<br>");
    echo(rand(5,10). "<br>");
    echo(round(-4.02)."<br>");
    echo(abs(-6.7));
    echo "<br>";

    //if-else
    $t = date("H");
 
    if ($t < "20") 
    {
    echo "Have a good day!";
    }
    echo"<br>";
    $s="str";
    if($s == "stz") {
			echo "Text is stz";
		} elseif ($s == "str") {
			echo "Text is str";
		} else {
			echo "Text is unknown";
	
	}
	echo"<br>";
	//Switch case
	$day="Monday";
	switch($day){
		case "Saturday":
		echo"Today is saturday";
		break;
		case "Sunday":
		echo"Today is sunday";
		break;
		case "Monday":
		echo"Today is monday";
		break;
		defalt:
        echo"Today is friday";
		break;
	}
	echo"<br>";
	//Loop
	$x = 1;
 
    while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
   } 
   echo"<br>";
   for ($x = 0; $x <= 10; $x++) {
   echo "The number is: $x <br>";
   }
   echo"<br>";
   $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
    echo "$value <br>";
   }

   $students=array("rasel"=>"1","Sajib"=>"2");
   foreach($students as $name => $id){
   	echo"$name = $id <br>";
   }
   echo"<br>";

   //Break
   for ($x = 0; $x < 10; $x++) {
   if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
//continue
echo"<br>";
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}
echo"<br>";
//function
function writeMsg() {
  echo "Hello world!";
}

writeMsg();
echo"<br>";
function greetingsWithParameter($msg ) {
	echo "Hello PHP   $msg <br>";
}

//greetingsWithParameter("Dummy");

greetingsWithParameter(1);
echo"<br>";

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, 15);
echo"<br>";

// for pass by reference use & before parameter name.

function expectingReturn() : int {
	return 20;
}

	$returnValue = expectingReturn(); 

	echo "<br>";
    echo $returnValue;
?>
   

</body>
</html>
   

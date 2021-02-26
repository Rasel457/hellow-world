<!DOCTYPE html>
<html>
<head>
	<title>Date Example</title>
</head>
<body>
	<h1>php date example</h1>
	 <?php
     echo"<br>";
     echo date("d-m-y");
     echo"<br>";
     echo time();
     echo"<br>";
     echo date("d-m-y",strtotime('+1 week'));
     echo"<br>";
     echo "&copy" . "2010" . " - " . date(" y ") . " ABC Company";

     ?>

</body>
</html>
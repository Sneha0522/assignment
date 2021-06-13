<html>
<head>
<title>Random number</title>
</head>
<body>
<br>
<p>Number generated randomly is 
<?php
$choice=rand(1,100);
echo $choice
?> and its square root is 
<?php
echo sqrt($choice);
?>
</p>
</body>
</html>
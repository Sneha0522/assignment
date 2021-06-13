<form method="post">
Enter a number:<input type="text" name="n">
<br>
<button type="submit">Check</button>
</form>
<?php
if($_POST)
{
   $n=$_POST['n'];
   $reverse=strrev($n);
   if($n==$reverse)
   {
       echo "The number $n is palindrome.";
   }
   else
   {
      echo "The number $n is not palindrome.";
   }
}
echo"<br>";
echo "The reverse of number $reverse";
?>
<?php
        $n=$_POST['n'];
       $sum=0;$rem=0;
       for($i=0;$i<=strlen($n);$i++)
       {
        $rem=$n%10;
        $sum=$sum+$rem;
        $n=$n/10;
       }
echo"<br>";
   echo "Sum of digit is $sum";
?>

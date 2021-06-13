<form method="post">
Enter a number:<input type="text" name="n">
<br>
<button type="submit">Check</button>
</form>
<?php 
if($_POST)
{
   $n=$_POST['n'];
   $a=$n;
$sum=0;
while($a!=0)
{
   $rem=$a%10;
   $sum=$sum+($rem*$rem*$rem);
   $a=$a/10;
}
if($n==$sum)
{
   echo "Yes $n an armstrong number";
 }
 else
{
   echo "$n is not an armstrong";
}
}
?>
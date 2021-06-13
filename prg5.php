<html>
<?php
  $f_num=$_POST['f_num'];
  $s_num=$_POST['s_num'];
  $operator=$_POST['operator'];
  $res= ' ';
  if(is_numeric($f_num) && is_numeric($s_num))
  {
    switch($operator)
     {
          case "Add": $res=$f_num + $s_num;
                        break;
          case "Subtract": $res=$f_num - $s_num;
                        break;
          case "Multiply": $res=$f_num * $s_num;
                        break;
          case "Division": $res=$f_num / $s_num;
                        
    }
}
?>
<body>
 <form method="post">
<p> First Number:<input type="number" name="f_num" id="f_num" value="<?php echo $f_num; ?>"/></p>
 <p>Second Number:<input type="number" name="s_num" id="s_num" value="<?php echo $s_num; ?> "/></p>
 <p>Result:<input readonly="readonly" name="res" value="<?php echo $res; ?> "/></p>
<input type="submit" name="operator" value="Add" />
<input type="submit" name="operator" value="Subtract" />
<input type="submit" name="operator" value="Multiply" />
<input type="submit" name="operator" value="Division" />
</form>
</body>
</html>
<HTML>
 <title>Андриянов</title>
  <BODY>
<FORM  method="post" action="<?php print $PHP_SELF ?>"> 
  <H3>Калькулятор </H3>
  <P> Введите два числа<BR> 
  а: <INPUT type="text" name="a" size="1"> 
  b: <INPUT type="text" name="b" size="1"> 
  <br> </br>
  действие
  <SELECT  NAME="z" SIZE="1"> 
    <OPTION  VALUE="1"  SELECTED> сложить
    <OPTION  VALUE="2"> вычесть
    <OPTION  VALUE="3"> умножить 
    <OPTION  VALUE="4"> разделить
  </SELECT> 
  <P> <INPUT type="submit" name="obr" value="Вперед!"> 
</FORM> 
<?php
if (isset($_POST["obr"])) 
{ 
	switch ($_POST["z"]) {
	case 1:
	$s1=$_POST["a"]+$_POST["b"];
	break;
	case 2:
	$s1=$_POST["a"]-$_POST["b"];
	break;
	case 3:
	$s1=$_POST["a"]*$_POST["b"];
	break;
	case 4:
	$s1=$_POST["a"]/$_POST["b"];
	break;
	}
	}
echo ($s1); 
?>  
</BODY> </HTML>
<html>
<title> ifCondition </title> 

<body>
<?php include("index.php");
?>
<form method="post" action = "ifconditionprocess.php "> <!--yung action para sa next page-->

<table align="center" border="0">

<tr>
	<td> Prelim </td>
	<td> <input type="number" name="text1" required> </td>
</tr>

<tr>
	<td> Midterm </td>
	<td> <input type="text" name="text2" required> </td>	
</tr>

<tr>
	<td> Finals</td>
	<td> <input type="text" name="text3" required> </td>	
</tr>

<tr>
	<td> <input type="submit" name="btn1" value="submit"> </td>	 <!--value - nakalagay sa button-->
</tr>

</table>
</form>
</body>
</html>

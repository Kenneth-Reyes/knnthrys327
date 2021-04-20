<html>
<title> ifconditionprocess </title> 

<body>
<?php
	$prelim= $_POST["text1"];
	$midterm= $_POST["text2"];
	$finals= $_POST["text3"];
	$answer= ($prelim+$midterm+$finals)/3;
	$status="";
	
	if($answer>=75) 
	{
	$status="Passed";
	}
	else       
	{
	$status="Failed";
	}
	
	$eq="";
	if($answer>=98 && $answer<=100)
	{
	$eq="1.00";
	}
	
	else if ($answer>=95 && $answer<=97)
	{
	$eq="1.25";
	}
	
	else if ($answer>=92 && $answer<=94)
	{
	$eq="1.5";
	}
	else if ($answer>=89 && $answer<=91)
	{
	$eq="1.75";
	}
	else if ($answer>=86 && $answer<=88)
	{
	$eq="2.00";
	}
	
	else if ($answer>=83 && $answer<=85)
	{
	$eq="2.25";
	}
	
	else if ($answer>=80 && $answer<=82)
	{
	$eq="2.5";
	}
	else if ($answer>=76 && $answer<=79)
	{
	$eq="2.75";
	}
	
	else if ($answer==75)
	{
	$eq="3.00";
	}
	
	else
	{
	$eq="5.00";
	}
	
		echo " Average    <font color=blue> <br><u> $answer   </u></b></font> <br><br>";
		echo " Status     <font color=gren> <br><u> $status  </u></b></font> <br><br>";
		echo " Equivalent <font color=grey> <br><u> $eq  </u></b></font> <br><br>";	
?>
	<a href="ifcondition.php"> again </a>   <!--papunta sa ifcondition page-->
	
</body>
</html>

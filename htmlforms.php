<html>
<title> HTML forms </title> 
<body>
<?php include("index.php");
?>
<form method="post" action = " ">

Regular textbox					<input type="text" name="text1" size="30"> <br>
Required Textbox				<input type="text" name="text2" size="30" required><br>
Patterned textbox"[0-9]{3,5}"	<input type="text" name="text3" size="30" pattern="[0-9]{3,5}" required><br> <!--[0-9a-zA-Z]-->
Email Textbox					<input type="text" name="email1" required> <br>
Password field					<input type="password" name="pass1" required> <br>

This is a textarea:		<br> <textarea name="area1" rows="10" cols="40"> </textarea> <br> <br>
These are Radio button: <br> <input type="Radio" name="radioset1" value="option1" checked> option1 </input><br>
							 <input type="Radio" name="radioset1" value="option2"> option2 </input><br>
textbox-input text only		<input type="text" name="text1" pattern="[a-zA-z//s ]*" required/>
							
These are Checkboxes:   <br>
					    <input type="checkbox" name="check1" value="option1" checked> option1 </input> <br>
					    <input type="checkbox" name="check1" value="option2" checked> option2 </input> <br>
					    <input type="checkbox" name="check1" value="option3" > option3 </input> <br>
					 			 
This is a Combo Box:    <select name="combo1">
					    <optgroup label="group1">
					    <option value="option1" selected> option1 </option>
					    <option value="option2"> option2 </option>
					    <option value="option3"> option3 </option>
					    </optgroup>
					    </select><br><br>
					
This is a List Box:     <br> <select name="combo1" size="4">
					    <optgroup label="group1">
					    <option value="option1" selected> option1 </option>
					    <option value="option2"> option2 </option>
					    <option value="option3"> option3 </option>
					    </optgroup>
					    </select><br><br>
					
					
<input type="reset" name="btn2" value="reset">					 
<input type="submit" name="btn1" value="click me">


</form>
</body>
</html>
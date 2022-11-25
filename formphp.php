<html>
<head>
<titel> DEMO for Text Input Controls</title>
</head>
<body>
 <?php
$name="";
$password="";
$comments="";

if(isset($_POST['submit']))  //to check submit button have been pressed or not
{
$name=$_POST['user_name']; //transfering text value
$password=$_POST['password'];
$comments=$_POST['description'];
}
?>


<form action="formphp.php" Method="POST">
<h2> Please fill up the following information</h2>
User ID:<input type="text" name="user_name"/>
<br>
PASSWORD:<input type="password" name="password"/>
<br>
Remarks:<br/>
<textarea rows="5" cols="50" name="description">

Enter your remarks here...
</textarea>
<input type="Submit" value="submit" name="submit">
</form>

<?php
if(strlen($name)>0)

{
	echo "<br> Your infromation is here";
	echo "<br>Name:".$name;
	echo "<br>Password".$password;
	echo "<br>Comments:".$comments;
}
  
 ?>
</body>
</html>
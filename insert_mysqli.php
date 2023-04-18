<?php
$con=mysqli_connect("localhost","root","","newdb");
$a=$_POST['fname'];
$b=$_POST['lname'];
if(mysqli_query($con,"insert into t1 values('$_POST[fname]','$_POST[lname]')"))
{
echo "record inserted";
}
$a=$_POST['fname'];
echo $a;

mysqli_close($con);

?>
<html>
<head>
</head>
<body>
<a href="ins.htm">Back</a>
</body>
</html>
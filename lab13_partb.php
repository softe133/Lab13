
<html>

<body> 


<form name="biodata" method="POST" action="">
  First name:<br>
  <input type="text" name="firstname"><br>
  Roll Number:<br>
  <input type="text" name="rollnum">
  <button type="submit" form="form1" value="Submit">Submit</button>
</form>




<?php

f_name = $_POST["firstname"];
rollnum = $_POST["rollnum"];

$student_array= array();

$conn= mysqli_connect("localhost","root","","demo_base")
or
die("Error connecting to database ".mysql_error());

$result = mysqli_query($conn,"SELECT * FROM test WHERE rollnum='rollnum' ") 
or die("Query not executed".mysqli_error());

while ($k=mysqli_fetch_assoc($result)){
	array_push($student_array, $k);
}

echo json_encode($student_array);

mysqli_close($conn);

?>

</body>

</html>
<?php
require_once('connect.php');
if(isset($_POST['Exam_Title']) && isset($_POST['Exam_Type']) && isset($_POST['Marks']) && isset($_POST['Duration']) && isset($_POST['Exam_Date'])){
	$a = $_POST['Exam_Title'];
	$b = $_POST['Exam_Type'];
	$c = $_POST['Marks'];
	$d = $_POST['Duration'];
	$e = $_POST['Exam_Date'];
	
	$sql = " INSERT INTO exam VALUES( '$a', '$b', '$c', '$d', '$e' ) ";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
	
		echo "Inserted Successfully";
	}
	else{
		 echo "Insertion Failed";
	}
	
}


?>
<html>
        <div class="col-md-10" style="text-align: left"> 
			<a href="exam_info.php" > Go Back </a> <br>
			<a href="admin_dashboard.php" > HOME </a> <br>
        </div>

</html>
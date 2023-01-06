<?php
require_once('connect.php');

if(isset($_POST['Exam_Title']) ){
	$a = $_POST['Exam_Title'];
	
	$sql = " delete from exam where Exam_Title = '$a' ";
	
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
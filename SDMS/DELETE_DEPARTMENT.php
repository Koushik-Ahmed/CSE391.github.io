<?php
require_once('connect.php');

if(isset($_POST['Department_Initial']) ){
	$di = $_POST['Department_Initial'];
	
	$sql = " delete from department where Department_Initial = '$di' ";
	
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
			<a href="department_info.php" > Go Back </a> <br>
			<a href="admin_dashboard.php" > HOME </a> <br>
        </div>

</html>
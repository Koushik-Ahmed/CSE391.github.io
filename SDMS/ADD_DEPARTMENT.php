<?php
require_once('connect.php');

if(isset($_POST['Department_Initial']) && isset($_POST['Department_Name']) && isset($_POST['No_of_Students']) && isset($_POST['No_of_Faculties'])){
	$di = $_POST['Department_Initial'];
	$dn = $_POST['Department_Name'];
	$ns = $_POST['No_of_Students'];
	$nf = $_POST['No_of_Faculties'];
	
	$sql = " INSERT INTO department VALUES( '$di', '$dn', '$ns', '$nf' ) ";
	
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

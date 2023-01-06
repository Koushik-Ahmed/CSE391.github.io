<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
	
        body 
        {
            background-color:skyblue;
        }
		
        div{
            height:auto;
            width:auto;
            background:#00ffff;
            float: left;
            display:inline-table;
            visibility: visible;
            border: solid #CC00AA;
            border-width: 1px;
            padding: 30px;
			            
        }
       
        body{
            display: table;
        }
		
        a{
            margin-right:2%; 
            display: inline-block;
            float: left;
            font-weight: bold;
            color: #ffffff;
            background-color: black;
            width: 60%;
            text-align: center;
            padding: 6px;
            text-decoration: none;
        }
		

    </style>
</head>
<body>
    <section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: right"> 
				<a href="ADD_DEPARTMENT_FORM.php" style="margin-left: 20px;"> ADD DEPARTMENT </a> <br>
				<a href="DELETE_DEPARTMENT_FORM.php" style="margin-left: 20px;"> DELETE DEPARTMENT </a> <br>
				<a href="admin_dashboard.php" style="margin-left: 20px;"> HOME </a> <br>
			</div>
		</div>
	</section>
	       <table border = "1">
	       <tr>
			   <th>Department Initial</th>
			   <th>Department Name</th>
			   <th>No of Students</th>
			   <th>No of Faculties</th>
		   </tr>
          <?php 
			require_once("connect.php");
			$sql = "SELECT * FROM department";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result)){
				
			?>
		
			<tr>
				<td><?php echo $row[0];?></td>
				<td><?php echo $row[1];?></td>
				<td><?php echo $row[2];?></td>
				<td><?php echo $row[3];?></td>
			</tr>
	
			<?php 
				}					
			}
			?>
        </table>
</body>
</html>
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
            padding: 20px;
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
            width: 50%;
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
				<a href="add_exam_form.php" style="margin-left: 20px;" > ADD EXAM </a> <br>
				<a href="delete_exam_form.php" style="margin-left: 20px;"> DELETE EXAM </a> <br>
				<a href="admin_dashboard.php" style="margin-left: 20px;"> HOME </a> <br>
			</div>
		</div>
	</section>
	       <table border = "1">
	       <tr>
			   <th>Exam_Title</th>
			   <th>Exam_Type</th>
			   <th>Marks</th>
			   <th>Duration</th>
			   <th>Exam_Date</th>
		   </tr>
          <?php 
			require_once("connect.php");
			$sql = "SELECT * FROM exam";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				
				while($row = mysqli_fetch_array($result)){
				
			?>
        		
			<tr>
				<td><?php echo $row[0];?></td>
				<td><?php echo $row[1];?></td>
				<td><?php echo $row[2];?></td>
				<td><?php echo $row[3];?></td>
				<td><?php echo $row[4];?></td>
			</tr>
			
			<?php 
				}					
			}
			?>
        </table>
</body>
</html>
<?php include("connect.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Document</title>
  <style type ="text/css">
    body{
    font-family: 'Roboto Mono', 'Titillium Web', sans-serif;
    background: linear-gradient(to right, #42275a, #734b6d);
    color: white;
    }
  
  </style>

</head>
<body>
<nav>
  <a href="index.php">Log Out</a>
</nav>
<div class="center">
        <form action="" method="post" align ="center">
            <input type="text" name="search" placeholder="Search">
            <input type="submit" value="Search">
            <input type="hidden" value="search" name="method">
            <br>
            <br>
        </form>

        <form action="" method="post" align="center">
        <label for="">Sort by</label>
        <input type="hidden" value="sort" name="method">
            <select name="sort_option" id="">
                <option value="name">Name</option>
                <option value="sid">SID</option>
                <option value="slot">Slot No </option>
            </select>
            <input type="submit" value="Sort">
            <br> <br>
        </form>

        <form action="" method="post" align="center">
        <label for="">Filter By</label>
        <input type="hidden" value="filter" name="method">
            <select name="slot_filter" id="">
                <option value="1">Slot 1</option>
                <option value="2">Slot 2</option>
                <option value="3">Slot 3</option>
                <option value="4">Slot 4</option>
            </select>
            <input type="submit" value="Filter">
            <br> <br>
        </form>


        <?php
            
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if($_POST["method"] == "search"){
                    $str = $_POST["search"];
                    $sql = "SELECT * FROM `info` WHERE `name` ='".$str."' OR `sid` ='".$str."' OR `firstname` ='".$str."'";
                }
                else if ($_POST["method"] == "filter"){
                    $selectOption = $_POST['slot_filter'];
                    $sql = "SELECT * FROM `info` WHERE `slot` ='".$selectOption."'";
                }
                else if ($_POST["method"] == "sort"){
                    $selectOption = $_POST['sort_option'];
                    $sql = "SELECT * FROM `info` ORDER BY " .$selectOption;
                }
            
            }
            else{
                $sql = "SELECT * FROM info";
            }
            
            $result = $conn->query($sql);

           

            if ($result->num_rows > 0) {
            // output data of each row
            echo "<table border='1' align='center' width='80%'>
                <tr>
                <th>Name</th>
                <th>First name</th>
                <th>SID</th>
                <th>Email</th>
                <th>Slot No</th>
                </tr>";
            while($row = $result->fetch_assoc()) {
                {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['firstname'] . "</td>";
                    echo "<td>" . $row['sid'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['slot'] . "</td>";
                    echo "</tr>";              
                    }
            }
            echo "</table>";
            } else {
            echo "No results found. Please input correctly.";
            }

            
        ?>

    </div>
        
</body>
</html>
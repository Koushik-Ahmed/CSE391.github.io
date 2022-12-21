<?php require("connect.php") ?>
<html>
<head>
<title>Lecturer Login</title>
<meta charset="utf-8" name = "viewport" content = "width=device-width, initial-scale=1.0, shrink_to_fit=no">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class = "login-form">
        <img src = "bracu_logo.jpg" alt ="Logo" height = "200">
        <h2>Lecturer Login</h2>
        <form ation = "admin_login.php" method="POST">
            <div class = "input-field">
                <i class = "fas fa-user"></i>
                <input type = "text" placeholder="Admin Email" id = "AdminEmail" name="AdminEmail" />
            </div>

            <div class = "input-field">
                <i class = "fas fa-lock"></i>
                <input type = "password" placeholder="Password" id = "AdminPassword" name="AdminPassword" />
            </div>

            <button type = "submit" name="Signin">Log In</button>
            
        </form>
    </div>
<?php 
if(isset($_POST['Signin'])){
    $query="SELECT * FROM admin_login WHERE Admin_Email = '".$_POST['AdminEmail']."' && Admin_Password = '".$_POST['AdminPassword']."' ";
    $results = mysqli_query($conn, $query);
    if(mysqli_num_rows($results)==1){
        session_start();
        $_SESSION['AdminLoginId']=$_POST['AdminEmail'];
        header("location: info.php");
    }
    else{
        echo"<script>alert('Incorrect Email or Password'); </script>"; 
    }
}
?>


</body>
</html>    
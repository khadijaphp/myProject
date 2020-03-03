<?php
session_start();
include 'autoLoad.php';
if(isset($_POST["login"]))
{
    if(empty($_POST["username"])|| empty($_POST["password"]))
    {
        echo'<label> les champs sont obligatoire</label>';
    }
    else
    {
        $user=$_POST["username"];
        $pwd=$_POST["password"];

           $con = new dbh();
           $sql="SELECT * FROM users WHERE username=? AND password=?";

           $stmt=$con->connect()->prepare($sql);
           $stmt->execute([$user,$pwd]);
           $count=$stmt->rowCount();
           if($count>0)
           {
               $_SESSION["username"]=$_POST["username"];
               header("location:cars.php");
           }
        
           echo"testing";
    }


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/logIn.css">
    <title>Log In</title>
</head>
<body>
    <?php
    // $user = new UsersView();
    // $user->showUser("khadija");

    // $user2 = new UsersController();
    // $user2->createUser("amal","amalpass");
  
    // ?>
    <div class="container">
        <form action="" method="post">
            <label for="">username: </label>
            <input type="text" name="username">
            <br> <br>
            <label>PassWord: </label>
            <input type="password" name="password">
            <br><br>
            <input type="submit" name="login" value="login" class="btn_Log">
        </form>
    </div>
    
</body>
</html>
<?php
session_start();
$_SESSION['cin']="khadija";
$_SESSION['password']="khadijapass";
echo $_SESSION['cin'];
session_destroy();
?>
<form action="test1.php" method="post">
						 <input type="submit" name="louer" value="valider">
						 </form>
<?php
if(isset($_POST["valider"]))
{
   echo 'valider khadama';

     if((!$_SESSION['cin']) && (!$_SESSION['password']))
       {
      // header("location:car-single.php");
      echo 'vous etes deconnectes';
      
     }else
     {
      header("location:test1.php");
      echo 'connecter';
     }
     
        
     
   }
?>
 <?php session_start(); 
 include 'databasecon.php';
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    
    $e= stripcslashes($email);
  
 
    $sql= "SELECT * FROM users WHERE email='$e' and pass='$pass'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $_SESSION['email']=$e;
        
        echo '<center><b>Successfully logged in</b></center> <br>';
         
         header("Refresh:1, url=home.php");
    } else
    {
        echo 'password or username mismatch';
    }
   
   }
?>


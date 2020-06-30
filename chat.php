<html>
    <head>
         <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   
    <style>
        *{
            margin: 0px; padding: 0px;
        }
        #main{
            border:1px solid black; width: 450px; height: 500px;margin: 24px auto;
        }
        #message{
            width:98%; border:1px solid blue; height: 440px;
            color: white;
        }
     
.im {
  background-image: url('img/sky.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

    </style>
    </head>
    <body>
        <?php session_start();
        if(isset($_SESSION['email'])){
echo 'Welcome '.$_SESSION['email']."";
?>
<div align="right">
    <?php
echo '<a href="logout.php"> <b>Log out<b></a><br>';
        }
        else{
            header("location:index.php");
        }
        ?></div>
        <div class="container im">
        <div id="main">
            <div id="message">
                 <?php 
            require_once 'databasecon.php';
            
         $sql = "SELECT id, message, email FROM messages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>-: ". $row["id"]. " - email: ". $row["email"]. " <br>" . $row["message"] . "<br>"."<hr>";
    }
} else {
    echo "0 results";
}
?>


           </div>
        
<?php
            if(isset($_POST['submit']))
            {
                $message=$_POST['message'];
                $sql="INSERT INTO messages ( message,email)
    VALUES( '".$message."' , '".$_SESSION['email']."')";
                if (mysqli_query($conn, $sql)) {
                    echo '<h4 style="color:red">'.$_SESSION['email'].'</h4>';
                    echo '<p>'.$message.'</p>';
                    
                    
                    
                }
                }
            
                ?> 
                
            
          
            <form method="post">
                <input type="text" name="message" style="width: 370px; height: 50px;" placeholder="Type Your Message">
                <input type="submit" name="submit"style="width: 70px; height: 50px;" value="message">
            </form>
        </div>
        </div>
        <?php                include 'footer.php';
        ?>
    </body>
</html>



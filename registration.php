<?php include 'header.php';
?>
<html>
    <head>
        <title>
            Registation Forms
        </title>
    </head>
    <body>
    <center> <h1>Register</h1></center>
    <center>All Fields are mandatory</center>
        <div class="jumbotron">
        <div class="container">
            <form action="register.php" method="post">
  <div class="row">
    <div class="col">
        <input type="text" class="form-control" name="fname" placeholder="First name" required>
    </div>
    <div class="col">
        <input type="text" class="form-control" name="lname" placeholder="Last name" required>
    </div>
  </div>
            <br>
            <br>
      <div class="row">
 <div class="col">
     <input type="email" class="form-control" name="email" placeholder="your email here" required ></div></div>
     <br>
     <br>
     <div class="row">
         <div class="col"><input type="password" name="pass" class="form-control" placeholder="Enter your password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required minlength="8" maxlength="15"></div>
            </div>
     <br>
     <br>
     <div class="row">
         <div class="col"><input type="password" class="form-control" placeholder="Repeat password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required minlength="8" maxlength="15"></div>
            </div>
     <br>
     <br>
            <div class="row">
                <div class="col">
                    <div><input type="tel" placeholder="+91 1234567890" name="phn"class="form-control" required minlength="10" maxlength="10"></div>
            </div>
            </div>
        
     <br>
     <br>
          
            <div class="text-center">
                <button type="submit" name="register" class="btn btn-primary mb-2">Create Account</button>
            </div>
          
            </div>
           
        </form>
</form>
        </div>
        <br>
                <br>

                        <br>
        <br>
 <?php        include 'footer.php';?>
    </body>
</html>
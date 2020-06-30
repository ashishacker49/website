    <?php
include 'header.php';?>
<html>
    <head>
        

  
        <title>
            Login
        </title>
        <style>
            #br{
                margin: 200px;
                border: 1px solid;
                margin: 50px 400px 50px 15px;
                background: skyblue;
            }
            .bg{
                color: white;
                background: skyblue;
            }
            .im{
                background-image: url("img/lnbg.jpg");
                  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
            }
            .bl{
                margin: 30px auto;
                background: whitesmoke;
            }
        </style>
    </head>
    <body>  

    
        <div class="container bl im">
         
              <center> <h1 class="bg">Login</h1></center><br>
              
              <br>
              <form method="post"  action="authenticate.php">
                  
                  <input type="email" name="email"class="form-control" placeholder="Email">
                  <br>
                  <br>
                  
                  <input type="password" class="form-control" name="pass" placeholder="Password">
                  <br>
                  <br>
                  <center> <input type="submit" class="btn btn-outline-danger btn-light" name="login" value="Login"></center>
                  
              </form>
        </div>
              
             
          
            
        <div class="bl">
        <?php        include 'footer.php';?>
        </div>
        
         </body>
         
    
</html>
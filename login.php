<!doctype html>
<?php
 include 'connect.php';
if(isset($_GET['submit'])){//isset checks if the variable is declared or not aswell checks empty or not
    $name=$_GET['name'];
    $email=$_GET['email'];
    $mobile=$_GET['phone'];
    $password=$_GET['pass'];

     $sql="Insert Into `curd`(`USERNAME`,`Password`,`Email`,`Phone number`)Values('$name','$password','$email','mobile')";
     if($con->query($sql)===TRUE){
      // echo"Data created sucessfully";
      header('location:display.php');
    }
    else{
      echo("Data not created");
    }
  }
 
?>
<!DOCTYPE html>
<html>
 
  <head>
    <title>FRONT PAGE</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="project.css">
  </head>
  <body>
    <!--header section strts-->
    <header class="header">
      
      <a href="#" class="logo">
      <i class="fa fa-coffee" >SUNSHINE UNIVERSITY</i>
        </a>
      <nav class="nav">
        <a href="#" >Home</a>
        <a href="#" >About</a>
        <a href="#" >Reviews</a>
        <a href="#" >Contact</a>
      </nav>
    </header>

    <section class="home">
      <div class="content">
        <h2>YOUR DOOR TO THE FUTURE</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas veritatis repellat excepturi maxime cupiditate. Fugit commodi laborum, odit cumque molestias repellendus unde, vel sequi quia enim labore alias, dicta non?.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia soluta impedit minus repellendus, iure vel architecto accusantium reiciendis quae eligendi fuga cumque perspiciatis placeat natus? Reiciendis vel voluptate ab quasi.
        </p>
       
                
        <a href="#" onclick="showform()">REGISTER HERE!</a>
        <!--header section ends-->
      </div>
      <div class="formbox" id="formbox">
        <i class="fa fa-window-close" onclick="hideform()" ></i>
        REGISTER HERE!<br>
        <label>Username</label>
        <input type="text" placeholder="Enter your name" name="name" autocomplete="off"><br>
        <label>Email</label>
        <input type="text" placeholder="Enter your email" name="email" autocomplete="off"><br>
        <label>Password</label>
        <input type="password" placeholder="Enter the password" name="pass" autocomplete="off"><br>
        <label>Phone number</label>
        <input type="number" placeholder="Enter your phone number" name="phone" autocomplete="off">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</div>
      <!--Form strts-->
        <div class="wrapper-login">
          <h2>Member login</h2>
          <form action="homepage.php"></from>
          <div class="input-box">
            <span class="icon"><i class="fa fa-mail-forward" ></i></span>
            <input type="text" id="email" autocomplete="off">
            <label>Enter your Name</label>
          </div>
          <div class="input-box">
            <span class="icon"><i class="fa fa-lock" ></i></span>
            <input type="password" id="pass" autocomplete="off">
            <label>Enter your password</label>
          </div>
         
         
          <button type="submit" class="btn" onclick="return login()">Login</button>
          <div class="register-link">
            <p>Not a member?<a href="#">Sign up now</a></p>
          </div>
        </form>
        <!--Form ends-->
        </div>
    </section>
  </body>
  <script>
    function login(){
      var u=document.getElementById("email").value;
      var p=document.getElementById("pass").value;
      if(u=="Apurva Acharya" && p=="1011"){
        return true;
      }
      else{
        alert("Please check yout id password")
        return false;
      }
    }
   
  
  </script>
  <script type="text/javascript">
    var f=document.getElementById("formbox");
   function showform(){
    
    f.style.display="block";
   }
   function hideform(){
    f.style.display="none";
   }
</script>

</html>
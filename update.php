<!doctype html>
<?php
 include_once('connect.php');
 $id=$_GET['updateid'];
 $sql="SELECT * from `crud` where id=$id";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_assoc($result);
 $name=$row['USERNAME'];
 $password=$row['Password'];
 $email=$row['Email'];
 $mobile=$row['Phone number'];
if(isset($_GET['submit'])){//isset checks if the variable is declared or not aswell checks empty or not
    $name=$_GET['name'];
    $email=$_GET['email'];
    $mobile=$_GET['phone'];
    $password=$_GET['pass'];

     $sql="UPDATE `curd` set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' Where id=$id ";
     if($con->query($sql)===TRUE){
      echo"UpDated  sucessfully";
      
    }
    else{
      echo("Data not created");
    }
  }
 
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
   <div class="container my-4"><!--container will divide the width equally-->
   <form method="g"><!--get method shows the input data in the url and post method hides the input data in the url-->
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter your Name" autocomplete="off" value=<?php echo $name;?>>
  </div>
  <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="text" class="form-control"  name="email"placeholder="Enter your email" autocomplete="off">
  </div>
  <div class="mb-3">
    <label  class="form-label">Phone</label>
    <input type="text" class="form-control" name="phone" placeholder="Enter your mobile number" autocomplete="off">
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="pass" placeholder="Enter your password" autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">UPDATE</button>
</form>
   </div>
    
  </body>
</html>
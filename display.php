<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <button class="btn btn-primary my-5"><a href="user.php" class="text-light">ADD USER</a></button>
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">USERNAME</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">EMAIL</th>
      <th scope="col">Phone number</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * from `curd`";
    $result=mysqli_query($con,$sql);
    if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['S.N.'];
        $name=$row['USERNAME'];
        $password=$row['Password'];
        $email=$row['Email'];
        $mobile=$row['Phone number'];
        
        echo'<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$password.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        </td>
<td><button class="btn btn-primary"><a  href="update.php update id='.$id.'" class="text-light">UPDATE</a></button>

<button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">DELETE</a></button>
  </td>
      </tr>';
    }
    }
    ?>
   
</table>
</div>
</body>
</html>

<!DOCTYPE html>
<html>
 
  <head>
    <title>FRONT PAGE</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="project.css">
  </head>
  <body>
    <!--header section starts-->
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
       
                
        <a href="#">REGISTER HERE!</a>
        <!--header section ends-->
      </div>
      <div class="formbox">
        REGISTER HERE!
</div>
      <!--Form starts-->
        <div class="wrapper-login">
          <h2>Member login</h2>
          <form action="#"></from>
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
      if(u=="" && p==""){
      
        alert("Invalid password");
        return false;
      }
      else{
        confirm("Are you sure");
        return true;
      }
    }
    $(document).ready(function(){
    $("#show").click(function(){
        $("p").show(2000)
    })
    $("#hide").click(function(){
      $("p").hide(2000)
    })
  })
  
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
    $("#show").click(function(){
        $("p").show(2000)
    })
    $("#hide").click(function(){
      $("p").hide(2000)
    })
  })
</script>

</html>
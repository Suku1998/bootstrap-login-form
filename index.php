<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="style1.css" rel="stylesheet"> 
    <title>index</title>
    <style>
    
   
   input[type=text], input[type=password] {
   width: 100%;
   padding: 12px 20px;
   margin: 5px 0;
   display: inline-block;
   border: 1px solid #ccc;
   box-sizing: border-box;
   }
   button:hover {
   opacity: 0.8;
   }

   /* Extra styles for the cancel button */
   .cancelbtn {
   width: auto;
   padding: 10px 18px;
   background-color: #f44336;
   }
   span.psw {
   float: right;
   padding-top: 16px;
   }

   .login{
	 display: flex;
   height: auto;
   width: auto;
   justify-content: center;
   align-items: center;
   }    
   .modal-content {
    margin:2px;
   background-color: #fefefe;
   border: 1px solid #888;
   width: 500px; /* Could be more or less, depending on screen size */
   }
   button {
   background-color: #4CAF50;
   color: white;
   padding: 14px 20px;
   margin: 8px 0;
   border: none;
   cursor: pointer;
   width: 100%;
   }

   .container {
   padding: 29px;
   }
   
   footer{
    background-color: black;
    color:whitesmoke;
    text-align: center;
    width:100% ;
    height: 49px;
   }
   footer:hover{
    opacity:0.8;
   }
   p:hover{
     color:red;
   }
  </style>
  </head>
  <body>
  <form  action="#" method="post">
  <nav class=" navbar-expand-lg navbar navbar-dark bg-dark  ">
  <div class="container-fluid ">
  <a class="navbar-brand " href="index.php">
      <img src="images/logo1.png" alt="" width="80" height="45">
     </a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item ">
          <a class="nav-link  topnav-centered" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contact.php">Contact Us</a>
        </li>
        
    </div>
  </div>
</nav>

<div class="login">
    <div class="modal-content">
  
    <div style="padding:16px 16px 0 16px">
      <b>User Login</b>
    </div>
    <hr/>
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname">

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw">
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <a href="register.php" style="text-decoration:none;"><button type="button"  class="cancelbtn">Register</button></a>
      <span class="psw"><a href="forgotpassword.php">Forgot password</a></span>
    </div>
   </div>
  </div>

   
 

     <footer>
          <p> Copyright &copy; onlineshope.All Right Reserved <br>
              2020-2021</p> 
          
     </footer>
     </form>      
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
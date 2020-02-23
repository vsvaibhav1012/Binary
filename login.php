<?php
session_start();
if(isset($_SESSION['uemail'])){
  header('location:login_configure.php');
}
?>
<!DOCTYPE html>
<html>
<head><title>Admin Login</title></head>
<style>

input[type=text],input[type=password],select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: DodgerBlue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: SlateBlue;
}

div.d1 {
   margin-top: auto;
  margin-bottom: auto;
  margin-right: auto;
  margin-left: auto;
  border-radius: 5px;
  background-color: #f0f8ff;
  padding: 80px;
  align-content: center;
  height: 350px;
  width: 400px;
}
h1{
  text-align: center;
  color: #00BFFF;
}
</style>
<body>
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap.min.js"></script>
<header>
            <h1 style="background-color:#f0f8ff; font-style: oblique; font-family: century gothic;" align="center"><font color="#00BFFF"> Hostel Management System</font></h1>
           
        </header>

   <nav class="navbar navbar-default">
            <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">ABC Hostel Management</a>
    </div>
    <ul class="nav navbar-nav">
                
                <li><a href="index.html" >Home</a></li>
                <li style="display: none"><a href="student_form.php" >Allocation</a></li>
                <li style="display: none"><a href="realloc.php">Reallocation</a></li>
                
                <li  ><div class="dropdown" >
            <li style="display: none" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
           <li><a href="building_report.php">Building Wise</a></li>
          <li><a href="student_report.php">Student's Wise</a></li>
          <li><a href="room_report.php">Available rooms</a></li>
          <li><a href="institute_count.php">Institute Wise</a></li>
        </ul>
      </li>
    </div>
  </div> </li>
            </nav>
<h1 style="font-style: oblique; font-family: century gothic;" align="center"><font color="#00BFFF">Admin Login </font></h1>

<div class="d1" >
  <form action="login.php" method="post">
    <label for="name">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Enter your password" required>
  
    <input type="submit" value="Submit" name="submit">
  </form>
</div>
<center>
         <footer>
            <p class="p1"><h4 style="background-color:#f0f8ff; font-style: oblique; font-family: century gothic;">© copyrights reserved by ABC Hostels Pvt. Ltd. </h4></p>            
        </footer>
      </center>
</body>
</html>
<?php
$con = mysqli_connect('localhost','root','','building_data');
if(isset($_POST["submit"])){
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $query = "SELECT * FROM admin_table WHERE email='$email' AND password='$pass'";
  $run=mysqli_query($con,$query);
  $row = mysqli_num_rows($run);
  if($row<1){
?>
  <script type="text/javascript">
    alert("Wrong Username or Password");
    </script>
  <?php 
  }
  else{
    $data = mysqli_fetch_assoc($run);
    $id = $data['email'];
    $_SESSION['uemail'] = $id;
    header('location:login_configure.php');
  }
}
?>
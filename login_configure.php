<!DOCTYPE html>
<html>
<style>
#lout
{float: right;}

	img{display: block;
  margin-left: auto;
  margin-right: auto;
  width: 30%;

  }
</style>
<head>
	<title>Admin Login</title>
</head>
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
                
                <li style="display: none;"><a href="index.html" >Home</a></li>
                <li style="display: block;"><a href="student_form.php" >Allocation</a></li>
                <li style="display: block;"><a href="realloc.php">Reallocation</a></li>
                <li style="display:none;"> <a href="login.php">Login</a></li>
                <li  ><div class="dropdown" >
            <li style="display: block;" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
       
         <li><a href="building_report.php">Building Wise</a></li>
          <li><a href="student_report.php">Student's Wise</a></li>
          <li><a href="room_report.php">Available rooms</a></li>
          <li><a href="institute_count.php">Institute Wise</a></li>
        </ul>
        </li>
        	
        		<form class="form-inline " action="login_configure.php" method="post">
		<button  style = "margin-top: -45px; margin-left:1000px;" class="btn btn-danger pull-right" type="submit" value="logout" name="logout" id="button">Log out</button>
	</form>	

      </li>
  </li>
      
    </div>
  </div> </li>
            </nav>
	
	 <h1 style=" font-style: oblique; font-family: century gothic;" align="center"><font size="8" color="#00BFFF"> Welcome admin !!</font></h1>
	 <img src="admin.png" >
          <center>
         <footer>
            <p class="p1"><h4 style="background-color:#f0f8ff; font-style: oblique; font-family: century gothic;">© copyrights reserved by ABC Hostels Pvt. Ltd. </h4></p>            
        </footer>
      </center> 
</body>
</html>

<?php
session_start();
if(isset($_SESSION['uemail'])){
	//echo $_SESSION['uemail'];
	if(isset($_POST['logout'])){

		header('location:login.php');
		session_destroy();
	}
}

else{
	header('location:login.php');
	?>
	<script type="text/javascript">
		alert("You are LogedIn");
	</script>

		<style>
			#button{
				display: none;
			}
	</style>
	<?php
}

?>
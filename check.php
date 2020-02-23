<html>
<head>
	<title></title>

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
                
                <li><a href="index.html" >Home</a></li>
                <li style="display: block"><a href="student_form.php" >Allocation</a></li>
                <li style="display: block"><a href="realloc.php">Reallocation</a></li>
                <li><a href="login.php">Login</a></li>
                <li  ><div class="dropdown" >
            <li style="display: block" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
           <li><a href="building_report.php">Building Wise</a></li>
          <li><a href="student_report.php">Student's Wise</a></li>
          <li><a href="room_report.php">Available rooms</a></li>
          <li><a href="institute_count.php">Institute Wise</a></li>
      </li>
    </div>
  </div> </li>
            </nav>
    <br><br><br><br><br><br>
    <center>
   <button><a style="text-decoration:none;" href="index.html">Return to Home</a></button>
</center>
<center>
         <footer>
            <p class="p1"><h4 style="background-color:#f0f8ff; font-style: oblique; font-family: century gothic;">© copyrights reserved by ABC Hostels Pvt. Ltd. </h4></p>            
        </footer>
      </center>
 </body>
 </html>


<?php
session_start();
	$id = $_SESSION['uid'];
	echo $id;

$selected_room=isset($_POST['room']) ? $_POST['room'] : false;
echo $selected_room;
$building=$_POST['build'];
echo "<br/>".$building;
$flooring=$_POST['floor'];
echo "<br/>".$flooring;
$con = mysqli_connect("localhost", "root", "", "building_data");
$selected=$selected_room[0];
if($selected=='b'){
	$sql="update boys_hostel set available=available-1 where room_no='$selected_room'";
	if (mysqli_query($con, $sql)) {
	    echo "Record updated successfully";
	    echo "<br>";
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	}
	echo "<br>";
	echo "your room number".$selected_room."has been booked successfully";
}else{
	$sql="update girls_hostel set available=available-1 where room_no='$selected_room'";
	if (mysqli_query($con, $sql)) {
		echo "<br>";
	    echo "Record updated successfully";
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	}
	echo "<br>";
	echo "your room number ".$selected_room." has been booked successfully";
}
    $sql="insert into allocation_data values('$id','$building','$flooring','$selected_room')";
    $run = mysqli_query($con,$sql);
	if($run){
		echo "<br>";
		echo "Successfully added";
	}
	else{
		echo "Failure";
		echo $con->error;
	}


  ?>
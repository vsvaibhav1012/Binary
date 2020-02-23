<html>

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
        </ul>
      </li>
    </div>
  </div> </li>
            </nav>
	<br><br>
	<center>
         <footer>
            <p class="p1"><h4 style="background-color:#f0f8ff; font-style: oblique; font-family: century gothic;">© copyrights reserved by ABC Hostels Pvt. Ltd. </h4></p>            
        </footer>
      </center>
</body>
</html>


<?php
	 $selected_build = isset($_POST['building']) ? $_POST['building'] : false;
$selected_floor = isset($_POST['floor']) ? $_POST['floor'] : false;
 $con = mysqli_connect("localhost", "root", "", "building_data");
 if($selected_build=='b1'|| $selected_build=='b2'){
 	echo "<form action='check.php' method='post'><label>Room No</label><select name='room'>";
 	$sql = "select room_no from boys_hostel where building_no='$selected_build' and floor_no='$selected_floor' and available>0";
 	$result = mysqli_query($con, $sql);
 	if(mysqli_num_rows($result) > 0){
	 	while($row = mysqli_fetch_array($result)){
	         echo "<option value=".$row['room_no'].">".$row['room_no']."</option>";
	 	}
	 	echo "</select>";
	 	echo "<input type='hidden' name='build' value=".$selected_build.">";
	 	echo "<input type='hidden' name='floor' value=".$selected_floor.">";
	 	echo"<input type='submit' name='submit' value='Get Selected Values' /></form>";
	}else{
		?>
		<script>
		   alert("No room Available");
		</script>
	<?php	
	}
 }else{
 	echo "<form action='check.php' method='post'><label>Room No</label><select name='room'>";
 	$sql = "select room_no from girls_hostel where building_no='$selected_build' and floor_no='$selected_floor' and available>0";
 	$result = mysqli_query($con, $sql);
 	if(mysqli_num_rows($result) > 0){
	 	while($row = mysqli_fetch_array($result)){
	         echo "<option value=".$row['room_no'].">".$row['room_no']."</option>";
	 	}
	 	echo "</select>";
	 	echo "<input type='hidden' name='build' value=".$selected_build.">";
	 	echo "<input type='hidden' name='floor' value=".$selected_floor.">";
	 	echo "<input type='submit' name='submit' value='Get Selected Values' /></form>";
	 }else{
	 	?>
	 	<script>
	 	   alert("No room available");
	 	</script>
	 <?php
	 }
 }
?>
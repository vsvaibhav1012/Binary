<html>
<head>
	<title>Hostel Report</title>
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

	<script>
	function prin(){
    document.getElementById('button1').style.display="none";
    document.getElementById('button2').style.display="none";
    window.print();
    document.getElementById('button1').style.display="block";
    
    document.getElementById('button2').style.display="block";
   } 
</script>
<button id="button2"><a  href="building_report.php">Back</a></button>
<button id="button1" value ="Print"><a alt="print screen" onclick="prin()" target="_blank" style="cursor:pointer;">PRINT</a></button>
</center>

</body>
</html>

<?php

if(isset($_POST['submit'])){
	$hostel = $_POST['hostel'];
	if($hostel=='Boys Hostel'){
		$con = mysqli_connect('localhost','root','','building_data');
		$query = "SELECT * FROM boys_hostel";
		$run = mysqli_query($con,$query);
		if($run){
			echo "<table border='2px solid black'>";
			echo "<tr>";
					echo "<th> Building No. </th>";
					echo "<th> Room Capacity </th>";
					echo "<th> Floor No. </th>";
					echo "<th> Room No. </th>";
					echo "<th> Available </th>";
			echo "</tr>";
	while($row = mysqli_fetch_array($run)){
			
			echo "<tr>";
                echo "<td>".$row['building_no']."</td>";
                echo "<td>".$row['room_capacity']."</td>";
                echo "<td>".$row['floor_no']."</td>";
                echo "<td>".$row['room_no']."</td>";
                echo "<td>".$row['available']."</td>";
            echo "</tr>";
            
        }
        echo "</table>";
		}
	}
	else if($hostel=='Girls Hostel'){
		$con = mysqli_connect('localhost','root','','building_data');
		$query = "SELECT * FROM girls_hostel";
		$run = mysqli_query($con,$query);
		if($run){
			echo "<table border='4px solid black'>";
			echo "<tr>";
					echo "<th> Building No. </th>";
					echo "<th> Room Capacity </th>";
					echo "<th> Floor No. </th>";
					echo "<th> Room No. </th>";
					echo "<th> Available </th>";
			echo "</tr>";
	while($row = mysqli_fetch_array($run)){
			
			echo "<tr>";
                echo "<td>".$row['building_no']."</td>";
                echo "<td>".$row['room_capacity']."</td>";
                echo "<td>".$row['floor_no']."</td>";
                echo "<td>".$row['room_no']."</td>";
                echo "<td>".$row['available']."</td>";
            echo "</tr>";
            
        }
        echo "</table>";
		}

	}
}
?>

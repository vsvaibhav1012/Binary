<html>
<head>
	<title></title>
<script>
     function prin(){
    document.getElementById('button1').style.display="none";
    document.getElementById('button2').style.display="none";
    window.print();
    document.getElementById('button1').style.display="block";
    
    document.getElementById('button2').style.display="block";
   } 
</script>
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
      </li>
    </div>
  </div> </li>
            </nav>
	
<br>
<button id="button2"><a  href="building_report.php">Back</a></button>
<button id="button1" value ="Print"><a alt="print screen" onclick="prin()" target="_blank" style="cursor:pointer;">PRINT</a></button>

</body>
</html>



<?php
$con = mysqli_connect('localhost','root','','building_data');
$query = "SELECT *
  		  FROM student_table JOIN allocation_data 
          ON ID = student_id";
$run = mysqli_query($con,$query);
if($run){
	echo "<table border='2px solid black'>";
			echo "<tr>";
					echo "<th> Student Id </th>";
					echo "<th> Student Name </th>";
					echo "<th> Student Email </th>";
					echo "<th> Student Institute </th>";
					echo "<th> Student Phone </th>";
					echo "<th> Student Building No. </th>";
					echo "<th> Student Floor No. </th>";
					echo "<th> Student Room No. </th>";
			echo "</tr>";
	while($row = mysqli_fetch_array($run)){
			
			echo "<tr>";
                echo "<td>".$row['student_id']."</td>";
                echo "<td>".$row['NAME']."</td>";
                echo "<td>".$row['EMAIL']."</td>";
                echo "<td>".$row['INSTITUTE']."</td>";
                echo "<td>".$row['PHONE']."</td>";
                echo "<td>".$row['building_no']."</td>";
                echo "<td>".$row['floor_no']."</td>";
                echo "<td>".$row['room_no']."</td>";
            echo "</tr>";
            
        }
        echo "</table>";
}          
else{
	$con->error;
}
?>

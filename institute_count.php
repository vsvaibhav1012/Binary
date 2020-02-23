<html>
<head>
	<title></title>

</head>
<body>
	<script>
	function prin(){
    document.getElementById('button1').style.display="none";
    window.print();
    document.getElementById('button1').style.display="block";
   } 
</script>
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
<button id="button1" value ="Print"><a alt="print screen" onclick="prin()" target="_blank" style="cursor:pointer;">PRINT</a></button>
<button style="margin-left:500px;" id="button2"><a  href="index.html">Back</a></button>

</body>
</html>
<?php

$con = mysqli_connect('localhost','root','','building_data');
$query = "SELECT COUNT(INSTITUTE),INSTITUTE
			FROM student_table GROUP BY INSTITUTE";
$run = mysqli_query($con,$query);
if($run){
	echo "<table border='2px solid black'>";
		echo "<tr>";
			echo "<th>Institue Name</th>";
			echo "<th> Number of Students for Institue </th>";
		echo "</tr>";
	while($row = mysqli_fetch_array($run)){
		
		//echo "<pre>";
		//print_r($row);
		//echo "</pre>";	
			echo "<tr>";
			echo "<td>".$row['INSTITUTE']."</td>";
			echo "<td>".$row['COUNT(INSTITUTE)']."</td>";
            echo "</tr>";
            
        }
       echo "</table>";
}			
else{
	$con->error;
}

?>


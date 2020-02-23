<html>
<head>
	<title>Building Report</title>
</head>
<style>
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; 
}

.select-selected {
  background-color: DodgerBlue;
}


.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}


.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}


.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}


.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}


.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>
}</style>
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
	<form method="post" action="building_showReport.php">
		<label><h1 style="background-color:#f0f8ff; font-style: oblique; font-family: century gothic;" align="left"><font color="#00BFFF"> Choose hostel type: </font></h1></label>&nbsp; &nbsp;  &nbsp;
		<select name="hostel" class="custom-select" style="width:200px;">
			<option>Boys Hostel</option>
			<option>Girls Hostel</option>
		</select><br>
		<button  style = "margin-top: 10px; margin-left:350px; " class="btn btn-danger " type="submit" class ="opt" value="Submit" name="submit">Submit</button>
	</form>
	<center>
         <footer>
            <p class="p1"><h4 style="background-color:#f0f8ff; font-style: oblique; font-family: century gothic;">© copyrights reserved by ABC Hostels Pvt. Ltd. </h4></p>            
        </footer>
      </center>
</body>
</html>

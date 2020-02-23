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

   
</body>
</html>

<?php
$fname = $_POST['firstname'];
$gname = $_POST['gname'];
$email = $_POST['email'];
$addrs = $_POST['raddress'];
$phone = $_POST['phone'];
$inst = $_POST['institute'];
$gender = $_POST['gender'];

$con = mysqli_connect('localhost','root','','building_data');
$query = "INSERT INTO student_table(NAME, G_NAME, EMAIL, ADDRESS, PHONE, INSTITUTE, GENDER) VALUES ('$fname','$gname','$email','$addrs','$phone','$inst','$gender')";
$run = mysqli_query($con,$query);
if($run){
    if ($gender=='male') {
      ?>
      <form method ="post" action="room.php">
         <label>Building No.</label>
         <select name="building">
            
            <?php
               $res = mysqli_query($con,"select distinct(building_no) from boys_hostel");
               while($row=mysqli_fetch_array($res)){
                  ?>
                  <option>
                     <?php echo $row['building_no'] ?>
                  </option>
                  <?php
               }
            ?>
         </select><br>
         <lable>Floor No.</label>
         <select name="floor">
            
            <?php
               $res = mysqli_query($con,"select distinct(floor_no) from boys_hostel");
               while($row=mysqli_fetch_array($res)){
                  ?>
                  <option>
                     <?php echo $row['floor_no'] ?>
                  </option>
                  <?php
               }
            ?>
         </select>
         <input type="submit" name="submit" value="Get Selected Options"/>
      </form>   
<?php
   }  
   else{
?>      <form method ="post" action="room.php">
         <label>Building No.</label>
         <select name="building">
            
            <?php
               $res = mysqli_query($con,"select distinct(building_no) from girls_hostel");
               while($row=mysqli_fetch_array($res)){
                  ?>
                  <option>
                     <?php echo $row['building_no'] ?>
                  </option>
                  <?php
               }
            ?>
         </select><br>
         <lable>Floor No.</label>
         <select name="floor">
            
            <?php
               $res = mysqli_query($con,"select distinct(floor_no) from girls_hostel");
               while($row=mysqli_fetch_array($res)){
                  ?>
                  <option>
                     <?php echo $row['floor_no'] ?>
                  </option>
                  <?php
               }
            ?>
         </select>
         <input type="submit" name="submit" value="Get Selected Options"/>
      </form>
           <?php
    }
}
$id = "SELECT ID from student_table where PHONE='$phone'";
$run1 = mysqli_query($con,$id);
if($run1){
   while($row = mysqli_fetch_array($run1)){
      $id_send = $row['ID'];
   }
   session_start();
   $_SESSION['uid'] = $id_send;
}
?>

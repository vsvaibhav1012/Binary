<?php
if(isset($_POST['submit'])){
$uid = $_POST["sid"];
echo $uid;
}
$con = mysqli_connect('localhost','root','','building_data');
$query = "SELECT * from allocation_data where student_id='$uid'";
$run = mysqli_query($con,$query);
$row1 = mysqli_num_rows($run);
if($row1>=1){
	while($row = mysqli_fetch_array($run)){
		$room = $row['room_no'];
		//echo "<pre>";
		//print_r($row);
		//echo "</pre>";
	}
	$building = $room[0];
	if($building == 'b'){
		$query1 = "UPDATE boys_hostel set available = available+1 WHERE room_no = '$room'";
		$query2 = "DELETE from allocation_data WHERE student_id = '$uid'";
		$query3 = "DELETE from student_table where ID = '$uid'";
		$run1 = mysqli_query($con,$query1);
		$run2 = mysqli_query($con,$query2);
		$run3 = mysqli_query($con,$query3);
		header('location:student_form.php');
	}
	else{
		$query1 = "UPDATE girls_hostel set available = available+1 WHERE room_no = '$room'";
		$query2 = "DELETE from allocation_data WHERE student_id = '$uid'";
		$query3 = "DELETE from student_table where ID = '$uid'";
		$run1 = mysqli_query($con,$query1);
		$run2 = mysqli_query($con,$query2);
		$run3 = mysqli_query($con,$query3);
		header('location:student_form.php');

	}
}
else{
	header('location:realloc.php');
	?>
<script>
	alert("No such student");
	</script>
	<?php
}

?>
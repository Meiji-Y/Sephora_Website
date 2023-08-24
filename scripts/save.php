 <?php
include 'database.php';
if(count($_POST)>0){
	if($_POST['type']==1){
        $d_ssn=$_POST['d_ssn'];
		$d_name=$_POST['d_name'];
		$d_surname=$_POST['d_surname'];
		$d_age=$_POST['d_age'];
		$d_birth_date=$_POST['d_birth_date'];
		$sql = "INSERT INTO doctor_information (d_ssn, d_name, d_surname, d_age, d_birth_date) VALUES ('$d_ssn', '$d_name', '$d_surname', '$d_age', '$d_birth_date')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
        $d_ssn=$_POST['d_ssn'];
		$d_name=$_POST['d_name'];
		$d_surname=$_POST['d_surname'];
		$d_age=$_POST['d_age'];
		$d_birth_date=$_POST['d_birth_date'];
		$sql = "UPDATE 'doctor_information' SET `d_name`='$d_name',`d_surname`='$d_surname',`d_age`='$d_age',`d_birth_date`='$d_birthdate' WHERE d_ssn=$d_ssn";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['d_ssn'];
		$sql = "DELETE FROM 'doctor_information' WHERE d_ssn=$d_ssn ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['d_ssn'];
		$sql = "DELETE FROM 'doctor_information' WHERE d_ssn in ($d_ssn)";
		if (mysqli_query($conn, $sql)) {
			echo $d_ssn;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>
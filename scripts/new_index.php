<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Data</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="ajax/ajax.js"></script>
</head>
<body>
    <div class="container">
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Hospital Management <b> System</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Add Doctor</span></a>
						<a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons"></i> <span>Delete</span></a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>SSN</th>
                        <th>NAME</th>
                        <th>SURNAME</th>
						<th>AGE</th>
                        <th>B.DATE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($conn,"SELECT * FROM doctor_information");
					
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["d_ssn"]; ?>">
				<td>
							<span class="custom-checkbox">
								<input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["d_ssn"]; ?>">
								<label for="checkbox2"></label>
							</span>
						</td>
                        <td><?php echo $row["d_ssn"]; ?></td>
					<td><?php echo $row["d_name"]; ?></td>
					<td><?php echo $row["d_surname"]; ?></td>
					<td><?php echo $row["d_age"]; ?></td>
					<td><?php echo $row["d_birth_date"]; ?></td>
					<td>
						<a href="#editEmployeeModal" class="edit" data-toggle="modal">
							<i class="material-icons update" data-toggle="tooltip" 
							data-id="<?php echo $row["d_ssn"]; ?>"
							data-name="<?php echo $row["d_name"]; ?>"
							data-email="<?php echo $row["d_surname"]; ?>"
							data-phone="<?php echo $row["d_age"]; ?>"
							data-city="<?php echo $row["d_birth_date"]; ?>"
							title="Edit"></i>
						</a>
						<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["d_ssn"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" 
						 title="Delete"></i></a>
                    </td>
				</tr>
				<?php
				
				}
				?>
				</tbody>
			</table>
			
        </div>
    </div>
	<!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="user_form" method="POST">
					<div class="modal-header">						
						<h4 class="modal-title">Add Doctor</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>SSN</label>
							<input type="number" id="d_ssn" name="d_ssn" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Name</label>
							<input type="text" id="d_name" name="d_name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Surname</label>
							<input type="text" id="d_surname" name="d_surname" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Age</label>
							<input type="number" id="d_age" name="d_age" class="form-control" required>
						</div>	
                        <div class="form-group">
							<label>Birth Date</label>
							<input type="text" id="d_birth_date" name="d_birth_date" class="form-control" required>
						</div>				
					</div>
					<div class="modal-footer">
					    <input type="hidden" value="1" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-success" id="btn-add">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="update_form">
					<div class="modal-header">						
						<h4 class="modal-title">Edit Doctor</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="d_ssn" name="d_ssn" class="form-control" required>					
						<div class="form-group">
							<label>SSN</label>
							<input type="number" id="d_ssn" name="d_ssn" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Name</label>
							<input type="text" id="d_name" name="d_name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Surname</label>
							<input type="text" id="d_surname" name="d_surname" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Age</label>
							<input type="number" id="d_age" name="d_age" class="form-control" required>
						</div>	
                        <div class="form-group">
							<label>Birth Date</label>
							<input type="text" id="d_birth_date" name="d_birth_date" class="form-control" required>
						</div>				
					</div>
					<div class="modal-footer">
					<input type="hidden" value="2" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-info" id="update">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
						
					<div class="modal-header">						
						<h4 class="modal-title">Delete Doctor</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_d" name="id" class="form-control">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-danger" id="delete">Delete</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>  
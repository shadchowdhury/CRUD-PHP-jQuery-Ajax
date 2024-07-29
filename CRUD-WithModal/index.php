<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.css" />
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4 mt-5 border border-success p-5">
				<div class="text-center">
					<h2 class="text-success">Add New User</h2>
				</div>
				<div id="output">

				</div>

				<div class="form-group mt-3">
					<input type="text" id="fName" class="form-control" placeholder="Enter Your Full Name">
				</div>
				<div class="form-group mt-3">
					<input type="text" id="uName" class="form-control" placeholder="Enter Your User Name">
				</div>
				<div class="form-group mt-3">
					<input type="text" id="email" class="form-control" placeholder="Enter your email address">
				</div>
				<div class="form-group mt-3">
					<select id="status" class="form-control">
						<option>-----Select Status------</option>
						<option value="1">Active</option>
						<option value="2">Inactive</option>
					</select>
				</div>

				<div class="form-group mt-3">
					<input type="hidden" id="id" class="form-control" placeholder="">
				</div>

				<input type="button" id="submit" value="Save" class="btn btn-success form-control mt-3">
			</div>

			<div class="col-md-8 tbl mt-5">

			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
					<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group mt-3">
						<input type="text" class="fName form-control" placeholder="Enter Your Full Name">
					</div>
					<div class="form-group mt-3">
						<input type="text" class="uName form-control" placeholder="Enter Your User Name">
					</div>
					<div class="form-group mt-3">
						<input type="text" class="email form-control" placeholder="Enter your email address">
					</div>
					<div class="form-group mt-3">
						<select class="status form-control">
							<option value="0">-----Select Status------</option>
							<option value="1">Active</option>
							<option value="2">Inactive</option>
						</select>
					</div>

					<div class="form-group mt-3">
						<input type="hidden" class="id form-control" placeholder="">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

					<button type="button" id="update" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
					<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Are You Sure Want to Delete this User
				</div>
				<div class="modal-footer">

					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

					<button type="button" id="modalDelete" value="" class="btn btn-danger">Yes</button>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<table id="myTable" class="display">
					<thead>
						<tr>
							<th>Column 1</th>
							<th>Column 2</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Row 1 Data 1</td>
							<td>Row 1 Data 2</td>
						</tr>
						<tr>
							<td>Row 2 Data 1</td>
							<td>Row 2 Data 2</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/2.1.2/js/dataTables.js"></script>
	<script src="app.js"></script>
	<script>
		$(document).ready(function() {
			$('#myTable').DataTable();
		});
	</script>
</body>

</html>
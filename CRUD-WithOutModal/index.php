<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
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
				<input type="button" id="update" value="Update" class="btn btn-info form-control mt-3" style="display: none;">
			</div>

			<div class="col-md-8 tbl mt-5">

			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="app.js"></script>
</body>

</html>
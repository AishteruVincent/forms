<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Archive</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Employee Table</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<input type="button" onclick="location.href='index.php';" value="Back" />
            <div id="alert" class="alert alert-info text-center" style="margin-top:20px; display:none;">
            	<button class="close"><span aria-hidden="true">&times;</span></button>
                <span id="alert_message"></span>
            </div>
			<table class="table table-bordered table-striped" style="margin-top:20px;">
				<thead>
					<th>Employee Number</th>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Age</th>
					<th>Sex</th>
					<th>Contact Number</th>
					<th>Full Address</th>
					<th>Action</th>
				</thead>
				<tbody id="tbody2"></tbody>
			</table>
		</div>
	</div>
</div>

<!-- Modals -->
<?php include('modal.html'); ?>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="app2.js"></script>
</body>
</html>
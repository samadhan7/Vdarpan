<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Box with Button</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container mt-5">
		<div class="row">
			<div class="col-md-10">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Colleges</h5>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>URL</th>
									<th>Web URL</th>
									<th>City</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
									// Code for fetching and displaying the data goes here
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Button to show code output -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#code-output">Show Code Output</button>

	<!-- Modal to display code output -->
	<div class="modal fade" id="code-output" tabindex="-1" role="dialog" aria-labelledby="code-output-label" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="code-output-label">Code Output</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<pre>
						<?php
							// Code for displaying the given code output goes here
							echo htmlspecialchars('
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Colleges</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>URL</th>
                                <th>Web URL</th>
                                <th>City</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                // Code for fetching and displaying the data goes here
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
');
						?>
					</pre>
				</div>
			</div>
		</div>
	</div>

</body>
</html>

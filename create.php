<?php 
	include 'dbh.php';
	include 'inc/header.php';
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<article id="articles">
					<h2 class="text-center">Student Information Form</h2>
					<form action="insert.php" role="form" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<input name="roll" type="text" class="form-control" placeholder="Student Roll">
						</div>
						<div class="form-group">
							<input name="name" type="text" class="form-control" placeholder="Student Name">
						</div>
						<div class="form-group">
							<input name="class" type="text" class="form-control" placeholder="Student Class">
						</div>
						<div class="form-group">
							<input name="section" type="text" class="form-control" placeholder="Student Section">
						</div>
						<div class="form-group">
							<input name="age" type="text" class="form-control" placeholder="Student Age">
						</div>
						<div class="form-group">
							<input type="file" name="fileToUpload" id="fileToUpload">
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-info">
						</div>
					</form>
				</article>				
			</div>
		</div>
	</div>
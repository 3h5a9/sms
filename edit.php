<?php 
	include 'dbh.php';
	include 'inc/header.php';

	$id = $_GET['id'];
	$sql = " SELECT * FROM student WHERE id='$id' ";
	$result = $conn->query($sql); 

	foreach ($result as $value) {
		$roll = $value['sroll'];
		$name = $value['sname'];
		$class = $value['sclass'];
		$section = $value['ssection'];
		$age = $value['sage'];
		$image = $value['image'];
	}

?>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<article id="articles">
					<h2 class="text-center">Edit Student Information</h2>
					<form action="update.php" role="form" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="uid" value="<?php echo $id; ?>">
						<div class="form-group">
							<input name="roll" type="text" class="form-control" placeholder="Student Roll" value="<?php echo $roll; ?>">
						</div>
						<div class="form-group">
							<input name="name" type="text" class="form-control" placeholder="Student Name" value="<?php echo $name; ?>">
						</div>
						<div class="form-group">
							<input name="class" type="text" class="form-control" placeholder="Student Class" value="<?php echo $class; ?>">
						</div>
						<div class="form-group">
							<input name="section" type="text" class="form-control" placeholder="Student Section" value="<?php echo $section; ?>">
						</div>
						<div class="form-group">
							<input name="age" type="text" class="form-control" placeholder="Student Age" value="<?php echo $age; ?>">
						</div>
						<div class="form-group">
				            	<input type="file" name="fileToUpload" id="fileToUpload" >

				            	<input type="text" name="fileToUpload" class="form-control" readonly value="<?php echo $image; ?>">
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-info" value="update">
						</div>
					</form>
				</article>				
			</div>
		</div>
	</div>


<?php 
	include 'inc/footer.php';
<?php 
    include 'dbh.php';
    include 'inc/header.php';

    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
?>


    <div class="container">
  		<div class="row">
  			<article id="articles">
  				<table class="table table-condensed table-bordered table-striped">
  					<tr>
  						<th width="10%" class="text-center">Roll</th>
  						<th width="30%" class="text-center">Name</th>
  						<th width="10%" class="text-center">Class</th>
  						<th width="10%" class="text-center">Section</th>
  						<th width="10%" class="text-center">Age</th>
  						<th width="15%" class="text-center">Image</th>
  						<th width="15%" class="text-center">Action</th>
  					</tr>

                    <?php 
                        if ($row = mysqli_num_rows($result)) {
                            while($row = $result->fetch_assoc()) { ?>

  					<tr>
  						<td class="text-center"><?php echo $row['sroll']; ?></td>
  						<td class="text-center"><?php echo $row['sname']; ?></td>
  						<td class="text-center"><?php echo $row['sclass']; ?></td>
  						<td class="text-center"><?php echo $row['ssection']; ?></td>
  						<td class="text-center"><?php echo $row['sage']; ?></td>
  						<td class="text-center">
                            <img src="uploads/<?php echo $row['image']; ?>" alt="">
                        </td>

  						<td class="text-center">
  							<table align="center">
  								<tr>
  									<td style="padding-right: 5px;">
                                        <a class="btn btn-primary btn-sm" href="edit.php?id=<?php echo $row['id'];?>">EDIT</a>
                                    </td>
  									<td>
                                        <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $row['id'];?>">DELETE</a>
                                    </td>
  								</tr>
  							</table>
  						</td>
  					</tr>

                    <?php    }
                        }
                    ?> 
  				</table>
  			</article>
  		</div>
    </div><!-- /.container -->


<?php include 'inc/footer.php' ?>
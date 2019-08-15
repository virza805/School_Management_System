<?php 
	include "database.php";
	session_start();
 ?>
<?php include "admin_header.php"; ?>

<!-- Slider images Off -->

<div class="container_full d_back" style ='margin-top: 0px;'>

	<div class="container text-center">
		<div class="row" id="vir">
	<!-- Side bar Section On -->
	<?php include "sidebar.php"; ?>		
			
	<!-- Side bar Section end-->	
			<div class="col-md-9">
				<h2>Welcome Admin</h2>
				<div class="row">
					<div class="col-5 fix"> 
						<h4><b>Add Staff/Teacher Details</b></h4>
					
						 <?php
							require_once('database.php');

							if(isset($_POST['submit'])){

							$tname = $_POST['tname'];
							
							$qual = $_POST['qual'];
							$sal = $_POST['sal'];
							$date = $_POST['date'];
							
							

							$result = mysqli_query($db,"INSERT INTO staff (TNAME,TPASS,QUAL,SAL,DATE) VALUES('$tname',1234,'$qual','$sal','$date')");
							if($result){
								echo "<p style='color: green'>Your Teacher Add Success..</p>";
							}else{
							echo "<p style='color:red'>Your Teacher Add Failed Some problem</p>";
							}

							}

						 ?>

						<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<br>
							<input type="text" name="tname" placeholder="Staff Name" required class="input form-control"> <br>
							
							<input type="text" name="qual" placeholder="Qualification" required class="input form-control"> <br>

							<input type="text" name="sal" placeholder="Salary" required class="input form-control"> <br>

							<input type="date" name="date"  required class="input form-control"> <br>
							<button type="submit" class="btn btn-success" name="submit"> Add Staff</button>
						</form>
					</div>
					<div class="col-6 text-center">
						<h4><b>Look Staf/Teacher List</b></h4>
						<?php 
							if (isset($_GET["mes"])){
								echo "<h5 class='text-danger'>{$_GET["mes"]}</h5>";
							}
						 ?>
						<table border="1px">
							<tr>
								<th>S.No</th>
								<th>Name</th>
								<th>Qualification</th>
								<th>Salary</th>
								<th>Joyen</th>
								<th> Action </th>
							</tr>
							<?php 
								$s="select * from staff";
								$res=$db->query($s);
								if($res->num_rows>0){
									$i=0;
									while($r=$res->fetch_assoc()){
										$i++;
										echo "
										<tr>
											<td>{$i}</td>
											<td>{$r["TNAME"]}</td>
											<td>{$r["QUAL"]}</td>
											<td>{$r["SAL"]}</td>
											<td>{$r["DATE"]}</td>
											
											<td><a href='staff_delete.php?id={$r["TID"]}' class='btn btn-danger'>Delete</a></td>
										</tr>
										";

									}
								}
							 ?>
						</table>
					</div>
				</div>
				
			</div>
		</div>
		
	</div>
</div>

<!-- Footer Section On -->
<?php include "footer.php"; ?>
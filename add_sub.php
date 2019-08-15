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
						<h4><b>Add Subject Details</b></h4>
					
						 <?php
							require_once('database.php');

							if(isset($_POST['submit'])){

							$sname = $_POST['sname'];
							
							
							

							$result = mysqli_query($db,"INSERT INTO sub (SNAME) VALUES('$sname')");
							if($result){
								echo "<p style='color: green'>Your Subject Insert Success..</p>";
							}else{
							echo "<p style='color:red'>Your Subject Insert Failed Some problem</p>";
							}

							}

						 ?>

						<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<br>
							<input type="text" name="sname" placeholder="Which Subject Add ?" required class="input form-control"> <br>
							
							<button type="submit" class="btn btn-success" name="submit">Add Subject</button>
						</form>
					</div>
					<div class="col-6 text-center">
						<h4><b>Subject Details</b></h4>
						<?php 
							if (isset($_GET["mes"])){
								echo "<h5 class='text-danger'>{$_GET["mes"]}</h5>";
							}
						 ?>
						<table border="1px">
							<tr>
								<th>S.No</th>
								<th>Subject</th>
								
								<th> Action </th>
							</tr>
							<?php 
								$s="select * from sub";
								$res=$db->query($s);
								if($res->num_rows>0){
									$i=0;
									while($r=$res->fetch_assoc()){
										$i++;
										echo "
										<tr>
											<td>{$i}</td>
											<td>{$r["SNAME"]}</td>
											
											<td><a href='sub_delete.php?id={$r["SID"]}' class='btn btn-danger'>Delete</a></td>
										</tr>
										";

									}
								}else{
									echo "No Record Found";
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

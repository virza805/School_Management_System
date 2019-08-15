<?php 
	include "database.php"; 
	session_start();
	if(!isset($_SESSION["TID"])){
		echo "<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
	}
	$sql="SELECT * FROM hclass WHERE TID={$_SESSION["TID"]}";
	$res=$db->query($sql);

	if($res->num_rows>0){
		$row=$res->fetch_assoc();
	}
 ?> 
<?php include "teacher_header.php"; ?>
<!--end menu Section -->
<div class="container_full slid_img">
	<div class="container">
		<h1 class="text text-center">Wellcome To School Management System <br> For Teacher</h1>
	</div>
</div>
<!-- Banar Section Off loge_bk bg-light  d_back -->

<div class="container_full  d_back " style ='margin-top: 0px;'>

	<div class="container text-center">
		<div class="row" id="vir">
	<!-- Side bar Section On -->
	<?php include "tsidebar.php"; ?>		
			
	<!-- Side bar Section end-->	
			<div class="col-md-10">
				<h2 class="text-light">Welcome <?php echo $_SESSION["TNAME"]; ?> </h2>
				<div class="row">
					<div class="col-md-12 fix"> 
						<h4><b class="text-info">Teacher View Mark</b></h4>
						
						<form  role="form" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>"><br>
							
							<input type="text" name="rno" placeholder="Enter Roll No" required class="input form-control"><br>
							
							
							<button type="submit" class="btn btn-success" name="view">View Details </button> <br><br>
						</form>  <br>
						

						<?php if(isset($_POST["view"])){
							echo "<h2 class='text-success'>Mark Sheet</h2><br>";
							$sql="select * from mark where REGNO='{$_POST["rno"]}'";
							$re=$db->query($sql);
							if ($re->num_rows>0) {
								echo '<table border="1px" class="form-control m-4 p-5" >
									<tr>
										<th class="p-2">S.No</th> 
										<th class="p-2">Reg.No</th>
										<th class="p-2">Class</th>
										<th class="p-2">Term</th>
										<th class="p-2">Subject</th>
										<th class="p-2">Mark</th>
									</tr>
								';
								$i=0;
								while ($r=$re->fetch_assoc()) {
									$i++;
									echo "<tr>
										<td>{$i}</td>
										<td>{$r["REGNO"]}</td>
										<td>{$r["CLASS"]}</td>
										<td class='p-2'>{$r["TERM"]}</td>
										<td class='p-2'>{$r["SUB"]}</td>
										<td>{$r["MARK"]}</td>
									</tr>";
								}
							}else{
								echo "No Record Found";
							} echo "</table>";
						} ?>
								
					</div>
				</div>
				
			</div>
		</div>
		
	</div>
</div>

<!-- Footer Section On -->
<?php include "footer.php"; ?>
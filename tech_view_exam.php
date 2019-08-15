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
						<h4><b class="text-info">Teacher View Details</b></h4>
						
						  
						<form enctype="multipart/form-data" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<br>
							
							<select type="text" name="edate" placeholder="Exam Date" required class="input form-control"> <br>
							<?php  
							$sl="select * from exam ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Exam Date</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["EDATE"]}'>{$ro["EDATE"]}</option>";
								}
							}

							 ?>
							</select><br>
							<select type="text" name="cla" required class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(CNAME) from class ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Class</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["CNAME"]}'>{$ro["CNAME"]}</option>";
								}
							}

							 ?>
							 </select> <br>
							
							<button type="submit" class="btn btn-success" name="viewt">View Details </button> <br><br>
						</form>  <br>
						
						<?php
							require_once('database.php');

							if(isset($_POST['viewt'])){
								echo "<h4>Exam Time Table</h4><br>";
								$sql="select * from exam where EDATE='{$_POST["edate"]}' and CLASS='{$_POST["cla"]}' ";
								$re=$db->query($sql);
								if($re->num_rows>0){
									echo '
									<table border="1px" class="form-control" >
										<tr>
											<th>S.No</th>
											<th>Date</th>
											<th>Class</th>
											<th>Subject</th>
											<th>Exam Name</th>
											<th>Exam Type</th>
											<th>Session</th>
										</tr>
										';
										$i=0;
									while($r=$re->fetch_assoc()){
										$i++;
										echo "
											<tr>
												<td>{$i}</td>
												<td>{$r["EDATE"]}</td>
												<td>{$r["CLASS"]}</td>
												<td class='p-2'>{$r["SUB"]}</td>
												<td>{$r["ENAME"]}</td>
												<td>{$r["ETYPE"]}</td>
												<td>{$r["SESSION"]}</td>
											</tr>
										";
									}
									
									
								}
							}else{
								echo "No Record Found";
							}echo "</table>";
							
							

						 ?>

								
					</div>
				</div>
				
			</div>
		</div>
		
	</div>
</div>

<!-- Footer Section On -->
<?php include "footer.php"; ?>
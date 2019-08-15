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
<!-- Banar Section Off loge_bk bg-light -->

<div class="container_full loge_bk " style ='margin-top: 0px;'>

	<div class="container text-center">
		<div class="row" id="vir">
	<!-- Side bar Section On -->
	<?php include "tsidebar.php"; ?>		
			
	<!-- Side bar Section end-->	
			<div class="col-md-9">
				<h2 class="text-light">Welcome To Teacher</h2>
				<div class="row">
					<div class="col-4 fix"> 
						<h4><b class="text-info">Add Handle Class</b></h4>
					
						
						  <?php
							require_once('database.php');

							if(isset($_POST['submit'])){

							
							$sec = $_POST['sec'];
							$cla = $_POST['cla'];
							$sub = $_POST['sub'];
							$time = $_POST['time'];
							
							$result = mysqli_query($db,"INSERT INTO hclass (TID,CLA,SEC,SUB,HCTIME) VALUES('{$_SESSION["TID"]}','$cla','$sec','$sub','$time')");
							if($result){
								echo "<h4 style='color: green'>Exam Date Add Success..</h4>";
							}else{
							echo "<h4 style='color:red'>Exam Date Add Failed Some problem</h4>";
							}

							}

						 ?>

						<form enctype="multipart/form-data" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<br>
							<input type="text" name="sec" placeholder="Session" required class="input form-control"><br>

							<select type="text" name="cla" placeholder="Class" required class="input form-control"> <br>
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
							</select><br>
							<select type="text" name="sub" placeholder="Subject" required class="input form-control"> <br>
							<?php 
							$s="select * from sub";
							$re=$db->query($s);
							if($re->num_rows>0){
								echo "<option value=''>Subject</option>";
								while($r=$re->fetch_assoc()){
									echo "<option value='{$r["SNAME"]}'>{$r["SNAME"]}</option>";
								}
							}

							 ?>
							 </select><br>
							 <input type="text" name="time" placeholder="Start Time To End Time" required class="input form-control"><br>
							 
							<button type="submit" class="btn btn-success" name="submit"> Add Info</button> <br><br>
						</form>
						
						<br>
					</div>
					<div class="col-8 text-center rboxl">
						<h4><b class="text-info text-center border-b ">Handle Class Details</b></h4>
						<?php 
							if (isset($_GET["mes"])){
								echo "<h5 class='text-danger'>{$_GET["mes"]}</h5>";
							}
						 ?>
						<table border="1px" class="bg-light m-5 form-control">
							<tr>
								<th>S.No</th>
								<th>Class Name</th>
								
								<th>Section</th>
								<th>Subject</th>
								<th class="p-2">Time</th>
								<th> Action </th>
							</tr>
							<?php 
								$s="select * from hclass";
								$res=$db->query($s);
								if($res->num_rows>0){
									$i=0;
									while($r=$res->fetch_assoc()){
										$i++;
										echo "
										<tr>
											<td>{$i}</td>
											<td>{$r["CLA"]}</td>
											<td>{$r["SEC"]}</td>
											<td class='p-2'>{$r["SUB"]}</td>
											<td class='p-2'>{$r["HCTIME"]}</td>
											
											<td class='p-2'><a href='handle_delete.php?id={$r["HID"]}' class='btn btn-danger'>Delete</a></td>
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
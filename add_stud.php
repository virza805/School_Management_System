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
<!-- Banar Section Off loge_bk bg-light d_back -->

<div class="container_full d_back " style ='margin-top: 0px;'>

	<div class="container text-center">
		<div class="row" id="vir">
	<!-- Side bar Section On -->
	<?php include "tsidebar.php"; ?>		
			
	<!-- Side bar Section end-->	
			<div class="col-md-9">
				<h2 class="text-light">Welcome <?php echo $_SESSION["TNAME"]; ?> </h2>
				<div class="row">
					<div class="col-6 fix"> 
						<h4><b class="text-info">Add Student Details</b></h4>
					
						
						  <?php
							require_once('database.php');

							if(isset($_POST['submit'])){
								$target="student/";
								$target_file=$target.basename($_FILES["img"] ["name"]);

								if(move_uploaded_file($_FILES["img"] ['tmp_name'] , $target_file)){

									$rno = $_POST['rno'];
									$name = $_POST['name'];
									$fname = $_POST['fname'];
									$gen = $_POST['gen'];
									$edate = $_POST['edate'];
									$pho = $_POST['pho'];
									$email = $_POST['email'];
									$addr = $_POST['addr'];
									$cla = $_POST['cla'];
									$sec = $_POST['sec'];
									
							$result = mysqli_query($db,"INSERT INTO student (RNO,NAME,FNAME,DOB,GEN,PHO,MAIL,ADDR,SCLASS,SSEC,SIMG,TID) VALUES('$rno','$name','$fname','$edate','$gen','$pho','$email','$addr','$cla','$sec','$target_file','{$_SESSION["TID"]}')");
							if($result){
								echo "<h4 style='color: green'>Student Add Success..</h4>";
							}else{
							echo "<h4 style='color:red'>Student Add Failed Some problem</h4>";
							}

								}
							
							}

						 ?>

						<form enctype="multipart/form-data" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<br>
							<label class="text-info">ID</label><br>
							<?php
								$no="S101";
								$sql="select * from student order by ID desc limit 1"; 
								$res=$db->query($sql);
								if($res->num_rows > 0){
									$row1=$res->fetch_assoc();
									$no=substr($row1["RNO"],1,strlen($row1["RNO"]));
									$no++;
									$no="s".$no;
								}
							 ?>

							<input type="text" name="rno" readonly required class="input form-control" value="<?php echo $no; ?>" ><br>

							<input type="text" name="name" placeholder="Student Name" required class="input form-control"><br>
							<input type="text" name="fname" placeholder="Father Name" required class="input form-control"><br>
							<label class="text-info">Date of Birth</label><br>
							<input type="date" name="edate" required class="input form-control"><br>
							<select name="gen" required class="input form-control">
								<option value="No_Select">Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Other">Other</option>
							</select>
							<br>
							
							 <input type="text" name="pho" placeholder="Phone No" required class="input form-control"><br>

					</div>
					<div class="col-6 text-center rboxl">
						<h4><b class="text-info text-center border-b ">Handle Class Details</b></h4>
						<?php 
							if (isset($_GET["mes"])){
								echo "<h5 class='text-danger'>{$_GET["mes"]}</h5>";
							}
						 ?>
						 <br>
						 <input type="email" name="email" placeholder="Parent's Email" required class="input form-control"><br>
							<input type="text" name="addr" placeholder="Address" required class="input form-control"><br>

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
							<select type="text" name="sec" required class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(CSEC) from class ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Section</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["CSEC"]}'>{$ro["CSEC"]}</option>";
								}
							}

							 ?>
							 </select> <br>
							 <label class="text-info">Input Student Image</label><br>
							<input type="file" name="img" required class="input form-control"> <br>
							 
							<button type="submit" class="btn btn-success" name="submit"> Add Info</button> <br><br>
						</form>
						
						<br>
								
					</div>
				</div>
				
			</div>
		</div>
		
	</div>
</div>

<!-- Footer Section On -->
<?php include "footer.php"; ?>
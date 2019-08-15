<?php 
	include "database.php";
	session_start();

	$sql="SELECT * FROM staff WHERE TID={$_SESSION["TID"]}";
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
						<h4><b class="text-info">Edit Profile Info</b></h4>
					
						 <?php
							require_once('database.php');

							if(isset($_POST['submit'])){
								$target="staff/";
								$target_file=$target.basename($_FILES["img"] ["name"]);

								if(move_uploaded_file($_FILES["img"] ['tmp_name'] , $target_file)){
									$sql="update staff set PNO='{$_POST["pno"]}',MAIL='{$_POST["mail"]}',PADDR='{$_POST["addr"]}',IMG='{$target_file}' where TID={$_SESSION["TID"]}";
									$db->query($sql);
									echo "<h4 class='btn btn-success'>Insert Success..</h4>";
								}
							}

						 ?>

						<form enctype="multipart/form-data" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<br>
							<input type="text" name="pno" placeholder="Phone No" required class="input form-control"> <br>
							<input type="email" name="mail" placeholder="E-Mail" required class="input form-control"> <br>
							
							<textarea rows="5" type="text" name="addr" placeholder="Type your Address" required class="input form-control"></textarea><br>
							<label class="text-info">Input your Image</label><br>
							<input type="file" name="img" required class="input form-control"> <br>

							<button type="submit" class="btn btn-success" name="submit">Add Info</button>
						</form>
						<br>
					</div>
					<div class="col-8 text-center rboxl">
						<h4><b class="text-info text-center border-b ">Profil Details</b></h4>

						<table border="1px" class="bg-light ml-4 m-2 p-4 form-control ">
							<tr>
								<th class="p-2"><b><?php echo $row["TNAME"] ?></b></th>
								<td class="p-2"><img colspan="2" src="<?php echo $row['IMG'] ?>" height="150" width="150" alt="Upload Pending"></td>
								
								
							</tr>
							<tr >
								<th class="p-2">Joyn Date</th>
								<td class="p-2"><?php echo $row["DATE"] ?></td>
							</tr>
							<tr>
								<th class="p-2">Qualification</th>
								<td class="p-2"><?php echo $row["QUAL"] ?></td>
							</tr>
							<tr>
								<th class="p-2">Salary</th>
								<td class="p-2"><?php echo $row["SAL"] ?></td>
							</tr>
							<tr>
								<th class="p-2">Phone No</th>
								<td class="p-2"><?php echo $row["PNO"] ?></td>
								
							</tr>
							<tr>
								<th class="p-2">E-Mail</th>
								<td class="p-2"><?php echo $row["MAIL"] ?></td>
								
							</tr>
							<tr>
								<th class="p-2">Address</th>
								<td class="p-2"><?php echo $row["PADDR"] ?></td>
								
							</tr>
							
							
						</table>
					</div>
				</div>
				
			</div>
		</div>
		
	</div>
</div>

<!-- Footer Section On -->
<?php include "footer.php"; ?>
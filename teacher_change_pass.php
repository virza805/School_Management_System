<?php 
	include "database.php";
	session_start();

	if (!isset($_SESSION["TID"])) {
		echo "<script>.window.open('teacher_home.php?mes=Access Denied...','_self');</script>";
	}
	$sql="SELECT * FROM staff WHERE TID={$_SESSION["TID"]}";
	$res=$db->query($sql);

	if ($res->num_rows>0) {
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
				<h2 class="text-info">Welcome  <?php echo $_SESSION["TNAME"]; ?> </h2>
				<div class="">
					<h2 class="heading"> Teacher Change Password </h2>
		<div class="box">

			<?php 

			if (isset($_POST["submit"])) {
				$sql="select * from staff where TPASS='{$_POST["opass"]}' and TID='{$_SESSION["TID"]}' ";

				$res=$db->query($sql);
				if($res->num_rows>0){
					if($_POST["npass"]==$_POST["cpass"]){
						$s="update staff SET TPASS='{$_POST["npass"]}' where TID='{$_SESSION["TID"]}' ";
						$db->query($s);
						echo "<h4 class='btn btn-success'>Password Changed</h4>";
					}else{
						echo "<h4 class='btn btn-danger'>Password Mismatch</h4>";
					}
				}else{
						echo "<h4 class='btn btn-danger'>Invalid Password</h4>";
					}
			}
			

			 ?>


			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<br>
				<input type="text" name="opass" placeholder="Old Password" required class="input form-control"> <br>
				
				<input type="text" name="npass" placeholder="New Password" required class="input form-control"> <br>
				
				<input type="text" name="cpass" placeholder="Confirm Password" required class="input form-control"> <br>

				<button type="submit" class="btn btn-success" name="submit"> Change Pass</button>
			</form>

		</div>
 

				</div>
				
			</div>
		</div>
		
	</div>
</div>

<!-- Footer Section On -->
<!-- Footer Section On -->
<?php include "footer.php"; ?>
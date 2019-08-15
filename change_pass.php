<?php 
	include "database.php";
	session_start();
 ?>
<?php include "admin_header.php"; ?>

<!-- Slider images Off -->

<div class="container_full loge_bk" style ='margin-top: 0px;'>

	<div class="container text-center">
		<div class="row" id="vir">
	<!-- Side bar Section On -->
	<?php include "sidebar.php"; ?>		
			
	<!-- Side bar Section end-->	
			<div class="col-md-9">
				<h2 class="text-info">Welcome Admin</h2>
				<div class="">
					<h2 class="heading"> Admin Change Password </h2>
		<div class="box">

			<?php 

			if (isset($_POST["submit"])) {
				$sql="select * from admin where APASS='{$_POST["opass"]}' and AID='{$_SESSION["AID"]}' ";

				$res=$db->query($sql);
				if($res->num_rows>0){
					if($_POST["npass"]==$_POST["cpass"]){
						$s="update admin SET APASS='{$_POST["npass"]}' where AID='{$_SESSION["AID"]}' ";
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
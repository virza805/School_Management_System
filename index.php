<?php 
	include "database.php";
	session_start();
 ?>
<?php include "header.php"; ?>
<!-- Slider images On -->	
<div class="container_full slid_img">
	<div class="container">
		<h1 class="text text-center">School Management System</h1>
	</div>
</div>
<!-- Slider images Off -->
<!-- Login Section On -->
<div class="container_full loge_bk" style ='margin-top: 0px;'>

	<div class="container text-center pt-5 pb-5">
		<h2 class="heading"> Admin Login </h2>
		<div class="box">

			<?php 

			if (isset($_POST["login"])) {
				$sql="select * from admin where ANAME='{$_POST["aname"]}' and APASS='{$_POST["apass"]}' ";

				$res=$db->query($sql);
				if($res->num_rows>0){
					$ro=$res->fetch_assoc();
					$_SESSION["AID"]=$ro["AID"];
					$_SESSION["ANAME"]=$ro["ANAME"];
					echo "<script>window.open('admin_home.php','_self');  </script>";
				}else{
					echo "<h4 class='btn btn-danger'>Invalid Username or Password</h4>";
				}

			}
			if(isset($_GET["mes"])){
				echo "<h4 class='btn btn-danger'>{$_GET["mes"]}</h4>";
			}


			 ?>


			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<br>
				<input type="text" name="aname" placeholder="User Name" required class="input form-control"> <br>
				
				<input type="password" name="apass" placeholder="Password" required class="input form-control"> <br>
				<button type="submit" class="btn btn-success" name="login"> Login</button>
			</form>

		</div>
	</div>
</div>
<!-- Login Section Off -->
<!-- Footer Section On -->
<?php include "footer.php"; ?>
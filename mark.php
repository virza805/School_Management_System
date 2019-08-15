<?php 
	include "database.php"; 
	session_start();
	if(!isset($_SESSION["TID"])){
		echo "<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
	}
	if(isset($_GET["rno"])){
		$sql="select * from student where RNO='{$_GET["rno"]}' ";
		$res=$db->query($sql);
		if ($res->num_rows<=0) {
			header("location:add_mark.php?err=Invalid Register no..");
		}else{
			$rows=$res->fetch_assoc();
			$class=$rows["SCLASS"];
			$regno=$_GET["rno"];
		}
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
						<h4><b class="text-info">Add Mark</b></h4>
						
						    <?php
							require_once('database.php');

							if(isset($_POST['submit'])){
								
									$regno = $_POST['regno'];
									$sub = $_POST['sub'];
									$mark = $_POST['mark'];
									$etype = $_POST['etype'];
									$class = $_POST['class'];
									
							$result = mysqli_query($db,"INSERT INTO mark (REGNO,SUB,MARK,TERM,CLASS) VALUES('$regno','$sub','$mark','$etype','$class')");
							if($result){
								echo "<h4 class='m-2 p-2 text-light bg-success'>Insert Success</h4>";
							}else{
							echo "<h4 class='p-2 text-light bg-danger'>Insert Failed</h4>";
							}

								
							
							}

						 ?>

						<form  role="form" method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>"><br>
							
							<input type="text" name="regno" value="<?php echo $regno; ?>" placeholder="Enter Regster No" required class="input form-control"> <br>
							 
							 <input type="text" name="class" value="<?php echo $class; ?>" required class="input form-control">
							 <br>
							<select type="text" name="etype" " required class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(ETYPE) from exam ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Type sleet Term</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["ETYPE"]}'>{$ro["ETYPE"]}</option>";
								}
							}

							 ?>
							 </select> <br>

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
							<input type="text" name="mark" placeholder="Enter Mark" required class="input form-control"><br>
							<button type="submit" class="btn btn-success" name="submit">Add Mark</button> <br><br>
						</form>  <br>
						

								
					</div>
				</div>
				
			</div>
		</div>
		
	</div>
</div>

<!-- Footer Section On -->
<?php include "footer.php"; ?>
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
						<h4><b>Set Exam Time Details</b></h4>
					

						<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<br>
							<input type="text" name="ename" placeholder="Exam Name" required class="input form-control"> <br>
							
							<input type="text" name="etype" placeholder="Select Term" required class="input form-control"> <br>

							<input type="date" name="date"  required class="input form-control"> <br>

							
					</div>
					<div class="col-6 text-center">
						<h4><b>Look Staf/Teacher List</b></h4><br>

						 	<input type="text" name="ses" placeholder="Session" required class="input form-control"><br>

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
							<button type="submit" class="btn btn-success" name="submit"> Add Exam</button> <br><br>
						</form>

						 <?php
							require_once('database.php');

							if(isset($_POST['submit'])){

							$ename = $_POST['ename'];
							$etype = $_POST['etype'];
							$date = $_POST['date'];
							$ses = $_POST['ses'];
							$cla = $_POST['cla'];
							$sub = $_POST['sub'];
							
							

							$result = mysqli_query($db,"INSERT INTO exam (ENAME,ETYPE,EDATE,SESSION,CLASS,SUB) VALUES('$ename','$etype','$date','$ses','$cla','$sub')");
							if($result){
								echo "<h4 style='color: green'>Exam Date Add Success..</h4>";
							}else{
							echo "<h4 style='color:red'>Exam Date Add Failed Some problem</h4>";
							}

							}

						 ?>

					</div>
					<!--Exam Add Section End-->
					<!--Exam See Table Section On-->
					<div class="col-10">
						<?php 
							if (isset($_GET["mes"])){
								echo "<h5 class='text-danger'>{$_GET["mes"]}</h5>";
							}
						 ?>
						<table border="1px" class="bg-light m-5">
							<tr>
								<th>S.No</th>
								<th>Exam Name</th>
								<th>Type</th>
								<th>Date</th>
								<th>Subject</th>
								<th>Class</th>
								<th>Section</th>
								<th> Action </th>
							</tr>
							<?php 
								$s="select * from exam";
								$res=$db->query($s);
								if($res->num_rows>0){
									$i=0;
									while($r=$res->fetch_assoc()){
										$i++;
										echo "
										<tr>
											<td>{$i}</td>
											<td>{$r["ENAME"]}</td>
											<td>{$r["ETYPE"]}</td>
											<td>{$r["EDATE"]}</td>
											<td>{$r["SUB"]}</td>
											<td>{$r["CLASS"]}</td>
											<td>{$r["SESSION"]}</td>
											
											<td><a href='exam_delete.php?id={$r["EID"]}' class='btn btn-danger'>Delete</a></td>
										</tr>
										";

									}
								}
							?>
						</table>						
					</div>
					<!--Exam See Table Section End-->
				</div>
				
			</div>
		</div>
		
	</div>
</div>

<!-- Footer Section On -->
<!-- Footer Section On -->
<?php include "footer.php"; ?>
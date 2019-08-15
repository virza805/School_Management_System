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
					<div class="col-11 fix"> 
						<h4><b>View Exam Time Table Details</b></h4>
					
					<!--Exam See Table Section On-->
					<div class="">
						<?php 
							if (isset($_GET["mes"])){
								echo "<h5 class='text-danger'>{$_GET["mes"]}</h5>";
							}
						 ?>
						<table border="1px" class="m-5">
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

<div class="container_full bg-dark text-center">
	<footer>
		<p class="text-light pt-2 pb-2"> <span class="text-danger"> Copyright &copy;</span> Tanvir Hasan</p>
	</footer>
</div>


	<!-- JavaScript Files -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>	
</body>
</html>
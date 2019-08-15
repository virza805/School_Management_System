<?php 
	include "database.php";
	session_start();
	if (!isset($_SESSION["AID"])) {
		echo "<script>window.open('index.php?mes=Access Denied...','_self');</script>";
	}

	$sql="SELECT * FROM staff WHERE TID={$_GET["id"]}";
	$res=$db->query($sql);

	if($res->num_rows>0){
		$row=$res->fetch_assoc();
	}
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
				<h2 class="text-light">Welcome To Admin (<?php echo $_SESSION["ANAME"]; ?>) </h2>
				<div class="row">
					<div class="col-4 fix"> 
						<h4><b class="text-info">View Staff Info</b></h4>
					<h2 class="p-2">Name:<b><?php echo $row["TNAME"] ?></b></h2>
								<td class="p-2"><img colspan="2" src="<?php echo $row['IMG'] ?>" height="250" width="250" alt="Upload Pending"></td>
							
					</div>
					<div class="col-8 text-center rboxl">
						<h4><b class="text-info text-center border-b ">Staff Details</b></h4>

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
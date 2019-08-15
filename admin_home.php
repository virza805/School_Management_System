<?php 
	include "database.php";
	session_start();

	if(!isset($_SESSION["AID"])) {
		echo"<script> window.open('index.php?mes=Access Denied..','_self');</script>";
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
				<h2>Welcome Admin</h2>
				<div class="row">
					<div class="col-4 fix"> 
						<h4><b>School Information</b></h4>
						<img src="img/Tanvir_Hasan.jpg" width="300px;" alt="">
					</div>
					<div class="col-8">
						<p>
							School Management System  is a complete school management software designed to automate a sechool's diverse operations form classes, exams to school events calendar. <br><br>

							This school software has a powerful online communitly to bring parents , teachers and students on a common interactive platform , It is a paperless office outomation solution for today's modern schools. The School Management System Provides the facility to carry out all day toa day activities of the school.....
						</p>
					</div>
				</div>
				<p>
					School Management System  is a complete school management software designed to automate a sechool's diverse operations form classes, exams to school events calendar.

					This school software has a powerful online communitly to bring parents , teachers and students on a common interactive platform , It is a paperless office outomation solution for today's modern schools. The School Management System Provides the facility to carry out all day toa day activities of the school.....
				</p>
			</div>
		</div>
		
	</div>
</div>
<!-- Login Section Off -->
<!-- Footer Section On -->
<?php include "footer.php"; ?>
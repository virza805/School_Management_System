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
						<h4><b>View Staff Details</b></h4>
					

						<form method="post" id="frm" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<br>
							<input type="text" name="name" id="txt" placeholder="Search by Staff Name" required class="input form-control"> <br>
							
						</form>
			<!--janina kano div id box-->	
						<br>
						<div id="box"></div>

					</div>
					
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
	<script>
		$(document).ready(function(){
			$("#txt").keyup(function(){
				var txt=$("#txt").val();
				if(txt!=""){
					$.post("search.php",{s:txt},function(data){
						$("#box").html(data);
					});
				}
			});
		}); 
	</script>
</body>
</html>
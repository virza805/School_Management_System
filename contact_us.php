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
		<h2 class="heading"> Contact Us </h2>
		<div class="box">
<br>
<br>
						 <?php
							require_once('database.php');

							if(isset($_POST['submit'])){

							$tname = $_POST['username'];
							
							$email = $_POST['email'];
							$subject = $_POST['subject'];
							$message = $_POST['message'];
							
							

							$result = mysqli_query($db,"INSERT INTO contact (name, email, subject, message) VALUES('$tname','$email','$subject','$message')");
							if($result){
								echo "<p style='color: green'>Your Message Send Success..</p>";
							}else{
							echo "<p style='color:red'>Your Message not Send Some problem</p>";
							}

							}

						 ?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<div class="form-row">
		<div class="col">

	<input type="text" name="username" class="form-control mb-2" placeholder="Name">
	<input type="email" name="email" class="form-control mb-2" id="inputEmail4" placeholder="Email">
    <input type="text" name="subject" class="form-control mb-2" placeholder="Subject">
    <textarea  name="message" class="form-control mb-3" id="exampleFormControlTextarea1" rows="3" placeholder="Message*"></textarea>
	<button type="submit" class="btn btn-success" name="submit">Send</button>	 
		</div>
	</div>
</form>	

	</div>
	</div>
</div>
<!-- Login Section Off -->
<div class="container_full loge_bk" style ='margin-top: 0px;'>

	<div class="container text-center pt-5 pb-5">
		<h2 class="heading"> Contact Us </h2>
		<div class="box">
		
			
			<h2>Contact Dreamvolt</h2>
			<br>
<h5>
				Email: info@dreamvolt.com <br>
			Tel: 00971563384405 <br>
			 mobile: 00971526994280 <br> 
			 website: www.dreamvolt.com
			</h5>
			

		</div>
	</div>
</div>
<!-- Login Section Off -->
<div class="container_full loge_bk" style ='margin-top: 0px;'>

	<div class="container text-center pt-5 pb-5">
		<h2 class="heading"> Contact Us </h2>
		<div class="box">
<iframe src="https://www.google.com/maps/embed?pb=!1m25!1m11!1m3!1d673.144524300585!2d90.28171500249881!3d23.853310504354777!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d23.853175699999998!2d90.2818363!4m5!1s0x3755ea18c828e247%3A0x4fd5446d506761c2!2sUnnamed+Road!3m2!1d23.8516931!2d90.28217509999999!5e1!3m2!1sbn!2sbd!4v1544417228421" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>

		</div>
	</div>
</div>
<!-- Login Section Off -->
<!-- Footer Section On -->
<?php include "footer.php"; ?>
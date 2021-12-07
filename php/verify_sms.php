<?php
$otp = $_GET['pwd'];
$otp = base64_decode($otp);
?>
<html>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    <body>
				<div class="col-md-5">
					<div id="register-form">
						<form method="POST" action=""  class="row register-form">

							<!-- Form Input -->
							<div id="input-name" class="col-md-12">
								<p>OTP*</p>
								<input type="text" name="otp" class="form-control name" id = "otp" placeholder="Enter Your Name*"
									required>
							</div>

                            <div class="col-md-12 form-btn">
								<button type="submit" value="done" name="done" id = "btn" class="btn btn-md btn-orange tra-black-hover submit">
									SUBMIT
								</button>
							</div>
						</form>
					</div>
				</div>
					<script>
						$("#btn").on("click",function() {
							var otp = $("#otp").val();
							if(otp == <?php echo $otp; ?>) {
								
							}
							else {
								alert("Otp dont match");
							}
						});
					</script>
</body>
</html>
<html lang="en">
<head>
	<title>Login V9<?php echo base_url(); ?>Login_v9/</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>Login_v9/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Login_v9/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Login_v9/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Login_v9/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Login_v9/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Login_v9/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Login_v9/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Login_v9/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Login_v9/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Login_v9/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Login_v9/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
    
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" action="<?php echo base_url(); ?>index.php/auth/login" method="post">
				<span class="login100-form-title p-b-37">
                    <?php echo lang('login_heading');?>
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="identity" placeholder="username or email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" placeholder="password">
					<span class="focus-input100"></span>
                </div>
                
                
                <div class="checkbox">
                    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>Remember Me
                </div>
                <br/>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
                        <?php echo form_submit('submit', lang('login_submit_btn'));?>
					</button>
				</div>
				</div>

				<div class="text-center">
                    <div id="infoMessage"><?php echo $message;?></div>
				</div>
            </form>
            
            <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>Login_v9/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>Login_v9/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>Login_v9/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>Login_v9/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>Login_v9/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>Login_v9/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>Login_v9/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>Login_v9/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>Login_v9/js/main.js"></script>

</body>
</html>
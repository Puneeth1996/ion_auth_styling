<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    	select::-ms-expand {	display: none; }
    	select{
    		-webkit-appearance: none;
    		appearance: none;
    	}
    	@-moz-document url-prefix(){
    		.ui-select{border: 1px solid #CCC; border-radius: 4px; box-sizing: border-box; position: relative; overflow: hidden;}
    	  .ui-select select { width: 110%; background-position: right 30px center !important; border: none !important;}
    	}
    	.mb{
    		margin-bottom:0px;
    	}
    	.shadows{
    		padding-left:0px;
    		padding-right:0px;
    		box-shadow: 0px 5px 20px 5px #e3aeae;
    		border-top-left-radius: 5%;
    		border-bottom-left-radius: 5%;
    		border-top-right-radius: 5%;
    		border-bottom-right-radius: 5%;
    	}
    	@media only screen and (max-width: 774px) {
    		.disableleft{
    			display:none;
    		}
    		.fullborder{
    			border-radius:5%;
    		}
    	}
    </style>
		<link rel="stylesheet" href="<?php echo base_url()?>/assets/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url()?>/assets/login_ida.css">
	</head>
	<body style="background-color:#eee;overflow:hidden">
		<div class="container-fluid">
			<div class="row" style="background:transparent;">
				<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 p0"></div>
				<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 p0">
					<div class="row jumbotron" style="margin-bottom:0px;">
						<div class="col-lg-12 shadows" style="padding-left:0px;padding-right:0px">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-2 jumbotron disableleft" style="margin-bottom:0px;min-height:500px;background:#FFF;border-top-left-radius:5%;border-bottom-left-radius:5%;">
								<div style="padding-top:90px;" align="center">
									<img src="<?php echo base_url()?>/assets/idalogo.png" width="70%" height="auto">
								</div>
								<div style="padding-top:20px;" align="center">
										<a style="color:#ea2330;width:100%" href="http://idanalytics.co.in/" target="_blank">
											<button type="submit" class="btn" style="border-color:none;border-radius:17px;color:#ea2330;"><b>Know More</b></button>
										</a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 jumbotron fullborder" style="margin-bottom:0px;min-height:500px;background:#07a0e1;border-top-right-radius:5%;border-bottom-right-radius:5%">
								<h4 style="color:#FFF;margin-top:40px;" align="center"><b> Sign in </b></h4>
								<form action="<?php echo site_url('auth/login')?>" method="POST" class="" style="padding:0;margin-top:20px;">
									<div style="color:red" align="center"></div>
									<div class="form-group" style="padding:10px">
										<input type="text" style="border: 0px;-webkit-box-shadow:none;box-shadow:none;border-bottom: 1px solid #eee;" placeholder="Enter Username" required="" autocomplete="off" class="form-control" id="identity" name="identity">
									</div>
									<div class="form-group" style="padding:10px">
										<input type="password" style="border: 0px;-webkit-box-shadow:none;box-shadow:none;border-bottom: 1px solid #eee;" placeholder="Enter Password" required="" autocomplete="off" class="form-control" id="password" name="password">
																			</div>
									<div style="padding:6px">
										<div class="form-group" style="color:#FFF;border-radius:17px;padding:4px;" align="center">
											<button type="submit" class="btn" style="border-color:none;border-radius:17px;color:#ea2330;width:100%"><b>Login</b></button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-12" style="padding-top:15px">
							<div align="center">Help Center |  Terms of User | Privacy Policy | © IDA Automation Private Limited</div>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 p0"></div>
			</div>
		</div>

</body></html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div id="infoMessage"><?php echo $message;?></div>

<div class="container">
  <h2><?php echo lang('login_heading');?></h2>
  <form action="auth/login" method="post">
    <div class="form-group">
      <label for="email"><?php echo lang('login_identity_label', 'identity');?></label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="identity">
    </div>
    <div class="form-group">
      <label for="pwd"><?php echo lang('login_password_label', 'password');?>:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="checkbox">
        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>Remember Me
    </div>
    <?php echo form_submit('submit', lang('login_submit_btn'));?>
  </form>
  <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>

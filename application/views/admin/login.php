<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css');?>">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css')?>">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <!-- <a href=""><b>Admin</b></a> -->
    <img src = "<?php echo base_url('assets/images1/logo.png');?>">
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <form  method="post">
        <div class="input-group mb-3">
          <input type="text" name="mobile" minlength="10" maxlength="10" class="form-control" placeholder="Mobile">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-mobile"></span>
            </div>
          </div>
        </div>
        <div class="text-danger"> <?php echo form_error('mobile'); ?>  </div>
        <div class="input-group mb-3">
          <input type="password" name="password" minlength="6" maxlength="6" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="text-danger"> <?php echo form_error('password'); ?>  </div>
        <div class="row">
          <div class="col-8">
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js')?>"></script>
<!--validation for mobile number-->
	<script>
	$(function(){
  $("input[name='mobile']").on('input', function (e) {
    $(this).val($(this).val().replace(/[^0-9]/g, ''));
  });
});
	</script>
</body>
</html>


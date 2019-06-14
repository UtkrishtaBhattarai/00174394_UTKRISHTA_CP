<?php ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
      <link href="<?php echo base_url();?>assets/css/customStyle.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
		  <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		  <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
		  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<title>Login Here</title>
</head>
<body id="img1">
<div class="container">
	<div class="row">
		<div class="col-sm-offset-4 col-sm-4" id="login-form">
			<div class="col-sm-12">
				<h1 class="text-center">Login</h1>
			</div>
      <?php if($this->session->flashdata('errors'));
            echo '<div class="alert alert-warning">';
            echo $this->session->flashdata('errors');
            echo "</div>";
      ?>

<form method="post" action="<?php echo base_url()?>Login/check" >
      <div class="col-sm-12">
     <div class="form-group">
      <label class="control-label" for="name" id="usrn">
       Username
      </label>
      <input class="form-control" name="username" type="text"/>
     </div>
     <div class="form-group">
      <label class="control-label" for="name" id="pwdn">
       Password
      </label>
      <input class="form-control"  name="password" type="Password"/>
     </div>
     <div class="form-group">
     	<input type="submit"  class="btn btn-success" value="Login" id="btm">
     </div>
     </div>
     <p align="center">
     	<a href="<?php echo base_url();?>registration">Register Now</a>
     </p>
    
</form>
</div>
</div>
</div>
</body>
</html>


<style type="text/css">
  #btm{width: 100%;}
</style>
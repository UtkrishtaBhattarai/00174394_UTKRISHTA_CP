 <?php if(null ==($this->session->userdata('uid')))
{
  redirect('login');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>View My Details</title>
</head>
<body>
  <div class="container">
  <div class="row">   
   <div class="col-sm-6">
<form method="post" action="<?php echo base_url()?>Details/edit">
       <h1>Your Details are here</h1>
      <div class="col-sm-12">
        <div class="alert alert-warning">
     <u>   <b> <?php  echo "Welcome:".' '.' '. $this->session->userdata('uname'); ?> </b> </u>
        </div>
      </div>
       <div class="col-sm-6">
          <div class="form-group ">
            <label class="control-label " for="name">
                First Name
              </label>
              <input class="form-control" id="name" name="fname" type="text" value="<?php echo $detail->fname?>">
            </div>
        </div> 
       <div class="col-sm-6">
          <div class="form-group ">
            <label class="control-label " for="name">
                Last Name
              </label>
              <input class="form-control" id="name" name="lname" type="text" required="required" value="<?php echo $detail->lname?>" />
            </div>
        </div>

        <div class="col-sm-6">
          <div class="form-group ">
            <label class="control-label " for="name">
                Department Name(if any)
              </label>
              <input class="form-control" id="name" name="deptname" type="text" required="required" value="<?php echo $detail->deptname?>" />
            </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group ">
          <label class="control-label " for="name2">
             Address
          </label>
          <input class="form-control" id="name2" name="address" type="text" required="required" value="<?php echo $detail->address?>" />
        </div>
     </div>

     <div class="col-sm-6">
     <div class="form-group ">
      <label class="control-label " for="email">
       Email
      </label>
      <input class="form-control" id="email" name="email" type="email" required="required" value="<?php echo $detail->email?>" />
     </div>
     </div>
     
     <div class="col-sm-6">
     <div class="form-group ">
      <label class="control-label " for="text1">
       Username
      </label>
      <input class="form-control" id="username" name="username" type="text" required="required" value="<?php echo $detail->username?>" />
     </div>
    </div>

     <div class="col-sm-12">
     <div class="form-group ">
      <label class="control-label " for="textarea">
       Comments
      </label>
      <textarea class="form-control" cols="40" id="textarea" name="comment" width="100%">
        <?php echo $detail->comment?>
      </textarea>
     </div>
     </div> 
     <div class="col-sm-12">
     <div class="form-group">
      <div>
       <input type="submit"  class="btn btn-success" value="Update" id="btn"> 
     </div> <br>
      <p><input type="reset" name="reset" class="btn btn-success" id="btn"></p>
     </div>
     </div>
      <div class="col-sm-12" id="user-log">
    <p align="center">Already a user? <a href="login.php"> Login Now!</a></p>
    </div>    
<?php echo form_close(); ?><br/>
   
   </div>
   <div class="col-sm-6">
       
    </div>
 </div>
</div>
</body>
</html>

<style type="text/css">
  #btn
  {
    width:100%;
  }
</style>
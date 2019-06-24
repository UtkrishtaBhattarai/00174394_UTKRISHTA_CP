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
             <div class="col-sm-5">
                 <form method="post" action="<?php echo base_url()?>Details/edit">
                     <h1 align="center">Your Details are here</h1>
                     <div class="col-sm-12">
                        <?php 
if($this->session->flashdata('update'))
      {
         echo '<div class="alert alert-warning">';
        echo $this->session->flashdata('update');
        echo "</div>";
      }
  ?>
                         <div class="alert alert-warning">
                             <u> <b> <?php  echo "Welcome:".' '.' '. $this->session->userdata('uname'); ?> </b> </u>
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
                                 <input type="submit" class="btn btn-success" value="Update" id="btn">
                             </div>
                         </div>
                     </div>
                      <?php echo form_close(); ?>
                      <form action="<?php echo base_url();?>Details/delete">
                     <div class="col-sm-12" id="user-log">
                        <p><input type="submit" value="DeleteAccount"class="btn btn-success" id="btn" onClick="return doconfirm();"></p>
                        <?php echo form_close(); ?>
                         <p align="center">Already a user? <a href="<?php echo base_url();?>login"> Login Now!</a></p>
                     </div>
                    <br />
<script>
function doconfirm()
{
    job=confirm("Are you sure to delete permanently?");
    if(job!=true)
    {
        return false;
    }
}
</script>
             </div>
             <h2 align="center">Notices..</h2>
             <div class="col-sm-7">
  <?php //foreach ($post as $postss): ?>
            <div class="alert alert-warning alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <u>
                    <div class="col-sm-12"><b>Date Posted:<?php echo $post['date_created']?></b></div>
                    <div class="col-sm-12"><span class="pull-right"><b>Date of Expiry:<?php echo $post[

                        'date_expire']?></b></span></div>
                </u> <br>
                <div class="alert alert-success">
                    <label><b></b></label><b><u><?php echo $post['title']?></u></b>
                </div>
                <div class="alert alert-info">
                    <h4 align="justify"><?php echo substr($post['body'],0,300)?> </h4>
                </div>
            </div>
    <?php //endforeach; ?> <br>
             </div>
         </div>
     </div>
 </body>

 </html>

 <style type="text/css">
     #btn {
         width: 100%;
     }
 </style>
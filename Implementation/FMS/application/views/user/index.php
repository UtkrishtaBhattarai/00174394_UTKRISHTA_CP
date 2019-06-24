<!DOCTYPE html>
<html>
<head>
	<title>
		Post Your Notices
	</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     </head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
    <?php if($this->session->flashdata('errors'))
    {
      echo '<div class="alert alert-info">';
   echo $this->session->flashdata('errors');
 echo "</div>";
    }

 ?>

        <form action="<?php echo base_url() ?>User/addnotice" method="post">
<h1 align="center"> Post Notices Here</h1>
				 <div class="col-sm-6">
          <div class="form-group ">
            <label class="control-label " for="name">
               Date of Issue
              </label>
              <input class="form-control"  name="doi" type="date" />
            </div>
        </div>

         <div class="col-sm-6">
          <div class="form-group ">
            <label class="control-label " for="name">
                Enter Date Of Expiry
              </label>
              <input class="form-control"  name="doe" type="date" />
            </div>
        </div>

			 <div class="col-sm-12">
          <div class="form-group ">
            <label class="control-label " for="name">
                Title
              </label>
              <input class="form-control" name="title" type="text" />
            </div>
        </div> 

         <div class="col-sm-12">
          <div class="form-group ">
            <label class="control-label " for="name">
                Description
              </label>
             <textarea class="form-control" id="tarea" name="desc"></textarea>
            </div>
        </div> 
        <div class="col-sm-12">
     <div class="form-group">
      <div>
       <input type="submit" class="btn btn-success" value="Add" id="btn"> 
     </div> <br>
      <p><input type="reset" name="reset" class="btn btn-success" id="btn"></p>
     </div>
     </div>


	</div>
	</div>
</div>
</body>
</html>

<style type="text/css">
	#tarea
	{
		height: 120px;
	}

#btn
{
	width: 100%;
}
</style>

<?php 
echo '<div class="alert alert-warning">';
   echo $this->session->userdata('id');
 echo "</div>";
 ?>

<form method="post" action="<?php echo base_url()?>Feedback/savefeedback" >
<div class="container">
	<div class="row">

		<div class="col-sm-offset-2 col-sm-8">
		
		<div class="col-sm-6">
          <div class="form-group ">
            <label class="control-label " for="name">
                Staff Name
              </label>
              <input class="form-control" id="name1" name="staffname" type="text" />
            </div>
        </div> <!-- for inner col-sm-6 and for staff -->


		<div class="col-sm-6">
          <div class="form-group ">
            <label class="control-label " for="name">
              </label>
             <select class="form-control">
              <?php 
                foreach($detail as $each)
                { ?><option value="<?php echo $each->departmentname; ?>"><?php echo $each->departmentname; ?></option>';
                <?php }
                ?>
                </select>

            </div>
        </div> <!-- for inner col-sm-6 and for staff -->


		<div class="col-sm-12">
          <div class="form-group ">
            <label class="control-label " for="name">
                Your Feedback Here..
              </label>
              <textarea class="form-control" id="texta" name="txtfee"></textarea>
            </div>
        </div> <!-- for inner col-sm-6 and for staff -->

        <div class="col-sm-12">
          <input type="submit" name="btnfeedback" value="Submit Feedback" class="btn btn-success" id="btnfeedback" >
        </div>
        	</div>
</div><!-- for row -->
</div><!-- for container -->
</form>


	<div class="container">
		<div class="row">
			 <!-- for col-sm-6 -->
<div class="col-sm-offset-2 col-sm-8">
			<div class="alert alert-warning">
			<p>
     <label align="left"> Staff Name</label>
     <label align="right">Department Name</label>
      </p>
			</div> <!-- for col-sm-6 -->	

      <div class="col-sm-offset-2 col-sm-8">
        
      </div>

			</div><!-- For alert alert-warning -->
			</div>
	</div>

<style type="text/css">
	
#texta
{
	height: 150px;
}
#btnfeedback
{
  width: 100%;
  margin-bottom: 10px;

}
</style>

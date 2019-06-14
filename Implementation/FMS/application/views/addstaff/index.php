<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<form action="<?php echo base_url()?>Staffadd/insert" method="post">
		<div class="col-sm-6">
			<div class="form-group">
				<label>First Name</label>
				<input type="text" name="txtfname" class="form-control"/>
			</div>  <!-- this is for form -group -->
			</div>
			<div class="col-sm-6">
			<div class="form-group">
				<label>Last Name</label>
				<input type="text" name="txtlname" class="form-control"/>
			</div>
		</div>

		<div class="col-sm-6">
			<div class="form-group">
				<label>Date of Join</label>
				<input type="date" name="dateofjoin" class="form-control"/>
			</div>
		</div>

			<div class="col-sm-6">
          <div class="form-group ">
            <label class="control-label " for="name">
            	Department
              </label>
             <select class="form-control" name="dept">
              <?php 
                foreach($detail as $each)
                { ?><option value="<?php echo $each->departmentname; ?>">
                	<?php echo $each->departmentname; ?></option>';
                <?php }
                ?>
                </select>

            </div>
        </div> <!-- for inner col-sm-6 and for staff -->

        <div class="col-sm-12">
			<div class="form-group">
				<label>Qualifications</label>
				<textarea class="form-control" id="txtarea" name="txtqualification"></textarea>
			</div>
		</div>

		<div class="col-sm-12">
			<div class="form-group">
				<label>Comments</label>
				<textarea class="form-control" id="txtarea" name="txtcomments"></textarea>
			</div>
		</div>

		<input type="submit" value="Add"  class="btn btn-success" id="btn">
</form>
		</div>	
		
		</div>







		<style type="text/css">
			#txtarea
			{
				width:100%;
				height: 20vh;
			}

			#btn
			{
				width: 100%;
			}
		</style>
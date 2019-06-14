<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
        
<form method="post" action="<?php echo base_url()?>Dept/add" >
          <div class="form-group ">
            <label class="control-label " for="name"text-align="center">
                Department Name
              </label>
              <input class="form-control" id="name1" name="departmentname" type="text" />
        
        </div> <!-- for inner col-sm-6 and for staff -->   
        <input type="submit" class="btn btn-success" value="Add" id="btn-add" name="btnadd" >
        <?php echo form_close();?>
       </div> 
    </div>
</div>



<style type="text/css">
	#btn-add
	{
		width: 100%;

	}
</style>
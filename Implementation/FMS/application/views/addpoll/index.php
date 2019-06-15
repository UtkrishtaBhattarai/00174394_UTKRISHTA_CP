<div class="container">
	<div class="row">
		<?php if($this->session->flashdata('successful'))
      {
        echo '<div class="alert alert-success">';
        echo $this->session->flashdata('successful');
        echo "</div>";
      }
  ?>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-sm-12" id="div2"><h3 align="center">Add Poll Here... </h3></div>
	</div>
</div>

<form action="<?php echo base_url()?>Addpoll/addpoll" method="post">
<div class="container">
	<div class="row">
		<div class="col-sm-6" id="div1">
			<div class="form-group">
				<label for="name">
					Question*
				</label>
				<textarea class="form-control" name="txtques" id="txtarea"></textarea>
			</div>
			<div class="form-group">
				<label for="name">
					Option1*
				</label>
				<input type="text" name="txtopt1" class="form-control" id="txt">
			</div>
			<div class="form-group">
				<label for="name">
					Option2*
				</label>
				<input type="text" name="txtopt2" class="form-control" id="txt">
			</div>
			<input type="submit" value="Create Poll" class="btn btn-success"  id="btn">
		</div>
		<div class="col-sm-6" id="div3">
			See Poll Result Here
		</div>
	</div>
</div>
</form>




<style type="text/css">
	#txtarea
	{
		height:25vh;
	}
	#btn
	{
		width: 100%;
	}
	#txt
	{
		width: 100%;
		height: 15vh;
	}
	#div1
	{
		border: 1px solid blue;
	}
	#div2
	{
		border: 1px solid blue;
		background-color: yellow;
	}
	#div3
	{
		border: 1px solid blue;
	}
</style>
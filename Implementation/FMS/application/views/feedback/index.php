<?php if(null ==($this->session->userdata('uid')))
{
  redirect('login');
}
  ?>


<form method="post" action="<?php echo base_url()?>Feedback/savefeedback">
    <div class="container">
        <div class="row">
            <?php if($this->session->flashdata('inserted'))
        {
            echo '<div class="alert alert-warning">';
            echo $this->session->flashdata('inserted');
            echo "</div>";
        }
  ?>
<?php if($this->session->flashdata('errors'))
        {
            echo '<div class="alert alert-warning">';
            echo $this->session->flashdata('errors');
            echo "</div>";
        }
  ?>
            <div class="col-sm-offset-2 col-sm-8">

                <div class="col-sm-6">
                    <div class="form-group ">
                        <label class="control-label " for="name">
                            Staff Name
                        </label>
                        
                         <select class="fstdropdown-select" name="staff" id="first"  >
                            <?php 
                foreach($staffs as $each)
                { ?><option value="<?php echo $each->staff_id; ?>"><?php echo $each->sname." ".$each->slname; ?></option>';
                            <?php }
                ?>
                        </select>
                    </div>
                </div> <!-- for inner col-sm-6 and for staff -->


                <div class="col-sm-6">
                    <div class="form-group ">
                        <label class="control-label " for="name">
                            Accounts
                        </label>
                        <select class="form-control"  name="cmbacc">
                            <?php 
                foreach($detail as $each)
                { ?>
                    <option value="<?php echo $each->departmentid; ?>"><?php echo $each->departmentname; ?></option>';
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
                    <input type="submit" name="btnfeedback" value="Submit Feedback" class="btn btn-success" id="btnfeedback">
                </div>
            </div>
        </div><!-- for row -->
    </div><!-- for container -->
</form>


<div class="container">
    <div class="row">
        <!-- for col-sm-6 -->
        <div class="col-sm-offset-2 col-sm-8">
            <div class="alert alert-warning" id="down">
                <h3><p align="center">
                    You feedback is what motivates us most..
                </p></h3>
            </div> <!-- for col-sm-6 -->

            <div class="col-sm-offset-2 col-sm-8">

            </div>

        </div><!-- For alert alert-warning -->
    </div>
</div>

<style type="text/css">
    #texta {
        height: 150px;
    }

    #btnfeedback {
        width: 100%;
        margin-bottom: 10px;

    }
    #down
    {
        margin-bottom: 70px;
    }
</style>



 <script type="text-javascript">
  $("#myselect").select2();
 </script>
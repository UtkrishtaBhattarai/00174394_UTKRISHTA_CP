 <?php if(null ==($this->session->userdata('uid')))
{
  redirect('login');
}
  ?>
<?php 


?>


<div class="container">
    <div class="row">
        <form action="<?php echo base_url();?>Poll/votedon" method="post">

            <input type="text" name="txthidden" value="<?php echo $poll->poll_id?>" hidden="hidden">
            <div class="col-sm-8 col-sm-offset-2" id="main">
                <div class="col-sm-12" id="div1">
                    <div class="form-group">
                       <b><h2> <p align="center">Question:</p></h2></b>
                        <p id="text" align="center"><b><?php echo $poll->ques?></b> </p>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>
                            <input type="radio" name="opt1" checked="checked" value="<?php echo $poll->opt1 ?>"><b id="text"><?php echo $poll->opt1?></b><br>
                        </label><br>
                        <label>

                            <input type="radio" name="opt1" value="<?php echo $poll->opt2?>"><b id="text"><?php echo $poll->opt2 ?></b><br>
                    </label>
                    </div>

                </div>
                <?php if($count>0)
            {
               echo '<input type="submit" value="Vote" class="btn btn-success" id="btn" disabled="disabled" hover:"this" title="You cannot Vote Twice">';
            }
 else
{
    echo '<input type="submit" value="Vote" class="btn btn-success" id="btn" >';
}?>

        
    </div>
</div>
</form>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <h3> <p align="center">Poll Results</p> </h3>  
            <?php foreach ($getdata as $datap): ?>
                <b><p><?php echo $datap->voted_on ?></p></b>
                 <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $datap->Percentage ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $datap->Percentage ?>%">
      <?php echo $datap->Percentage ?>
        </div>
        </div>
                
            <?php endforeach ?>
        </div>
    </div>
</div>

<style type="text/css">
    #div1 {
        border: 1px solid green;
    }

    #text {
        font-size: 30px;

    }

    input[type="radio"] {
        width: 100px;
        margin-top: 30px;
        height: 40px;
    }

    #main {
        margin-top: 1vh;
        border: 5px solid black;
        height: auto;
        margin-bottom: 90px;
        box-shadow: 0 0 30px black;
    }

    #btn {
        width: 100%;
        margin-top: 30 px;

    }
</style>



<div class="container">
    <div class="row">
        <?php if($this->session->flashdata('successful'))
      {
        echo '<div class="alert alert-success">';
        echo $this->session->flashdata('successful');
        echo "</div>";
      }
  ?>

     <?php if($this->session->flashdata('errors'))
      {
        echo '<div class="alert alert-success">';
        echo $this->session->flashdata('errors');
        echo "</div>";
      }
  ?>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-sm-12" id="div2">
            <h3 align="center">Add Poll Here... </h3>
        </div>
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
                <?php if($count>0)
                {
                    echo '<input type="submit" value="Create Poll" class="btn btn-success" id="btn" disabled=disabled>';    
                }

                else
                {
                    echo '<input type="submit" value="Create Poll" class="btn btn-success" id="btn">';
                }
                
                ?>
            </div>
            <?php if($count==0)
            {
                
                echo '<h1><p align="center"><strong>No poll Found</strong><p><h1>';
                
                
            }

            else{ ?>
<div class="col-sm-6">
          <h3> <p align="center">Poll Results</p> </h3>  
            <?php foreach ($getdata as $datap): ?>
                <b><p><?php echo $datap->voted_on?></p></b>
                 <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $datap->Percentage ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $datap->Percentage ?>%">
      <?php echo $datap->Percentage ?>
        </div>
        </div>
                
            <?php endforeach ?>
        </div>
      <?php   }?>
    
 
        </div>
    </div>
</form>

<table class="table">
    <h3 class="text-center">All Poll</h3>
    <tr>
        <th>ID</th>
        <th>Question</th>
        <th>Option1</th>
        <th>Option2</th>
        <th>Delete</th>
        </tr>
    <?php

foreach ($poll as $row)  {?>
 <tr>
     <td><?php echo $row['poll_id']?></td>
     <td><?php echo $row['ques'] ?></td>
     <td><?php echo $row['opt1'] ?></td>
     <td><?php echo $row['opt2'] ?></td>
     <td><a href="<?php echo base_url()?>Addpoll/delete/<?php echo $row['poll_id']?>">Delete</td>
     </tr>
<?php }

?>
</table>


<style type="text/css">
    #txtarea {
        height: 25vh;
    }

    #btn {
        width: 100%;
    }

    #txt {
        width: 100%;
        height: 15vh;
    }

    #div1 {
        border: 1px solid blue;
    }

    #div2 {
        border: 1px solid blue;
        background-color: yellow;
    }

    #div3 {
        border: 1px solid blue;
    }
</style>
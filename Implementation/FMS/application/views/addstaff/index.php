<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <?php
		if ($this->session->flashdata('successful')) 
		{
		echo '<div class="alert alert-warning">';
        echo $this->session->flashdata('successful');
        echo "</div>";
		}
        if ($this->session->flashdata('updated')) 
        {
        echo '<div class="alert alert-warning">';
        echo $this->session->flashdata('updated');
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

            <form action="<?php echo base_url()?>Staffadd/insert" method="post">
                <input type="text" name="txtid" id="txtid" hidden="">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="txtfname" class="form-control" id="txtfname" />
                    </div> <!-- this is for form -group -->
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="txtlname" class="form-control" id="txtlname" />
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="txtaddress" class="form-control" id="txtaddress" />
                    </div> <!-- this is for form -group -->
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>email</label>
                        <input type="text" name="txtemail" class="form-control" id="txtemail" />
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Date of Join</label>
                        <input type="date" name="dateofjoin" class="form-control" id="dateofjoin" />
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group ">
                        <label class="control-label " for="name">
                            Department
                        </label>
                        <select class="form-control" name="dept" id="dept">
                            <?php 
                foreach($detail as $each)
                { ?><option value="<?php echo $each->departmentid; ?>">
                                <?php echo $each->departmentname; ?></option>';
                            <?php }
                ?>
                        </select>

                    </div>
                </div> <!-- for inner col-sm-6 and for staff -->

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Qualifications</label>
                        <textarea class="form-control" id="txtqualification" name="txtqualification"></textarea>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Comments</label>
                        <textarea class="form-control" id="txtcomments" name="txtcomments"></textarea>
                    </div>
                </div>

                <input type="submit" value="Add" class="btn btn-success" id="btn1" name="btnadd" >
                <br> </br>
                 <input type="submit" value="Update" class="btn btn-success" id="btn" name="btnupdate">
            </form>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="table-responsive">
          <table class="table" id="table">
    <h3 class="text-center">All Staffs</h3>
    <tr>
        <th>ID</th>
        <th>Fullname</th>
        <th>lastname</th>
        <th>Address</th>
        <th>Email</th>
        <th>Date of Join</th>
        <th>Qualification</th>
        <th>Comment</th>
        <th>Delete</th>
        </tr>
    <?php

foreach ($alld as $row)  {?>
 <tr>
     <td><?php echo $row['staff_id']?></td>
     <td><?php echo $row['sname'] ?></td>
     <td><?php echo $row['slname'] ?></td>
     <td><?php echo $row['address'] ?></td>
     <td><?php echo $row['emailid'] ?></td>
     <td><?php echo $row['dateofjoin'] ?></td>
     <td><?php echo $row['qualifications'] ?></td>
     <td><?php echo $row['comments'] ?></td>
     <td><a href="<?php echo base_url('Staffadd/delete/')?><?php echo $row['staff_id']?>">Delete</a></td>
     </tr>
<?php }

?>
</table>  
        </div>
    </div>
</div>





    <style type="text/css">
        #txtqualification {
            width: 100%;
            height: 12vh;
        }

        #txtcomments
        {
           width: 100%;
            height: 12vh; 
        }

        #btn {
            width: 100%;
        }
        #btn1 {
            width: 100%;
        }
        table tr
        {
            cursor:pointer;
            transition: all .25s ease-in-out; 
        }
        table tr :hover
        {
            background-color: #ddd;
        }
    </style>


    <script type="text/javascript">
        var table=document.getElementById('table');
        for(var i=1; i < table.rows.length;i++)
        {
            table.rows[i].onclick=function()
            {
                 document.getElementById("txtid").value=this.cells[0].innerHTML;
                document.getElementById("txtfname").value=this.cells[1].innerHTML;
                document.getElementById("txtlname").value=this.cells[2].innerHTML;
                document.getElementById("txtaddress").value=this.cells[3].innerHTML;
                document.getElementById("txtemail").value=this.cells[4].innerHTML;
                document.getElementById("dateofjoin").value=this.cells[5].innerHTML;
                document.getElementById("txtqualification").value=this.cells[6].innerHTML;
                document.getElementById("txtcomments").value=this.cells[7].innerHTML;
            }
        }
    </script>
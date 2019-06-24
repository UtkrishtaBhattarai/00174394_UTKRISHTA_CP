<form>
    <?php foreach ($staff as $staffs): ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1" id="text2">
                <div class="alert alert-warning">

                    <div class="col-md-12">
                        <h2 align="center"><b>Name:<?php  echo $staffs['sname']?><?php echo $staffs['slname']?></h2></b>
                    </div>

                    <u>
                        <div class="col-md-6"><b>Date of Join:<?php echo $staffs['dateofjoin']?></b></div>
                        <div class="col-md-6"><span class="pull-right"><b>Address:<?php echo $staffs['address']?></b></span></div>
                    </u>
                    <u>
                        <div class="col-md-6"><b>Email ID:<a href="https://www.gmail.com"><?php echo $staffs['emailid']?></a></b></div>

                        <div class="col-md-6"><span class="pull-right"><b>Department Name:<?php echo $staffs['departmentname']?></b></span></div>
                    </u>

                    <p align="center"><a id="a" href="<?php echo site_url('/staffs/'.$staffs['staff_id']); ?>"> View Profile</a></p>


                    <!-- <p><a class="btn btn-success" href="<?php /*echo site_url('/posts/'.$post['slug']);*/ ?>"> Read More</a></p> -->
                </div>


            </div>
            <?php endforeach; ?> <br>

        </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <style type="text/css">
        #a {
            font-size: 20px;
        }

        #text2 {
            font-size: 20px;
        }
    </style>
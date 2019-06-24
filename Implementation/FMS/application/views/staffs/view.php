<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2" id="main">
            <div class="head">
                <p align="center"><b>
                        <h1 align="center">FullName:
                    </b><b><?php echo $staffs['sname']." "." ".$staffs['slname'];?></b></h1>
                </p>
            </div>

            <u>
                <h4>
                    <div class="col-md-6"><b>Address:<?php echo $staffs['address']?></b></div>
                    <div class="col-md-6"><span class="pull-right"><b><?php echo "Sunrise Company"?></b></span></div>
                </h4>
            </u>

            <u>
                <h4>
                    <div class="col-md-6"><b>Email ID:<a href="https://www.gmail.com"><?php echo $staffs['emailid']?></a></b></div>
                    <div class="col-md-6"><span class="pull-right"><b>Address:<?php echo $staffs['address']?></b></span></div>
                </h4>
            </u>
            <br></br>
            <p>
                <div class="col-sm-12">
                    <b>
                        <h3>Qualifications</h3>
                    </b>
                    <p align="justify"><b>
                            <?php echo $staffs['qualifications']; ?>
                            <b></b></p>



                    <div class="col-sm-12">
                        <b>
                            <h3>Comments</h3>
                        </b>
                        <p align="justify"><b>
                                <?php echo $staffs['comments']; ?>
                            </b></p>
                    </div>

                </div>
                </form>
        </div>
    </div>
</div>
</body>

</html>


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
        margin-top: 5vh;
        border: 5px solid black;
        height: auto;
        margin-bottom: 30px;
        box-shadow: 0 0 30px black;
        background-color: yellow;
    }

    #btn {
        width: 100%;
        margin-top: 30 px;

    }

    #txt-1 {
        margin-top: 2px;
    }
</style>
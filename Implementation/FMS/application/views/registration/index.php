<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <link href="assets/css/customStyle.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="assets/img/dancer.jpg" alt="this is a image dancing" class="img-fluid" width="100%" height="558px">
            </div>
            <div class="col-sm-6">

                <?php if($this->session->flashdata('errors'))
      {
         echo '<div class="alert alert-warning">';
        echo $this->session->flashdata('errors');
        echo "</div>";
      }
  ?>
                <?php if($this->session->flashdata('unameexists'))
      {
        echo '<div class="alert alert-warning">';
        echo $this->session->flashdata('unameexists');
        echo "</div>";
      }
  ?>

                <?php if($this->session->flashdata('successful'))
      {
        echo '<div class="alert alert-warning ">';
        echo $this->session->flashdata('successful');
        echo "</div>";
      }
  ?>

                <form method="post" action="<?php echo base_url()?>Registration/insert">
                    <h1>REGISTER</h1>

                    <div class="col-sm-6">
                        <div class="form-group ">
                            <label class="control-label " for="name">
                                First Name
                            </label>
                            <input class="form-control" id="name" name="fname" type="text" />
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <div class="form-group ">
                            <label class="control-label " for="name">
                                Last Name
                            </label>
                            <input class="form-control" name="lname" type="text" />
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group ">
                            <label class="control-label " for="name">
                                Department Name(if any)
                            </label>
                            <input class="form-control" name="deptname" type="text" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group ">
                            <label class="control-label " for="name2">
                                Address
                            </label>
                            <input class="form-control" name="address" type="text" />
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group ">
                            <label class="control-label " for="email">
                                Email
                            </label>
                            <input class="form-control" id="email" name="email" type="email" />
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group ">
                            <label class="control-label " for="text1">
                                Username
                            </label>
                            <input class="form-control" id="username" name="username" type="text" onkeyup="showHint(this.value)" />
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group ">
                            <label class="control-label " for="password">
                                Password
                            </label>
                            <input class="form-control" id="password" name="password" type="password" />
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group ">
                            <label class="control-label " for="password">
                                Confirm Password
                            </label>
                            <input class="form-control" id="cpassword" name="cpassword" type="password" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <span id='message'>
                        </span>
                        <style type="text/css">
                            #message {
                                margin-left: 220px;
                                font-size: 20px;
                            }
                        </style>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group ">
                            <label class="control-label " for="textarea">
                                Comments
                            </label>
                            <textarea class="form-control" cols="40" id="textarea" name="comment" width="100%"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div>
                                <input type="submit" class="btn btn-success" value="Register" id="btn">
                            </div> <br>
                        </div>
                    </div>
                    <div class="col-sm-12" id="user-log">
                        <p align="center">Already a user? <a href="login.php"> Login Now!</a></p>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>



<script type="text/javascript">
    $('#password, #cpassword').on('keyup', function() {
        if ($('#password').val() == $('#cpassword').val()) {
            $('#message').html('Matches').css('color', 'green');
        } else
            $('#message').html('NoMatches').css('color', 'red');
    });
</script>

<style type="text/css">
    #btn {
        width: 100%;
    }
</style>

</html>
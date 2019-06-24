<!DOCTYPE html>
<html>

<head>
    <title>Posts</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link href="<?php echo base_url();?>assets/css/customStyle.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <h2 align="center">Notices</h2>
    <?php foreach ($posts as $post): ?>
    <div class="container">
        <div class="row">
            <div class="alert alert-warning">
                <u>
                    <input type="hidden" name="txtid" value="<?php echo $post['id']?>">
                    <div class="col-md-6"><b>Date Posted:<?php echo $post['date_created']?></b></div>
                    <div class="col-md-6"><span class="pull-right"><b>Date of Expiry:<?php echo $post['date_expire']?></b></span></div>
                </u> <br>
                <div class="alert alert-success">
                    <label><b>Title:</b></label><b><u><?php echo $post['title']?></u></b>
                </div>
                <div class="alert alert-info">
                    <h4 align="justify"><?php echo substr($post['body'],0,300)?> </h4>
                </div>
                <p><a class="btn btn-success" href="<?php echo site_url('/posts/'.$post['id']); ?>"> Read More</a></p>
            </div>

        </div>
    </div>
    <?php endforeach; ?> <br>
<div class="container">
    <div class="row">
        <div class="alert alert-warning">
            <u>
                <div class="col-md-6"><b>Date Posted:<?php echo $post['date_created']?></b></div>
                <div class="col-md-6"><span class="pull-right"><b>Date of Expiry:<?php echo $post['date_expire']?></b></span></div>
            </u> <br>
            <div class="alert alert-success">
                <label><b>Title:</b></label><b><u><?php echo $post['title']?></u></b>
            </div>
            <div class="alert alert-info">
                <h4><?php echo $post['body']?> </h4>
            </div>
        </div>

    </div>
</div>
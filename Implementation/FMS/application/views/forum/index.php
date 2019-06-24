 <?php if(null ==($this->session->userdata('uid')))
{
  redirect('login');
}
?>
 <div class="container">
     <div class="row">
        <form action="Forum/addquery" method="post" enctype="multipart/form-data">
        <div class="comments-container">
             <ul id="comments-list" class="comments-list">
                 <li>
                     <div class="comment-main-level">
                         <!-- Avatar -->
                         <!-- Contenedor del Comentario -->
                         <div class="comment-box">
                             <div class="comment-head">
                                 <h6 ><a href="">
                                     </a></h6>
                                      <h6>
                                     </h6>
                             </div>
                             <div class="comment-content">
                                <label class="control-label " for="name2">
                             Post Your Query
                         </label>
                         <textarea class="form-control" width="100%" height="50vh" required="required" name=query></textarea>
                         <div class="form-group"> <br>
                             <input type="submit" name="post" value="Post" class="btn btn-success">
                         </div>
                             </div>
                         </div>
                     </div>
       
 </div>
</form>
 <div class="container">
     <div class="row">
         <!-- Contenedor Principal -->
         <div class="comments-container">
             <ul id="comments-list" class="comments-list">
                 <li>

                     <!-- main comment -->
                     <?php  foreach($ques as $questions)
       { ?>
                     
                     <div class="comment-main-level">
                         <!-- Avatar -->
                         <p hidden="">QID:<?php echo($questions->qid);?></p>
                         <div class="comment-avatar"><img src="<?php echo base_url();?>assets/img/user.png" alt=""></div>
                         <!-- Contenedor del Comentario -->
                         <div class="comment-box">
                             <div class="comment-head">
                                 <h6 ><a href="">
                                         <?php echo $questions->username ?>
                                     </a></h6>
                                      <h6>
                                         <?php echo $questions->date ?>
                                     </h6>
                             </div>
                             <div class="comment-content">
                                 <?php echo $questions->query ?>
                             </div>
                         </div>
                     </div>

                     <?php //foreach()
        //{
          ?>
                     <?php
$quer = $this->db->query("SELECT answer.ans_id,answer.date,answer.id,answer.answer,registration.username,questions.qid from answer
            INNER JOIN questions ON answer.qid = questions.qid
            INNER JOIN registration ON answer.id = registration.id
           WHERE answer.qid='". $questions->qid  ."' order by answer.ans_id desc");
       ?>
                     <?php foreach($quer->result() as $ans){?>
                     <ul class="comments-list reply-list">
                         <li>
                             <!-- Avatar -->
                             <div class="comment-avatar"><img src="<?php echo base_url();?>assets/img/user.png" alt="">
                             </div>
                             <!-- Contenedor del Comentario -->
                             <div class="comment-box">
                                 <div class="comment-head">
                                     <h6 class="comment-name"><a href=""><?php echo $ans->username?></a></h6>
                                     <h6 class="comment-name" align="right"><a href=""><?php echo $ans->date?></a></h6>
                                 </div>
                                 <div class="comment-content">
                                     <?php echo $ans->answer?>
                                 </div>
                             </div>
                         </li>
                     </ul>
                     <?php } ?> <!--thik xa -->

<ul class="comments-list reply-list">
                         <li>
                             <!-- Avatar -->
                             <div class="comment-avatar"><img src="<?php echo base_url();?>assets/img/user.png" alt="">
                             </div>
                            <form method="post" action="Forum/addreply">
                             <div class="comment-box">
                                 <div class="comment-head">
                                        <input type="text" hidden="hidden" name="qid" value="<?php echo $questions->qid; ?>">
                                 </div>
                                 <div class="comment-content">
                                     <textarea class="form-control" name="txtans" placeholder="Reply Answer"></textarea>
                                 </div>
                                 <input type="submit" name="btnsubt" value="Reply" class="btn btn-primary" id="btnsub">
                             </div>
                             </form>
                             
                         </li>
                     </ul>


</li>
     </ul>
     <?php } ?>
 </div>
</div>
</div>






 <style type="text/css">
     /**
 * Oscuro: #283035
 * Azul: #03658c
 * Detalle: #c7cacb
 * Fondo: #dee1e3
 ----------------------------------*/
     * {
         margin: 0;
         padding: 0;
         -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
         box-sizing: border-box;
     }

     a {
         color: #03658c;
         text-decoration: none;
     }

     ul {
         list-style-type: none;
     }

     body {
         font-family: 'Roboto', Arial, Helvetica, Sans-serif, Verdana;
         background: #dee1e3;
     }

     /** ====================
 * Lista de Comentarios
 =======================*/
     .comments-container {
         margin: 60px auto 15px;
         width: 768px;
     }

     .comments-container h1 {
         font-size: 36px;
         color: #283035;
         font-weight: 400;
     }

     .comments-container h1 a {
         font-size: 18px;
         font-weight: 700;
     }

     .comments-list {
         margin-top: 30px;
         position: relative;
     }

     /**
 * Lineas / Detalles
 -----------------------*/
     .comments-list:before {
         content: '';
         width: 2px;
         height: 100%;
         background: #c7cacb;
         position: absolute;
         left: 32px;
         top: 0;
     }

     .comments-list:after {
         content: '';
         position: absolute;
         background: #c7cacb;
         bottom: 0;
         left: 27px;
         width: 7px;
         height: 7px;
         border: 3px solid #dee1e3;
         -webkit-border-radius: 50%;
         -moz-border-radius: 50%;
         border-radius: 50%;
     }

     .reply-list:before,
     .reply-list:after {
         display: none;
     }

     .reply-list li:before {
         content: '';
         width: 60px;
         height: 2px;
         background: #c7cacb;
         position: absolute;
         top: 25px;
         left: -55px;
     }


     .comments-list li {
         margin-bottom: 15px;
         display: block;
         position: relative;
     }

     .comments-list li:after {
         content: '';
         display: block;
         clear: both;
         height: 0;
         width: 0;
     }

     .reply-list {
         padding-left: 88px;
         clear: both;
         margin-top: 15px;
     }

     /**
 * Avatar
 ---------------------------*/
     .comments-list .comment-avatar {
         width: 65px;
         height: 65px;
         position: relative;
         z-index: 99;
         float: left;
         border: 3px solid #FFF;
         -webkit-border-radius: 4px;
         -moz-border-radius: 4px;
         border-radius: 4px;
         -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
         -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
         box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
         overflow: hidden;
     }

     .comments-list .comment-avatar img {
         width: 100%;
         height: 100%;
     }

     .reply-list .comment-avatar {
         width: 50px;
         height: 50px;
     }

     .comment-main-level:after {
         content: '';
         width: 0;
         height: 0;
         display: block;
         clear: both;
     }

     /**
 * Caja del Comentario
 ---------------------------*/
     .comments-list .comment-box {
         width: 680px;
         float: right;
         position: relative;
         -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
         -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
         box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
     }

     .comments-list .comment-box:before,
     .comments-list .comment-box:after {
         content: '';
         height: 0;
         width: 0;
         position: absolute;
         display: block;
         border-width: 10px 12px 10px 0;
         border-style: solid;
         border-color: transparent #FCFCFC;
         top: 8px;
         left: -11px;
     }

     .comments-list .comment-box:before {
         border-width: 11px 13px 11px 0;
         border-color: transparent rgba(0, 0, 0, 0.05);
         left: -12px;
     }

     .reply-list .comment-box {
         width: 610px;
     }

     .comment-box .comment-head {
         background: #FCFCFC;
         padding: 10px 12px;
         border-bottom: 1px solid #E5E5E5;
         overflow: hidden;
         -webkit-border-radius: 4px 4px 0 0;
         -moz-border-radius: 4px 4px 0 0;
         border-radius: 4px 4px 0 0;
     }

     .comment-box .comment-head i {
         float: right;
         margin-left: 14px;
         position: relative;
         top: 2px;
         color: #A6A6A6;
         cursor: pointer;
         -webkit-transition: color 0.3s ease;
         -o-transition: color 0.3s ease;
         transition: color 0.3s ease;
     }

     .comment-box .comment-head i:hover {
         color: #03658c;
     }

     .comment-box .comment-name {
         color: #283035;
         font-size: 14px;
         font-weight: 700;
         float: left;
         margin-right: 10px;
     }

     .comment-box .comment-name a {
         color: #283035;
     }

     .comment-box .comment-head span {
         float: left;
         color: #999;
         font-size: 13px;
         position: relative;
         top: 1px;
     }

     .comment-box .comment-content {
         background: #FFF;
         padding: 12px;
         font-size: 15px;
         color: #595959;
         -webkit-border-radius: 0 0 4px 4px;
         -moz-border-radius: 0 0 4px 4px;
         border-radius: 0 0 4px 4px;
     }

     .comment-box .comment-name.by-author,
     .comment-box .comment-name.by-author a {
         color: #03658c;
     }

     .comment-box .comment-name.by-author:after {
         content: 'autor';
         background: #03658c;
         color: #FFF;
         font-size: 12px;
         padding: 3px 5px;
         font-weight: 700;
         margin-left: 10px;
         -webkit-border-radius: 3px;
         -moz-border-radius: 3px;
         border-radius: 3px;
     }

     /** =====================
 * Responsive
 ========================*/
     @media only screen and (max-width: 766px) {
         .comments-container {
             width: 480px;
         }

         .comments-list .comment-box {
             width: 390px;
         }

         .reply-list .comment-box {
             width: 320px;
         }
     }
 </style>
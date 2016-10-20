<?php
include 'inc/connect.php';
?>

 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>PredatorGames</title>

  <!-- css  begins -->
   <link href="css/portfolio.css" rel="stylesheet">
   <link href="css/nf.css" rel="stylesheet">
   <link rel="shortcut icon" href="img/logo2.gif">

  <!--  css ends -->

  <!-- bootstrap stuff  -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>


   <body>
       <?php include "inc/nav.php";?>

     <div class="body1 container-fluid">


       <div class=" text-center" id="mbox">
          <h1><strong>Welcome</strong> to my portfolio</h1>
          <p>Everything you see in the portfolio is created by me including the Website.My portfolio is a never ending ife long project
          Game Development, Electronics and Progaming are a few things I do.
          I used Boostrap to make this site, Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive,
          mobile-first projects on the web.</p>
        </div>


     </div>


     <div class="body2 container-fluid">
       <div class="pbody">
       <h1 class="text-center tname">Here is some stuff I made recently </h1>
     <div class="">
     <div class="row">


      <?php
      $query = mysql_query("SELECT id, url, name, text, subt, type FROM post ORDER BY id DESC");
      while($run = mysql_fetch_array($query)){
        $pname = $run['name'];
        $psubt = $run['subt'];
        $url = $run['url'];
        $ptext = $run['text'];
        $ptype = $run['type'];
        $id = $run['id'];
         ?>

           <!-- check for image or video  -->


           <?php
            if($ptype == "picture"){
           ?>
           <!-- image start -->
           <div class="col-md-4 col-sm-6">
           <div class="thumbnail cbox" >
           <img src="uploads/<?php echo "$url"; ?>"  class="img-responsive" id="pic" ">
           <h3 class="text-center pname"><strong><?php echo $pname; ?></strong></h3>
           <h6 class="text-center"><strong><?php echo $psubt; ?></strong></h6>


            <button type="button" class="btn btn-default btn-block" id="tbtn" data-toggle="collapse" data-target="#<?php echo $id;?>">More-Info <span class="glyphicon glyphicon-chevron-down"></span></button>
            <p id="<?php echo $id;?>" class="collapse"> <?php echo $ptext;?> </p>


         </div>
         </div>
          <?php
          } ///// end picture
          ?>

                     <?php
            if($ptype == "gif"){
           ?>
           <!-- image start -->
           <div class="col-md-4 col-sm-6">
           <div class="thumbnail cbox" >
           <img src="uploads/<?php echo "$url"; ?>" id="pic" class="img-responsive"  alt="Image">
           <h3 class="text-center pname"><strong><?php echo $pname; ?></strong></h3>
           <h6 class="text-center"><strong><?php echo $psubt; ?></strong></h6>
            <button type="button" class="btn btn-default btn-block" id="tbtn" data-toggle="collapse" data-target="#<?php echo $id;?>">More-Info <span class="glyphicon glyphicon-chevron-down"></span></button>
            <p id="<?php echo $id;?>" class="collapse"> <?php echo $ptext;?> </p>
         </div>
         </div>
          <?php
          }
          ?>


          <?php
          if($ptype == "video"){
          ?>
          <!-- video start -->
          <!-- video -->
          <div class="col-md-4 col-sm-6">
          <div class="thumbnail cbox" >
          <video  loop muted autoplay id="video" align="center">  <!--  width="350" height="350" -->
          <source src="uploads/<?php echo "$url"; ?>"  type="video/mp4">
          </video>
          <h3 class="text-center pname"><strong><?php echo $pname ?></strong></h3>
          <h6 class="text-center"><strong><?php echo $psubt; ?></strong></h6>
          <button type="button" class="btn btn-default btn-block" id="tbtn" data-toggle="collapse" data-target="#<?php echo $id;?>">More-Info <span class="glyphicon glyphicon-chevron-down"></span></button>
          <p id="<?php echo $id;?>" class="collapse"> <?php echo $ptext;?> </p>
        </div>
        </div>
          <?php
          }
          ?>


      <?php
      }
      ?>

       </div>
      </div>
     </div>
    </div>
    <?php include "inc/footer2.php";?>
   </body>
 </html>

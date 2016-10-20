<?php
include 'connect.php';
?>

 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>PredatorGames</title>

  <!-- css  begins -->
     <link href="css/nf.css" rel="stylesheet">
     <link href="css/index1.css" rel="stylesheet">
     <link href="css/nav.css" rel="stylesheet">
     <link rel="shortcut icon" href="img/logo2.gif">


  <!--  css ends -->

  <!-- bootstrap stuff  -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>


   <body>
   <script src="alert.js"></script>
   <?php include "inc/nav.php";?>

   <div id="body1" class="container-fluid text-center " >
     <h1 id="pname">Welcome to_<a href="#">PredatorGames</a></h1>
     <h3><span class="label label-default" id="lb">Where Predators Are {Made}</span></h3>
   </div>




   <div class="container-fluid " id="body3" >

     <h1 class="text-center">About Me</h1>

     <div class="row">

     <div class="col-sm-6 cr">

     <div class="row text-center">
     <h2 id="name"> Hi my name is Jeffrey Alhassan, I am a Programmer </h2>
     <p class="text-info"> My favorate coding languages are HTML/CSS PHP C# Java and Python</p>
     </div>

     <div class="row">
     <p>
      18 years old and high school graduate near Boston MA. I plan to attend University
      of Massachusetts Dartmouth(class of 2020) to study Computer Science,
      I am currently focussing on finding an internship or a job that can allow
      me to improve and develop on my skill sets. I also see myself helping individuals
      and companies big and small, strengthening their businesses through the use of new
      ideas
     </p>
     </div>

     <div class="row">
     <p>I’ve worked on a wide range of projects, from graphic heavy Websites(or interfaces),from basic electronics circuit and other technology such as Arduino and Pi. I have also done Game/app development along with right
     through fixing computers and electronics devices. I enjoy finding creative solutions to challenging problems, it helps me better understand and improve as a programmer.
      My preferred design style is clean and professional, but never boring.
     </p>
     </div>

     <div class="row">
     <p> Please feel free to <a href="http://predator-games.com/contact.php">contact me </a></p>
     </div>


     </div>



     <div class="col-sm-6 r2 text-center">

     <h1>Skills</h1>

     <div class="row">
     <h3>Coding</h3>
     <span class="glyphicon glyphicon-hdd icon"></span>
     </div>

     <div class="row">
     <h3>Web Hosting/Database</h3>
     <span class="glyphicon glyphicon-tasks icon"></span>
     </div>

     <div class="row">
     <h3>Eletronics</h3>
     <span class="glyphicon glyphicon-qrcode icon"></span>
     </div>

     <div class="row">
     <h3>Game Development</h3>
     <span class="glyphicon glyphicon-knight icon"></span>
     </div>


     </div>
     </div>
    </div>







   <div id="body2" class="container-fluid ">
   <h1 class="text-center">Portfolio</h1>
    <div class="row">

    <?php
    /// store all the id into an array
    $ids_array = array();
    $idR = mysql_query("SELECT id, type FROM post WHERE type = 'gif' ");
    while($row = mysql_fetch_array($idR)){

    $ids_array[] = $row['id'];

    }

   ////print_r($ids_array);
   //// randomly selsct the stored id's
   $random_id = array_rand($ids_array, 3);
   //echo $ids_array[$random_id[0]];
  // echo $ids_array[$random_id[1]];
   //echo $ids_array[$random_id[2]];

   $idA = $ids_array[$random_id[0]];
   $idB = $ids_array[$random_id[1]];
   $idC = $ids_array[$random_id[2]];

    ?>



       <!-- Image 1 -->
      <div class="col-sm-4"  >
      <?php
          $query = mysql_query("SELECT id, name, url, type FROM post WHERE  id = '$idA' ");
          while($run = mysql_fetch_array($query)){
          $pname = $run['name'];
          $url = $run['url'];
          $id = $run['id'];
      ?>

      <div class="panel panel-default">
      <div class="panel-heading text-center"> <h3><?php echo "$pname";?> </h3></div>
      <div class="panel-body">

        <div class="thumbnail"  >
        <img src="uploads/<?php echo "$url"; ?>"  class="img-responsive"  alt="Image"  id="pt">
        </div>

        </div>
       </div>
      <?php } ?>
     </div>

     <!-- Image 2 -->
      <div class="col-sm-4"  >
      <?php
            $query = mysql_query("SELECT id, name, url, type FROM post WHERE id = '$idB' ");
          while($run = mysql_fetch_array($query)){
          $pname = $run['name'];
          $url = $run['url'];
          $id = $run['id'];
      ?>

      <div class="panel panel-default">
      <div class="panel-heading text-center"> <h3><?php echo "$pname";?> </h3></div>
      <div class="panel-body">

        <div class="thumbnail"  >
        <img src="uploads/<?php echo "$url"; ?>"  class="img-responsive"  alt="Image"  id="pt" >
        </div>

        </div>
       </div>
      <?php } ?>
     </div>

     <!-- Image 3 -->
      <div class="col-sm-4"  >
      <?php
           $query = mysql_query("SELECT id, name, url, type FROM post WHERE id = '$idC' ");
          while($run = mysql_fetch_array($query)){
          $pname = $run['name'];
          $url = $run['url'];
          $id = $run['id'];
      ?>

      <div class="panel panel-default">
      <div class="panel-heading text-center"> <h3><?php echo "$pname";?> </h3></div>
      <div class="panel-body">

        <div class="thumbnail"  >
        <img src="uploads/<?php echo "$url"; ?>"  class="img-responsive"  alt="Image"  id="pt">
        </div>

        </div>
       </div>
      <?php } ?>
     </div>


     </div>


     <div class="jumbotron text-center">
     <h2>Wanna check out the rest of my portfolio, <a href="http://predator-games.com/portfolio.php" class="btn btn-lg btn-danger "  role="button">Click Me !</a> </h2>
     </div>

    </div>


   <?php include "inc/footer2.php";?>
  </body>
</html>

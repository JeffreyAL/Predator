<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PredatorGames</title>

 <!-- css  begins -->
    <link href="css/nf.css" rel="stylesheet">
    <link href="css/contact.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo2.gif">
 <!--  css ends -->

 <!-- bootstrap stuff-->
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax	/libs/jquery/1.12.0/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
  <body>
  <?php include "inc/nav.php";?>

  <div id="body1" class="container-fluid text-center " >
    <h1 id="pname">Contact_<a href="#">PredatorGames</a></h1>
    <h3><span class="label label-default" id="lb">Ask a question {Predators} dont bite</span></h3>
  </div>

  <div id="body2" class="container-fluid ">

    <h1 class="text-center">  Contact Form</h1>
    <?php include "inc/contactB.php";?>


    <form  method="post" role="form" id="cform">

    <div class=" col-sm-6 form-group">
        <label for="name">Name:  <span class="red" > <strong> <?php echo $Ename; ?> </strong></span></label>
        <input name="name" type="text" class="form-control input-lg " id="name"  placeholder="Ex: Jeffrey" >

      </div>

      <div class=" col-sm-6 form-group">
        <label for="email">Email: <span class="red"> <strong> <?php echo $Eemail; ?> </strong></span></label>
        <input  name="email" type="text" class="form-control input-lg " id="email" placeholder="Ex: example.com" >

      </div>

       <div class="col-md-12 form-group">
         <textarea class=" form-control input-lg " name="message" rows="10" id="textarea" placeholder="Enter message" required></textarea>
       </div>

       <div class=" col-md-12 form-group">
       <button name="submit" type="submit" class="btn btn-lg pull-right" id="bsend"> Send  <span class="glyphicon glyphicon-envelope"></span>  </button>
       </div>

    </form>
   </div>

  <?php include "inc/footer2.php";?>
 </body>
</html>

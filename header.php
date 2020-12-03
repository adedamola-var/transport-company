<!DOCTYPE html>
<html>
<head>
	<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <title>LOLM</title>
  <style>
    header{
      background-size: cover;
      background-position: center;
      min-height: 1000px;   
    }
    .section{
    	padding-top: 4vw;
    	padding-bottom: 4vw;
    }
    .second-nav{
    	margin-top: -943px;
    	height: 60px;
    }
    .second-sidenav{
    	margin-top: 50px;
    }
    ul li ul li{
    	display: none;
    }
    ul li:hover ul li{
    	display: block;
    	background-color: #d50000;
    	width: 100px;
    	text-align: center;
    }
  </style>

</head>

<!-- navbar -->
  <header>
    <nav class="nav-wrapper black">
      <div class="container">
        <a href="#" class="brand-logo red-text "><i>LOLM</i></a>
        <a href="#" class="sidenav-trigger" data-target="mobile-menu">
          <i class="material-icons">menu</i>
        </a>

        <ul class="right hide-on-med-and-down">
          <li><a href="#" class="tooltipped btn-floating btn-small red darken-4" data-tooltip="Instagram">
            <i class="fab fa-instagram"></i>
          </a></li>
          <li><a href="#" class="tooltipped btn-floating btn-small red darken-4" data-tooltip="Facebook">
            <i class="fab fa-facebook"></i>
          </a></li>
          <li><a href="#" class="tooltipped btn-floating btn-small red darken-4"data-tooltip="Twitter">
            <i class="fab fa-twitter"></i>
          </a></li>
          <li><a href="#" class="tooltipped btn-floating btn-small red darken-4"data-tooltip="08143399469">
            <i class="material-icons">call</i>
          </a></li>
          <li><a href="#" class="tooltipped btn-floating btn-small red darken-4"data-tooltip="Email: <br> adedamolaafuye@gmail.com">
            <i class="material-icons">mail</i>
          </a></li>
          
         </header> 

        </ul>
        <ul class="sidenav red " id="mobile-menu">
          <li><a href="#">Instagram</a></li>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Phone</a></li>
          <li><a href="#">Email</a></li>
           <div class="second-sidenav">
          <li><a href="home.php" class="indigo-text">HOME</a></li>
          <li><a href="#about_us" class="indigo-text">ABOUT US</a></li>
          <li><a href="#services" class="indigo-text">SERVICES</a></li>
         </div>
        </ul>
      </div>
    </nav>


  <nav class="nav-wrapper red accent-4 second-nav">
      <div class="container">
        
     <a href="#" class="sidenav-trigger" data-target="mobile-menu">
          
        </a>
        <ul class="right hide-on-med-and-down">
         <div class="row">
          <div class="col pull-l8">
         <li><a href="home.php">HOME</a></li>
          <li><a href="#about_us">ABOUT US</a></li>
          <li><a href="#services">SERVICES</a>
     </li>
 </div>
</div>
        </ul>
        <ul class="sidenav red lighten-0" id="mobile-menu">
         <!-- <li><a href="#">Instagram</a></li>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Phone</a></li>
          <li><a href="#">Email</a></li>  -->
        </ul>
      </div>

    </nav>

</head>
<body>
  
 <!-- Compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){

      $('.sidenav').sidenav();
      $('.materialboxed').materialbox();
      $('.parallax').parallax();
      $('.tabs').tabs();
      $('.datepicker').datepicker({
        disableWeekends: true
      })
      $('.tooltipped').tooltip();
      $('.scrollspy').scrollSpy();
    });
  </script>


</body>
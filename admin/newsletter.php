<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin - Beever </title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<style>
  #news {
    background-color: white;
  }
</style>
<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><span id="beever">Beever</span> Admin</a>
        <ul class="user-menu">
          <li class="dropdown pull-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Admin <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
              <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
              <li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
              
    </div><!-- /.container-fluid -->
  </nav>
    
  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
    </form>
        <ul class="nav menu">
<ul class="nav menu">
      <li ><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg> Home</a></li>
      <li ><a href="controler/c_projects.php"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Projects</a></li>
      <li ><a href="controler/c_users.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Members</a></li>
      <li ><a href="controler/c_comments.php"><svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg> Comments</a></li>
      <li class="active"><a href="newsletter.php"><svg class="glyph stroked open letter"><use xlink:href="#stroked-open-letter"/></svg>Newsletter</a></li>
<!--      <li><a href="forms.html"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a></li>
      <li><a href="panels.html"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Alerts &amp; Panels</a></li>
      <li><a href="icons.html"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Icons</a></li>
      <li class="parent ">
        <a href="#">
          <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Dropdown 
        </a>
        <ul class="children collapse" id="sub-item-1">
          <li>
            <a class="" href="#">
              <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 1
            </a>
          </li>
          <li>
            <a class="" href="#">
              <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 2
            </a>
          </li>
          <li>
            <a class="" href="#">
              <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
            </a>
          </li>
        </ul>
      </li> -->
      <li role="presentation" class="divider"></li>
      <li><a href="http://195.83.128.55/~mmid114a12/beever/controler/c_index.php"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Back to Beever </a></li>
    </ul>

  </div><!--/.sidebar-->
    
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">     
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active">Icons</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Newsletter</h1>
      </div>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
          <a href="v_newsletter.php"><button> Send Newsletter</button></a>
      </div>

    </div>
    
    <div class="row">
      <div class="col-lg-12">
        <div id="news">
      </div>
    </div>
<?php 

require('../model/config.inc.php');


function getProjNews () {
$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS );
$req = "SELECT * FROM projects WHERE proj_statut = 'in progress' ORDER BY proj_id DESC LIMIT 0,4" ;
$state = $bdd->query($req);
//$results = array_reverse($results);
$getProjNews = $state-> fetchAll();
return $getProjNews;
}

// recup email form
$mailrecup = $_POST['email'];
$mail = $mailrecup ;


$news = getProjNews ();

$html = " <html>
      <head>
        <style>
          #news h1{
            font-size : 30px;
            color:rgb(0,0,0);
          }
          #news p {
            color:20px;
            color:rgb(0,0,0);
          }
          #news h2 {
            font-size:26px;
            color:rgb(0,0,0);
          }
          #news a:link, #news a {
            color:rgb(0,0,0);
          }
          #news h4 {
            font-size:18px;
            color:rgb(0,0,0);
          }
          #news h3 {
            font-size:18px;
            color:rgb(0,0,0);
          }
        </style>
      </head>
      <body>

      <center>
        <a href='http://195.83.128.55/~mmid114a12/beever/controler/c_index.php'><img src=\"http://195.83.128.55/~mmid114b02/projetS3/Beever/img/logo_newsletter.png\" width=\"200\"  alt=\"\"></a>
        <h1> What's up on Beever ? </h1>
        <p>Our newsletter has the pleasure to present you the last four projects appeared on Beever : </p> <hr>
      ";

foreach ($news as $news):
$html .= '<p> <h2><a href ="http://195.83.128.55/~mmid114a12/beever/controler/c_project.php?name='.$news["proj_name"] .'"> ' .$news["proj_name"] .'</a></h2></p>
      <img height="200px; "src="http://195.83.128.55/~mmid114a12/beever/projects/upload/'.$news['proj_photo'] .'">
      <h4>' .$news['proj_present'] ."</h4> <hr> <br>";
endforeach;

$html .= "
    <h3>Follow us on <a href='http://195.83.128.55/~mmid114a12/beever/controler/c_index.php'>Twitter</a> and <a href='http://195.83.128.55/~mmid114a12/beever/controler/c_index.php'> Facebook </a> </center>
      </body>
      </html>";

      echo $html;?>
</div>
        </div>
                
      </div><!--/.col-->
    </div><!--/.row-->
  </div>  <!--/.main-->

  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script>
    $('#calendar').datepicker({
    });

    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
            $(this).find('em:first').toggleClass("glyphicon-minus");      
        }); 
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
      if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
      if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
  </script> 
</body>

</html>

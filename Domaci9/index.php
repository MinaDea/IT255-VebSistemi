<?php 
session_start();

$isLogged = false;
$user = null;

if (isset($_SESSION["user"])) {
  $isLogged = true;
  $user = $_SESSION["user"];
}
?>

<html>
  <head>
    <title>Angular 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


    <!-- 1. Load libraries -->
    <!-- IE required polyfills, in this exact order -->
    <script src="node_modules/es6-shim/es6-shim.min.js"></script>
    <script src="node_modules/angular2/es6/dev/src/testing/shims_for_IE.js"></script>

    <script src="node_modules/angular2/bundles/angular2-polyfills.js"></script>
    <script src="node_modules/systemjs/dist/system.src.js"></script>
    <script src="node_modules/rxjs/bundles/Rx.js"></script>
    <script src="node_modules/angular2/bundles/angular2.dev.js"></script>
    <script src="node_modules/angular2/bundles/http.dev.js"></script>
    <!-- 2. Configure SystemJS -->
    <script>
      System.config({
        packages: {
          app: {
            format: 'register',
            defaultExtension: 'js'
          }
        }
      });
      System.import('app/main')
            .then(null, console.error.bind(console));
    </script>
  </head>
  <!-- 3. Display the application -->
  <body>
     <header id="top" class="header">
        <nav class="navbar navbar-default">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li><a href="#home">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#gallery">Gallery</a></li>
                  <li><a href="#booking">Booking</a></li>
                  <li><a href="#contact">Contact</a></li>
                </ul>
                <?php if ($isLogged) { ?>
                 <ul class="nav navbar-nav navbar-right">
                  <li><a><?php echo $user['first_name'] . ' ' . $user['last_name'] ?></a></li>
                  <li><a href="logout.php">Logout</a></li>
                </ul>
                <?php } else { ?>
                <ul class="nav navbar-nav navbar-right">
                  <li data-toggle="modal" data-target="#myModal"><a>Sign Up</a></li>
                  <li data-toggle="modal" data-target="#myModal2"><a>LogIn</a></li>
                </ul>
                <?php } ?>
              </div>
            </div>
          </nav> 
    </header>

    <my-app>Loading...</my-app>

    <div style="z-index: 9999;" id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Sign Up</h4>
          </div>
          <div class="modal-body">
          <form id="submit-form" action="signup.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">First Name:</label>
                <div class="col-sm-10">
                  <input type="text" name="first_name" class="form-control" id="email" placeholder="First Name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Last Name:</label>
                <div class="col-sm-10">          
                  <input type="text" name="last_name" class="form-control" id="pwd" placeholder="Last Name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Email</label>
                <div class="col-sm-10">          
                  <input type="email" name="email" class="form-control" id="pwd" placeholder="Email">
                </div>
              </div>
               <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password</label>
                <div class="col-sm-10">          
                  <input type="password" name="password" class="form-control" id="pwd" placeholder="Password">
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button id="submit-btn" type="button" class="btn btn-default">Sign Up</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
     <div style="z-index: 9999;" id="myModal2" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">LogIn</h4>
          </div>
          <div class="modal-body">
          <form id="submit-form2" action="login.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Email</label>
                <div class="col-sm-10">          
                  <input type="email" name="email" class="form-control" id="pwd" placeholder="Email">
                </div>
              </div>
               <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password</label>
                <div class="col-sm-10">          
                  <input type="password" name="password" class="form-control" id="pwd" placeholder="Password">
                </div>
              </div>
              </form>
          </div>
          <div class="modal-footer">
           <button id="submit-btn2" type="button" class="btn btn-default">LogIn</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $('#submit-btn').click(function(){
                $('#submit-form').submit();
                cons
            });

            $('#submit-btn2').click(function(){
                $('#submit-form2').submit();
            });
        });

        // $('a').click(function(){
        //     $('html, body').animate({
        //         scrollTop: $( $.attr(this, 'href') ).offset().top
        //     }, 500);
        //     return false;
        // });
    </script>
  </body>
</html>

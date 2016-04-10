<?php 
session_start();

$isLogged = false;
$user = null;

if (isset($_SESSION["user"])) {
  $isLogged = true;
  $user = $_SESSION["user"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>MetHotels</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

</head>

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

    <section id="home">
        <div class="text-vertical-center">
            <h1>MetHotels</h1>
            <h3>Welcome to MetHotels!!!</h3>
            <a href="#booking" class="reserve-button">Book now</a>
        </div>
    </section>

     <section id="about" class="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>About us</h2>
                    <hr class="small">
                    <div class="description">
                        Met Hotels & Resorts is an international chain of full service hotels and resorts and the flagship brand of MetHotels Worldwide. The original company was founded by Dragan Domazet - Domi.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
		      <h2>Gallery</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="gallery-image">
                                <a href="#">
                                    <img class="img-responsive" src="images/1.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="gallery-image">
                                <a href="#">
                                    <img class="img-responsive" src="images/2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="gallery-image">
                                <a href="#">
                                    <img class="img-responsive" src="images/3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="gallery-image">
                                <a href="#">
                                    <img class="img-responsive" src="images/4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <section id="booking" class="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Booking</h2>
                    <hr class="small">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="email">First Name:</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="First Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="pwd">Last Name:</label>
                          <div class="col-sm-10">          
                            <input type="text" class="form-control" id="pwd" placeholder="Last Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="pwd">Arrival Date:</label>
                          <div class="col-sm-10">          
                            <input type="text" class="form-control" id="pwd" placeholder="Arrival Date">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="pwd">Departue Date:</label>
                          <div class="col-sm-10">          
                            <input type="text" class="form-control" id="pwd" placeholder="Departue Date">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="pwd">Number Of Guests:</label>
                          <div class="col-sm-10">          
                            <input type="text" class="form-control" id="pwd" placeholder="Number Of Guests">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="pwd">Room Type:</label>
                          <div class="col-sm-10">          
                            <input type="text" class="form-control" id="pwd" placeholder="Room Type">
                          </div>
                        </div>
                        <div class="form-group">        
                          <div class="col-sm-offset-2 col-sm-10">
                            <button id="reserve" class="btn btn-default">Reserve</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Contact</h2>
                    <hr class="small">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="email">First Name:</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="First Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="pwd">Last Name:</label>
                          <div class="col-sm-10">          
                            <input type="text" class="form-control" id="pwd" placeholder="Last Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="pwd">Email</label>
                          <div class="col-sm-10">          
                            <input type="email" class="form-control" id="pwd" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="pwd">Message:</label>
                          <div class="col-sm-10">          
                           <textarea class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                        <div class="form-group">        
                          <div class="col-sm-offset-2 col-sm-10">
                            <button id="msg" class="btn btn-default">Submit</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

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
            });

            $('#submit-btn2').click(function(){
                $('#submit-form2').submit();
            });

            $('#reserve').click(function(event){
                alert('Reserved.');
            })

            $('#msg').click(function(event){
                alert('Message sent.');
            })
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
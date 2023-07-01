


<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Rocket League Tournument</title>
		<meta charset="UTF-8" >
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

	</head>
	<body>
  <div id="nav-placeholder">

  </div>
  <script>
  $(function(){
    $("#nav-placeholder").load("nav.php");
  });
  </script>






		<div id="TopImg" class="carousel still" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/RocketLeagueCarousel.jpg" class="" alt="RocketLeagueCarousel" >
        </div>
        <div class="intro-inner">
			    <div class="grid-container">
				    <div class="grid-x align-center logo-wrap">
					    <div class="cell small-12 medium-12 large-12 text-center logo zoomIn">
                <img class="rlcsx-logo center-fit" src="images/rlcslogo_white.webp">
                <div class="carousel-caption center-fit d-none d-md-block">
                  <h1>Rocket League Iran Championships</h1>
                    <p>The first un-official RLCS Tournuments held in Iran</p>
                </div>
					    </div>
				    </div>
          </div>
        </div>
      </div>
    </div>


        <section class="news">
            <div class="news-inner py-3 container-fluid">
                <h1 class="text-center">News</h1>
            </div>
        </section>
        <section class="my-1 solid">
          <p class="container-fluid news-container solid">
            <div class="row">
          <div class="solid imgbox irbanner col-lg-7 colmd-4 col-12">
            <img src="images/rlcsiranbanner.png" class="center-fit rounded-corners mx-3 my-1 pb-0 pr-3" />
          </div>
          <div class="imgbox irbannerbtn col-lg-1 col-md-4 col-12">
            <a href="login.php">
            <img src="images/signupbutton.png" class="hoverexpand rounded-corners mx-0 pb-0 ml-5" />
            <div class="zoom"></div></a>
          </div>
          </div>
        </section> </p>

        <p class="solid">
        </p>

        <a id="contact">
        <section class="my-4">
            <div class="py-2">
                <h1 class="text-center"><b>Contact Us</b></h1>
            </div>

            <div class="container-fluid">
            <p class="text-center">let us know if you encounter any problems. we will try to get back to you ASAP. your feedback is appreciated.</p>

            <div class="w-50 m-auto">
              <form action="about.php" method="post">
                <div class="form.group">
                  <label>Name:</label>
                  <input type="text" name="name" class="form-control">
            </div>
            <form action="about.php" method="post">
                <div class="form.group">
                  <label>Email:</label>
                  <input type="email" name="email" class="form-control">
            </div>
            <form action="about.php" method="post">
                <div class="form.group">
                  <label>Subject:</label>
                  <input type="text" name="subject" class="form-control">
            </div>
            <button type="submit" class="btn btn-success my-1">Submit</button>
        </section>
        </a>

        <p class="solid">
        </p>

        <a id="about">
        <section class="my-4">
            <div class="py-2">
                <h1 class="text-center">About</h1>
            </div>
          <div class="container-fluid">
            <h3 class="text-center">Rocket League IR</h3> <br>
            <p class="text-center"><b>We are an indepentant,user-funded team. our goal is to be the first and the best tournumnet holding website in Iran. our motivation comes from the USA sanctions against our country and most global tournument websites not including us in their registerations becasue of it. we hope we bring fun times to you IR players of rocket league.</b></p>
            <h2 class="text-center"><b>THIS IS ROCKET LEAGUE!</b>
        </div>
        </section>
        </a>


                 
              
        <footer>
          <p>2023 RL IR, Inc. All rights reserved.<br>
          </p>
        </footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

	</body>
	</html>
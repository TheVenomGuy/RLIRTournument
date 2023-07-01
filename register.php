<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register</title>
        <meta charset="UTF-8" >
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/login.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    </head>
	<body style="background:linear-gradient(.25turn, #040042, #479de7, #004275, #0031f8, #00036f);">
  <div id="nav-placeholder"></div>
  <script>
  $(function(){
    $("#nav-placeholder").load("nav.html");
  });
  </script>

  <div class="bgcolor"></div>
    <h1 class="color text-center py-4">Welcome</h2>


    <section class="loginform">
    <form action="registerdetails.php" method="post">
        <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <section class="left sectiondiv">
        <div class="inputdiv">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label for="email"><b>Email</b></label> <br>
            <input type="text" placeholder="Enter Email" name="email" id="email" required> <br>
        </div>
        <div class="inputdiv">
            <label for="uname"><b>Display name</b></label> <br>
            <input type="text" placeholder="Enter Name" name="uname" id="uname" required> <br>
        </div>
        <div class="inputdiv">
            <label for="psw"><b>Password</b></label> <br>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required> <br>
        </div>
        <div class="inputdiv">
            <label for="psw-repeat"><b>Repeat Password</b></label> <br>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required> <br>
        </div>
    <hr>
    </form>
    </section>

    <div>
        <p>By creating an account you agree to our <a class="nounderline" href="#">Terms & Privacy</a>.</p>
            <button type="submit" class="registerbtn">Register</button>

            <div class="container signin">
                <p>Already have an account? <a href="login.php">Sign in</a>.</p>
            </div>
    </div>
</form> 
</section>




</body>
</html>
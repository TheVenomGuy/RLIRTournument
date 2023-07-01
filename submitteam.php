<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Team Sign up</title>
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
    $("#nav-placeholder").load("nav.php");
  });
  </script>

<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {?>

  <div class="bgcolor"></div>
    <h1 class="color text-center py-4">Team Registration</h2>


    <section class="loginform">
    <form action="submitteamdetails.php" method="post">
        <div class="container">
    <h1>Submit Team</h1>
    <p>Please fill in this form Submit your team.</p>
    <hr>

    <section class="left sectiondiv">
        <div class="inputdiv">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label for="teamsize"><b>Team Size</b></label> <br>
            <select name="select team size" id="teamsize" required>
                <option value="solo">1</option>
                <option value="duo">2</option>
                <option value="Trio">3</option>
            </select>
        </div>
        <div class="inputdiv">
            <label for="tname"><b>Team Name</b></label> <br>
            <input type="text" placeholder="Enter Name" name="tname" id="tname" required> <br>
        </div>
    <hr>
    </form>
    </section>
    <div>
        <button type="submit" class="registerbtn">Register</button>
    </div>
</form> 
</section>




</body>
</html>
<?php
  }else{
      header("location: login.php?error= You need to login first before submitting new teams."); 
  }
  ?>
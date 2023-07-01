<?php
  session_start(); ?>
<style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  transform: translate(-50%, 25px);
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Rocket League IR ESports</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Participants
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Teams</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Players</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="submitteam.php">Submit Team/Player</a></li>
            </ul>
          <li class="nav-item">
            <a class="nav-link" href="index.php#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#about">About</a>
          </li>
        </ul>
        <?php
          if (!(isset($_SESSION['id']) && isset($_SESSION['email']))) {?>
        <a class="d-flex px-1 nounderline" href="register.php">
            <button class="btn btn-outline-success" >Register</button>
        </a>
        <a class="d-flex px-1 nounderline" href="login.php">
          <button class="btn btn-outline-success" >Login</button>
        </a>
        <a class="d-flex px-1 nounderline" href="submitteam.php">
          <button class="btn btn-outline-success">Submit Team</button>
        </a>  
        <?php }else{ ?>
            <a class="d-flex px-1 nounderline" href="submitteam.php">
            <button class="btn btn-outline-success">Submit Team</button>
            </a>
            <div class="d-flex px-1 dropdown">
            <button class="btn btn-outline-success dropbtn"> <?php echo $_SESSION['name'] ?> </button>
            <div class="dropdown-content">
            <a href="logout.php">Logout</a>


        <?php } ?>

      </div>
    </div>
  </nav>

<?php
    include "db_conn.php";
    mysqli_select_db($con, 'registeredusers');

    if (isset($_POST['email']) && isset($_POST['psw']) && isset($_POST['psw-repeat']) && isset($_POST['uname'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $email = validate($_POST['email']);
        $password = validate($_POST['psw']);
        $passwordconfirm = validate($_POST['psw-repeat']);
        $displayname = validate($_POST['uname']);

        if ( !  ($password == $passwordconfirm)) {
            header("Location: register.php?error=Passwords don't match.");
            exit();
        }else{
            $query = "INSERT INTO users (email, password, username) VALUES ('$email', '$password', '$displayname')";

            mysqli_query($con, $query);
            header('location:index.php');
        }
    }
 /*       if (empty($email)) {
            header("Location: register.php?error=Email is required");
            exit();
        }else if (empty($password)) {
            header("Location: register.php?error=Password is required");
            exit();
        }else if (empty($passwordconfirm)) {
            header("Location: register.php?error=Password Repeat is required");
            exit();
        }else if ($password != $passwordconfirm) {
            header("Location: register.php?error=Passwords don't match.");
            exit();
        }else{
            echo "Valid.";
        }

    }else{
        header("Location: register.php");
        exit();
    }

    if($password == $passwordconfirm) {
        $query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

        mysqli_query($con, $query);
        header('location:index.php');
    }
    else {

    }
    */
?>
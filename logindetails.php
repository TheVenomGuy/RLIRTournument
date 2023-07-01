<?php
    session_start();
    include "db_conn.php";

    mysqli_select_db($con, 'registeredusers');

    if (isset($_POST['email']) && isset($_POST['psw'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $email = validate($_POST['email']);
        $password = validate($_POST['psw']);
        $displayname = "";

        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $password) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                header("location: index.php");
            }else{
                header("location: login.php?error=Incorrect username or password");
                exit();
            }
        }
        }else{
            header("location: login.php?error=Incorrect username or password");
            exit();
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
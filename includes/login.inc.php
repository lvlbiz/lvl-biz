<?php
require 'dbh.inc.php';
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";

function checkRole($role) {
    $usertype = array(
        1 => 'Location: ../lvl-biz/home.php', // admin
        2 =>  'Location: ../lvl-biz//home-users.php', // web developer
        3 =>  'Location: ../lvl-biz//home-users.php', // salesman
    );
    return $usertype[$role];
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty($username_err) && empty($password_err)){
        $sql = "SELECT id, username, password, usertype FROM accounts WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = $username;
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
              
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $usertype);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["usertype"] = $usertype;                            
                            
                            header(checkRole($usertype));
                        } else{
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}

?>




 

 


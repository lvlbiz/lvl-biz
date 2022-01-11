<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.php');
	exit;
}

require "includes/register-user.php";

?>
<!DOCTYPE html>
<html>
	<?php include('./includes/header.php');?>
	<body class="loggedin">
		<?php include('./includes/nav-bar.php');?>
		<div class="content">
            <div class="row">
	            <div class="wrapper">
                
    	            <h2>Add User</h2>
    	            <p>Please fill this form to create an account.</p>
    	            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    	                <div class="form-group">
    	                    <label>Username</label>
    	                    <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
    	                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
    	                </div>    
    	                <div class="form-group">
    	                    <label>Password</label>
    	                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
    	                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
    	                </div>
    	                <div class="form-group">
    	                    <label>Usertype</label>
    	                    <select class="form-control <?php echo (!empty($usertype_err)) ? 'is-invalid' : ''; ?>" name="usertype" value="<?php echo $usertype;?>">
                                <option value="">Select usertype</option>
                                <option value="2">Web Developer</option>
                                <option value="3">Salesman</option>
                            </select>
    	                    <span class="invalid-feedback"><?php echo $usertype_err; ?></span>
    	                </div>
    	                <div class="form-group">
    	                    <input type="submit" class="btn btn-primary" value="Submit">
    	                    <input type="reset" class="btn btn-secondary ml-2" value="Reset">
    	                </div>
    	            </form>
                </div>    
            </div>
		</div>
	</body>
</html>


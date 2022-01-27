<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.php');
	exit;
}


require "includes/admin/store-questions.php";

?>
<!DOCTYPE html>
<html>
	<?php include('includes/admin/header.php');?>
	<body class="loggedin">
		<?php include('includes/admin/nav-bar.php');?>
		<div class="content">
            <div class="row">
	            <div class="wrapper col-md-6">
				<?php 
                if ( isset($_SESSION['category_add']) && $_SESSION['category_add'] == 1 ) {
                	echo 
                	'<div id="alert" class="d-flex alert alert-success alert-dismissible">
                	    <div><button type="button" class="close" data-dismiss="alert">&times;</button></div>
                	    <div>Successfully added a user.</div>
                	</div>';  
					unset($_SESSION['category_add']);   
                } 
            	?>
					<?php
						
						if (mysqli_connect_errno()) {
						  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  	exit();
						}
						$category = array();
						$sql = "SELECT set_type, name FROM alts_salesman_set_type ORDER BY sort";
						if ($result = mysqli_query($link, $sql)) {
							while ($row = mysqli_fetch_row($result)) {
								$category[$row[0]] = isset($row[1]) ? $row[1] : null;
						  	}
						  	mysqli_free_result($result);
						}
					?>
    	            <h2>Add Category</h2>
    	            <p>Please fill this form to question creation.</p>
    	            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    	                <div class="form-group">
    	                    <label>Category</label>
    	                    <select class="form-control" name="category">
								<option>Select Category</option>
								<?php 
									foreach ($category as $key => $value) {
										echo '<option value="'.$key.'">'.$value.'</option>';
									}
								?>
                            </select>
							<span class="invalid-feedback"><?php echo $category_err; ?></span>
    	                </div>
						<div class="form-group">
    	                    <label>Group</label>
    	                    <input type="input" name="group" class="form-control">
    	                    <span class="invalid-feedback"><?php echo $group_err; ?></span>
    	                </div>    
    	                <div class="form-group">
    	                    <label>Question</label>
    	                    <textarea id="question" name="question" rows="2" cols="50" class="form-control">
							</textarea>
    	                    <span class="invalid-feedback"><?php echo $question_err; ?></span>
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

<script>
	$(document).ready(function(){
		$('body').on('click' ,'.close', function(){
			$('.alert').toggle();
		})
	});
</script>
<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<?php include('./includes/admin/header.php');?>
	<body class="loggedin">
		<?php include('./includes/admin/nav-bar.php');?>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?=$_SESSION['username']?>!</p>
			               
			<?php 
                if ( isset($_GET['success']) && $_GET['success'] == 1 ) {
                echo 
                '<div id="alert" class="d-flex alert alert-success alert-dismissible">
                    <div><button type="button" class="close" data-dismiss="alert">&times;</button></div>
                    <div>Successfully added a user.</div>
                </div>';       
                } 
            ?>
			
			<div class="container">
				<table id="contact-detail" class="display nowrap" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Username</th>
							<th>Usertype</th>
							<th>Date Created</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</body>
</html>


<script type="text/javascript">
  $(document).ready(function() {
	$.fn.dataTable.ext.errMode = 'throw';
	$('#contact-detail').dataTable({
		"scrollX": true,
		"pagingType": "numbers",
        "processing": true,
        "serverSide": true,
        "ajax": "includes/users-datatables.php",
    } );
	
  });

</script>
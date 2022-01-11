<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<?php include('./includes/header.php');?>
	<body class="loggedin">
		<?php include('./includes/nav-bar.php');?>
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
			<div>
				<table id="my-example">
    				<thead>
      					<tr>
      					    <th>Id</th>
      					    <th>Username</th>
      					    <th>Usertype</th>
      					</tr>
    				</thead>
  				</table>
			</div> 
		</div>
	</body>
</html>


<script type="text/javascript">
  $(document).ready(function() {
      $('#my-example').dataTable({
        /* "bProcessing": true, */
        "ajax": "./includes/users-datatables.php",
        "columns": [
              { mData: 'id' } ,
              { mData: 'username' },
              { mData: 'usertype' }
            ]
      });  
  });

// $(document).ready(function() {
//     $('#books').DataTable({
//         "ajax": "get_books.php",
//         "columns": [
//            { "data": "author" },
//            { "data": "title" },
//            { "data": "genre" },          
//            { "data": "location" }         
//         ]
//     });
// });
</script>
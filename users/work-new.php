<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.php');
	exit;
}


?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/e36f36e146.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/header.css">
    <style>
        #videosection {
  margin: 0 auto; 
  display:flex;
  width: 75%; 
}

.videoframe {
  border: 0px solid #fff; 
  background-color: teal;
  display:inline-block;
}

.playlist-items-list {
  display: inline; 
  margin-left: 20px; 
}

.playlist-items-list ol{
  padding-left: 0;
  list-style-type: none; 
}

.playlist-items-list ol li{
  padding: 10px 5px; 
  background-color: grey;
}

/* Case */
.case-vid{
    padding-top: 100px;
}
.case-vid iframe {
  display: block;
  margin: 0 auto;
  padding: 30px 0;
}

.case-vid h2 {
  font-family: Catamaran;
  font-size: 28px;
  font-weight: 600;
  color: #111;
  text-transform: uppercase;
  text-align: center;
}

.case-vid article h3 {
  font-family: Catamaran;
  font-size: 28px;
  font-weight: 600;
  color: #111;
  text-transform: uppercase;
  padding-bottom: 20px;
}

.case-vid article p {
  font-family: Catamaran;
  font-size: 14px;
  font-weight: 600;
  color: #111;
  line-height: 24px;
  -webkit-column-count: 3;
          column-count: 3;
  -webkit-column-gap: 30px;
          column-gap: 30px;
}

@media only screen and (min-width: 1000px) {
  .wrapper {
    width: 1000px;
    margin: 0 auto;
  }

  .div-section .btns {
    display: flex;
    justify-content: space-around;
    padding-top: 100px;
  }

  .div-section .btns > button {
      width: 130px;
      height: 70px;

  }
}


    </style>
  </head>
  <body>
        <header class="topbar">
            <?php include('../includes/nav-bar-user.php');?>
            <nav class="user">
                <ul>
                    <li class="user">
                        <a href="#"><i class="fas fa-user-circle fa-3x"></i></a>
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?=$_SESSION['username']?></a>
                        <ul class="dropdown-menu fade-up">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="../includes/logout.inc.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>

      
        <section class="case-vid">
            
            <div class= "div-section">
            <div class="wrapper">
                <h2></h2>
                    <iframe class="vid-frame" width="650" height="400" src="https://www.youtube.com/embed/nKQCWCe6b9c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
                <div class ="wrapper btns sec-btn">
                    <button type="button" class="btn btn-primary" data-id="1">Website</button>
                    <button type="button" class="btn btn-secondary" data-id="2">Webshop</button>
                    <button type="button" class="btn btn-success" data-id="3">SEO</button>
                    <button type="button" class="btn btn-danger" data-id="4">Bugfixing</button>
                    <button type="button" class="btn btn-warning" data-id="5">Program</button>
                </div>
                    <?php if ($_SESSION['usertype'] == 3) { ?>
                           <iframe class="iframe"  src="salesman/form/index.php" style="display:none"></iframe>
                    <?php 
                        } else { 
                            include ('web-developer/sample-page-worker.php');
                        }
                    ?>
                    
            </div>    
        </section>
  </body>      
</html> 

<script>
    $(document).ready(function(){
        $('.sec-btn').on('click', '.btn', function(e){
            e.preventDefault;
            console.log('btn');
            $('.case-vid').find('.vid-frame').css('display', 'block');
            if ($(this).attr('data-id') == '1') $(this).parents('.sec-btn').siblings('.iframe').css('display', 'block');
        });
    });
</script>
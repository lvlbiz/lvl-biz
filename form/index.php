<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Work Form</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<main class="content" role="content">
	
	<section id="section1">
		<div class="container-fluid col-md-6 col-md-offset-3">

<!-- MultiStep Form -->
<form id="regForm" action="/submit_page.php">
  <!-- One "tab" for each step in the form: -->
 
  <div class="tab">
      <h3>Firm Information</h3>
        <label>What is the name of your firm?</label>
        <p><input class="field" type="text" placeholder="" oninput="this.className = ''"></p>
          <label>What is the activity of your firm?</label>
        <p><input class="field" type="text" placeholder="" oninput="this.className = ''"></p>
      
      <h3>Audience</h3>
      <label>Who are your customers?</label>
        <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>
      <label>How old are they?</label>
    <p><input type="text" class="field"placeholder="" oninput="this.className = ''"></p> 
  </div>
    
    
  <div class="tab">
     <h3>Purpose</h3>
          <label>What do You want from visitors to accomplish on Your website?</label>
        <p><input  type="text" class="field" placeholder="" oninput="this.className = ''" ></p>

          <label>What is the main purpose of the website and what goals do you want your website to achieve?</label>
        <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>

          <label>Is it important to You that Your website is on the first place on the Google specific keyword so that You can get organic traffic?</label>
        <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>
      
    <h3>Style</h3>
      <label>What types of things do you see on other websites that you really like?</label>
    <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>
      
      <label>What types of things do you see on other websites that you really hate?</label>
    <p><input  type="text" class="field" placeholder="" oninput="this.className = ''" ></p>
      
     <label>Can You describe me the style of the website that you want?</label>
    <p><input class="field" placeholder="" oninput="this.className = ''" ></p>
  </div>
    
  <div class="tab">
      <h3>Important</h3>
      <label>Can You name me 3 things that are most important on your new website?</label>
    <p><input class="field" placeholder="" oninput="this.className = ''" ></p>
      
      <label>Can You name me 3 things that are least important on your new website?</label>
    <p><input class="field" placeholder="" oninput="this.className = ''"></p>
      
     <h3>Pages</h3>
      <p>Which pages would You like to have?</p>
        <input class="radio" type="radio"  oninput="this.className = ''">
            <label>Home</label><br>
        <input class="radio" type="radio"  oninput="this.className = ''">
            <label>Landing Page</label><br>
        <input class="radio" type="radio"  oninput="this.className = ''">
            <label>Services/Products</label><br>
        <input class="radio" type="radio"  oninput="this.className = ''">
            <label>About Us</label><br>
        <input class="radio" type="radio"  oninput="this.className = ''">
            <label>Contact</label><br>
        <input class="radio" type="radio"  oninput="this.className = ''">
            <label>Portfolio</label><br>
        <label>Can you name me 3 things that are least important on your new website?</label>
    <p><input placeholder="" oninput="this.className = ''"></p>
  </div>
    
  <div class="tab">
      <h3>Features</h3>
      <p>What features does it need to have?</p>
      <input class="radio" type="radio"  oninput="this.className = ''">
            <label>Booking</label><br>
        <input class="radio" type="radio"  oninput="this.className = ''">
            <label>Chat</label><br>
        <input class="radio" type="radio"  oninput="this.className = ''">
            <label>Language Translation</label><br>
         <input class="radio" type="radio"  oninput="this.className = ''">
            <label>Payment Gateway</label><br>
      
      <h3>Competitors</h3>
          <label>Who are your main competitors?</label>
        <p><input  type="text" class="field" placeholder="" oninput="this.className = ''" ></p>

          <label>What makes you different from your competitors?</label>
        <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>

        <label>Why should people do business with You rather than Your competitors?</label>
        <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>
    </div>
    
  <div class="tab">
     <h3>Hosting and Domain</h3>
          <label>Have You got hosting?</label>
        <p><input  type="text" class="field" placeholder="" oninput="this.className = ''" ></p>

          <label>Have You got domain?</label>
        <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>
      
            <h3>Information or Service</h3>
      <input class="radio" type="radio"  oninput="this.className = ''">
            <label>Yes, Provide us with credentials and information</label><br>
        <input class="radio" type="radio"  oninput="this.className = ''">
            <label>No, We will provide free domain and free hosting for one year</label><br>
      
            <h3>Content</h3>
        <label>Please provide me with the picture of your shop/office?</label>
            <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>
      <label>Do you need text or you can provide it by your own?</label>
            <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>
      <label>Have you got any social media accounts?</label>
            <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>
  </div>
        
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px; display: none;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>

  </div>
</form>
<!-- /.MultiStep Form -->
	
		</div>
	</section>

</main> <!-- /content -->
	

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script><script  src="./script.js"></script>

</body>
</html>
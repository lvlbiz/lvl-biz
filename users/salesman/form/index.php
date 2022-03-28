<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Work Form</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'><link rel="stylesheet" href="./style.css">
<style>
  .bd-example {
    padding: 1.5rem;
    margin-right: 0;
    margin-left: 0;
    border-width: .2rem;
}
.bd-highlight {
    background-color: rgba(86,61,124,.15);
    border: 1px solid rgba(86,61,124,.15);
    flex-direction: column;
}
.bd-hide {
  display: none !important;
}
  </style>
</head>
<body>
<!-- partial:index.partial.html -->
<main class="content" role="content">
	
	<section id="section1">
		<div class="container-fluid col-md-6 col-md-offset-3">
            

<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Thank You for Your time (User)</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        If you have got any questions You can ask right away?
            So if that is it, I would like thank You for Your time, and good bye (name).
      </div>
      <div class="modal-footer">
<!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-primary">Close and Proceed</button>
      </div>
    </div>
  </div>
</div
            
    
<!-- MultiStep Form -->
<form id="regForm"  action="https://stackoverflow.com/">
  <!-- One "tab" for each step in the form: -->
 
    <div class="tab">
         <h4>Step 1</h4>
          <h3>Firm Information</h3>
       
            <label>What is the name of your firm?</label>
            <p><input class="field" type="text" placeholder="" oninput="this.className = ''"></p>
              <label>What is the activity of your firm?</label>
            <p><input class="field" type="text" placeholder="" oninput="this.className = ''"></p>
          </div>
    
    <div class="tab">
        <h4>Step 2</h4>
          <h3>Audience</h3>
          <label>Who are your customers?</label>
            <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>
          <label>How old are they?</label>
        <p><input type="text" class="field"placeholder="" oninput="this.className = ''"></p> 
</div>

    <div class="tab">
        <h4>Step 3</h4>
         <h3>Purpose</h3>
              <label>What do You want from visitors to accomplish on Your website?</label>
            <p><input  type="text" class="field" placeholder="" oninput="this.className = ''" ></p>

              <label>What is the main purpose of the website and what goals do you want your website to achieve?</label>
            <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>

              <label>Is it important to You that Your website is on the first place on the Google specific keyword so that You can get organic traffic?</label>
            <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>
</div>

    <div class="tab">
        <h4>Step 4</h4>
        <h3>Style</h3>
          <label>What types of things do you see on other websites that you really like?</label>
        <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>

          <label>What types of things do you see on other websites that you really hate?</label>
        <p><input  type="text" class="field" placeholder="" oninput="this.className = ''" ></p>

         <label>Can You describe me the style of the website that you want?</label>
        <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>
</div>

    <div class="tab">
        <h4>Step 5</h4>
          <h3>Important</h3>
          <label>Can You name me 3 things that are most important on your new website?</label>
        <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>

          <label>Can You name me 3 things that are least important on your new website?</label>
        <p><input type="text" class="field" placeholder="" oninput="this.className = ''"></p>

    </div>

    <div class="tab">
        <h4>Step 6</h4>
         <h3>Pages</h3>
          <p>Which pages would You like to have?</p>
            <input type="checkbox" name="home" value="home" oninput="this.className = ''">
                <label>Home</label><br>

            <input class="radio" type="checkbox"  name="landing" value="landing" oninput="this.className = ''">
                <label>Landing Page</label><br>

            <input class="radio" type="checkbox" name="service" value="products" oninput="this.className = ''">
                <label>Services/Products</label><br>

            <input class="radio" type="checkbox" name="about" value="about" oninput="this.className = ''">
                <label>About Us</label><br>

            <input class="radio" type="checkbox"  name="contact" value="contact"  oninput="this.className = ''">
                <label>Contact</label><br>

            <input class="radio" type="checkbox"  name="portfolio" value="portfolio"  oninput="this.className = ''">
                <label>Portfolio</label><br>

            <label>Can you name me 3 things that are least important on your new website?</label>
            <p><input type="text" placeholder="" oninput="this.className = ''"></p>
</div>

    <div class="tab">
        <h4>Step 7</h4>
          <h3>Features</h3>
          <p>What features does it need to have?</p>
          <input class="radio" type="checkbox"  oninput="this.className = ''">
                <label>Booking</label><br>
            <input class="radio" type="checkbox"  oninput="this.className = ''">
                <label>Chat</label><br>
            <input class="radio" type="checkbox"  oninput="this.className = ''">
                <label>Language Translation</label><br>
             <input class="radio" type="checkbox"  oninput="this.className = ''">
                <label>Payment Gateway</label><br>
</div>

    <div class="tab">
        <h4>Step 8</h4>
          <h3>Competitors</h3>
              <label>Who are your main competitors?</label>
            <p><input  type="text" class="field" placeholder="" oninput="this.className = ''" ></p>

              <label>What makes you different from your competitors?</label>
            <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>

            <label>Why should people do business with You rather than Your competitors?</label>
            <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>
</div>

    <div class="tab">
        <h4>Step 9</h4>
         <h3>Hosting and Domain</h3>
              <label>Have You got hosting?</label>
            <p><input  type="text" class="field" placeholder="" oninput="this.className = ''" ></p>

              <label>Have You got domain?</label>
            <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>
</div>

    <div class="tab">
        <h4>Step 10</h4>
                <h3>Information or Service</h3>
          <input class="radio" type="radio"  name='info-yes' value="YES" oninput="this.className = ''">
                <label>Yes, Provide us with credentials and information</label><br>
            <input class="radio" type="radio"  name='info-no'  value="NO" oninput="this.className = ''">
                <label>No, We will provide free domain and free hosting for one year</label><br>
</div>

    <div class="tab">
        <h4>Step 11</h4>
                <h3>Content</h3>
            <label>Please provide me with the picture of your shop/office?</label>
                <input type="file" id="myfile" name="myfile" oninput="this.className = ''">
          <label>Do you need text or you can provide it by your own?</label>
                <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>
          <label>Have you got any social media accounts?</label>
                <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>
      </div>

    <div class="tab">
        <h4>Step 12</h4>
                    <h3>Time</h3>
                <label>When do you need this project to be finished?</label>
                    <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>
</div>

    <div class="tab">
        <h4>Step 13</h4>
                    <h3>Budget</h3>
                <label>What is the budget for our project?</label>
                    <p><input type="text" class="field" placeholder="" oninput="this.className = ''" ></p>
</div>

    <div class="tab">
        <h4>Step 14</h4>
                    <h3>Description</h3>
        <p><label>Write description or other notes</label></p>
                    <textarea id="text-area" name="text-area" rows="4" cols="80"> </textarea>
</div>
    
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)" >Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px; display: none;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
<!-- /.MultiStep Form -->
	
		</div>
	</section>
  <section>
    <div class='bd-example'>
      <div class="d-flex p-2 bd-highlight bd-content">

      </div>
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
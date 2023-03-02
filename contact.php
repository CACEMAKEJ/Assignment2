<?php include 'components/header.php';?>

<main class="container">
  <div class="starter-template text-center">
    <h1>Page 3</h1>
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    <!DOCTYPE HTML> 
<html>
<head>
	<title>Contact us</title>
	
</head>	

<body>


<div class="form-container">
<h1>Contact us</h1>
<form method="POST" name="contactform" action="contact-form-handler.php"> 
<p>
<label for='name'>Your Name:</label> <br>
<input type="text" class="form-control" name="name">
</p>
<p>
<label for='email'>Email Address:</label> <br>
<input type="email" class="form-control" name="email"> <br>
</p>
<p>
<label for='message'>Message:</label> <br>
<textarea class="form-control" rows="3" name="message"></textarea>
</p>
<input type="submit" value="Submit"><br>
</form>
</div>
<script language="JavaScript">
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>

</body>
</html>
  </div>

</main><!-- /.container -->
<?php include 'components/footer.php';?>

    <script src="js/bootstrap.bundle.min.js"></script>
    
  </body>
</html>

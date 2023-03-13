<?php include 'components/header.php';?>

<div class="form-container">
<h1>Book a room</h1>
<form method="POST" name="contactform" action="contact-form-handler.php"> 
<div class="input-group mb-3">
  <select class="form-select" id="hotel" name="hotel">
    <option selected>Choose a hotel...</option>
    <option value="1">Moody Moon</option>
    <option value="2">Shady hotel</option>
    <option value="3">Sunrise Valley</option>
    <option value="4">GigaChad Hotel</option>

  </select>
</div>

<label for='firstname'>First Name:</label> 
<input type="text" id="firstname" class="form-control" name="firstname" onBlur="firstname_validation();"> <br>
<span id="firstname_err"></span><span id="firstname_err"></span>

<label for='lastname'>LastName:</label> <br>
<input type="text" id="lastname" class="form-control" name="lastname" onBlur="lastname_validation();"> <br>
<span id="lastname_err"></span><span id="lastname_err"></span>

<label for='email'>Email Address:</label> <br>
<input type="email" id="email" class="form-control" name="email" onBlur="email_validation();"> <br>
<span id="email_err"></span><span id="email_err"></span>




<label for="start">Start date:</label>
<input type="date" id="start" name="booking-start"
       value="2023-03-01"
       min="2023-03-01" max="2023-04-29">

       <label for="end">End date:</label>
<input type="date" id="end" name="booking-end"
       value="2023-03-02"
       min="2023-03-02" max="2023-04-30">


<p>
<label for='message'>Custom instructions:</label> <br>
<textarea class="form-control" rows="3" name="message"></textarea>
</p>


<input type="submit" value="Submit"><br>
</form>
</div>


</body>
</html>
  </div>

</main><!-- /.container -->
<?php include 'components/footer.php';?>

    <script src="js/bootstrap.bundle.min.js"></script>
    
  </body>
</html>

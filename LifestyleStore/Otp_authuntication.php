<!DOCTYPE html>
<html>
  <head>
  <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
		
		<!-- SMS Verify-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
       
    <title>Firebase Phone Verification</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="smsfire-css.css" rel="stylesheet">
    <link href="firebaseAPI.js" type="text/javascript"> 
  </head>
  <body>
  
    <form action="verification.php" method="POST">
      <h1>Phone Number verification</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="uname"><strong><h2>Phone Number</h2></strong></label>
        <input type="text" id="number" placeholder="Enter +91 and phone number" name="uname" required>
      </div>
	  <br/>
      <div id="recaptcha-container"></div>
      <button type="button" onclick="phoneAuth();">SEND OTP</button>
    
    </form>
	<br>
	<hr>

<form >
      <h1>Phone Number verification</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
      <input type="text" id="verificationCode" placeholder="Enter verification code">
      
      </div>
     
      <button type="button" href="success.php" onclick="codeverify();">VERIFY CODE</button>
     </div>
    </form>


    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
    appId: "1:99446038979:web:6876f093329352b3c71d76",
    apiKey: "AIzaSyDqoyvnqM44fvu4Gvlfc_Dj1Di2VztJxK4",
    authDomain: "phone-auth-76a5e.firebaseapp.com",
    projectId: "phone-auth-76a5e",
    storageBucket: "phone-auth-76a5e.appspot.com",
    messagingSenderId: "99446038979",
    measurementId: "G-CCJ2B0YHR3"
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
     firebase.analytics();
</script>
    <script src="firebaseAPI.js" type="text/javascript"></script>

	
	<br><br><br>
			
			
           <footer class="footer">
               <div class="container">
               <center>
                   <p>Copyright &copy Lifestyle Store. All Rights Reserved. | Contact Us: +91 90000 00000</p>
                   <p>This website is developed by Sajal Agrawal</p>
               </center>
               </div>
           </footer>
  </body>
</html>

  </body>
</html>

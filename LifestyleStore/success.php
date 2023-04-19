<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link style="width:1200px;"  rel="shortcut icon" href="img/lifestyleStore.png" />
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
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
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
        <label for="uname"><strong><h2>Phone Number :</h2></strong></label>&nbsp;
        <input style="width:750px;" type="text" id="number" placeholder="Enter +91 and phone number" name="uname" required>
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
      <input style="width:900px;" type="text" id="verificationCode" placeholder="Enter verification code">
      
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

	
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
							
					    <p>Your order is confirmed. Thank you for shopping with us.</br>
					    <a href="products.php">Click here</a> to purchase any other item.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<br><br><br>
            <footer class="footer">
               <div class="container">
               <center>
                   <p>Copyright &copy Lifestyle Store. All Rights Reserved. | Contact Us: +91 90000 00000</p>
                   <p>This website is developed by Sajal Agrawal</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>

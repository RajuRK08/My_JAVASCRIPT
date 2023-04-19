<?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location: products.php');
    }
?>

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
       
        <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
        <link href="firebase.js" type="javascript">		
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1><b>SIGN UP</b></h1>
                        <form method="post" action="user_registration_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                            </div>
                            <div class="form-group"> 
                                <input type="text" class="form-control"  required="true" id="number" placeholder="Enter +91phone number" name="uname" required="true">
                                                
                      <div id="recaptcha-container"></div>
                       <button type="button" onclick="phoneAuth();">Send Otp</button>
					  
					 <!-- sms verify -->

                    <h5><b>Phone Number verification :</b></h5>
                       <input type="text" id="verificationCode" placeholder="Enter verification code">
      
                      
                       <button type="button" onclick="codeverify();">Verify code</button>					 
    
			          <div class="form-group">
                         <input type="text" class="form-control" name="city" placeholder="City" required="true">
                       </div>
                       <div class="form-group">
                          <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                        </div>
                        <div class="form-group">
                           <input type="submit" class="btn btn-primary" value="Sign Up">
                        </div>
                    </div>
					</form>
                </div>
            </div>
	  <script src="firebase.js" type="text/javascript"></script>		
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
  
	
	<!-- Js Script for sms verify
<script>	
	window.onload = function() {
    render();
};

function render() {
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}

function phoneAuth() {
    //get the number
    var number = document.getElementById('contact').value;
    // alert(number);
    //it takes two parameter first one is number and second one is recaptcha
    firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {
        //s is in lowercase
        window.confirmationResult = confirmationResult;
        coderesult = confirmationResult;
        console.log(coderesult);
        alert("Message sent");
    }).catch(function(error) {
        alert(error.message);
    });
}

function codeverify() {
    var code = document.getElementById('verificationCode').value;


    coderesult.confirm(code).then(function(result) {
        alert("Successfully registered");
        var user = result.user;
        console.log(user);
    }).catch(function(error) {
        alert(error.message);
    });
}

// python startup video

# This is a sample Python script.

# Press Shift+F10 to execute it or replace it with your code.
# Press Double Shift to search everywhere for classes, files, tool windows, actions, and settings.


def print_hi(name):
    # Use a breakpoint in the code line below to debug your script.
    print(f'Hi, {name}')  # Press Ctrl+F8 to toggle the breakpoint.


# Press the green button in the gutter to run the script.
if __name__ == '__main__':
    print_hi('PyCharm')

# See PyCharm help at https://www.jetbrains.com/help/pycharm/

</script> -->

            <br><br><br><br><br><br>
			
			
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

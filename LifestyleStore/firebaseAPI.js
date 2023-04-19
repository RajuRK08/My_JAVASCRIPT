window.onload = function() {
    render();
};

function render() {
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}

function phoneAuth() {
    //get the number
    var number = document.getElementById('number').value;
    // alert(number);
    //it takes two parameter first one is number and second one is recaptcha
    firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {
        //s is in lowercase
        window.confirmationResult = confirmationResult;
        coderesult = confirmationResult;
        console.log(coderesult);
        alert("Message has been sent to your Entered Phone Number");
    }).catch(function(error) {
        alert(error.message);
    });
}

function codeverify() {
    var code = document.getElementById('verificationCode').value;


    coderesult.confirm(code).then(function(result) {
		
		      /*Thanking you about ordering on our website.<br> 
		      Our Team will contact you soon about the order you placed.<br> 
			  Your Order Number will be Generated.<br> */
			  
		  var d = new Date().getTime().toString();
          document.write(" Thanking you about ordering on our website, our team will contact you and Your Order Number is :" + d);		  
        alert("Your Phone Number is Successfully Verified");
		//alert("Your Order Number is : <script> math.floor(math.random()*50+1); </script>")
        
		var user = result.user;
        console.log(user);
    }).catch(function(error) {
        alert(error.message);
    });
}

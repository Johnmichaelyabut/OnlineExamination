<script src="assets/js/jquery-1.7.1.min.js"></script>
<script>
	function check_email(){
        email = document.getElementById('email').value;
        at_check = email.indexOf('@');
        dot_check = email.indexOf('.');
        
        if(email.length == 0){
            alert("Enter your Email / Username");
            document.getElementById("help_email").innerHTML = '<img src="img/wrong.png" style="height:25">';
            return false;
        }else if(at_check < 0){
            alert("Make sure your Email have the @ and . character");
            document.getElementById("help_email").innerHTML = '<img src="img/wrong.png" style="height:25">';
            return false;
        }else if(dot_check < 0){
            alert("Make sure your Email have the @ and . character");
            document.getElementById("help_email").innerHTML = '<img src="img/wrong.png" style="height:25">';
            return false;
        }else{
            document.getElementById("help_email").innerHTML = '<img src="img/check.png" style="height:30">';
            return true;
        }
    }

    function check_password() {
    	password = document.getElementById('pass').value;

    	if (password.length == 0) {
    		alert("Enter your Password");
            document.getElementById('password').innerHTML = '<img src="img/wrong.png" style="height:30px">';
    		return false;
    	} else if (password.length <= 5 ) {
    		alert("Password must consist of 6-8 characters");
            document.getElementById('password').innerHTML = '<img src="img/wrong.png" style="height:30px">';
    		return false;
    	} else {
			document.getElementById('password').innerHTML = '<img src="img/check.png" style="height:30px">';
		    return true;
        }
    }

    function validate_password() {
		c_password = document.getElementById('pass').value;
		password = document.getElementById('pass1').value;

		if (c_password.length == 0 ) {
			alert("Enter your Password");
            document.getElementById('confirm').innerHTML = '<img src="img/wrong.png" style="height:30px">';
			return false;
		} else if (c_password != password) {
			alert("Password not match");
            document.getElementById('confirm').innerHTML = '<img src="img/wrong.png" style="height:30px">';
			return false;
		} else {
			document.getElementById('confirm').innerHTML='<img src="img/check.png" style="height:30px">';
			return true;
		}
	}
</script>
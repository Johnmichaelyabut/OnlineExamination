<script src="assets/js/jquery-1.7.1.min.js"></script>
<script>
    function check_email(){
        email = document.getElementById("user1").value;
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
    function check_password1() {
        password = document.getElementById('pass2').value;

        if (password.length == 0) {
            alert("Enter your Password");
            document.getElementById("help_password").innerHTML = '<img src="img/wrong.png" style="height:25">';
            return false;
        } else if (password.length <= 5 ) {
            return false;
        } else {
            return true;
        }
    }
</script>
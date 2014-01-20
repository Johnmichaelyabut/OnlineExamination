  <!-- User Login -->
<script src="js/admin.min.js"></script>
<script type="text/javascript" src = "loginvalidate.js"></script>
<?php require_once 'loginvalidate.php'; ?>
<link rel="stylesheet" type="text/css" href="css/style.css">

  <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <?php include 'Banner2.php'; ?>
    </div>
    <div class="modal-body">
        <form name = "login" method = "POST" action = "logindata.php">
              <div id = "user">
                <input type = "text" name = "user" id = "user1" placeholder = "Enter your Email/Username..." onblur = "check_email();"/><span id = "help_email"></span>
              </div>

              <div id = "pas">
                <input type = "password" name = "pass" id = "pass2" placeholder = "Enter your Password..." onblur = "check_password1();"/><span id = "help_password"></span>
              </div>
              <div><input class = "btn btn-primary" id = "log" type = "submit" value = "Login" onclick = "return loginvalidate()"/></div>
    		</form>
    </div>

    <div class="modal-footer">
      <button class="btn btn-success" data-dismiss="modal">Close</button>
    </div>
  </div>
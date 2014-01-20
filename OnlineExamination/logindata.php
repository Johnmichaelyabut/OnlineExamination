<?php 
	require_once 'config.php';
	require_once 'OEXDAO.php';

	$_user = $_POST['user'];
	$_pass2 =sha1($_POST['pass']);

	$insert = OEXDAO::loginInfo($_user, $_pass2);
		if($insert){
			echo "<script>alert('Your successfully logon you may now answer the following questions...');window.location.href='ExamineePage.php'</script>";
			
		}else{
			echo "<script>alert('Invalid Username / Password');window.location.href='ExamineePage.php'</script>";
		}
 ?>
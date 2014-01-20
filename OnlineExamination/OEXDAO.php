<?php 
	class OEXDAO{

		public static function insertExamineeData($_fname, $_lname, $_email, $_pass){
			try{
				global $db;
				if(!$_email) return false;
				if(!$_pass) return false;
				$sql = "Insert into examinee(fname, lname, email, pass) value('$_fname','$_lname', '$_email', '$_pass')";
				$result = $db->query($sql);
				return $result;
			}
			catch(Exception $e){
            	echo "error";
        	}
		}

		public static function loginInfo($_user, $_pass){
		try{
			global $db;
			$sql = "SELECT * FROM examinee WHERE email = '$_user' AND pass = '$_pass'";
			$result = $db->query($sql);
			if($result){
				if ($result->num_rows>0) {
	                $user = $result->fetch_assoc();
	                $result->free();
	                return $user;
	            } else {
	                return false;
	            }
	        }else{
				echo "<script>alert('Error;window.location.href='Login.php'</script>";
					return false;
	        }
		}
		catch(Exception $e){
            	echo "error";
        	}
		}

		public static function getQuestion($id){}
		public static function saveAnswer($userId,$answer){}
		public static function getanswer($userId){}
		public static function computeScore($userId){}

	}
 ?>
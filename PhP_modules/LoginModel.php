<?PHP
$pdo = require 'DB.php';
class LoginModel{
	public function createUser($username, $password, $email, $profile){
		global $pdo;
		$target_dir = "User_pictures/";
		if($profile != Null){
			$target_file = $target_dir . basename($profile["ProfileP"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$check = getimagesize($profile["ProfileP"]["tmp_name"]);
			if($check !== false){
				$uploadOk = 1;
			} else {
				$uploadOk = 0;
			}
			if(file_exists($target_file)){
				$uploadOk = 0;
			}
			if($profile["ProfileP"]["size"]>500000){
				$uploadOk = 0;
			}
			if ($uploadOk == 0){
			} else {
				if(move_uploaded_file($profile["ProfileP"]["tmp_name"],$target_file)){
				} else {
				}
			}
			
		}else{
		}
		$sql = "INSERT INTO users (username, password, email, img_url) VALUES (?, ?, ?, ?)";
		$hashPass = Hash("sha512",$password);
		$stmt = $pdo->prepare($sql);
		$stmt->execute([$username, $hashPass, $email, $target_file]);
	}

	public function checkUser($username, $password){
		global $pdo;
		$output = -2;
		$sql = "SELECT * FROM users WHERE username=?";
		$stmt = $pdo->prepare($sql);
		$stmt->execute([$username]);
		$thng = $stmt->fetchAll();
		if($thng != NULL){
			$output = -1;
		}else{
			$output = -3;
		}
		error_log($thng . "\n",3,"logging.log");
		foreach ($thng as $i){

			if (hash_equals(Hash("sha512",$password),$i[3])){
				error_log("we are in" . "\n",3,"logging.log");
				return($i[0]);
			}
		}
		return($output);
	}
// get UserByID returns a 2 dimentional array which contains the list of 
	public function getUserByID($ID){
		if ($ID == null or $ID == -1){
			return(array(array("none","none")));
		}
		global $pdo;
		$sql = "SELECT * FROM users WHERE user_id=?";
		$stmt = $pdo->prepare($sql);
		$stmt->execute([$ID]);
		$output = $stmt->fetchAll();
		error_log($output[0] . "\n",3,"logging.log");
		return($output);
	}


	public function updateUserEmail($ID,$newEmail){
		global $pdo;
		$sql = "UPDATE users SET email = ? WHERE user_id =?";
		$stmt->execute([$newEmail,$ID]);
	}
	public function updateUserPassword($ID, $newPassword){
		global $pdo;
		$sql = "UPDATE users SET email = ? WHERE user_id =?";
		$stmt->execute([$newPassword,$ID]);
	}
	public function deleteUser($username,$password){
	}
}
?>

<?PHP
$pdo = require 'DB.php';
class LoginModel{
	public function createUser($username, $password, $email){
		global $pdo;
		$sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
		$hashPass = Hash("sha512",$password);
		$stmt = $pdo->prepare($sql);
		$stmt->execute([$username, $hashPass, $email]);
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

/*
	public function updateUserEmail($username, $password,$newEmail){
	}
	public function updateUserPassword($username, $password, $newPassword){
	}
	public function deleteUser($username,$password){
	}
*/
}
?>

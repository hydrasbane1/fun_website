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
		$thng = $stmt->execute([$username]);
		if($thng != NULL){
//			$output = -1;
		}
		foreach ($thng as $i){
			if (hash_equals($i["password"],$password)){
				$output = $i["id"];
			}
		}
		return($output);
	}

	public function getUserByID($ID){
		global $pdo;
		$sql = "SELECT * FROM users WHERE user_id = (id) VALUES (?)";
		$stmt = $pdo->query($sql);
		$output = $stmt->fetchAll();
		return($output["username"]);
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

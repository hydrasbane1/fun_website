<?php session_start();
//if (session_status() !== PHP_SESSION_ACTIVE){
//	session_start();
//}
require($_SERVER['DOCUMENT_ROOT'].'/PhP_modules/LoginModel.php');
$LM = new LoginModel();

if(!array_key_exists('userID',$_SESSION)){
	$_SESSION['userID'] = -1;
}
echo($_SESSION['userID']);
$Userlist = $LM->getUserByID($_SESSION['userID']);
$User = $Userlist[0];
?>

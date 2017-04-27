<?php
require_once 'core/Init.php';

$host  = $_SERVER['HTTP_HOST'];
$url   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');


$user = new User();

IF (isset($_SESSION['username'])) {
  if ($_SESSION['id'] != $db->getUserIDbyUsername($_SESSION['id'])) {
      $user->logout();
      header("Location: http://$host$url/index.php");
	exit();
    } else {
      header("Location: http://$host$url/sakums.php");
	exit();
    }
}

$usr = $_POST['username'];
$pw = $_POST['password'];

if($db->usernameInUser($usr)) {
  if ($db->comparePW($pw, $db->getUserIDbyUsername($username))) {
	$user->login($db->getUserIDbyUsername($usr));
  } else {
      $_SESSION['error'] = "Lietotajvarda un paroles kombinacija nesakrit";
  }
}
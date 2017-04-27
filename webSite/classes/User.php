class User{
	public function __construct() {
		
	}

	public function login($userArray) {
		
		$_SESSION['id'] = $userArray[0];
  		$_SESSION['username'] = $userArray[1];
		$_SESSION['firstname'] = $userArray[2];
		$_SESSION['lastname'] = $userArray[3];
		$_SESSION['email'] = $userArray[4];
		$_SESSION['accessLevel'] = $userArray[5];
	
	}

	public function logout() {
		
		unset($_SESSION['id']);
  		unset($_SESSION['username']);
		unset($_SESSION['firstname']);
		unset($_SESSION['lastname']);
		unset($_SESSION['email']);
		unset($_SESSION['accessLevel']);
	
	}
}
<?php session_start();
include('../config.php');
var_dump($_POST);
echo $_SESSION['admin_auth'];
if(isset($_POST['email']) AND isset($_POST['password'])){
	if(!empty($_POST['email']) && !empty($_POST['password'])){
		if($_POST['email'] == $admin_email && $_POST['password'] == $admin_password){
			$_SESSION['admin_auth'] = "yep";
			header('Location: index.php');
		}else{
			$_SESSION['admin_auth'] = "nope";
			header('Location: login.php');
		}
	}
}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $_SESSION['site_title']; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<style type="text/css">
			html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

		</style>
	</head>
  <body class="text-center">
    <form class="form-signin" name="form_login" method="POST" action="#">
      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; <a href="//twitter.com/theopqrs">Theopqrs</a> 2017-2018</p>
    </form>
  </body>
</html>
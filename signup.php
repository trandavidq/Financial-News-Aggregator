<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./styles/signup.css">
	<!--Custom font for login text-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>Sign up</title>
</head>

<body style="background-color: #E7E1D7;">
	<h1 style="margin-top: 2%; text-align: center;">Financial News Aggregator</h1>
	<h2 id="welcome_text">Signup here</h2>


	<div id="login_form">
		<!--Change the action to a post request later-->
		<form action="login.html">
			<div class="form-group">
				<label for="username">Username:</label>
				<input type="text" id="username" name="username" class="form-control" style="width: 500px;"
					placeholder="Enter username">
				<small>
					<div style="color: red;" id="username_warning"></div>
				</small>
			</div>
			<br><br>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" style="width: 500px;" class="form-control" placeholder="Enter password">
				<small>
					<div style="color: red;" id="password_warning"></div>
				</small>
				<input type="checkbox" id="toggle_password">Show Password
			</div>
			<br><br>
			<div class="form-group">
				<label for="confirm_password">Confirm password:</label>
				<input type="password" id="confirm_password" name="confirm_password" style="width: 500px;"
					class="form-control">
			</div>
			<br><br>
			<button type="submit" value="Submit" class="btn btn-primary" id="submit_btn">Sign up</button>
		</form>


		<a href="login.html" class="highlight">Already registered? Log in here</a>


	</div>
	<script src="./js/signup.js"></script>
</body>

</html>
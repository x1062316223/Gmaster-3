<?php
$connection = mysqli_connect('localhost', 'root', 'Rvm@i[9)0?~=');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'test');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
	$email = $_POST['email'];
        $password = $_POST['password'];
 
        $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GMaster</title>
	<!-- Bootstrap -->
	<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.0.0.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="menu_set">
			<a class="navbar-brand" href="home.html"><img src="logo.png" class="logo_img" alt=""/></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active ">
						<a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a> 
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="pc.html">PC</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="ps4.html">PS4</a>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="xbox.html">XBOX <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Racing</a></li>
							<li><a href="#">RPG</a></li>
							<li><a href="#">MMO</a></li>
						</ul>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#"><i class="fas fa-search"></i></a>
					</li>
					<li class="dropdown" id="account">
						<a class="dropdown-toggle_account" data-toggle="dropdown" href="#"><i class="fas fa-user"></i></a>
						<div class="dropdown-menu" id="user_dropdown">
							<div class="user_menu">
								<div class="user_signin">
									<p>SIGN IN</p>
								</div>
								<div class="user_signup">
									<p>REGISTER</p>
							</div>
							<div class="user_login">
								<form class="modal-content animate" action="/action_page.php">
									<div class="login_container">
										<label for="uname">Username</label>
										<input type="text" placeholder="Enter Username" name="uname" required>
										<label for="psw">Password</label>
										<input type="password" placeholder="Enter Password" name="psw" required>
										<div class="login_bottom">
											<button type="submit" class="login_button">Login</button>
											<label>
												<input type="checkbox" checked="checked" name="remember"> Remember me
											</label>
										</div>
									</div>
								</form>
							</div>
						</div>
					</li>
					<li class="nav-item active" id="cart">
						<a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="full_body">
		<div class="poster"> </div>
		<script>
			var myIndex = 0;
			carousel();

			function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}    
				x[myIndex-1].style.display = "block";  
				setTimeout(carousel, 3500); // Change image every 5 seconds
			}
		</script>
		<div class="container">
			<div class="title_row">
				<h1>Registration</h1>
			</div>
			<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="success.php" method="">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="full-name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email-address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">User Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="user_name" class="form-control" name="username">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">Present Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="present_address" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Permanent Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="permanent_address" class="form-control" name="permanent-address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nid_number" class="col-md-4 col-form-label text-md-right"><abbr
                                                title="National Id Card">NID</abbr> Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="nid_number" class="form-control" name="nid-number">
                                    </div>
                                </div>

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" >
                                        Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>
</div>
</div>
	
	<footer class="footer_container">
		<p>Copyright © GMaster. All rights reserved.</p>
	</footer>
</body>
</html>
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
		<div class="poster">
			<img src="images/post1.jpg" class="mySlides poster" alt="" width="1200px" height="400px" />
			<img src="images/post2.jpg" class="mySlides poster" alt="" width="1200px" height="400px" />
			<img src="images/1200X400.gif" class="mySlides poster" alt=""/>
		</div>
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
				<h1>Top Sellers</h1>
			</div>
			<div class="product_row">
				<?php
					$servername = "localhost";
					$user = "root";
					$pw = "";
					$dbname = "product";
						
					$conn = new mysqli($servername, $user, $pw, $dbname);
				
					if ($conn -> connect_error){
						die("Connection failed: ".$conn -> connect_error);
					}
					$sql = "SELECT ID, Name, Price FROM ps4 LIMIT 6";
					$result = mysqli_query($conn, $sql);
				
					/*if (mysqli_num_rows($result) > 0){
						
					}*/
					
					while($row6 = mysqli_fetch_assoc($result)){
				?>
						<div class="col">
							<img class="product_img_150" src="images/ps4/<?php echo $row6["ID"];?>.jpg" alt=""/>
							<h5><?php echo $row6["Name"];?></h5>
							<h4>$ <?php echo $row6["Price"];?></h4>
							<div class="addtocart">ADD TO CART</div>
						</div>
					<?php
						$row6++;
					}
					?>
			</div>
		</div>
		<div class="container">
			<div class="title_row">
				<h1>Sales</h1>
			</div>
			<div class="product_row">
				<?php
					$servername = "localhost";
					$user = "root";
					$pw = "";
					$dbname = "product";
						
					$conn = new mysqli($servername, $user, $pw, $dbname);
				
					if ($conn -> connect_error){
						die("Connection failed: ".$conn -> connect_error);
					}
					$sql = "SELECT ID, Name, Price FROM ps4 LIMIT 6";
					$result = mysqli_query($conn, $sql);
				
					/*if (mysqli_num_rows($result) > 0){
						
					}*/
					
					while($row6 = mysqli_fetch_assoc($result)){
				?>
						<div class="col">
							<img class="product_img_150" src="images/ps4/<?php echo $row6["ID"];?>.jpg" alt=""/>
							<h5><?php echo $row6["Name"];?></h5>
							<h4>$ <?php echo $row6["Price"];?></h4>
							<div class="addtocart">ADD TO CART</div>
						</div>
					<?php
						$row6++;
					}
					?>
			</div>
		</div>
		<div class="container">
			<div class="title_row">
				<h1>Pre-order</h1>
			</div>
			<div class="product_row">
				<?php
					$servername = "localhost";
					$user = "root";
					$pw = "";
					$dbname = "product";
						
					$conn = new mysqli($servername, $user, $pw, $dbname);
				
					if ($conn -> connect_error){
						die("Connection failed: ".$conn -> connect_error);
					}
					$sql = "SELECT ID, Name, Price FROM ps4 LIMIT 6";
					$result = mysqli_query($conn, $sql);
				
					/*if (mysqli_num_rows($result) > 0){
						
					}*/
					
					while($row6 = mysqli_fetch_assoc($result)){
				?>
						<div class="col">
							<img class="product_img_150" src="images/ps4/<?php echo $row6["ID"];?>.jpg" alt=""/>
							<h5><?php echo $row6["Name"];?></h5>
							<h4>$ <?php echo $row6["Price"];?></h4>
							<div class="addtocart">ADD TO CART</div>
						</div>
					<?php
						$row6++;
					}
					?>
			</div>
		</div>
	</div>
	
	<footer class="footer_container">
		<p>Copyright © GMaster. All rights reserved.</p>
	</footer>
</body>
</html>
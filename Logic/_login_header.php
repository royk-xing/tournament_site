<html>
<head>
	<title>Tournament's software</title>
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>
    <script src="js/login.js"></script>
</head>
<body>

	<div id="header">
		<div class="logo"><h1><span><a href="../index.php" >UMBC Tournament software</a></span></h1></div>
<?php if(!isset($_SESSION['myusername'])){ ?>
		<section class="loginform cf">
			<form name="form1" method="post" action="Logic/checklogin.php">
				<ul>
					<li>
						<label for="usermail">User name</label>
						<input type="text" name="myusername" id="myusername" placeholder="yourname@email.com" required>
					</li>
					<li>
						<label for="password">Password</label>
						<input type="password" name="mypassword" id="mypassword" placeholder="password" required></li>
					<li>
						<input type="submit" name="Submit" value="Login">
					</li>
					<li>
							<a href="#" id="joinButton"><span>Join</span><em></em></a>
					</li>
				</ul>
			</form>
			 <div id="loginContainer">
		                <div id="loginBox">                
		                    <form id="loginForm" method="post" action="Logic/checkregister.php" enctype= "multipart/form-data">
			                    <fieldset id="body">
	                           			<fieldset>
		                                <label for="username">User name</label>
		                                <input type="text" name="username" placeholder="username" required>
		                                </fieldset>
		                                <fieldset>
		                                <label for="email">Email Address</label>
		                                <input type="email" name="email" placeholder="yourname@email.com" required>
		                       			</fieldset>
		                         		<fieldset>
		                                <label for="password">Password</label>
		                                <input type="password" name="password" placeholder="password" required>
		                      			</fieldset>
		                       			<fieldset>
		                                <label for="password">Confirm password</label>
		                                <input type="password" name="password" placeholder="password" required>
		                      			</fieldset>
		                            <input type="submit" name="Submit" id="login" value="Join"/>
		                		  </fieldset>
		                        <span><a href="#">Forgot your password?</a></span>
		                    </form>
		                </div>
		     </div>
		</section>
	</div>
	<?php } else { ?>
	
		<div class="welcomeUser">
			<label>
			Welcome,
			<a href="myAccount.php"> <?php echo ucfirst($_SESSION['myusername']); ?> </a> 
			<a href="Logic/logout.php"><span style="text-decoration:underline;"> Logout</span></a> 	
			</label>
		</div>
		</div>
		<div id="body">
		<label>Welcome to UMBC tournament software! Please select one of the following to start planning for a tournament, and have fun!</label>
		</div>
	<?php } ?>
	
	
	
	
	
	
	
	
	
	
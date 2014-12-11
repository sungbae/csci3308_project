<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Item Tracker - CSCI 3308</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="CSCI 3308 Item Tracker" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Ben Busby, Sung Bae, Yiyang Qi" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <header>
                <h1>CSCI 3308: <span>Item Tracker</span></h1>
				<nav class="codrops-demos">
					<span>You have signed up. <br>Please login to continue.</span>
                    <!-- <a href="index.html" class="current-demo">Demo 1</a> -->
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="page1new.html" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="newuser"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. p@$$w0rd" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action = "signup.php" method = "POST"> 
                                <h1> Sign up </h1> 
				        <label for="signup_user" class="uname" data-icon="u">Enter username</label>
       		        		<input id="signup_user" name="signup_user" required="required" type="text" placeholder="mysuperusername690" />
        				<label for="signup_pass" class="youpasswd" data-icon="p">Enter password </label>
        				<input id="signup_pass" name="signup_pass" required="required" type="password" placeholder="eg. p@$$w0rd"/>
                                        <label for="signup_pass" class="youpasswd" data-icon="p">Confirm password </label>
                                        <input id="signup_pass" name="signup_pass" required="required" type="password" placeholder="eg. p@$$w0rd"/>

                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>



<?php
$servername = "mysql3.000webhost.com";
$username = "a6435557_sungDB";
$password = "abc123";
$dbname = "a6435557_sungDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$signup_user = $_POST["signup_user"];
$signup_pass = $_POST["signup_pass"];
$sql = sprintf("INSERT INTO signup (username, password) VALUES ('%s', '%s')",$signup_user,$signup_pass);

$result = $conn->query($sql);


$conn->close();
?>     
</body>
</html>
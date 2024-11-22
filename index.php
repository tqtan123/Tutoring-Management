<!DOCTYPE html>
<html>
<head>
	<title>Online tutoring management system</title>
	<link rel="stylesheet" type="text/css" href="assets/css/welcome.css">
	<link rel="icon" type="image/x-icon" href="iu.png">
</head>
<body>
    <section class="section-1 home-p">
    	<div class="overl">.</div>
    	<header>
    		<h2 class="logo">
	    		  <img src="assets/img/Logo.png">
	    	     <span></span>
	        </h2>
	    	<nav>
	    		<a href="index.php" class="active">Home</a>
	    		<a href="about.php">About</a>
	    		<a href="signup.php">Sign Up</a>
	    		<a href="login.php">Login</a>
	    		
	    	</nav>
    	</header>
    </section>
    <section class="section-2">
    	<h1>Welcome to SE Project</h1>
    	<p>
    	Welcome to our Online Learning System!
    	</p>


    </section>
    <footer class="main-footer">
      <h4>Group 8 - SE Project</h4>
    </footer>

    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <script>
    	$(document).ready(function(){
    		$(window).on('scroll', function(){
    			if ($(window).scrollTop()) {
                    $("header").addClass('bgc');
    			}else{
                    $("header").removeClass('bgc');
    			}
    		});
    	});
    </script>
</body>
</html>
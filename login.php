<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techquiz>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Shadows+Into+Light&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <section class="showcase1" >

        <header>
            <nav class="navbar navbar-dark navbar-expand-sm fixed-top" style="background-color: azure;">
    
                <a href="#" class="navbar-brand " id="logohere"><img src="lq.png" class="ml-1 "  alt="logo here"></a>
                <div id="b1" style="margin: 30px 240px">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#downme" style="background-color:skyblue;color: black;">
                    <!--<span class="navbar-toggler-icon text-dark"></span>-->
                    MENU
                </button>
                  </div>
                   
                    <div class="collapse navbar-collapse" style="background-color: azure;" id="downme">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item text-uppercase" id="navtab"><a href="indexresponsive.html" class="nav-link text-uppercase" id="linkshere"> HOME </a></li>
                        <li class="nav-item text-uppercase" id="navtab"><a href="About us.html" class="nav-link text-uppercase" id="linkshere"> About us </a></li>
                        <li class="nav-item text-uppercase" id="navtab"><a href="helpresponsive.html" class="nav-link text-uppercase" id="linkshere"> Help </a></li>
                    </ul>
                </div>
              </nav>
            </header>
        <img src="Sky.jpg">
    
<div class="bg">
	<form action="logcheck.php" method="post">
			
		<div class="" id="formhere">
			<fieldset id="fieldset">
				<legend id="legend">LOG IN </legend>
		<label>EMAIL :</label>
		<input type="email" required name="email" id="mail" placeholder="abc@gmail.com">
		<br><br><br><br>
		<label>PASSWORD :</label>
		<input type="password" required name="password" id="password" placeholder="******">
        <br><br>
		<!-- <a href="#"  type="submit" name="submit">LOG IN</a> -->
        <input id="loginbutton" type="submit" name="submit"  value="LOG IN">
		<p><a href="#">Forgot password?</a></p>
		<p id="register"><a href="register.php">Don't have account? Create one</a><p>
		<!--<h3><a href="#">LOG IN</a></h3>-->
	
	</fieldset>
	
	</div>
	
	</form>
</div>	
</section>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
</body>
</html>




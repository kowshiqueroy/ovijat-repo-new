<?php 
include_once("db_connect.php");

$sqluse ="SELECT * FROM Inorg WHERE id=1 ";
$retrieve = mysqli_query($db,$sqluse);
    while($foundk = mysqli_fetch_array($retrieve))
	     {
              $name = $foundk['name'];
			  $website = $foundk['website'];
		     
		 }	


		 session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

<title>
	<?php if(isset($website)){echo$website;}?>
	
</title>
<script type="text/javascript" src="script/validation.min.js"></script>
<script type="text/javascript" src="script/login.js"></script>

<script src="script/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="script/sweetalert.css">
	
<link href="css/style1.css" rel="stylesheet" type="text/css" media="screen">
    <!-- <link rel="stylesheet" href="style.css"> -->  
  
</head>
<body class="" style="background-color:#008080">
<div role="navigation" class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">	<?php if(isset($name)){echo$name;}?></a></li>           
          </ul>
         
        </div><!--/.nav-collapse -->
      </div>
    </div>
	
	<div class="container" >
	<div class=''>
	</div>
           <div class="container">
	<h2></h2>		
	
	<form class="form-login" method="post" id="login-form" style="display:none;">
		
	</form>	
	              				                                   				                                         				                          				        		
</div>
<div class="insert-post-ads1" >
<?php



?>
</div>
</div>












<script>


function a(){
        const audio = new Audio("sounds/click.mp3");
        audio.play();

    }
a();
    </script>
<style>
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    body {
        margin: 0;
       
        background: black;
    }

    .forms-section {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .section-title {
        font-size: 32px;
        letter-spacing: 1px;
        color: #fff;
    }

    .forms {
        display: flex;
        align-items: flex-start;
        margin-top: 30px;
    }

    .form-wrapper {
        animation: hideLayer .3s ease-out forwards;
    }

    .form-wrapper.is-active {
        animation: showLayer .3s ease-in forwards;
    }

    @keyframes showLayer {
        50% {
            z-index: 1;
        }

        100% {
            z-index: 1;
        }
    }

    @keyframes hideLayer {
        0% {
            z-index: 1;
        }

        49.999% {
            z-index: 1;
        }
    }

    .switcher {
        position: relative;
        cursor: pointer;
        display: block;
        margin-right: auto;
        margin-left: auto;
        padding: 0;
        text-transform: uppercase;
        font-family: inherit;
        font-size: 16px;
        letter-spacing: .5px;
        color: #999;
        background-color: transparent;
        border: none;
        outline: none;
        transform: translateX(0);
        transition: all .3s ease-out;
    }

    .form-wrapper.is-active .switcher-login {
        color: #fff;
        transform: translateX(90px);
    }

    .form-wrapper.is-active .switcher-signup {
        color: #fff;
        transform: translateX(-90px);
    }

    .underline {
        position: absolute;
        bottom: -5px;
        left: 0;
        overflow: hidden;
        pointer-events: none;
        width: 100%;
        height: 2px;
    }

    .underline::before {
        content: '';
        position: absolute;
        top: 0;
        left: inherit;
        display: block;
        width: inherit;
        height: inherit;
        background-color: currentColor;
        transition: transform .2s ease-out;
    }

    .switcher-login .underline::before {
        transform: translateX(101%);
    }

    .switcher-signup .underline::before {
        transform: translateX(-101%);
    }

    .form-wrapper.is-active .underline::before {
        transform: translateX(0);
    }

    .form {
        overflow: hidden;
        min-width: 260px;
        margin-top: 50px;
        padding: 30px 25px;
        border-radius: 5px;
        transform-origin: top;
    }

    .form-login {
        animation: hideLogin .3s ease-out forwards;
    }

    .form-wrapper.is-active .form-login {
        animation: showLogin .3s ease-in forwards;
    }

    @keyframes showLogin {
        0% {
            background: #d7e7f1;
            transform: translate(40%, 10px);
        }

        50% {
            transform: translate(0, 0);
        }

        100% {
            background-color: #fff;
            transform: translate(35%, -20px);
        }
    }

    @keyframes hideLogin {
        0% {
            background-color: #fff;
            transform: translate(35%, -20px);
        }

        50% {
            transform: translate(0, 0);
        }

        100% {
            background: #d7e7f1;
            transform: translate(40%, 10px);
        }
    }

    .form-signup {
        animation: hideSignup .3s ease-out forwards;
    }

    .form-wrapper.is-active .form-signup {
        animation: showSignup .3s ease-in forwards;
    }

    @keyframes showSignup {
        0% {
            background: #d7e7f1;
            transform: translate(-40%, 10px) scaleY(.8);
        }

        50% {
            transform: translate(0, 0) scaleY(.8);
        }

        100% {
            background-color: #fff;
            transform: translate(-35%, -20px) scaleY(1);
        }
    }

    @keyframes hideSignup {
        0% {
            background-color: #fff;
            transform: translate(-35%, -20px) scaleY(1);
        }

        50% {
            transform: translate(0, 0) scaleY(.8);
        }

        100% {
            background: #d7e7f1;
            transform: translate(-40%, 10px) scaleY(.8);
        }
    }

    .form fieldset {
        position: relative;
        opacity: 0;
        margin: 0;
        padding: 0;
        border: 0;
        transition: all .3s ease-out;
    }

    .form-login fieldset {
        transform: translateX(-50%);
    }

    .form-signup fieldset {
        transform: translateX(50%);
    }

    .form-wrapper.is-active fieldset {
        opacity: 1;
        transform: translateX(0);
        transition: opacity .4s ease-in, transform .35s ease-in;
    }

    .form legend {
        position: absolute;
        overflow: hidden;
        width: 1px;
        height: 1px;
        clip: rect(0 0 0 0);
    }

    .input-block {
        margin-bottom: 20px;
    }

    .input-block label {
        font-size: 14px;
        color: #a1b4b4;
    }

    .input-block input {
        display: block;
        width: 100%;
        margin-top: 8px;
        padding-right: 15px;
        padding-left: 15px;
        font-size: 16px;
        line-height: 40px;
        color: #3b4465;
        background: #eef9fe;
        border: 1px solid #cddbef;
        border-radius: 2px;
    }

    .form [type='submit'] {
        opacity: 0;
        display: block;
        min-width: 120px;
        margin: 30px auto 10px;
        font-size: 18px;
        line-height: 40px;
        border-radius: 25px;
        border: none;
        transition: all .3s ease-out;
    }

    .form-wrapper.is-active .form [type='submit'] {
        opacity: 1;
        transform: translateX(0);
        transition: all .4s ease-in;
    }

    .btn-login {
        color: #fbfdff;
        background: #a7e245;
        transform: translateX(-30%);
    }

    .btn-signup {
        color: #a7e245;
        background: #fbfdff;
        box-shadow: inset 0 0 0 2px #a7e245;
        transform: translateX(30%);
    }
</style>

<section class="forms-section">
    <h1 class="section-title">Ovijat HRM</h1>
	<p style="color:red;font-size:20px;">
	<?php 

if (isset($_COOKIE["wrong"])){
	echo $_COOKIE["wrong"]; 

}?></p>
    <div class="forms">
        <div class="form-wrapper is-active">
            <button type="button" class="switcher switcher-login">
                Login
                <span class="underline"></span>
            </button>
            <form class="form form-login" id="login-form" method="post" action="login.php">
                <fieldset>
                    <legend>Please, enter your email and password for login.</legend>
                    <div class="input-block">
                        <label for="login-email">E-mail</label>
                        <input name="user_email" type="email" value="it.ovijat@gmail.com" required>
						<span id="check-e"></span>
                    </div>
                    <div class="input-block">
                        <label for="login-password">Password</label>
                        <input name="password" type="password" value="itovijat12" required>
                    </div>
                </fieldset>
				<button type="submit" class="btn btn-default" name="login_button" id="login_button">
			<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			</button>             </form>
        </div>
        <div class="form-wrapper">
            <button type="button" class="switcher switcher-signup">
               Leave Application
                <span class="underline"></span>
            </button>
            <form class="form form-signup">
                <fieldset>
                    <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                    <div class="input-block">
                        <label for="signup-email">Company Name</label>
                        <input id="signup-email" type="email" required>
                    </div>
                    <div class="input-block">
                        <label for="signup-email">E-mail</label>
                        <input id="signup-email" type="email" required>
                    </div>
                    <div class="input-block">
                        <label for="signup-password">Password</label>
                        <input id="signup-password" type="password" required>
                    </div>
                    <div class="input-block">
                        <label for="signup-password-confirm">Confirm password</label>
                        <input id="signup-password-confirm" type="password" required>
                    </div>
                </fieldset>
                <button type="submit" class="btn-signup">Continue</button>
            </form>
        </div>
    </div>
</section>

<script>
    const switchers = [...document.querySelectorAll('.switcher')]
    switchers.forEach(item => {
        item.addEventListener('click', function() {
           
            a();
            switchers.forEach(item => item.parentElement.classList.remove('is-active'))
            this.parentElement.classList.add('is-active')
        })
    })


  
</script>














</body>
</html>
<?php 
echo <<<_END
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Add New User &middot; Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="abdul">

    <!-- Le styles -->
    <link href="./bootstrap/bootstrap-3.3.2-dist/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
		
      }

      .form-signin {
		max-width: 400px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
	  .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="./bootstrap/bootstrap-3.3.2-dist/css/bootstrap-theme.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./wamp/www/download.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="container">

      <form class="form-signin">
        <h3 class="form-signin-heading" align="center">Add New User</h3>
        <h3 class="form-signin-heading" align="center"> </h3>

        <label >First Name: </label>
		<input type="text" class="input-block-level" placeholder="First Name">
		<label >Last Name: </label>
		<input type="text" class="input-block-level" placeholder="Last Name">
		<label >  Username: </label>
		<input type="text" class="input-block-level" placeholder="Username">
		<label >  Password: </label>
        <input type="password" class="input-block-level" placeholder="Password">
     	<button class="btn btn-large btn-primary" type="submit" style="width: 100px; float: left;">Sign in</button>
		<button class="btn btn-large btn-secondary" type="submit" style="width: 100px; float: right">Cancel</button>
		<h2> </h2>
      </form>

    </div> <!-- /container -->

    <script src="./bootstrap/bootstrap-3.3.2-dist/js/jquery-1.11.2.js"></script>
    <script src="./bootstrap/bootstrap-3.3.2-dist/js/bootstrap.js"></script>
    <s
  </body>
</html>
_END;
?>
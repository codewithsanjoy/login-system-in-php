<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form Using Html and Css</title>
  
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Open Sans', sans-serif;

}
body{
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	background-color: #9D0ED6;

}
.container{
	width: 350px;
	background-color: white;
	padding:3rem 1rem;
}
input{
	width: 100%;
	padding: 8px;
	margin: 5px 0px;

}
button{

	padding: 6px;
	margin-top: 10px;
	cursor: pointer;
	background-color: #9D0ED6;
	width: 100%;
	border: none;
	color: white;
	font-size: 18px;
}
h3{
	margin-bottom: 10px;
	  text-decoration: underline;
	  text-decoration-thickness: 3px;
	  text-underline-offset: 5px;
	    text-decoration-color: #9D0ED6;
}
h4{
	margin-top: 15px;
	text-align: center;
}
a{
	text-decoration: none;
}
::placeholder{
	font-size: 18px;
}
	</style>
</head>

<body>
    <div class="container">
        <form action="back.php" method="POST">
            <h3>Login</h3>
            <input type="text" placeholder="username" name="username" autocomplete="off" required>
            <input type="password" placeholder="password" name="password" autocomplete="off" required>
            <button type="submit" name="login">Login</button>
        </form>
        <h4> Not a member? <a href="index.php">signup now</a> </h4>
    </div>
</body>

</html>
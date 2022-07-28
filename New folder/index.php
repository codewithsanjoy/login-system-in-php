<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="wraper">
            <h4 class="res">
            <?php 
            session_start();
      
            if (isset( $_SESSION['registerd'])) {
                echo $_SESSION['registerd'] ;
                unset( $_SESSION['registerd']);
            } 
             if (isset( $_SESSION['agree'])) {
                echo  $_SESSION['agree'] ;
                unset( $_SESSION['agree']);
            } 
            if(isset($_SESSION['regischeck'])){
                echo $_SESSION['regischeck'];
                unset($_SESSION['regischeck']);

            }

            ?>
            </h4>
            <h3>SignUp</h3>
            <p>Please fill in this form to create an account!</p>
            <form action="back.php" method="POST">
                <div class="inner">
                    <input type="text"  placeholder="First Name" name="fname" required>
                    <input type="text" placeholder="last Name" name="lname" required>
                </div>
                <input type="Email" placeholder="Email" name="email" required>
                <input type="password" placeholder="password" name="password" required>                
                <input type="checkbox" name="checkbox" value="1">
                <label for="">I accept the Terms of <a href="#"> Use & Privacy Policy</a></label>
                <button type="submit" name="submit" id="btn">Singup</button>
            </form>
            <h4>Already have an account? <a href="login.php">Login</a></h4>
        </div>
    </div>


  
</body>

</html>
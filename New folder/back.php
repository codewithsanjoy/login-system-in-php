  <?php 
  // include'index.php';
  // include'login.php';
  session_start();
    include 'db.php';
    if (isset($_POST['submit'])) {
      //get value from user with security
    $fname =  mysqli_real_escape_string($con,$_POST['fname']) ;
    $lname = mysqli_real_escape_string($con,$_POST['lname']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    // get value From checkbox 
    $checkbox = $_POST['checkbox'];
    $password =  password_hash( $password, PASSWORD_DEFAULT);
    
      // agree terms and condition 
    if($checkbox ==1){
        // check firstname already registerd or not 
        $totalusername = "select * from totaluser where firstname='$fname' and lastname='$lname'";
        $sql = mysqli_query($con,$totalusername);
        $totalrow =  mysqli_num_rows($sql);
              if ($totalrow>0) {
                $_SESSION['regischeck'] = ' <span style="color:red">Name alredy registerd</span> ';
                  header('Location:index.php');

             }
            else{
                   // insert user data in to database query 
                  $data = "INSERT into totaluser(firstname, lastname, eamil, password) VALUES ('$fname','$lname','$email','$password')";

                  $result=mysqli_query($con,$data);
                  // when user successfully registered in to database show success message
                  if($result){
                  $_SESSION['registerd'] = '<span style="color:green">Successfully Registered! </span>';
                  header('Location:login.php');
       
                  }
           }
      

      }
        else
            // when user not check terms and condition 

        {
            $_SESSION['agree'] = '<span style="color:red;">Please agree terms and conditions.</span>';
          header('Location:index.php');

        }
   
    }
    
    ?>

    <!-- login -->
    <?php 
    if (isset($_POST['login'])) {
      $username = $_POST['username'] ;
      $password = $_POST['password'];
      $sql = "select * from totaluser where firstname ='$username'";
      // $sql="SELECT * FROM words WHERE word_end LIKE '%" . $word . "%' AND word_end LIKE '%" . $word2 . "%' LIMIT 17";
       $result  = mysqli_query($con,$sql);
       $ress = mysqli_num_rows($result);
       if($ress>0){
        $row = mysqli_fetch_assoc($result );
        $passworv = password_verify($password, $row['password']);
        if($passworv==1){
          echo'succ';
          $_SESSION['login'] = 'true';
          header('Location:Dashboard.php');
        }
        else{
          echo'please enter correct password';
        }
       }
       else{
        echo'please enter correct username';
       }

         }


    ?>

<?php
$alert=false;
$err=false;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $pass = $_POST['pass'];
 
  
  // connect to database
    $servername="localhost";
    $username="root";
    $password="";
    $database="login";
    // creat a connection object
    $conn =mysqli_connect($servername,$username,$password,$database);
    // creat database



    //die connection is not susccefull
    if(!$conn)
    {
    die("Could not connect to database". mysqli_connect_error());
    }
    else{
        
            $sql="select* from info where username='$name'AND pass='$pass'"; ;
            $result=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($result);
            if($num==1){
                $alert=true;
                session_start();
                $session['loggedin']=true;
                $session['name']=$name;
                header("location:home.php");
            }
            else{
                    $err="not found";
            }
            
        }

    if($alert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong>entry has been submitted successfully!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>';
    }

}
?>
    
   

	<html>

<head>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="./style.css">
	<script src="script.js" defer></script>
  <title>Sign in</title>
</head>

<body>
<form action="login.php" method="post">
  <div class="main">
    <p class="sign" align="center">Sign in</p>
    <form class="form1">
      <input class="un " type="text" name="name" align="center" placeholder="Username">
      <input class="pass" type="password" name="pass" align="center" placeholder="Password">
      <button type="submit" class="submit" align="center">Submit</button>
      <p class="forgot" align="center"><a href="signup.php">signup here</p>
            
                
    </div>
</form>
</body>

</html>
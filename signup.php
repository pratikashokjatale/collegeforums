
    
   
<?php
$alert=false;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $cpass= $_POST['cpass'];
  
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
    $exists=false;
    if ($pass==$cpass&& $exists==false) {
        $sql="INSERT INTO `info` (`username`, `pass`) VALUES ('$name', '$pass');";
        $result=mysqli_query($conn,$sql);
        if($result){
            $alert=true;
            
        }
    }
}
if($alert){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong>entry has been submitted successfully!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>';
}else{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>error!</strong>entry has been submitted successfully!
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
  <title>Sign up</title>
</head>

<body>
<form action="signup.php" method="post">
  <div class="main">
    
    <p class="sign" align="center">Sign up</p>
    <form class="form1">
      <input class="un " type="text" name="name" align="center" placeholder="Username">
      <input class="pass" type="password" name="pass" align="center" placeholder="Password">
      <input class="pass" type="cpassword" name="cpass" align="center" placeholder="C-Password">
      <button type="submit" class="submit" align="center">Submit</button>
      
      <p class="forgot" align="center"><a href="login.php">sign in</a></p>
            
                
    </div>
</form>
</body>

</html>
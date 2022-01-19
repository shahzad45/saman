<?php

// Databse Connection
$server = "localhost";
$username = "root";
$password = "";
$name = "userregistration";

$conn = mysqli_connect($server, $username, $password, $name);

if($conn){
    echo "Database connected successfully";
}
else{
   echo "Database connection is failed";
}


// isset when only user click on rgister button data will be submitted
if(isset($_POST['loginButton']))
{
   echo "Accessing";
   $name = $_POST['username'];
   $password = $_POST['password'];

   echo $name;
   echo $password;

//    Query for checking username and password
   $query = mysqli_query($conn, "SELECT * FROM `usertable` WHERE( userName = '$name' OR Email = '$name') AND Password = '$password' ");
   if(mysqli_num_rows($query))
   {
    echo "
    <script>
    window.alert('Login Successfully');
    window.location.href = 'index.html';

    </script>
    
    ";
   }
   else{
    echo "
    <script>
    window.alert('Invalid username/password');
    window.location.href = 'account.php';

    </script>
    
    ";
   }
}

?>
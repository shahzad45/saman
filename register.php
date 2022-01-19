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

if(isset($_POST['registerButton']))
{
    echo "Accessing";
    $name = $_POST['userName'];
    $email = $_POST['userEmail'];
    $password = $_POST['userPassword'];

    echo $name;
    echo $email;
    echo $password;



    // Execute Query

    // For First User
// $query = mysqli_query($conn , "INSERT INTO `usertable`(`userName`, `Email`, `Password`) VALUES ('$name','$email','$password')" );



  // For user already registered Email and Password
    $duplicateName = mysqli_query($conn, " SELECT * FROM `usertable` WHERE userName = '$name' ");
    $duplicateEmail = mysqli_query($conn, " SELECT * FROM `usertable` WHERE Email = '$email' ");

    
    // Check are Already registed user with the new user values are present in duplicateEmail variable if yes the situation will be true;
    if(mysqli_num_rows($duplicateName))
    {
        echo "
        <script>
        window.alert('This User Name is already taken');
        window.location.href = 'account.php';

        </script>
        
        ";

        
    }
    else if(mysqli_num_rows($duplicateEmail))
    {
        echo "
        <script>
        window.alert('This Email is already taken');
        window.location.href = 'account.php';

        </script>
        
        ";
    }
    else{

        $query = mysqli_query($conn , "INSERT INTO `usertable`(`userName`, `Email`, `Password`) VALUES ('$name','$email','$password')" );

        echo "
        <script>
        window.alert('Registered Successfully Please Login your account');
        window.location.href = 'account.php';

        </script>
        
        ";
    }
   
}




// ----------------------------- Login Database ----------------------------------

?>
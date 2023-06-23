<?php
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $email=$_POST['email'];
    $psd=$_POST['psd'];
    $confpsd=$_POST['psd'];
    //creating a connection to the database
    $servername ="localhost";
    $username ="root";
    $password ="";
    $db="formreg";
    $conn = new mysqli($servername, $username,$password, $db);
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into users_info(fname, lname, email, password, confpassword)values(?,?,?,?,?)");
        $stmt->bind_param("sssss", $firstname,$lastname,$email,$psd,$confpsd);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        $alert = "<script>alert('Registration Successful!');</script>";
        echo $alert;
        echo"You have been registered successfully...";
     }
     header("Location: index.php? status=success");
?>
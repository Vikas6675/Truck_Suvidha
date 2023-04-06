<?php
session_start();
$connect = mysqli_connect('localhost','root','','login') or die('connection error!');

if(isset($_POST['registerbtn'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $insert = mysqli_query($connect,"INSERT INTO user VALUES('$username','$email','$mobile','$password')");
    if($insert){
        echo '<script> 
        alert("Registration successfull!");
        window.location = "../login.html";
         </script>';
    }
    else{
        echo '<script> alert("Registration failed!") </script>';
    }
}


if(isset($_POST['loginbtn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = mysqli_query($connect, "SELECT username FROM user WHERE email='$email' AND password='$password' ");
    if(mysqli_num_rows($check)>0){
        $fetch = mysqli_fetch_array($check);
        $username = $fetch['username'];
        $_SESSION['username'] = $username;
        header("location:../home.php");
    }
    else{
        echo '<script> alert("Login failed") </script>';
    }
}


if(isset($_POST['logoutbtn'])){
    session_destroy();
    header("location:../login.html");
}


$connect2 = mysqli_connect('localhost','root','','login') or die('connection error!');

if(isset($_POST['sendbtn'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];

    $insert = mysqli_query($connect2,"INSERT INTO userdetail VALUES('$username','$email','$mobile','$message')");
    if($insert){
        echo '<script> 
        alert("Send successfull!");
        window.location = "../home.php";
         </script>';
    }
    else{
        echo '<script> alert("failed!") </script>';
    }
}

$connect3 = mysqli_connect('localhost','root','','truckbookingregistration') or die('connection error!');

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pickup = $_POST['pickup'];
    $droplocation = $_POST['droplocation'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $truck = $_POST['truck'];
    $quantity = $_POST['quantity'];

    $insert = mysqli_query($connect3,"INSERT INTO bookingdetails VALUES('$name','$email','$phone','$pickup','$droplocation','$date','$time','$truck','$quantity')");
    if($insert){
        echo '<script> 
        alert("Booking Successfull! --Thank you for booking with us. We will contact you shortly to confirm your booking.");
        window.location = "../truck-book.html";
         </script>';
    }
    else{
        echo '<script> alert("failed!") </script>';
    }
}

?>
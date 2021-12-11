<?php 
    session_start();
    include_once("./config.php");
    
    if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];


    $result = $conn->query("SELECT * FROM register WHERE email='{$email}'");
    $num = $result->rowCount();

    if($num == 1){
        echo "<script>alert('Already registered this email address, Please change your email: `{$email}`');
        window.location.href='./register.php';</script>";
    }
    else{
        $hass=password_hash($password,PASSWORD_BCRYPT);
        $conn->query("INSERT INTO register (name,email,phone,password) VALUES('{$name}','{$email}','{$phone}','{$hass}')");
        echo "<script> alert('Registered Successfully!'); window.location.href='./login.php'; </script>"; 
    }
}
?>
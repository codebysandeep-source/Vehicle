<?php 
    session_start();
    include_once("./config.php");

    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $result = $conn->query("SELECT * FROM register WHERE email = '$email' ");
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $dt) {
            $pass =  $dt['password'];
            $status=password_verify($password,$pass);

            $semail = $dt['email'];
            $sname = $dt['name'];
            $sphone = $dt['phone'];
        }
    
        if($status==$pass){
            $_SESSION['email'] = $semail;
            $_SESSION['name'] = $sname;
            $_SESSION['phone'] = $sphone;
            header("location: ./index.php");
        }
        else{
           echo "<script>alert('Incorrect Email and Password'); window.location.href='./login.php'; </script>";
        }

    }
?>
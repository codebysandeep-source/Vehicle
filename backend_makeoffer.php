
<?php
session_start();
$semail = $_SESSION['email'];
$sloc = $_SESSION['loc'];
$sid = $_SESSION['id'];
extract($_SESSION);
?>
<?php
include './config.php';
if(isset($_POST['submit'])){
    $makeoffer = $_POST['makeoffer'];
$result = $conn->query("SELECT * FROM register WHERE email='{$semail}' UNION SELECT * FROM $sloc WHERE id=$sid");
$data = $result->fetchAll(PDO::FETCH_ASSOC);
foreach ($data as $dt) {
    $name = $dt['name'];
    $email = $dt['email'];
    $phone = $dt['phone'];
    $name = $dt['name'];
    $name = $dt['name'];
    $name = $dt['name'];
    $name = $dt['name'];
    $name = $dt['name'];
}
}
?>
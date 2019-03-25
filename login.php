<?php
    session_start();
    include"koneksi.php";
        
    //session_start();
            $username = $_POST['username'];
            $password = $_POST ['password'];
    $result = mysqli_query($mysqli,"SELECT * FROM login WHERE
    username='$username' AND password='$password'");

    if ($data =mysqli_num_rows($result)>0){
        $_SESSION['username'] = $username;
        header("location: index.php");
    }else {
        header("location: login.php");
        echo "<script>alert('Gunakan Akun Lainnya');</script>";
    }

?>
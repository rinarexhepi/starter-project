<?php
include_once '../repository/userRepository.php';
include_once '../models/user.php';

if(isset($_POST['btn'])){
    if(empty($_POST['email']) || empty($_POST['password'])){
        echo "<script> alert('Fill all fields!'); </script>";
    }else{
        $email = $_POST['email'];
        $password = $_POST['password'];

        $userRepository  = new UserRepository;
        $user = $userRepository->getUserByEmail($email, $password);

        if($user){
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['role'] = $user['role'];
            header("location:index.php");
        }else{
            echo "<script> alert('Incorrect email or password!'); </script>";
        }

    }
}
?>

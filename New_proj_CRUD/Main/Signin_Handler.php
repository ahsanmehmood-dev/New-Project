<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $FName = $_POST['FName'];
    $Email = $_POST['email'];
    $Password = $_POST['pass'];
    $ConfirmPassword = $_POST['conf_pass'];

    if(empty($FName) || empty($Email) || empty($Password) || empty($ConfirmPassword)){
        echo "Complete All The Given Fields";
    }else{
        if($Password === $ConfirmPassword){
            require_once "DBConn.php";
            $query = "SELECT * FROM `users` WHERE `users`.`email`='$Email'";
            $result = mysqli_query($connection,$query);
            $NumberOfRows = mysqli_num_rows($result);

            if($NumberOfRows < 1){
                $CreateAccount = "INSERT INTO `users` ( `name`, `email`, `password`) VALUES ( '$FName', '$Email', '$ConfirmPassword');";
                $ResultAccount = mysqli_query($connection,$CreateAccount);
                if($ResultAccount){
                    echo "The Account Has Been Created";
                }
            }else{
                echo "This Account Already Exist Please Login";
            }
        }else{
            echo "Password Doesn't Matches";
        }
    }
}else{
    echo "form submit type is invalid";
}







?>
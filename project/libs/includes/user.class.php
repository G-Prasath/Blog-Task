<?php
include_once 'dbconnection.class.php';

class user{

    public static function signup($user,$phone,$email,$pass)
    {
    $pass = md5($pass);
    $conn = database::getconnection(); 
    $sql = "INSERT INTO `auth` (`username`, `phone`, `email`, `password`) VALUES ('$user', '$phone', '$email', '$pass')";
    $result = $conn->query($sql);
    $error = FALSE;
    
    if ( $result === TRUE) {
        $error = FALSE;
    } else {
        $error = $conn->error;
    }
    return $error;
    }

    public static function login($email, $pass){    
         
        $conn = database::getconnection();
        $query = "SELECT * FROM `auth` WHERE `email` = '$email'";
        $result = $conn->query($query);
        $pass = md5($pass);
        if($result->num_rows == 1){

            $row = $result->fetch_assoc();

            if($pass == $row['password']){
                return $row;   
            }
            else{
                return false;
            }
        }else{
            return FALSE;
        }

    }


}

?>
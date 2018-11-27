<?php

    require_once('db.php');
 
    if(isset($_POST['register'])){
        if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['uname'])  || empty($_POST['pass'])){

            header("location: register.php?empty");
        }
        else{
            $firstname = mysqli_real_escape_string($conn,$_POST['fname']);
            $lastname = mysqli_real_escape_string($conn,$_POST['lname']);
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $user = mysqli_real_escape_string($conn,$_POST['uname']);
            $password = mysqli_real_escape_string($conn,$_POST['pass']);

            if(!preg_match("/^[a-zA-Z]*$/",$firstname) || !preg_match("/^[a-zA-Z]*$/",$lastname)){
                header("location: register.php?invalid");
                exit();
            }
            else{
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    header("location: register.php?Vemail");
                    exit();
                }
                else{
                    
                    $query = "select * from register where reg_user='".$user."' ";
                    $result = mysqli_query($conn,$query);

                    if(mysqli_fetch_assoc($result)){
                        header("location: register.php?user");
                        exit();
                    }
                    else{
                        $query = "select * from register where reg_email='".$email."' ";
                        $result = mysqli_query($conn,$query);

                        if(mysqli_fetch_assoc($result)){
                            header("location: register.php?Email");
                            exit();
                        }
                        else{
                            $hash_pass = password_hash($password,PASSWORD_DEFAULT);
                            $query = "insert into register (reg_first,reg_last,reg_email,reg_user,reg_pass) values('$firstname','$lastname','$email','$user','$hash_pass')";
                            $result = mysqli_query($conn, $query);
                            header("location: register.php?success");
                            exit();
                        }
                    }
                }
            }
            
        }

    }
    else{
        header("location: register.php");
    }




?>
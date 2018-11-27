<?php
    require_once ('db.php');
    session_start();
    if(isset($_POST['login'])){
        if(empty($_POST['uname']) || empty($_POST['pass'])  ){
            header("location: login.php?empty");
            exit();
        }
        else{
            $user = mysqli_real_escape_string($conn,$_POST['uname']);
            $password = mysqli_real_escape_string($conn,$_POST['pass']);

            $query = "select * from register where reg_user = '".$user."' or reg_email = '".$user."'  ";

            $result = mysqli_query($conn,$query);

            if($row = mysqli_fetch_assoc($result)){
                $Hash = password_verify($password,$row['reg_pass']);

                if($Hash == false){
                    header("location: login.php?P_invalid");
                    exit();
                }
                else if($Hash == true){
                    $_SESSION['name'] = $row['reg_first']; 
                    header("location: account.php");
                }
            }
            else{
                header("location: login.php?U_invalid");
                exit();
            }


        }

    }
    else{
        header("location: login.php");
    }

?>
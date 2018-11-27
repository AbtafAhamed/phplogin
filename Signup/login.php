<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div>
        <?php 
            if(isset($_GET['empty'])){
                $message = $_GET['empty'];
                $message = "please fill in the blanks";
        ?>
            <div class="name"><?php echo $message?></div>
        <?php
            }
        ?>

        <?php 
            if(isset($_GET['U_invalid'])){
                $message = $_GET['U_invalid'];
                $message = "Invalid user";
        ?>
            <div class="name"><?php echo $message?></div>
        <?php
            }
        ?>


        <?php 
            if(isset($_GET['P_invalid'])){
                $message = $_GET['P_invalid'];
                $message = "Invalid Password";
        ?>
            <div class="name"><?php echo $message?></div>
        <?php
            }
        ?>

    </div>
    <div>
        <form action="login_validate.php" method="post">
            <p>Email or Username</p>
            <p><input type="text" name="uname" placeholder="email or username"></p>
            <p>Password</p>
            <p><input type="password" name="pass" placeholder="password"></p>
        
            <p><input type="submit" name="login" value="Login"></p>
        </form>
    </div>
</body>
</html>
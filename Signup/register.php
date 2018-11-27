<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div>
        <!-- empty fields -->
        <?php 
            if(isset($_GET['empty'])){
                $message = $_GET['empty'];
                $message = "please fill in the blanks";
        ?>
            <div class="name"><?php echo $message?></div>
        <?php
            }
        ?>

        <!-- invalid characters -->

        <?php
            if(isset($_GET['invalid'])){
                $message = $_GET['invalid'];
                $message = "Invalid characters";
        ?>
            <div class="name"><?php echo $message ?></div>
        <?php
            }
        ?>
            <!-- Email invalid chararcter -->
        <?php
            if(isset($_GET['Vemail'])){
                $message = $_GET['Vemail'];
                $message = "Invalid Email characters";
        ?>
            <div class="name"><?php echo $message ?></div>
        <?php
            }
        ?>

          <!-- User invalid chararcter -->
          <?php
            if(isset($_GET['user'])){
                $message = $_GET['user'];
                $message = "User already taken";
        ?>
            <div class="name"><?php echo $message ?></div>
        <?php
            }
        ?>

         <!-- Email invalid chararcter -->
         <?php
            if(isset($_GET['Email'])){
                $message = $_GET['Email'];
                $message = "Enter the Email already taken";
        ?>
            <div class="name"><?php echo $message ?></div>
        <?php
            }
        ?>
            <!-- Success the register -->
        <?php
            if(isset($_GET['success'])){
                $message = $_GET['success'];
                $message = "You have successfully registerd in";
        ?>
            <div class="name"><?php echo $message ?></div>
        <?php
            }
        ?>
        
    </div>
    <div>
        <form action="validate.php" method="post">
            <p>First Name</p>
            <p><input type="text" name="fname" placeholder="firstname"></p>
            <p>Last Name</p>
            <p><input type="text" name="lname" placeholder="lastname"></p>
            <p>Email</p>
            <p><input type="email" name="email" placeholder="email"></p>
            <p>Username</p>
            <p><input type="text" name="uname" placeholder="username"></p>
            <p>Password</p>
            <p><input type="password" name="pass" placeholder="password"></p>
        
            <p><input type="submit" name="register" value="Register"></p>
        </form>
    </div>
</body>
</html>
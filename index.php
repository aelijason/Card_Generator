<?php
    include "back-end/conn.php";
    include "back-end/creating_db_table.php";

    if (isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        if($name != '' && $email != '' && $password != ''){

        // collect all data
        $insert = "INSERT INTO " .$db_table_name. " (fullname, email, password) VALUES ('$name', '$email', '$password')";

        if ($conn->query($insert) === TRUE) {
            $success = 'Your account has been created successfully!';
        }
        else{
            echo 'ERROR: '. $insert. '<br>'. $conn->error;
        }
        $conn->close();
        }
        else{
            echo 'Fill out all the fields!';
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form || Farhad Ahmed    </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>




    <section class="registration-form" id="registration-form">
        <div class="overlay"></div>
        <div class="left-side">
            <h1>Register Now</h1>
            <span class="sign-with">Sign up with</span>

            <form class="form" action="" method="post">
                <div class="box">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" placeholder="abc" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" placeholder="abc@abc.com" name="email" id="email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" placeholder="********" name="password" id="pass" required>
                </div>

                <div class="form-group1">
                    <input type="checkbox" name="terms" id="terms" required>
                    <label for="terms">I’ve read and agree with terms of service and our privecy policy</label>
                </div>

                <button type="submit" class="btn" name="register"> 
                    <img src="images/submit.png" alt="">
                </button>

                <?php if(!empty($success) && isset($_POST['register'])) : ?>
                    <span class="success" id="success"> <?= $success?></span> 
                <?php endif; ?>
            </form>

            <div class="continue-with">
                <a class="google">
                    <img src="images/google.png" alt="">
                    <p>continue with google</p>
                </a>
                <a class="facebook">
                    <img src="images/facebook.png" alt="">
                    <p>continue with facebook</p>
                </a>
            </div>

            <!-- <span class="or">
                or
            </span> -->

            <div class="signin">
                <p>Already have an account?    <a href="signin.php">Sign in</a></p>
            </div>
            
        </div>
    </section>

    <script>
        setTimeout(() => {
            var success = document.getElementById('success');
            if(success){
                success.style.display = 'none';
            }
        }, 3000);
    </script>
</body>
</html>
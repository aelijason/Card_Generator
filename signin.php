<?php
    include "back-end/conn.php";

    if (isset($_POST['signin'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        // fetch all data
        $fetch_data = "SELECT * FROM " .$db_table_name. " WHERE email = '$email' AND password = '$password'";

        $result = $conn->query($fetch_data);
            
        if ($result->num_rows === 1) {
            header("Location: dashboard.php");
            exit();
        }
        else{
            $success = 'Login Failed';
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
    <div class="overlay"></div>
    <section class="registration-form" id="registration-form">
        <div class="left-side">
            <h1>Sign in here</h1>
            <span class="sign-with">Sign in with</span>



            <form class="form" action="" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" placeholder="abc@abc.com" name="email" id="email" required>
                </div>

                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" placeholder="********" name="password" id="pass" required>
                </div>

                <button type="submit" class="btn" name="signin"> 
                    <img src="images/submit.png" alt="">
                </button>
                
                <?php if(!empty($success) && isset($_POST['signin'])) : ?>
                    <span class="success" id="success"> <?= $success?></span> 
                <?php endif; ?>
            </form>
<!-- 
            <span class="or">
                or
            </span> -->

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

            <div class="signin">
                <p>Register your  account?    <a href="index.php">Sign up</a></p>
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
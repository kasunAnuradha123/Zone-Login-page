
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing Up</title>
    
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
        <body>
            <form action="function.php" method="POST">
                <h2>Register</h2>
                
                <?php
                if(isset($_GET['error'])){ ?>
                <p class= "error"><?php echo $_GET['error'];?></p>
                <?php } ?>

                <?php
                if(isset($_GET['success'])){ ?>
                <p class="success"><?php echo $_GET['success'];?></p>
                <?php } ?>
                
                <label>Full Name</label>
                <input type="text" name="uname"  placeholder="Full Name">

                <label>Email Address</label>
                <input type="text" name="email"  placeholder="Email">

                <label>Contact No</label>
                <input type="text" name="pon"  placeholder="Phone Number">

                <label>Password</label>
                <input type="password" name="password"  placeholder="password">

                <label>Confirm Password</label>
                <input type="password" name="cpassword"  placeholder="Confirm password">

                

                <button type="submit" name="submit">Sing Up</button>
        

                <a href="****" > Already have an account</a>
         </form>
        </body>
</html>
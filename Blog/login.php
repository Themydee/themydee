<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/users.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:wght@500&display=swap" rel="stylesheet">

    <!--Custom Styling-->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Themydee</title>
</head>
<body>
<?php include( ROOT_PATH . "/app/includes/loginhead.php"); ?>
<?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
    
    <div class="auth-content">
        <form action="login.php" method="post">
            <h2 class="form-title">Login</h2>

            <?php include(  ROOT_PATH . "/app/helpers/formErrors.php"); ?>

            <div>
                <label>Username</label>
                <input type="text" name="Username" value = "<?php echo $username; ?>" class=" text-input">
            </div>

            <div>
                <label>Password</label>
                <input type="Password" name="Password" value = "<?php echo $password; ?>" class=" text-input">
            </div>

            <div>
                <button type="submit" name="login-btn" class="btn btn-big">
                    Login
                </button>
            </div>

            <p>Or <a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></p>
        </form>
    </div>

</body> 
<!---JQUERY--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

<!--CUSTOM SCRIPT-->
<script src="assets/js/main.js"></script>
</body>
</html>



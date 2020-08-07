<?php
 include("../../path.php"); 
 include("../../app/controllers/users.php");
?> 

<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:wght@500&display=swap" rel="stylesheet">

    <!--Custom Styling-->
    <link rel="stylesheet" href="../../assets/CSS/STYLE.CSS">


     <!--Admin Styling-->
     <link rel="stylesheet" href="../../assets/CSS/admin.CSS">


    <title>Admin Section - Edit Users</title>
</head>
<body>
    <?php include("ROOT_PATH" .  "../../../../app/includes/adminHeader.php"); ?>

    <!-- Admin Page Wrapper-->
    <div class="admin-wrapper">

        <!--Left Sidebar-->
        <?php include("ROOT_PATH" .  "../../../../app/includes/adminSidebar.php"); ?>
        <!-- // Left Sidebar-->


        <!--Admin Content-->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="manage.php" class="btn btn-big">Manage User</a>
            </div>


            <div class="content">
                <h2 class="page-title">Edit User</h2>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <form action="create.php" method="post">
                <div>
                        <label>Username</label>
                        <input type="text" name="Username" value="<?php echo $username; ?> "class=" text-input">
                    </div>
        
                    <div>
                        <label>Email</label>
                        <input type="Email" name="Email" value="<?php echo $email; ?>" class=" text-input">
                    </div>
        
                    <div>
                        <label>Password</label>
                        <input type="Password" name="Password" value="<?php echo $password; ?>" class=" text-input">
                    </div>
        
                    <div>
                        <label>Password Confirmation</label>
                        <input type="Password" name="PasswordConf" value="<?php echo $passwordConf; ?>" class=" text-input">
                    </div>

                    <div>

                        <?php if(isset($admin) && $admin == 1): ?>
                            <label>
                                <input type="checkbox" name="admin" checked>
                                Admin
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" name="admin">
                                Admin
                            </label>
                        <?php endif; ?>
                        
                    </div>
                    <div>
                        <button type="submit" name="update-user" class="btn btn-big">Update Users</button>    
                    </div>
                    
                </form>
            </div>
        </div>

        <!--// Admin Content-->
    </div>

    <!--//  Admin Page Wrapper-->



  
<!---JQUERY--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

<!--ckeditor-->
<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>

<!--CUSTOM SCRIPT-->
<script src="../../assets/js/main.js"></script>
</body>
</php>
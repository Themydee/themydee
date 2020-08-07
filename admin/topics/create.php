<?php
 include("../../path.php"); 
 include("../../app/controllers/topics.php");
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
    <link rel="stylesheet" href="../../assets/css/style.css">


     <!--Admin Styling-->
     <link rel="stylesheet" href="../../assets/css/admin.css">


    <title>Admin Section - Add Topics</title>
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
                <a href="create.php" class="btn btn-big">Add Topic</a>
                <a href="manage.php" class="btn btn-big">Manage Topic</a>
            </div>


            <div class="content">
                <h2 class="page-title">Add Topic</h2>

                <?php include(ROOT_PATH . "../../../app/helpers/formErrors.php") ?>
                <?php include("ROOT_PATH" . "../../../../app/includes/messages.php"); ?>

                <form action="create.php" method="post">
                    <div>
                        <label>name</label>
                    <input type="text" name="name" value="<?php echo $name; ?>" class="text-input">
                    </div>

                    <div>
                        <label>Description</label>
                        <textarea name="description" value="<?php echo $description; ?>" id="description"></textarea>
                    </div>

                   
                    <div>
                        <button type="submit" name= "add-topic" class="btn btn-big">Add Topic</button>    
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
</html>
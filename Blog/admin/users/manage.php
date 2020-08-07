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


    <title>Admin Section - Manage Users</title>
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
                <h2 class="page-title">Manage User</h2>

                <?php include("ROOT_PATH" . "../../../../app/includes/messages.php"); ?>

                <table>
                    <thead>
                        <th>SN</th>
                        <th>
                            <i class="fa fa-user"></i>
                            Username
                        </th>

                        <th>
                            <i class="fa fa-user"></i>
                            Email
                        </th>
                        <th colspan="2">
                            <i class="fa fa-cross"></i>
                            Action
                        </th>
                    </thead>

                    <tbody>
                        <?php foreach ($admin_users as $key => $user): ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $user ['username']; ?></td>
                                <td><?php echo $user ['email']; ?></td>
                                <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit">Edit</a></td>
                                <td><a href="manage.php?delete_id=<?php  echo $user['id'];  ?>" class="delete">Delete</a></td>
                            </tr>

                        <?php endforeach; ?>
                            
            

                        
                    </tbody>
                </table>
            </div>
        </div>

        <!--// Admin Content-->
    </div>

    <!--//  Admin Page Wrapper-->



  
<!---JQUERY--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>


<!--CUSTOM SCRIPT-->
<script src="../../assets/js/main.js"></script>
</body>
</php>
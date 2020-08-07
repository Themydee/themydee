<?php
 include("../../path.php"); 
 include("../../app/controllers/posts.php");
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
    <link rel="stylesheet" href="../../assets/css/style.css">


     <!--Admin Styling-->
     <link rel="stylesheet" href="../../assets/css/admin.css">


    <title>Admin Section - Manage Posts</title>
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
                <a href="create.php" class="btn btn-big">Create a post</a>
                <a href="manage.php" class="btn btn-big">Manage post</a>
            </div>


            <div class="content">
                <h2 class="page-title">Manage Post</h2>

                <?php include("ROOT_PATH" . "../../../../app/includes/messages.php"); ?>

                <table>
                    <thead>
                        <th>SN</th>
                        <th>
                            <i class="fa fa-book"></i>
                            Title
                        </th>
                        <th>
                            <i class="fa fa-user"></i>
                            Author
                        </th>
                        <th colspan="3">
                            <i class="fa fa-cross"></i>
                            Action
                        </th>
                    </thead>

                    <tbody>
                        <?php foreach($posts as $key => $post): ?>
                            <tr>
                                <td><?php echo $key +1; ?></td>
                                <td><?php echo $post['title'] ?></td>
                                <td>Themydee</td>
                                <td><a href="edit.php?id=<?php echo $post['id'];?>" class="edit">Edit</a></td>
                                <td><a href="edit.php?delete_id=<?php echo $post['id']?>" class="delete">Delete</a></td>
                                <?php if ($post['published']): ?>
                                  <td><a href="edit.php?published=0&p_id=<?php echo $post['id']?>" class="publish">Unpublish</a></td>
                                <?php else: ?>
                                    <td><a href="edit.php?published=1&p_id=<?php echo $post['id']?>" class="publish">Publish</a></td>
                                <?php endif; ?>
                                
                                
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
<script src="../../js/main.js"></script>
</body>
</php>
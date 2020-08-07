<?php 
include("path.php");
include(ROOT_PATH . '/app/controllers/posts.php');

if (isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);
}

$topics = selectAll('topics');

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

    <title><?php echo $post['title']; ?> | ThemydeeNews</title>
</head>
<body>
<?php include(ROOT_PATH. "/app/includes/singlehead.php"); ?>
   

    <!--Page Wrapper-->
    <div class="page-wrapper">

        <!--Content-->
        <div class="content clearfix">
            <!--Main Content-->
                <div class="main-content">
                    <h1 class="post-title"><?php echo $post['title']; ?></h1>
                   <?php echo html_entity_decode($post['body']); ?>
                </div>
                
            <!--Main Content-->
            <div class="sidebar">
                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                      
                        <?php foreach ($topics as $topic): ?>
                         <li>
                            <a href="<?php echo BASE_URL . '/home.php?t_id =' . $topic['id'] ?>"><?php  echo $topic['name'];?></a>
                        </li>
                        <?php endforeach; ?>
                        
                    </ul>
                </div>
            </div>
        </div>
        <!--//Content-->
    </div>

    <!--// Page Wrapper-->



    <!---Footer-->
    <?php include( ROOT_PATH . "/app/includes/footer.php"); ?>
    <!--//Footer-->
<!---JQUERY--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>


<!--Slick Carousel-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
				
				

<!--CUSTOM SCRIPT-->
<script src="assets/js/main.js"></script>
</body>
</html>
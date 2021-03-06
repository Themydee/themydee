<?php include("path.php") ?>
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

    <title>Blog</title>
</head>
<body>
<?php include(ROOT_PATH . "/app/includes/indexhead.php"); ?>
    <!--Page Wrapper-->
    <div class="page-wrapper">

        <!-- Post Slider--
        <!-// Post Slider-->
        <!--Content-->
        <div class="content clearfix">
            <!--Main Content-->
            <div class="main-content">
                <h1 class="recent-posts-title">Welcome to Themydee's Blog</h1>
                <p class="recent posts-title">My name is Akanbi-Bello Temidayo, and it's my privilege and pleasure on behalf of ThemydeeNews to welcome you to her blog site today.We are delighted to have you with us to participate and share in the fun this blog site is about to serve to you.</P> 
                <p>I want to appereciate everyone that gave me the strength, inspiration and support. Thank you so much and may God almight Bless you all for the efforts you invested in me. I also want to appereciate the efforts of some sets of persons who helped in making this site. I really appereciate you all.</p>
                <br>
                <h2>Essence of ThemydeeNews</h2>
                <p>ThemydeeNews is a platform I created to serve as a place to showcase talents of various Youths in Nigeria. I have so many friends that are multi-talented and I would love for them to be heard worldwide not only in Nigeria.</p>
                <p>The platform also serves as a place where you can easily get gists, entertainment, sports and global news happening both in Nigeria and the rest of the world</P>
                <br>
                <h3>How Do You Setup Your Account</h3>
                <p>If your interested in joining me in this journey which i hope you do then, on the navigation bar you will see a name saying 'SIGN UP', hit it and you should see the register page</P>
                <P>If you have any issue or anyway we can improve the blog-site or you have someone you want to also feature, you can Chat me up on IG@themydee. Dont forget to follow✌✌. We rise by lifting others✌</P>        
            </div>
            
            <!--Main Content-->
            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.html" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>

                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <li>
                            <a href="#">Music</a>
                        </li>
                        <li>
                            <a href="#">Sports</a>
                        </li>
                        <li>
                            <a href="#">Movies</a>
                        </li>
                        <li>
                            <a href="#">Arts</a>
                        </li>
                        <li>
                            <a href="#">Fashion</a>
                        </li>
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
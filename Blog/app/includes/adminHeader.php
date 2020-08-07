<header>
    <div class="logo">
        <h1 class="logo-text"><span>Themydee</span>News</h1>
    </div>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
    <?php if (isset($_SESSION['id'])): ?>
        <li>
            <a href="#">
                <i class="fa fa-user"></i>
                    <?php echo $_SESSION['Username']; ?>
                <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
            </a>
            <ul>
                <?php if($_SESSION['admin']): ?>
                <li>
                    <a href="<?php echo  BASE_URL . '/admin/dashboard.php'?>">
                    Public
                    <i class="fa fa-globe"></i>
                    </a>
                </li>
                <?php endif; ?>

                <li><a href="<?php echo  BASE_URL . '/logout.php'?>" class="logout">Logout</a></li>
            </ul>
        </li>
    <?php endif; ?>
    
    </ul>
</header>
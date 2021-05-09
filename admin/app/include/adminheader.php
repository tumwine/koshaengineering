    <header>
        <div class="logo">
         <a href="../../index.php">
            <h1 class="logo-text">
             <span>KOSHA</span>&nbsp;ADMIN</h1></a>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">

                <?php if(isset($_SESSION['id'])): ?>
            <li>
                <a href="#">
                <i class="fa fa-user"></i>
                <?php echo $_SESSION['username']; ?>
                <i class="fa fa-chevron-down"></i>
                </a>    
                <ul>
                   <li><a href="<?php echo(BASE_URL . "/admin/logout.php") ?>" class="logout">Logout</a></li>
                </ul>
            </li>
               <?php endif; ?>
        </ul>
    </header>
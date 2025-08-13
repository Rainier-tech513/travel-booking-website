<nav class="header">
    <div class="left-side">
        <a href="index.php">
            <img src="images/logoo.svg" width="50">
        </a>
    </div>


    <div class="center-side">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="mybookings.php">My Bookings</a></li>
            <li><a href="our-fleet.php">Our Fleet</a></li>
            <li><a href="#">Destinations</a></li>
            <li><a href="#">Gallery</a></li>
        </ul>
    </div>


    <div class="right-side">

        
        <?php
        if (isset($_SESSION["user_id"])) {
        ?>
            <div class="profile-container">
                <img src="images/profile-icon.png">
                <p><?php echo $_SESSION["user_username"]; ?></p>
            </div>
        <?php
        } else if (!isset($_SESSION["user_id"])) {
        ?>
            <a href="login-signup.php">
                <button>Login</button>
            </a>
        <?php
        }
        ?>


        <div class="hamburger-menu" onclick="openSidebar()">
            <img src="images/hamburger-menu.png">
        </div>

        <div class="sidebar">


            <?php
                if (isset($_SESSION["user_id"])) {
                ?>
                    <div class="greeting">
                        <img src="images/close-sidebar-cross.png" class="close-sidebar-cross" onclick="closeSidebar()">
                        <div class="profile-picture">
                            <img src="images/profile-picturee.png">
                        </div>
                        <div>
                            <h3>Hello,</h3>
                            <p><?php echo htmlspecialchars($_SESSION["user_username"]); ?></p>
                        </div>
                    </div>
                    <hr class="hr-1">
                <?php
                }
            ?>
                    
            
            <ul>
                <?php
                    if (!isset($_SESSION["user_id"])) {
                    ?>
                        <img src="images/close-sidebar-cross.png" class="close-sidebar-cross" onclick="closeSidebar()">
                    <?php
                    }
                ?>
                <li><a href="index.php">Home</a></li>
                <li><a href="mybookings.php">My Bookings</a></li>
                <li><a href="our-fleet.php">Our Fleet</a></li>
                <li><a href="#">Destinations</a></li>
                <li><a href="#">Gallery</a></li>
            </ul>

            <?php
                if (isset($_SESSION["user_id"])) {
                ?>
                    <div class="logout">
                        <a href="includes/logout.inc.php" class="side-bar-logout-btn">
                            <button>Logout</button>
                        </a>
                    </div>
                <?php
                } else {
                ?>
                    <div class="logout">
                        <a href="login-signup.php" class="side-bar-login-btn">
                            <button>Login</button>
                        </a>
                    </div>
                <?php
                }
            ?>
            
        </div>
    </div>
</nav>
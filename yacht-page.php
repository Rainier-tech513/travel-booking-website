<?php  
    require_once 'includes/config-session.php';
    require_once 'includes/signup_view.php';
    require_once 'includes/login_view.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="icon" type="image/png" href="images/whop_favicon_orange.png">
    <link rel="stylesheet" href="styles/other/header.css">
    <link rel="stylesheet" href="styles/other/general.css">
    <link rel="stylesheet" href="styles/yacht-page/yacht-page.css">
</head>
<body>

    <?php require_once 'header.php'; ?>

    <section>
        <div class="row-1">
            <div class="yacht-gallery">
                <img src="images/flying-fox-yacht.png">
            </div>
        </div>
        <div class="row-2">
            <div class="yacht-details">
                <h3>Flying Fox</h3>
                <div class="all-specs-grid">
                    <div class="spec">
                        <img src="images/size.png">
                        <p>149m (446ft)</p>
                    </div>
                    <div class="spec">
                        <img src="images/guests.png">
                        <p>22 Guests</p>
                    </div>
                    <div class="spec">
                        <img src="images/main-bed.png">
                        <p>11 Cabins</p>
                    </div>
                    <div class="spec">
                        <img src="images/warehouse.png">
                        <p>Lurssen</p>
                    </div>
                    <div class="spec">
                        <img src="images/calender.png">
                        <p>2019</p>
                    </div>
                </div>
                <p></p>
            </div>
            <div class="booking-container">
                <p>€4.200.000 <span>p/w</span></p>
                <button>Book Charter</button>

                <hr>

                <div class="quick-specs-grid">
                    <div class="spec">
                        <img src="images/guests.png">
                        <p>22 Guests</p>
                    </div>
                    <div class="spec">
                        <img src="images/main-bed.png">
                        <p>11 Cabins</p>
                    </div>
                    <div class="spec">
                        <img src="images/size.png">
                        <p>139m (446ft)</p>
                    </div>
                </div>
                
            </div>
        </div>
        
    </section>



</body>
</html>
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
    <title>Whop</title>
    <link rel="icon" type="image/png" href="images/whop_favicon_orange.png">
    <link rel="stylesheet" href="styles/other/header.css">
    <link rel="stylesheet" href="styles/other/general.css">
    <link rel="stylesheet" href="styles/mybookings/bookings.css">
</head>
<body>

    <?php require_once 'header.php'; ?>
   
    <section class="main-container">
        <div class="mybookings-title-container">
            <h1>My bookings</h1>
            <p>Manage your yacht charter reservations</p>
        </div>
        <div class="bookings-container">
            <div class="booking">
                <div class="row row-1">
                    <div class="title">
                        <p>Flying Fox Yacht</p>
                        <p>Pending</p>
                    </div>
                    <div class="price-container">
                        <p>€4.200.000</p>
                        <p>Total Cost</p>
                    </div>
                </div>
                <div class="row row-2">
                    <div class="detail-container"> <!--flexdirecttion row-->
                        <img src="images/mybookings/calender2.png">
                        <div class="details"> <!--flexdirecttion column-->
                            <p>Charter Dates</p>
                            <p>Aug 8 - Aug 15, 2025</p>
                        </div>
                    </div>
                    <div class="detail-container"> <!--flexdirecttion row-->
                        <img src="images/mybookings/guests-iconn.png">
                        <div class="details"> <!--flexdirecttion column-->
                            <p>Guests</p>
                            <p>3 guests</p>
                        </div>
                    </div>
                    <div class="detail-container"> <!--flexdirecttion row-->
                        <img src="images/mybookings/location-pin.png">
                        <div class="details"> <!--flexdirecttion column-->
                            <p>Location</p>
                            <p>Monaco</p>
                        </div>
                    </div>
                    <div class="detail-container"> <!--flexdirecttion row-->
                        <img src="images/mybookings/clock.png">
                        <div class="details"> <!--flexdirecttion column-->
                            <p>Booked</p>
                            <p>Aug 1, 2025</p>
                        </div>
                    </div>
                </div>

                <!--show code when theres a special request-->
                <hr class="booking-container-hr">
                <div class="special-requests-container">
                    <p>Special Requests:</p>
                    <p>a shit load of models on board</p>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
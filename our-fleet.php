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
    <link rel="stylesheet" href="styles/our-fleet/fleet-container.css">
    <link rel="stylesheet" href="styles/our-fleet/yachts-card.css">
</head>
<body>

    <?php require_once 'header.php'; ?>

    <section class="main-container">
        <div class="mybookings-title-container">
            <h1>Our Fleet</h1>
            <p>Discover our collection of world-class super yachts</p>
        </div>
        <div class="searchandfilter-container">
            <div class="row-1">
                <!--<img src="images/our-fleet/search.png">-->
                <input type="text" class="search-bar" placeholder="Search yachts by name or builder...">
            </div>

            <hr>

            <div class="row-2">

                <div class="dropdown">
                    <label for="priceRange">Price Range</label>
                    <select id="priceRange" name="priceRange">
                        <option value="any-price">Any price</option>
                        <option value="1-2M">€1M - €2M</option>
                        <option value="2-3M">€2M - €3M</option>
                        <option value="3-5M">€3M - €5M</option>
                        <option value="5+M">€5M+</option>
                    </select>
                </div>

                <div class="dropdown">
                    <label for="guests">Guests</label>
                    <select id="guests" name="guests">
                        <option value="any-guests">Any guests</option>
                        <option value="8+guests">8+ guests</option>
                        <option value="10+guests">10+ guests</option>
                        <option value="12+guests">12+ guests</option>
                        <option value="16+guests">16+ guests</option>
                    </select>
                </div>

                <div class="dropdown">
                    <label for="Type">Type</label>
                    <select id="Type" name="type">
                        <option value="any-type">Any price</option>
                        <option value="motor-yacht">Motor Yacht</option>
                        <option value="sailing-yacht">Sailing Yacht</option>
                        <option value="explorer">Explorer</option>
                        <option value="catamaran">Catamaran</option>
                    </select>
                </div>

                <div class="dropdown">
                    <label for="length">Length</label>
                    <select id="length" name="length">
                        <option value="any">Any price</option>
                        <option value="50-80m">50m - 80m</option>
                        <option value="80-100m">80m - 100m</option>
                        <option value="100-120m">100m - 120m</option>
                        <option value="120m+">120m+</option>
                    </select>
                </div>


            </div>

            <div class="row-2-v2">
                <div>
                    <p>Filters</p>
                </div>
            </div>
        </div>

    </section>

    <section class="yacht-fleet-container">
        <div class="yachts-available">
            <p>6 yachts available</p>
        </div>
        <div class="yacht-fleet-grid">
            
        </div>
    </section>
    

    <script type="module" src="javascript/create-yacht-fleet.js"></script>
</body>
</html>
<?php  
    require_once 'includes/config-session.php';
    require_once 'includes/signup_view.php';
    require_once 'includes/login_view.php';
    require_once 'includes/dhb-handler.php';

    if (!isset($_GET['slug'])) {
        die("Geen yacht geselecteerd.");
    }

    $slug = $_GET['slug'];

    $stmt = $pdo->prepare("SELECT * FROM yachts WHERE slug = ?");
    $stmt->execute([$slug]);
    $yacht = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$yacht) {
        die("Yacht niet gevonden.");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($yacht['name']) ?> Yacht</title>
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
            <img src="<?= htmlspecialchars($yacht['yacht_img'] ?? 'images/default-yacht.jpg') ?>">
            </div>
        </div>
        <div class="row-2">
            <div class="yacht-details">
                <h3><?= htmlspecialchars($yacht['name']) ?></h3>
                <div class="all-specs-grid">
                    <div class="spec">
                        <img src="images/size.png">
                        <p><?= (float)$yacht['length_meters'] ?>m &lpar;<?= (float)$yacht['length_feet'] ?>ft&rpar;</p>
                    </div>
                    <div class="spec">
                        <img src="images/guests.png">
                        <p><?= (int)$yacht['capacity'] ?> Guests</p>
                    </div>
                    <div class="spec">
                        <img src="images/main-bed.png">
                        <p><?= (int)$yacht['cabins'] ?> Cabins</p>
                    </div>
                    <div class="spec">
                        <img src="images/warehouse.png">
                        <p><?= htmlspecialchars($yacht['built_at']) ?></p>
                    </div>
                    <div class="spec">
                        <img src="images/calender.png">
                        <p><?= (int)$yacht['built_in'] ?></p>
                    </div>
                </div>
                <p></p>
            </div>
            <div class="booking-container">
                <p>€<?= number_format($yacht['price_per_week'], 2) ?> <span>p/w</span></p>
                <button>Book Charter</button>

                <hr>

                <div class="quick-specs-grid">
                    <div class="spec">
                        <img src="images/guests.png">
                        <p><?= (int)$yacht['capacity'] ?> Guests</p>
                    </div>
                    <div class="spec">
                        <img src="images/main-bed.png">
                        <p><?= (int)$yacht['cabins'] ?> Cabins</p>
                    </div>
                    <div class="spec">
                        <img src="images/size.png">
                        <p><?= (float)$yacht['length_meters'] ?>m &lpar;<?= (float)$yacht['length_feet'] ?>ft&rpar;</p>
                    </div>
                </div>
                
            </div>
        </div> 
    </section>

    <!-- overlay -->
    <div class="overlay" id="overlay"></div>

    <!-- modal container -->
    <div class="modal" id="modal">
        <img src="images/close-sidebar-cross.png" class="close-btn" id="close-modal">
        <h2>Book <?= htmlspecialchars($yacht['name']) ?></h2>
        <form>
            <label for="start-date">Start Date
                <input type="date" id="start-date" required>
            </label>

            <label for="end-date">End Date
                <input type="date" id="end-date">
            </label>

            <label for="guests">Number of Guests
                <input type="number" id="guests" min="1" placeholder="8" required>
            </label>

            <label for="pickup">Pickup Location
                <input type="text" id="pickup" placeholder="Monaco" required>
            </label>

            <label for="requests">Special Requests
                <textarea id="requests" placeholder="Any special requirements or preferences..."></textarea>
            </label>

            <div class="btn-container">
                <button class="cancel-btn">Cancel</button>
                <button class="submit-btn">Confirm Booking</button>
            </div>
        </form>
    </div>


    <script src="javascript/openbookingmodel.js"></script>
</body>
</html>
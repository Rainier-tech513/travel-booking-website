<?php foreach ($yachts as $yacht): ?>
    <a href="/our-fleet/yacht-page.php?slug=<?= urlencode($yacht['slug']) ?>" class="yacht-card-aelement">
        <div class="card">
            <div class="image-card-container">
            <img src="<?= htmlspecialchars($yacht['yacht_img'] ?? 'images/default-yacht.jpg') ?>" 
            alt="<?= htmlspecialchars($yacht['name']) ?>">
                <div class="label">
                    <p>CHARTER</p>
                </div>
            </div>
            <div class="text-card-container">
                <h3><?= htmlspecialchars($yacht['name']) ?></h3>
                <p>From €<?= number_format($yacht['price_per_week'], 2) ?> EUR/per week</p>

                <div class="specs">
                    <div class="spec">
                        <img src="images/size.png" alt="Length">
                        <p><?= (float)$yacht['length_meters'] ?>m &lpar;<?= (float)$yacht['length_feet'] ?>ft&rpar;</p>
                    </div>
                    <div class="spec">
                        <img src="images/guests.png" alt="Guests">
                        <p><?= (int)$yacht['capacity'] ?> Guests</p>
                    </div>
                    <div class="spec">
                        <img src="images/main-bed.png" alt="Cabins">
                        <p><?= (int)$yacht['cabins'] ?> Cabins</p>
                    </div>
                    <div class="spec">
                        <img src="images/warehouse.png" alt="Built at">
                        <p><?= htmlspecialchars($yacht['built_at']) ?></p>
                    </div>
                    <div class="spec">
                        <img src="images/calender.png" alt="Built in">
                        <p><?= (int)$yacht['built_in'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </a>
<?php endforeach; ?>